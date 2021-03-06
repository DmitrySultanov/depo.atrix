window.onload = function(){
  setTimeout(function(){
    $('.preloader').fadeOut();
    // $('.wrapper').css({
    //   'transform':'translateY(0);',   
    //   'transition':'1s;',   
    // });
  }, 1000);
};

$(document).ready(function(){

    $('.line_preloader').css('width', '95%')

    // window.onload = function(){
    //   $('.preloader').css('opacity', '0');
    //   setTimeout(function(){
    //     $('.preloader').css('display', 'none');
    //   }, 2000)
    // }

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
    navigation: {
      nextEl: '.main-banner-slider .button-next',
      prevEl: '.main-banner-slider .button-prev',
    },
    loop: true,
    speed: 500,
    effect: 'coverflow',
    pagination: {
      el: '.main-banner-slider .swiper-pagination',
      type: 'fraction',
    },
  })   

  function headerClone(){

    $('#scrolltotop').on('click', function(){
      $('html, body').animate({'scrollTop': 0});
    });

    var fooOffset = $('footer').offset().top;
    var fooHeight = $('footer').height();
    var fscroll = fooOffset - fooHeight - 1000;

    var topHeaderSub = $('.header .submenu-after.original');
    var cloneHeaderSub = $('.header.clone .submenu-after');

    $(window).scroll(function(){
      var scrollHeightDown = parseInt(($('header').height() + 200 + 'px')),
          headerClone = $('.header.clone'),
          s = $(this).scrollTop();


      if(s > scrollHeightDown){
        headerClone.addClass('active');
        topHeaderSub.fadeOut();
        $('.submenu-btn.original').removeClass('active').find('em').text('Меню');
      } else{
        headerClone.removeClass('active');
        cloneHeaderSub.fadeOut();
        $('.submenu-btn.clone').removeClass('active').find('em').text('Меню');
      }

      if($(window).scrollTop() > fscroll){
        $('#scrolltotop').addClass('active');
      } else if($(window).scrollTop() < fscroll){
        $('#scrolltotop').removeClass('active');
      } 
    })
  }
  headerClone();

  function headerMenuBottom(){
    $('.gamburger-btn').on('click', function(){
      $(this).toggleClass('active');

      if($(this).hasClass('active')){
        $(this).parents('.top-row').siblings('.bottom-row').addClass('active');
      } else{
        $(this).parents('.top-row').siblings('.bottom-row').removeClass('active').find('.submenu-btn').removeClass('active').find('em').text('Меню');
        $(this).parents('.top-row').siblings('.submenu-after').hide();
        $('body').css('overflow', 'auto');
      }
    });
  }
  headerMenuBottom();

  var catalogSlider = new Swiper('.catalog-slider .swiper-container', {
      // slidesPerView: 4,
      width: 270,
      navigation: {
        nextEl: '.catalog-slider .button-next',
        prevEl: '.catalog-slider .button-prev',
      },
      // centeredSlides: true,
      // paginationClickable: true,
      // noSwiping: true,
      // noSwipingClass: 'swiper-no-swiping',
      loop: false,
      spaceBetween: 30,
      breakpoints: {
      768: {
        width: 240,
        spaceBetween: 20
        }
      }
  });
  var newsSlider = new Swiper('.news-slider .swiper-container', {
      width: 270,
      navigation: {
        nextEl: '.news-slider .button-next',
        prevEl: '.news-slider .button-prev',
      },
      // noSwiping: true,
      // noSwipingClass: 'swiper-no-swiping',
      loop: false,
      spaceBetween: 30,
      breakpoints: {
        768: {
          width: 240,
          spaceBetween: 20
        }
      }
  });
  var awardsSlider = new Swiper('.honored-awards-slider .swiper-container', {
      slidesPerView: 3,
      navigation: {
        nextEl: '.honored-awards-slider .button-next',
        prevEl: '.honored-awards-slider .button-prev',
      },
      loop: false,
      breakpoints: {
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 1,
        }
      }
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

  $('.header .bottom-row .menu-item.has-child').hover(
    function(){
      $(this).addClass('active');
    },
    function(){
      $(this).removeClass('active');
    }
  );

  var s = skrollr.init({forceHeight: false}); 
  if (s.isMobile()) {
    s.destroy();
  }

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
      focusOnSelect: true,
      responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      }
    ]
    });
  }

  // модалки
  $(".entrance-btn").on('click', function(){
      var initialWidth = $('body').width();
      var initialHeight = $('html').height();
      $('body').css({'overflow':'hidden', 'min-height' : initialHeight, 'width': initialWidth});
      $(".overlay").fadeIn(200);
      $(".amodal.sign-in").fadeIn();

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
  $(".amodal, .modal-close").on('click', function(){
      $(".amodal").fadeOut(0);
      $(".overlay").fadeOut(200);
      $("body").css("padding-right", "0");
      $("body").css({"overflow": "auto", 'min-height' : '100%', 'width': 'auto'});
  });
  $(".modal_wrap, .modal-close").on('click', function(event){
      event.stopPropagation();
  });

  // поиск в шапке
  $('.flex-main').on('click', '.search-toggle', function(e) {
    var selector = $(this).data('selector');
    $(selector).toggleClass('show').find('.search-input').focus();

    e.preventDefault();
  });
  $('.search-box-close').on('click', function(){
    $(this).parents('.flex-main.s').removeClass('show');
  });

  function accordeon(){
    $('.accordeon').each(function(){
      var $item = $('.acc-item', $(this)),
          $title = $('.acc-title', $(this)),
          $hidden = $('.acc-hidden', $(this));

      $title.on('click', function(){
        $(this).toggleClass('active');

        if($(this).hasClass('active')){
          // $(this).addClass('active');
          $(this).siblings('.acc-hidden').slideDown();
        } else{
          $(this).siblings('.acc-hidden').slideUp(400);
            $(this).removeClass('active');
        }

      });

    });
  }
  accordeon();

  // рейндж слайдер (в каталоге)
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
      create: function(event, ui) {
        minCost.val(uiSldr.slider("values",0));
        maxCost.val(uiSldr.slider("values",1));
      },
      slide: function(event, ui){
        minCost.val(uiSldr.slider("values",0));
        maxCost.val(uiSldr.slider("values",1));
      },
      // stop: function(event, ui){
      //   minCost.val(uiSldr.slider("values",0));
      //   maxCost.val(uiSldr.slider("values",1));
      // }
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

      $('.tab-content >li:not(":first")', $this).hide();

      $('.tabs-items li', $this).each(function(i){
        $(this).attr('data-tab', i);
      });

      $('.tab-content>li', $this).each(function(i){
        $(this).attr('data-tab', i);
      });

      $('.tabs-items li', $this).on('click', function(){
        var dataTab = $(this).data('tab');
        var getWrapper = $(this).closest('.tabs-wrapper');
        var txt = $(this).text();
        $('h1').text(txt);

        getWrapper.find('.tabs-items li').removeClass('active');
        $(this).addClass('active');

        getWrapper.find('.tab-content>li').hide();
        getWrapper.find('.tab-content>li[data-tab='+dataTab+']').fadeIn('slow');

        return false
      });
    });
  }
  tabs();

  var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
      var label  = input.nextElementSibling,
        labelVal = label.innerHTML;

      input.addEventListener( 'change', function( e )
      {
        var fileName = '';
        if( this.files && this.files.length > 1 )
          fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
        else
          fileName = e.target.value.split( '\\' ).pop();

        if( fileName )
          label.querySelector( 'span' ).innerHTML = fileName;
        else
          label.innerHTML = labelVal;
      });
  });


  $('footer .jselector').change(function(){
    var index = $('option:selected', this).index();
    $('.city-adress').children('li').removeClass('active').eq(index).addClass('active');
    $('.city-phones').children('li').removeClass('active').eq(index).addClass('active');
    $('.city-time-works').children('li').removeClass('active').eq(index).addClass('active');
  });

  function moreInfoFunc(){
    var $link = $('.see-more');

    $link.on('click', function(){
      $(this).toggleClass('active');

      if($(this).hasClass('active')){
        $(this).find('span').text('Свернуть');
        $(this).parent().siblings('._hidden').slideDown();
      } else{
        $(this).find('span').text('Показать еще');
        $(this).parent().siblings('._hidden').slideUp();
      }

      return false
    });
  }
  moreInfoFunc();

  function submenu(){
    $('.submenu-btn').on('click', function(){
      $(this).toggleClass('active');

      if($(this).hasClass('active')){
        $(this).parents('.bottom-row').siblings('.submenu-after').fadeIn();
        $(this).find('em').text('Свернуть');
        $('body').css('overflow', 'hidden');
      } else{
        $(this).parents('.bottom-row').siblings('.submenu-after').fadeOut();
        $(this).find('em').text('Меню');
        $('body').css('overflow', 'auto');
      }
    });

    $('.submenu-after .sub-item.has-child').on('click', function(){
      $(this).toggleClass('active');

      if($(this).hasClass('active')){
        $(this).children('ul').slideDown();
      } else{
        $(this).children('ul').slideUp();
      }
    });
  }
  submenu();
});