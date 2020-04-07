var myMap;
ymaps.ready(init);
function init () {
    myMap = new ymaps.Map("myMap", {
        center: [48.000735, 37.804027],
        zoom: 17
    });

    addPlacemarks();

}

function addPlacemarks() {
    myPlacemark = new ymaps.Placemark([48.000900, 37.803327], {
        balloonContentHeader: "Респбуликанский центр слепых",
        balloonContentBody: "Донецк, ул. Артема, 74 (3-й подъезд, с стороны б. Пушкина)",
        hintContent: "Респбуликанский центр слепых"
    }
    /*
    , {
        iconLayout: "default#image",
        iconImageHref: 'images/icon.jpg',
        iconImageSize: [30, 30],
    }
    */
    );

    myMap.geoObjects.add(myPlacemark);
}
