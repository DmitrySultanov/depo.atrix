$(document).ready(function(){

	// $('.select-single select').jselector();

	$("[data-fancybox]").fancybox({
    image : {
      protect: true
    },
    helpers : {
        media : {}
    }
  });

  $('input.phone', this).inputmask("+79999999999");

    // инициализация слик-слайдера***********
   //  $('.slider').slick({ 
   //  	slidesToShow: 1, 
   //  	slidesToScroll: 1, 
  	// });
  
  var mainBannerSlider = new Swiper ('.main-banner-slider .swiper-container', {
    nextButton: '.main-banner-slider .button-next',
    prevButton: '.main-banner-slider .button-prev',
    loop: true,
    speed: 500,
    effect: 'coverflow',
  })   

  function headerClone(){
    $(document).scroll(function(){
      var scrollHeightDown = parseInt(($('header').height() + 200 + 'px')),
          scrollHeightUp = parseInt(($('header').height() + 350 + 'px')),
          headerClone = $('.top-row.clone'),
          s = $(this).scrollTop();

      if(s > scrollHeightDown){
        headerClone.addClass('active');
      } else{
        headerClone.removeClass('active');
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
      spaceBetween: 30
  });
  var newsSlider = new Swiper('.news-slider .swiper-container', {
      // slidesPerView: 4,
      width: 270,
      nextButton: '.news-slider .button-next',
      prevButton: '.news-slider .button-prev',
      // centeredSlides: true,
      // paginationClickable: true,
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
    // console.log(e)
    console.log(e.target.selectedIndex) //индекс выбранного
    $(this).select2("close");
  });
});