
var map,

    desktopScreen = Modernizr.mq( "only screen and (min-width:1024px)" ),
    zoom = desktopScreen ? 13 : 1,
    scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

var roundMap,

    desktopScreen = Modernizr.mq( "only screen and (min-width:1024px)" ),
    zoom = desktopScreen ? 13 : 1,
    scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));



function initMap() {
    var myLatLng = {lat: 51.8152358, lng: -0.811317};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: zoom,
        center: myLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: scrollable,
        draggable: draggable,
        styles: [{"stylers": [{ "saturation": -70 }]}],
    });

    roundMap = new google.maps.Map(document.getElementById('roundMap'), {
        zoom: zoom,
        center: myLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: scrollable,
        draggable: draggable,
        styles: [{"stylers": [{ "saturation": -70 }]}],
    });

    var locations = [
        {
<<<<<<< HEAD
            title: 'Ocip Group',
=======
            map:map,
            title: 'PEPSized Coffee',
>>>>>>> 989afdc7035988c72804edaf8af09d1fa97ea5dd
            position: {lat: 51.818, lng: -0.811317},
            icon: {
                url: isIE11 ? "MEDIA/ocipMapsPin.png" : "MEDIA/ocipMapsPin.png",
                scaledSize: new google.maps.Size(80, 90)
            }

        },

        {
            map: roundMap,
            title: 'PEPSized Coffee',
            position: {lat: 51.818, lng: -0.811317},
            icon: {
                url: isIE11 ? "MEDIA/ocipMapsPin.png" : "MEDIA/ocipMapsPin.png",
                scaledSize: new google.maps.Size(30, 40)
            }

        },


    ];

    locations.forEach( function( element, index ){
        var marker = new google.maps.Marker({
            position: element.position,
            map: element.map,
            title: element.title,
            icon: element.icon,
        });
    });
}
