$(document).ready(function(){
  ymaps.ready(init);

  function init() {
      var myMap = new ymaps.Map("map", {
              center: [55.73, 37.75],
              zoom: 9,
              controls: []
          }, {
              searchControlProvider: 'yandex#search'
          }),
         
          dealersCollection = new ymaps.GeoObjectCollection(null, {
              preset: 'islands#blueIcon'
          }),
          dealersCoords = [[55.73, 37.75], [55.91, 37.85], [55.73, 37.15], [55.81, 38.45]];

      for (var i = 0, l = dealersCoords.length; i < l; i++) {
          dealersCollection.add(new ymaps.Placemark(dealersCoords[i]));
      }

      myMap.geoObjects.add(dealersCollection);

      // Через коллекции можно подписываться на события дочерних элементов.
      dealersCollection.events.add('click', function () { console.log('Клик по метке') });

      // Через коллекции можно задавать опции дочерним элементам.
      dealersCollection.options.set({
        iconLayout: 'default#image',
        iconImageHref: 'templates/img/pin.png',
        iconImageSize: [54, 62],
        iconImageOffset: [-3, -42]
      });
  }

});