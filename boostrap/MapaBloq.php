<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximumscale=1.0, user-scalable=no" />
    <title>Aplicacion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner-1.css">
    <link rel="stylesheet" href="assets/css/Recuperar-contrasea-1.css">
    <link rel="stylesheet" href="assets/css/Recuperar-contrasea.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Single-Page-Contact-Us-Form.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <link rel="stylesheet" href="lib/leaflet/leaflet.css" />
	<script src="lib/leaflet/leaflet.js"></script>
	
	<link rel="stylesheet" href="lib/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.min.css" />
	<script src="lib/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.min.js"></script>
	
	<link rel="stylesheet" href="lib/leaflet-easybutton/easy-button.css" />
	<script src="lib/leaflet-easybutton/easy-button.js"></script>


	<!-- importar libreria JQuery -->
	<script src="lib/jquery/jquery-3.4.1.js"></script>

	<!-- Importtar la libreria  jQuery Modal -->
	<!-- Se esta usando un CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />



	<!--Mapa de Calor -->
	<!-- https://github.com/Leaflet/Leaflet.heat -->

	<script src="lib/leaflet-heat.js"></script>

	 <!-- Mapa Cluster Clase 15 -->
	 <link rel="stylesheet" href="lib/leaflet-markercluster/MarkerCluster.css" />
	<link rel="stylesheet" href="lib/leaflet-markercluster/MarkerCluster.Default.css" />
	<script src="lib/leaflet-markercluster/leaflet.markercluster.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="lib/leaflet.css" />
	<link rel="stylesheet" href="lib/leaflet.toolbar.css"/>
	<script src="lib/leaflet.toolbar-src.js"></script>



	
    <!--  CSS -->
	<style>
		table, th, td {
  			border: 1px solid black;
		}
	</style>
		<style type="text/css">.borde1{
		background-color: red;
		width: 100px;
		height: 160px;
		
	}
		<style type="text/css">.borde1{
		background-color: red;
		width: 100px;
		height: 160px;
		
	}
	</style>

	<style type="text/css">.borde2{
		background-color: red;
		height: 80px
	}
		</style>

	<style>
		.slider{
		background: url(img/bg-1.jpg);
		height: 100vh;
		background-size: cover;
		background-position: center;
	}.slider2{
		background-color: #FAFAFA;
		height: 100vh;
		background-size: cover;
		background-position: center;
	}
	</style>
    <style>
        body {
        padding: 0;
        margin: 0;
        }
        html, body, #mapid {
        height: 100%;
        }
    </style>
</head>

