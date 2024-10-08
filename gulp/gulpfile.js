const theme = "https://blue.blue"; //ローカルのURLを記入

const { src, dest, watch, series, parallel } = require("gulp");

//scss
const sass = require("gulp-sass")(require("sass"));
const sassGlob = require("gulp-sass-glob-use-forward");
const cssdeclsort = require("css-declaration-sorter");
const autoprefixer = require("autoprefixer");
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const postcss = require("gulp-postcss"); // PostCSS利用
const cssnext = require("postcss-cssnext"); // CSSNext利用
const cleanCSS = require("gulp-clean-css"); // 圧縮
const rename = require("gulp-rename"); // ファイル名変更
const sourcemaps = require("gulp-sourcemaps"); // ソースマップ作成
const sortMediaQueries = require("postcss-sort-media-queries");
var sortCSSmq = require("sort-css-media-queries");

//js babel
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");

//画像圧縮
const imagemin = require("gulp-imagemin");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
const imageminSvgo = require("imagemin-svgo");
const changed = require("gulp-changed");
const del = require("del");

//ファイル監視
const browserSync = require("browser-sync");

//postcss-cssnext ブラウザ対応条件 prefix 自動付与
const browsers = ["last 2 versions", "> 5%", "ie = 11", "not ie <= 10", "ios >= 8", "and_chr >= 5", "Android >= 5"];

//参照元パス
const srcPath = {
  css: "../src/scss/**/**.scss",
  js: "../src/js/*.js",
  img: "../src/images/**/*",
  html: "./**/*.html",
  php: "./**/*.php",
};

//出力先パス
const destPath = {
  css: "../assets/css/",
  js: "../assets/js/",
  img: "../assets/images/",
};

//sass
const cssSass = () => {
  const postcssPlugins = [
    autoprefixer({
      grid: "autoplace",
      cascade: false,
    }),
    cssdeclsort({ order: "alphabetical" }),
    sortMediaQueries({
      sort: "mobile-first", // または 'desktop-first'。プロジェクトの設計に応じて選択
    }),
  ];
  return src(srcPath.css)
    .pipe(sourcemaps.init())
    .pipe(
      plumber({
        errorHandler: notify.onError("Error:<%= error.message %>"),
      })
    )
    .pipe(sassGlob())
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(postcss(postcssPlugins))
    .pipe(sourcemaps.write("/maps"))
    .pipe(dest(destPath.css))
    .pipe(cleanCSS())
    .pipe(
      rename({
        extname: ".min.css",
      })
    );
};

// babelのトランスパイル、jsの圧縮
const jsBabel = () => {
  return src(srcPath.js)
    .pipe(
      plumber(
        //エラーが出ても処理を止めない
        {
          errorHandler: notify.onError("Error: <%= error.message %>"),
        }
      )
    )
    .pipe(
      babel({
        presets: ["@babel/preset-env"], // gulp-babelでトランスパイル
      })
    )
    .pipe(dest(destPath.js))
    .pipe(uglify()) // js圧縮
    .pipe(rename({ extname: ".min.js" }))
    .pipe(dest(destPath.js));
};

//変更された画像のみを圧縮するタスク
const imgChangedImagemin = () => {
  return src(srcPath.img)
    .pipe(changed(destPath.img))
    .pipe(
      imagemin(
        [
          imageminMozjpeg({
            quality: 80,
          }),
          imageminPngquant(),
          imageminSvgo({
            plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
          }),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(dest(destPath.img));
};

//全ての画像を圧縮するタスク
const imgAllImagemin = () => {
  return src(srcPath.img)
    .pipe(
      imagemin(
        [
          imageminMozjpeg({
            quality: 80,
          }),
          imageminPngquant(),
          imageminSvgo({
            plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
          }),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(dest(destPath.img));
};

// 画像フォルダをクリア
const cleanImages = () => {
  return del([destPath.img + "**/*"], { force: true });
};

//ローカルサーバー立ち上げ、ファイル監視と自動リロード
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
};
const browserSyncOption = {
  port: 80,
  proxy: "http://localhost:10073/",
  open: true,
  reloadOnRestart: true,
};

//リロード
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

//ファイル監視
const watchFiles = () => {
  watch(srcPath.css, series(cssSass, browserSyncReload));
  watch(srcPath.js, series(jsBabel, browserSyncReload));
  watch(srcPath.img, series(imgChangedImagemin, browserSyncReload)); //変更された画像のみを処理
  watch(srcPath.html, series(browserSyncReload));
  watch(srcPath.php, series(browserSyncReload));
};

exports.default = series(cleanImages, series(cssSass, jsBabel, imgAllImagemin), parallel(watchFiles, browserSyncFunc)); //全ての画像を処理
