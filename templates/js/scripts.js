$(document).ready(function(){

  $('.jselect').jselector();  

	$("[data-fancybox]").fancybox({
    image : {
      protect: true
    },
    helpers : {
        media : {}
    }
  });

  $('input.phone', this).inputmask("+79999999999");

  var mainBannerSlider = new Swiper ('.main-banner-slider .swiper-container', {
    nextButton: '.main-banner-slider .button-next',
    prevButton: '.main-banner-slider .button-prev',
    loop: true,
    speed: 500,
    effect: 'coverflow',
  })   

  function headerClone(){

    $('#scrolltotop').on('click', function(){
      $('html, body').animate({'scrollTop': 0});
    });

    var fooOffset = $('footer').offset().top;
    var fooHeight = $('footer').height();
    var fscroll = fooOffset - fooHeight - 1000;

    $(window).scroll(function(){
      var scrollHeightDown = parseInt(($('header').height() + 200 + 'px')),
          scrollHeightUp = parseInt(($('header').height() + 350 + 'px')),
          headerClone = $('.top-row.clone'),
          s = $(this).scrollTop();


      if(s > scrollHeightDown){
        headerClone.addClass('active');
      } else if(s < scrollHeightDown){
        headerClone.removeClass('active');
      }

      if($(window).scrollTop() > fscroll){
        $('#scrolltotop').addClass('active');
      } else if($(window).scrollTop() < fscroll){
        $('#scrolltotop').removeClass('active');
      } 
    })
  }
  headerClone();

  var catalogSlider = new Swiper('.catalog-slider .swiper-container', {
      // slidesPerView: 4,
      width: 270,
      nextButton: '.catalog-slider .button-next',
      prevButton: '.catalog-slider .button-prev',
      // centeredSlides: true,
      // paginationClickable: true,
      loop: true,
      spaceBetween: 30
  });
  var newsSlider = new Swiper('.news-slider .swiper-container', {
      width: 270,
      nextButton: '.news-slider .button-next',
      prevButton: '.news-slider .button-prev',
      loop: true,
      spaceBetween: 30
  });

  function questionMe(){
    $('.question-btn').hover(
      function(){
        $(this).parent().addClass('translate');
      },
      function(){
        $(this).parent().removeClass('translate');
      }
    );

    $('.question-btn').on('click', function(){
      $(this).parent().toggleClass('visible');
    });
  }
  questionMe();

  $('header .bottom-row .menu-item.has-child').hover(
    function(){
      $(this).addClass('active');
    },
    function(){
      $(this).removeClass('active');
    }
  );

  var s = skrollr.init(); 


  var phold;

  $('.select-single').select2({
    placeholder: phold,
    minimumResultsForSearch: -1,
  });

  $('.select-single').each(function(){
    var placeholder = $(this).data('placeholder');
    var phold = placeholder;
  });

  // $('select').on('change', function() {
  //     $(this).valid();
  //     // resetValues();
  // });

  $('.select-single').on('select2:select', function (e) {
    console.log(e.target.selectedIndex) //индекс выбранного
    $(this).select2("close");
  });



  $(".entrance-btn").on('click', function(){
      var initialWidth = $('body').width();
      var initialHeight = $('html').height();
      $('body').css({'overflow':'hidden', 'min-height' : initialHeight, 'width': initialWidth});
      $(".overlay").fadeIn(200);
      $(".modal.sign-in").fadeIn();

        $('body').keydown(function(eventObject){
          if (eventObject.which == 27){
            $('.modal').fadeOut(0);
            $('.overlay').fadeOut(200);
            $("body").css("padding-right", "0");
            $("body").css({"overflow": "auto", 'min-height' : '100%', 'width': 'auto'});
          }
        });
      return false
  });
  $(".modal, .modal-close").on('click', function(){
      $(".modal").fadeOut(0);
      $(".overlay").fadeOut(200);
      $("body").css("padding-right", "0");
      $("body").css({"overflow": "auto", 'min-height' : '100%', 'width': 'auto'});
  });
  $(".modal_wrap, .modal-close").on('click', function(event){
      event.stopPropagation();
  });

  $('.flex-main').on('click', '.search-toggle', function(e) {
    var selector = $(this).data('selector');

    $(selector).toggleClass('show').find('.search-input').focus();
    $(this).toggleClass('active');

    e.preventDefault();
  });
});