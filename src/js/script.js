jQuery(function ($) {
  //スムーススクロール
  $('a[href^="#"]').click(function () {
    let speed = 500;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  //ページトップフェード
  $(document).ready(function () {
    $("#pagetop").hide();
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 100) {
        $("#pagetop").fadeIn("slow");
      } else {
        $("#pagetop").fadeOut("fast");
      }
      scrollHeight = $(document).height();
      scrollPosition = $(window).height() + $(window).scrollTop();
      cta = $(".l-cta").innerHeight();
      footer = $("footer").innerHeight();
      footHeight = cta + footer;
      if (scrollHeight - scrollPosition <= footHeight) {
        $("#pagetop").css({
          position: "absolute",
          bottom: footHeight + 20,
        });
      } else {
        $("#pagetop").css({
          position: "fixed",
          bottom: "20px",
        });
      }
    });
  });

  // ハンバーガーメニュー
  $(".l-header__trigger").on("click", function () {
    $(".l-header__trigger-line,.l-header__trigger").toggleClass("is-active");
    return false;
  });
  var state = false;
  $(".l-header__trigger").on("click", function () {
    $(".l-navi").fadeToggle();
    // $('.l-header__inner').toggleClass('is-hide');
    if (state == false) {
      $("html, body").css("overflow", "hidden");
      $("body").addClass("is-open");
      state = true;
    } else {
      $("html, body").css("overflow", "auto");
      $("body").removeClass("is-open");
      state = false;
    }
  });
});

//100vh
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);

//360px以下スケーリング
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value = window.outerWidth > 360 ? "width=device-width,initial-scale=1" : "width=360";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

/*自動リロード*/
// var timer = 0;
// var currentWidth = window.innerWidth;
// $(window).resize(function(){
//   if (currentWidth == window.innerWidth) {
//     return;
//   }
//   if (timer > 0) {
//     clearTimeout(timer);
//   }
//   timer = setTimeout(function () {
//     location.reload();
//   }, 200);
// });
// if (window.matchMedia("screen and (max-width:999px)").matches) { }

// ハンバーガーメニュー

$(".js-hamburger").on("click", function () {
  $(".js-drawer").toggleClass("is-active");
  $(".js-hamburger").toggleClass("is-active");
});
$(".l-drawer__link").on("click", function () {
  $(".js-drawer").toggleClass("is-active");
  $(".js-hamburger").toggleClass("is-active");
});
$(".l-drawer__content-link").on("click", function () {
  $(".js-drawer").toggleClass("is-active");
  $(".js-hamburger").toggleClass("is-active");
});
$(".l-drawer__toggle").click(function () {
  $(this).toggleClass("is-active");
  $(this).next(".l-drawer__content").slideToggle();
});

// ----------mv-swiper
const swiper = new Swiper(".p-top-mv__swiper", {
  loop: true,
  effect: "fade", // フェード切り替え
  // 自動再生
  autoplay: {
    delay: 4000, // 4秒後に次のスライドへ
    disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
  },
  speed: 2000, // 2秒かけてフェード
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// ----------インタビュー-swiper

const intswiper = new Swiper(".p-top-interview__swiper", {
  slidesPerView: 2.8, // スライド数
  spaceBetween: "2%", // スライド間の余白
  freeMode: true, // 前後のスライドで止まらずにスライド
  // ページネーション
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // 前後の矢印
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// ヘッダーすぎたら色かえる
$(function () {
  var imgHeight = 0;
  var header = $(".js-header");

  if ($(".p-top-mv").length) {
    imgHeight = $(".p-top-mv").outerHeight();
  } else if ($(".l-under-mv").length) {
    imgHeight = $(".l-under-mv").outerHeight();
  }

  $(window).on("load scroll", function () {
    if ($(window).scrollTop() < imgHeight) {
      header.removeClass("change-color");
    } else {
      header.addClass("change-color");
    }
  });
});
