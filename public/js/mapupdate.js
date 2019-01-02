var drawingManager;
var selectedShape;

function initMap() {
    var map = new google.maps.Map(document.getElementById('map-content'),{
        center: new google.maps.LatLng(-0.343600, 100.380834),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        disableDefaultUI: true,
        zoomControl: true,
        mapTypeControl: true
    });

    var polyOptions = {
        fillColor: 'blue',
        strokeColor: 'blue',
        draggable: true
    };

    drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.POLYGON,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT,
            drawingModes: [
                google.maps.drawing.OverlayType.POLYGON
            ]
        },
        polygonOptions: polyOptions,
        map: map
    });

    //event digitasi di google map
    google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event){
        if (event.type == google.maps.drawing.OverlayType.POLYGON){
            //console.log('polygon path array', event.overlay.getPath().getArray());
            var str_input ='MULTIPOLYGON(((';
            var i=0;
            var coor = [];
            $.each(event.overlay.getPath().getArray(), function(key, latlng){
                var lat = latlng.lat();
                var lon = latlng.lng();
                coor[i] = lon +' '+ lat;
                str_input += lon +' '+ lat +',';
                i++;
            });
            str_input = str_input+''+coor[0]+')))';
            $("#geom").val(str_input);
            drawingManager.setDrawingMode(null);
            drawingManager.setOptions({
                drawingControl: false
            });
            // Add an event listener that selects the newly-drawn shape when the user mouses down on it.
            var newShape = event.overlay;
            newShape.type = event.type;
            setSelection(newShape);
            google.maps.event.addListener(newShape, 'click', function(){
                setSelection(newShape);
            });
        }
        function getCoordinate(){
            var polygonBounds = newShape.getPath();
            str_input ='MULTIPOLYGON(((';
            for(var i = 0 ; i < polygonBounds.length ; i++){
                coor[i] = polygonBounds.getAt(i).lng() +' '+ polygonBounds.getAt(i).lat();
                str_input += polygonBounds.getAt(i).lng() +' '+ polygonBounds.getAt(i).lat() +',';
            }
            str_input = str_input+''+coor[0]+')))';
            $("#geom").val(str_input);
        }
        google.maps.event.addListener(newShape.getPath(), 'set_at', getCoordinate);
        google.maps.event.addListener(newShape.getPath(), 'insert_at', getCoordinate);
        google.maps.event.addListener(newShape.getPath(), 'remove_at', getCoordinate);
    });
    google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
    google.maps.event.addListener(map, 'click', clearSelection);
    google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', deleteSelectedShape);

    drawingManager.setMap(map);
}

function clearSelection() {
    if (selectedShape) {
        selectedShape.setEditable(false);
        selectedShape = null;
    }
}

function setSelection(shape) {
    clearSelection();
    selectedShape = shape;
    shape.setEditable(true);
}

function deleteSelectedShape() {
    if (selectedShape) {
        $("#geom").val('');
        selectedShape.setMap(null);
        drawingManager.setOptions({
            drawingControl: true
        });
    }
}