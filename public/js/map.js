
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map-content'),{
                center: new google.maps.LatLng(-0.343600, 100.380834),
                zoom: 20,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
                zoomControl: true,
                mapTypeControl: true
            });

            var polyOptions = {
                fillColor: 'blue',
                strokeColor: 'blue',
                draggable: true
            };

            getMap();
        }

        function getMap() {
            var curMap = new google.maps.Data();
            curMap.loadGeoJson('{!! route('getMapKecelakaan',['id'=>'all()']) !!}');
            curMap.setStyle(function(feature){
                return({
                    fillColor: '#bd0d2b',
                    strokeColor: '#000000',
                    strokeWeight: 1,
                    fillOpacity: 0.3
                });
            });
            curMap.setMap(map);
            $.get('{!! route('getCenterKecelakaan',['id'=>'all()']) !!}',function(result){
                map.setCenter(new google.maps.LatLng(result.lat,result.lon));
                map.setZoom(16);
            });
        }
   

  