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
      // noSwiping: true,
      // noSwipingClass: 'swiper-no-swiping',
      loop: false,
      spaceBetween: 30
  });
  var newsSlider = new Swiper('.news-slider .swiper-container', {
      width: 270,
      nextButton: '.news-slider .button-next',
      prevButton: '.news-slider .button-prev',
      // noSwiping: true,
      // noSwipingClass: 'swiper-no-swiping',
      loop: false,
      spaceBetween: 30
  });
  var awardsSlider = new Swiper('.honored-awards-slider .swiper-container', {
      slidesPerView: 3,
      nextButton: '.honored-awards-slider .button-next',
      prevButton: '.honored-awards-slider .button-prev',
      loop: false
      // spaceBetween: 30
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

  var s = skrollr.init({forceHeight: false}); 


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

  if($('.card-paar-slider').size()){
    $('.card-slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.card-slider-nav'
    });
    $('.card-slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.card-slider-for',
      // centerMode: true,
      focusOnSelect: true
    });
  }



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

  function accordeon(){
    $('.accordion').each(function(){
      var $item = $('.acc-item', $(this)),
          $title = $('.acc-title', $(this)),
          $hidden = $('.acc-hidden', $(this));

      $title.on('click', function(){
        $(this).toggleClass('active');

        if($(this).hasClass('active')){
          // $(this).addClass('active');
          $(this).siblings('.acc-hidden').slideDown();
        } else{
          $(this).removeClass('active');
          $(this).siblings('.acc-hidden').slideUp('fast');
        }

      });

    });
  }
  accordeon();

  $('.size-price-slider').each(function(){
    var $this = $(this),
        uiSldr = $('.slider-ui', $this),
        minCost = $this.find('input.minCost'),
        maxCost = $this.find('input.maxCost');


    uiSldr.slider({
      min: +minCost.data('val'),
      max: +maxCost.data('val'),
      values: [0,6000],
      range: true,
      stop: function(event, ui) {
        minCost.val(uiSldr.slider("values",0));
        maxCost.val(uiSldr.slider("values",1));
      },
      slide: function(event, ui){
        minCost.val(uiSldr.slider("values",0));
        maxCost.val(uiSldr.slider("values",1));
      }
    });

    $("input#minCost").change(function(){

      var value1=$("input#minCost").val();
      var value2=$("input#maxCost").val();

        if(parseInt(value1) > parseInt(value2)){
        value1 = value2;
        $("input#minCost").val(value1);
      }
      $("#slider").slider("values",0,value1); 
    });
  });

    
  $("input#maxCost").change(function(){
      
    var value1=$("input#minCost").val();
    var value2=$("input#maxCost").val();
    
    if (value2 > 120000) { value2 = 120000; $("input#maxCost").val(120000)}

    if(parseInt(value1) > parseInt(value2)){
      value2 = value1;
      $("input#maxCost").val(value2);
    }
    $("#slider").slider("values",1,value2);
  });
  

  function cbChange(obj) {
    var cbs = document.getElementsByClassName("cb"); 
    for (var i = 0; i < cbs.length; i++) {
      cbs[i].checked = true;
    }
    obj.checked = false;
  }

  $('.after-select-ul').mCustomScrollbar({
    theme:"dark", 
    scrollbarPosition:"outside"
  });

  function tabs() {

    var $wrapper = $('.tabs-wrapper');

    $wrapper.each(function(){
      var $this = $(this);

      $('.tab_content >li:not(":first")', $this).hide();

      $('.tabs li', $this).each(function(i){
        $(this).attr('data-tab', i)
      });

      $('.tab-content>li', $this).each(function(i){
        $(this).attr('data-tab', i)
      });

      $('.tabs li', $this).on('click', function(){
        var dataTab = $(this).data('tab');
        var getWrapper = $(this).closest('.tabs-wrapper');

        getWrapper.find('.tabs li').removeClass('active');
        $(this).addClass('active');

        getWrapper.find('.tab-content>li').hide();
        getWrapper.find('.tab-content>li[data-tab='+dataTab+']').fadeIn('slow');
      });
    });
  }
  tabs();
});