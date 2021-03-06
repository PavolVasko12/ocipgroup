var map,

    desktopScreen = Modernizr.mq( "only screen and (min-width:224px)" ),
    zoom = desktopScreen ? 13 : 1,
    scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

var roundMap,

    desktopScreen = Modernizr.mq( "only screen and (min-width:224px)" ),
    zoom = desktopScreen ? 11 : 1,
    scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

var position = {lat: 51.507201, lng: -0.126907};

function initMap() {
    var myLatLng = {lat: 51.8152358, lng: -0.811317};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: zoom,
        center: position,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: scrollable,
        draggable: draggable,
        styles: [{"stylers": [{ "saturation": -70 }]}],
        disableDefaultUI: true
    });

    roundMap = new google.maps.Map(document.getElementById('roundMap'), {
        zoom: zoom,
        center: position,
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
            position: position,
            icon: {
                url: isIE11 ? "../MEDIA/ocipMapsPin.png" : "../MEDIA/ocipMapsPin.png",
                scaledSize: new google.maps.Size(80, 100)
            }

        },

        {
            map: roundMap,
            title: 'Ocip Group',
            position: position,
            icon: {
                url: isIE11 ? "../MEDIA/ocipMapsPin.png" : "../MEDIA/ocipMapsPin.png",
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
