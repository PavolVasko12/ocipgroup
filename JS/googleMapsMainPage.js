
var map,

    desktopScreen = Modernizr.mq( "only screen and (min-width:224px)" ),
    zoom = desktopScreen ? 13 : 1,
    scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

function initMap() {
    var myLatLng = {lat: 51.8152358, lng: -0.851317};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: zoom,
        center: myLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: scrollable,
        draggable: draggable,
        styles: [{"stylers": [{ "saturation": -70 }]}],
    });

    var locations = [
        {
            title: 'Ocip Group',
            position: {lat: 51.813150, lng: -0.808422},
            icon: {
                url: isIE11 ? "MEDIA/ocipMapsPin.png" : "MEDIA/ocipMapsPin.png",
                scaledSize: new google.maps.Size(100, 140)
            }

        },

    ];

    locations.forEach( function( element, index ){
        var marker = new google.maps.Marker({
            position: element.position,
            map: map,
            title: element.title,
            icon: element.icon,
        });
    });
}
