
var map,

    desktopScreen = Modernizr.mq( "only screen and (min-width:1024px)" ),
    zoom = desktopScreen ? 13 : 1,
    scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

var roundMap,

    desktopScreen = Modernizr.mq( "only screen and (min-width:1024px)" ),
    zoom = desktopScreen ? 11 : 1,
    scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));



function initMap() {
    var myLatLng = {lat: 51.813150, lng: -0.808422};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: zoom,
        center: myLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: scrollable,
        draggable: draggable,
        styles: [{"stylers": [{ "saturation": -70 }]}],
        disableDefaultUI: true
    });

    roundMap = new google.maps.Map(document.getElementById('roundMap'), {
        zoom: zoom,
        center: {lat: 51.813150, lng: -0.808422},
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: scrollable,
        draggable: draggable,
        styles: [{"stylers": [{ "saturation": -70 }]}],
        disableDefaultUI: true
    });

    var locations = [
        {
            map:map,
            title: 'Ocip Group',
            position: {lat: 51.813150, lng: -0.808422},
            icon: {
                url: isIE11 ? "MEDIA/ocipMapsPin.png" : "MEDIA/ocipMapsPin.png",
                scaledSize: new google.maps.Size(90, 120)
            }

        },

        {
            map: roundMap,
            title: 'Ocip Group',
            position: {lat: 51.813150, lng: -0.808422},
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
