<footer>
  <div>
    <a target="_blank" href="https://www.facebook.com/longittude360"><i class="fa fa-facebook-square" aria-hidden="true"></i>
    </a>
    <a target="_blank" href="https://www.instagram.com/longittude360/"><i class="fa fa-instagram" aria-hidden="true"></i>
    </a>
    <a target="_blank" href="https://www.linkedin.com/company/longittude"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
    </a>
    <a target="_blank" href="https://vimeo.com/523817426">
    <i class="fa fa-vimeo-square" aria-hidden="true"></i>
    </a>



  </div>
</footer>
<a  class="ws" target="_blank" href="https://api.whatsapp.com/send?phone=++573008396367&text=Hola!%20Quiero%20m%C3%A1s%20informaci%C3%B3n.%20C&P"><i class="fa fa-whatsapp" aria-hidden="true"></i>
</a>


<!----------galeria----------->
<!-- Some spacing 😉 -->
<div class="spacer"></div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <!-- Background of PhotoSwipe.
           It's a separate element as animating opacity is faster than rgba(). -->
  <div class="pswp__bg"></div>
  <!-- Slides wrapper with overflow:hidden. -->
  <div class="pswp__scroll-wrap">
    <!-- Container that holds slides.
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>
    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <!--  Controls are self-explanatory. Order can be changed. -->
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <button class="pswp__button pswp__button--share" title="Share"></button>
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
        <!-- element will get class pswp__preloader--active when preloader is running -->
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>
      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
      </button>
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
      </button>
      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>
    </div>
  </div>
</div>
<script src="{{ url('/assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/assets/js/photoswipe.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>

<script src="{{ url('/assets/js/custom.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Modal -->
<div class="modal fade reel" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <video id="bgdvid" autoplay loop playsinline muted>
                <source src="{{ url('/assets/img/banner2.mp4') }}#t=0.1" type="video/mp4">
                <source src="{{ url('/assets/img/banner2.mp4') }}#t=0.1" type="video/ogg">

                Your browser does not support HTML5 video.
            </video>

      </div>

    </div>
  </div>
</div>

</body>
</html>
