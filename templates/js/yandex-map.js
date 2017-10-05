$(document).ready(function(){
  ymaps.ready(init);

  function init() {
      var myMap = new ymaps.Map("map", {
              center: [55.73, 37.75],
              zoom: 9
              // controls: []
          }, {
              // searchControlProvider: 'yandex#search'
          });
          myMap.controls
          .remove('trafficControl')
          .remove('mapTools')
          .remove('typeSelector')
          .remove('searchControl')
          .remove('fullscreenControl')
          .remove('geolocationControl')
          myMap.behaviors.disable('scrollZoom');
         
          dealersCollection = new ymaps.GeoObjectCollection(null, {
              preset: 'islands#blueIcon'
          }),
          dealersCoords = [[55.73, 37.75], [55.91, 37.85], [55.73, 37.15], [55.81, 38.45]];

      for (var i = 0, l = dealersCoords.length; i < l; i++) {
          dealersCollection.add(new ymaps.Placemark(dealersCoords[i]));
      }

      myMap.geoObjects.add(dealersCollection);

      // Через коллекции можно подписываться на события дочерних элементов.
      dealersCollection.events.add('click', function (e) { 
        console.log(e) 
      });

      // Через коллекции можно задавать опции дочерним элементам.
      dealersCollection.options.set({
        iconLayout: 'default#image',
        iconImageHref: 'templates/img/pin.png',
        iconImageSize: [54, 62],
        iconImageOffset: [-3, -42]
      });

      // dealersCollection.objects.events.add('click', function (e) {
      //   var objectId = e.get('objectId'),
      //     coords = dealersCollection.objects.getById(e.get("objectId")).geometry.coordinates,
      //     objGroup = dealersCollection.objects.getById(e.get("objectId")).properties.group,
      //     objName = dealersCollection.objects.getById(e.get("objectId")).properties.name;

      //     // $('.city_all_officies').addClass('active');

      //     // var bounds = objectManager.getBounds();
          
      //     // myMap.setCenter(coords, 16, {duration: 500, });

      //     //   $.get('/data/getCityOffices/'+objGroup,function(html){
      //     //     $('#ajax-office').html(html);
      //     //     $('body').trigger('tab');

      //     //     $('.city_all_officies').removeClass('visible');
      //     //     $('.office_full_desc').addClass('visible');

      //     //     $('#ajax-office .office_desc.hover[data-id='+objectId+']').addClass('active');

      //     //     $('.office_full .back').on('click', function(){

      //     //   $('.city_all_officies').addClass('visible');
      //     //       $('.office_full_desc').removeClass('visible');
      //     //     });
      //     // });
      //   console.log(objName)
      // });
    }

});