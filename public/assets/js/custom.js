     $('#play-pause-button').click(function () {
		   var mediaVideo = $("#bgdvid").get(0);
		   var playv = $("#playv");
		   if (mediaVideo.paused) {
		       mediaVideo.play();
		       playv.parent().addClass("gobottom");
		   } else {
		       mediaVideo.pause();
		       playv.parent().removeClass("gobottom");
		  }
		});

    setTimeout(function () {
      $('#pre-loader').fadeOut(300);
  }, 1500)

	// Menú responsive
$(function () {
	$('[data-toggle="offcanvas"]').on("click", function () {
			$(".offcanvas-collapse").toggleClass("open");
			$("body").toggleClasss("offcanvas-expanded");
	});
});

$(".hamburger").on("click", function () {
	$(this).toggleClass("is-active");
});

$(".nav-link").click(function () {
	$(".offcanvas-collapse").removeClass("open");
	$(".hamburger").toggleClass("is-active");
	$("body").removeClass("offcanvas-expanded");
});