<body>
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="border-bottom-style: solid;">
        <div class="container"><a class="navbar-brand" href="MapaBloq.php" style="border-style: none;border-bottom-style: none;">CityReporte</a><a class="navbar-brand" href="index.php" style="height: 39px;margin: -7px;padding: 6px;width: 50px;color: rgba(255,0,0,0.9);filter: brightness(200%);">Salir</a>
        </div>
    </nav>
    

    <!-- End: Navigation Clean -->
    <!-- Start: Map Clean -->
	<div id="mapid"></div>
    <!-- End: Map Clean -->
    <script>

	
	
        var basemaps = 
        {
            Grayscale: L.tileLayer('http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png', 
            {
                maxZoom: 18,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }),
            
            Streets: L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', 
            {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            })
        };
      
    
        var wmsLayer = L.tileLayer.wms('http://idesc.cali.gov.co:8081/geoserver/wms?service=WMS&version=1.1.0', 
        {
            layers: 'idesc:mc_comunas',
            attribution: 'Creditos de la capa',
            format: 'image/png',
            transparent: true
        });
        
        
        var mymap = L.map('mapid',
        {
            zoom: 10
        }).setView([3.42335,-76.52086], 13);
        
        
        basemaps.Grayscale.addTo(mymap);
       
        
        
        
        
        var groupedOverlays = {
        
          "Capas idecs": {
            "Comunas": wmsLayer
          },
        };
    
    
        //hacer este cambio
        //L.control.groupedLayers(basemaps, groupedOverlays).addTo(mymap);
        
        var layerControl=L.control.groupedLayers(basemaps, groupedOverlays);
        layerControl.addTo(mymap);
    
   
        var flag_registrar=false;
        var flag_cluster=false;
    
    
        var ImmediateSubAction = L.Toolbar2.Action.extend({
                initialize: function(map, myAction) {
                    this.map = map;
                    this.myAction = myAction;
                    L.Toolbar2.Action.prototype.initialize.call(this);                
                },
                addHooks: function() {
                    this.myAction.disable();
                }
            });
                var Visualizar = ImmediateSubAction.extend({
                options: {
                    toolbarIcon: {
                        html: 'Visualizar Reportes de Bloqueos',
                        tooltip: 'Go to the Eiffel Tower'
                    }
                },
                addHooks: function() {
                      var flag_clustter=false;
                    alert( "A continuación se muestran los reportes más recientes de tipo bloqueo:" );
                      //Cambio de estado la vabriable bandera
                      cargarClustert();
                    ImmediateSubAction.prototype.addHooks.call(this);
                }
            });
            var Cancel = ImmediateSubAction.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="fa fa-times"></i>',
                        tooltip: 'Cancel'
                    }   
                }
            });
        var MyCustomAction = L.Toolbar2.Action.extend({
                options: {
                    toolbarIcon: {
                        className: 'fa fa-eye',
                    },
                    /* Use L.Toolbar2 for sub-toolbars. A sub-toolbar is,
                     * by definition, contained inside another toolbar, so it
                     * doesn't need the additional styling and behavior of a
                     * L.Toolbar2.Control or L.Toolbar2.Popup.
                     */
                    subToolbar: new L.Toolbar2({ 
                        actions: [Visualizar, Cancel]
                    })
                }
            });

            
            new L.Toolbar2.Control({
                position: 'topleft',
                actions: [MyCustomAction]
            }).addTo(mymap);
        var flag_calor=false;
    
      
    
          navigator.geolocation.watchPosition(b);
    
      function b(f) {
          var lat = f.coords.latitude;
          var lon = f.coords.longitude;
          L.marker([lat, lon ]).addTo(mymap).bindPopup("<b>Aquí estás tu, <br> GeoReportero ").openPopup();;          
      };


    //funcion para visualizar noticias del dia
         function onEachFeatureStyledIconClustert(feature, layer) 
        {
            if (feature.properties) 
            {	
                var mensaje="Barrio: <b>"+feature.properties.barrio+"</b><br>";
                mensaje+="Tipo: "+feature.properties.tipo+"<br>";
                mensaje+="descripcion: "+feature.properties.descripcion+"<br>";
                mensaje+="ID: "+feature.properties.id_reporte+"<br>";		
                layer.bindPopup(''+mensaje+'');
            }
        }
         //funcion mapa de calor Semana15
        var capaGeojson5 = L.geoJson();
        function cargarClustert()
        {
            $.post("src/funciones.php",
                {
                    peticion: 'recupera-geojson-cluster-Bloqueos'
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        //console.log(data);
                        mymap.removeLayer(capaGeojson5); 
                        geojsonFeature= eval('('+data+')');
    
                        var markers = L.markerClusterGroup();
    
                        capaGeojson5 = L.geoJson(geojsonFeature, 
                        {
                            pointToLayer: function (feature, latlng) 
                            {
                                //convierto en un string							
                                var smallIcon = L.icon(
                                {
                                  iconSize: [27, 27],
                                  iconAnchor: [13, 27],
                                  popupAnchor:  [1, -24],
                                  iconUrl: 'images/icono_'+feature.properties.tipo+'.png' 
                                    });
    
                                return L.marker(latlng, {icon: smallIcon}); 
                            },onEachFeature: onEachFeatureStyledIconClustert 
    
                        } );
        
                        markers.addLayer(capaGeojson5);		
                        mymap.addLayer(markers);					
                    }
                });
    
        }

    </script>
    <script type="text/javascript">
    //Función para actualizar cada 25 segundos(4000 milisegundos)
     function actualizar(){location.reload(true);}
      setInterval("actualizar()",60000000);
    </script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Paralax-Hero-Banner.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>