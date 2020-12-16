<?php
  
  //Una forma facil de validar que la pagina se abrio desde la pagina anterior y si esta logueado en el sistema
  if( ($_GET['logueado']=='si') AND isset($_SERVER['HTTP_REFERER']))
  {

  }
else
	{
		die('No autorizado para acceder por este medio !  
		<a href="index.php">volver</a>');
	}
  //metodo para iniciar las variables de  session
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
    
    
    
    <link rel="stylesheet" href="lib/leaflet-markercluster/MarkerCluster.css" />
	<link rel="stylesheet" href="lib/leaflet-markercluster/MarkerCluster.Default.css" />
    <link rel="stylesheet" href="lib/leaflet/leaflet.css" />
    	
	<link rel="stylesheet" href="lib/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.min.css" />
	<script src="lib/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.min.js"></script>
	
	<link rel="stylesheet" href="lib/leaflet-easybutton/easy-button.css" />
	<script src="lib/leaflet-easybutton/easy-button.js"></script>

    <script src="lib/jquery/jquery-3.4.1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <script src="lib/leaflet-heat.js"></script>

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
</head>

<body>
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="border-bottom-style: solid;">
        <div class="container"><a class="navbar-brand" href="Mapa.html" style="border-style: none;border-bottom-style: none;">CityReporte</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Usuario</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Perfil</a><a class="dropdown-item" href="#">Reportes Realizados</a><a class="dropdown-item" href="#">Editar Perfil</a></div>
                    </li>
                </ul><a href="index.html">Cerrar Sesión</a></div>
        </div>
    </nav>
    

<!--ventana modal mision-->

	<!-- Contenido HTML de la Ventana Modal Ingresar Datos -->
	<div id="ventana-reporte" class="modal">
		<div class="modal-header">
		<h3 class="modal-title" id="myModalLabel">Generar reporte de noticias</h3>

           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>
		<form enctype="multipart/form-data">
			<label for="cx_form">Coordenada X:</label><br>
			<input type="text" id="cx_form" name="cx_form"><br>
			<label for="cy_form">Coordenada Y:</label><br>
			<input type="text" id="cy_form" name="cy_form"><br>
			
			<label for="opciones_form">Seleccione de la lista:</label><br>
			<select id="opciones_form" name="opciones_form">
			<option value="violencia">Violencia</option>
			<option value="accidentes">Accidente</option>
			<option value="hurtos">Hurtos</option>
			<option value="bloqueos">Bloqueos</option>
			<option value="Incendios">Incendios</option>
			<option value="DesNaturales">Desastres naturales</option>


			</select>
			<br>

			<label for="descrip_form">Descripcion del reporte:</label><br>
			<input type="text" id="descrip_form" name="descrip_form"><br>

			<label for="foto_form">Foto: </label>
  			<input type="file" id="foto_form" name="foto_form" accept=".jpg,.png">
			<br>
			<input type="button" id="boton-envio-reporte" value="Enviar Reporte">

		  </form>
		  <div id="div_mensaje_ventana_reporte"></div>
	</div>

    <!-- End: Navigation Clean -->
    <!-- Start: Map Clean -->
	<div id="mapid" style="width: 760px; height: 500px; z-index:0;"></div>
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
        wmsLayer.addTo(mymap);
        
        
        
        
        var groupedOverlays = {
        
          "Capas idecs": {
            "Manzanas": wmsLayer
          },
        };
    
    
        //hacer este cambio
        //L.control.groupedLayers(basemaps, groupedOverlays).addTo(mymap);
        
        var layerControl=L.control.groupedLayers(basemaps, groupedOverlays);
        layerControl.addTo(mymap);
    
    //Creo una variable booleana (bandera) para saber cuando se requiere el ruteo 
        var flag_reporte=false;
    
        //Evento tipo de noticia por comuna
        $( "#boton_reporte" ).click(function() 
        {
            alert( "Ingrese el tipo de reporte y la comuna: " );
              //Cambio de estado la vabriable bandera
            flag_reporte=true;
              //Cambio el cursor 	del mouse sobre el mapa
              lanzarVentanaconsulta();
    
        });
    
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
            var Reportar = ImmediateSubAction.extend({
                options: {
                    toolbarIcon: {
                        html: 'Reportar',
                        tooltip: 'See the whole world'
                    }
                },
                addHooks: function() {
                    alert( "A continuación marque el sitio de reporte:" );
                    //Cambio de estado la vabriable bandera
                    document.getElementById('mapid').style.cursor = 'crosshair';
                    flag_registrar=true;
                    lanzarVentanaRegistro(e);
                    ImmediateSubAction.prototype.addHooks.call(this);
                    }
                });
                var Visualizar = ImmediateSubAction.extend({
                options: {
                    toolbarIcon: {
                        html: 'Visualizar Reportes',
                        tooltip: 'Go to the Eiffel Tower'
                    }
                },
                addHooks: function() {
                      var flag_clustter=false;
                    alert( "A continuación se muestra el cluster de noticias:" );
                      //Cambio de estado la vabriable bandera
                      cargarCluster();
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
                        className: 'fa fa-car',
                    },
                    /* Use L.Toolbar2 for sub-toolbars. A sub-toolbar is,
                     * by definition, contained inside another toolbar, so it
                     * doesn't need the additional styling and behavior of a
                     * L.Toolbar2.Control or L.Toolbar2.Popup.
                     */
                    subToolbar: new L.Toolbar2({ 
                        actions: [Reportar, Visualizar, Cancel]
                    })
                }
            });
            new L.Toolbar2.Control({
                position: 'topleft',
                actions: [MyCustomAction]
            }).addTo(mymap);
        var flag_calor=false;
    
    
            $( "#mapa_calor" ).click(function() 
        {
              var flag_calor=false;
            alert( "A continuación se muestra el mapa de calor:" );
              //Cambio de estado la vabriable bandera
              mapaCalor();
    
        });
            
    
        
        var flag_clustert=false;
    
    
            $( "#mapa_clustert" ).click(function() 
        {
              var flag_clustert=false;
            alert( "A continuación se muestran las noticias del dia" );
              //Cambio de estado la vabriable bandera
              cargarClustert();
    
        });
            var flag_reporte2=false;
    
    
            $( "#mapa_reporte2" ).click(function() 
        {
            alert( "A continuación Eliga el usuario a consultar" );
              //Cambio de estado la vabriable bandera
              var flag_reporte2=true;
              lanzarVentanaconsulta2();
        });
        var flag_reporte2=false;
    
    
            $( "#mapa_reporte2" ).click(function() 
        {
            alert( "A continuación Eliga el usuario a consultar" );
              //Cambio de estado la vabriable bandera
              var flag_reporte2=true;
              lanzarVentanaconsulta2();
        });
    
    
        var flag_tipo=false;
    
        //Evento tipo de noticia por comuna
        $( "#mapa_reporte3" ).click(function() 
        {
            alert( "Ingrese el tipo de reporte: " );
              //Cambio de estado la vabriable bandera
            flag_tipo=true;
              lanzarVentanaconsulta3();
        });
    
    
          navigator.geolocation.watchPosition(b);
    
      function b(f) {
          var lat = f.coords.latitude;
          var lon = f.coords.longitude;
          L.marker([lat, lon ]).addTo(mymap).bindPopup("<b>Aquí estás tu, <br> GeoReportero ").openPopup();;
    
          
      };
    
      ////TERMINA INTENTO 
    
        function onMapClick(e) {
        
        if(flag_registrar)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
                lanzarVentanaRegistro(e);
            }	
        
        else
            if(flag_reporte)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
            lanzarVentanaconsulta();
            }
        else
            if(flag_registrar1)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
            render();
            }
        }
    
    
        mymap.on('click', onMapClick);
        //Para que el cursor retorne estado por defecto en el mapa
        mymap.on('mousedown', function (e) { document.getElementById('mapid').style.cursor = ''; });
    
        var geojsonFeatureconsulta2;
    
    //Insertar reporte
      //icono para cada reporte
        function onEachFeaturereporte(feature, layer) 
        {
                
            console.log(feature.properties.barrio);
            if (feature.properties && feature.properties.barrio) 
            {
                var mensaje ='<b><b>ID: </b>' +feature.properties.id_reporte;
                mensaje +='<br><b>Barrio: </b> '+feature.properties.barrio;
                mensaje +='<br><b>Reporte: </b>' + feature.properties.descripcion;
                mensaje +='<br><b>TIPO: </b>' +feature.properties.tipo;
                
    
                layer.bindPopup(mensaje);
            }
        }	
    
    
        //Evento click para boton boton-envio-reporte
        $("#boton-envio-reporte").click(function() 
        {
            console.log('Enviar formulario y cerrar ventana modal');
            //capturar los datos del formulario
    
            var cx_ = $('#cx_form').val();
            var cy_ = $('#cy_form').val();
            var opcion_ = $('#opciones_form').val();
            var descripcion_ = $('#descrip_form').val();
            var usuario_= "<?php echo $_SESSION["iduser"];?>";
            var usuario_1= "<?php echo $_SESSION["usuario"];?>";
    
    
    
            //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
            $.post("src/funciones.php",
                {
                    peticion: 'registro-desde-ventana-modal', 
                    parametros: {  x:cx_ ,  y: cy_,  tipo: opcion_ , descripcion: descripcion_, usuario : usuario_,nombres:usuario_1}
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        if(data=='NUEVO_REPORTE_CREADO')
                        {
                           $('#div_mensaje_ventana_reporte').html('<h2>Su reporte ha sido registrado</h2>');
                        }else
                        {
                            $('#div_mensaje_ventana_reporte').html('<h2>Lo sentimos, no se puede realizar el reporte</h2>');	
                        }	
                    }
                });	
            //Para cerrar la ventana modal	
            $.modal.close();
        });
    
    
    
        function lanzarVentanaRegistro(e)
        {
            // Capturo las coordenadas clickeadas sobre el mapa
            coordenada_y = e.latlng.lat.toString();
            coordenada_x = e.latlng.lng.toString();
            // Envio las coordenadas a los campos dentro del form
            $('#cx_form').val(coordenada_x);
            $('#cy_form').val(coordenada_y);
    
            //Limpio los campos del formulario
            $('#opciones_form').val("");
            $('#descripcion_form').val("");
            $('#div_mensaje_ventana_reporte').html("");
    
            // lanzo ventana modal para registrar datos de reporte
            $('#ventana-reporte').modal(
                {
                    closeExisting: false,
                    escapeClose: true,
                      clickClose: true,
                });
        }
    
    
    //CONSULTA 1
    
        //icono para cada reporte
    
        function onEachFeatureconsulta(feature, layer) 
        {
                
            console.log(feature.properties.comuna);
            if (feature.properties && feature.properties.comuna) 
            {
                var mensaje ='<b><b>ID: </b>' +feature.properties.id_reporte;
                mensaje +='<br><b>Barrio: </b> '+feature.properties.comuna;
                mensaje +='<br><b>Reporte: </b>' + feature.properties.descripcion;
                mensaje +='<br><b>TIPO: </b>' +feature.properties.tipo;
                
    
                layer.bindPopup(mensaje);
            }
        }	
    
    
        $("#boton-envio-consulta").click(function() 
        {
            console.log('Enviar formulario y cerrar ventana modal');
            //capturar los datos del formulario
    
            var comuna_= $('#opciones_form2').val();
            var opcion_ = $('#opciones_form1').val();
        
    
            //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
            $.post("src/funciones.php",
                {
                    peticion: 'Reportes-x-comuna', 
                    parametros: { comuna:comuna_, tipo: opcion_ }
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        //console.log(data);
                        //mymap.removeLayer(capaGeojsonconsulta); 
                        geojsonFeatureconsulta= eval('('+data+')');
                        
    
                        capaGeojsonconsulta = L.geoJson(geojsonFeatureconsulta,
                        {
                            pointToLayer: function (feature, latlng) 
                            {
                                //Icons from https://mapicons.mapsmarker.com/
                                var smallIcon = L.icon(
                                {
                                iconSize: [27, 27],
                                iconAnchor: [13, 27],
                                popupAnchor:  [1, -24],
                                iconUrl: 'images/icono_'+feature.properties.tipo+'.png' 
                            });
                            
                                return L.marker(latlng, {icon: smallIcon}); 
                            },onEachFeature: onEachFeatureconsulta
                            
                        } ).addTo(mymap);
    
                    }
                });	
            //Para cerrar la ventana modal	
            $.modal.close();
        });
    
    
        function lanzarVentanaconsulta(e)
        {
        
            //Limpio los campos del formulario
            $('#opciones_form1').val("");
            $('#opciones_form2').val("");
            $('#div_mensaje_ventana_consulta').html("");
    
            // lanzo ventana modal para consulta
            $('#ventana-consulta').modal(
                {
                    closeExisting: false,
                    escapeClose: true,
                      clickClose: true,
                });
        }
    
    //CONSULTA 2
        
        function onEachFeatureconsulta2(feature, layer) 
        {
                
            console.log(feature.properties.comuna);
            if (feature.properties && feature.properties.comuna) 
            {
                var mensaje ='<b><b>ID reporte: </b>' +feature.properties.id_reporte;
                mensaje +='<br><b>Comuna: </b> '+feature.properties.comuna;
                mensaje +='<br><b>Reporte: </b>' + feature.properties.descripcion;
                mensaje +='<br><b>TIPO: </b>' +feature.properties.tipo;
                mensaje +='<br><b>usuario: </b>' +feature.properties.usuario;
    
                
    
                layer.bindPopup(mensaje);
            }
        }		
        
        
        $("#boton-envio-consulta2").click(function() 
            {    
                var user_= $('#descrip_usu').val();
    
                //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
                $.post("src/funciones.php",
                    {
                        peticion: 'consulta2', 
                        parametros: { user: user_ }
                    },
    
                    function(data, status)
                    {
                        console.log("Datos recibidos: " + user_ + "\nStatus: " + status);
                        if(status=='success')
                        {
                            //console.log(data);
                            //mymap.removeLayer(capaGeojsonconsulta2); 
                            geojsonFeatureconsulta2= eval('('+data+')');
                            
        
                            capaGeojsonconsulta2 = L.geoJson(geojsonFeatureconsulta2,
                            {
                                pointToLayer: function (feature, latlng) 
                                {
                                    //Icons from https://mapicons.mapsmarker.com/
                                    var smallIcon = L.icon(
                                    {
                                    iconSize: [27, 27],
                                    iconAnchor: [13, 27],
                                    popupAnchor:  [1, -24],
                                    iconUrl: 'images/icono_'+feature.properties.tipo+'.png' 
                                    });
                                
                                    return L.marker(latlng, {icon: smallIcon}); 
                                },onEachFeature: onEachFeatureconsulta2
                                
                            } ).addTo(mymap);
        
                        }
                    });	
                //Para cerrar la ventana modal	
                $.modal.close();
            });
        
        
            function lanzarVentanaconsulta2(e)
            {
            
                //Limpio los campos del formulario
                $('#opciones_form3').val("");
                $('#div_mensaje_ventana_consulta2').html("");
        
                // lanzo ventana modal para consulta
                $('#ventana-consulta2').modal(
                    {
                        closeExisting: false,
                        escapeClose: true,
                          clickClose: true,
                    });
            }
    //consulta 3 
     function onEachFeatureconsulta3(feature, layer) 
        {
                
            console.log(feature.properties.comuna);
            if (feature.properties && feature.properties.comuna) 
            {
                var mensaje ='<b><b>ID: </b>' +feature.properties.id_reporte;
                mensaje +='<br><b>Barrio: </b> '+feature.properties.comuna;
                mensaje +='<br><b>Reporte: </b>' + feature.properties.descripcion;
                mensaje +='<br><b>TIPO: </b>' +feature.properties.tipo;
                
    
                layer.bindPopup(mensaje);
            }
        }	
    
    
        $("#boton-envio-consulta3").click(function() 
        {
            console.log('Enviar formulario y cerrar ventana modal');
            //capturar los datos del formulario
    
            var tipo_= $('#opciones_form3').val();
        
    
            //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
            $.post("src/funciones.php",
                {
                    peticion: 'Reportes-x-tipo', 
                    parametros: { tipo: tipo_ }
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        //console.log(data);
                        //mymap.removeLayer(capaGeojsonconsulta); 
                        geojsonFeatureconsulta3= eval('('+data+')');
                        
    
                        capaGeojsonconsulta3 = L.geoJson(geojsonFeatureconsulta3,
                        {
                            pointToLayer: function (feature, latlng) 
                            {
                                //Icons from https://mapicons.mapsmarker.com/
                                var smallIcon = L.icon(
                                {
                                iconSize: [27, 27],
                                iconAnchor: [13, 27],
                                popupAnchor:  [1, -24],
                                iconUrl: 'images/icono_'+feature.properties.tipo+'.png' 
                            });
                            
                                return L.marker(latlng, {icon: smallIcon}); 
                            },onEachFeature: onEachFeatureconsulta3
                            
                        } ).addTo(mymap);
    
                    }
                });	
            //Para cerrar la ventana modal	
            $.modal.close();
        });
    
    
        function lanzarVentanaconsulta3(e)
        {
        
            //Limpio los campos del formulario
            $('#opciones_form3').val("");
            
            $('#div_mensaje_ventana_consulta3').html("");
    
            // lanzo ventana modal para consulta
            $('#ventana-consulta3').modal(
                {
                    closeExisting: false,
                    escapeClose: true,
                      clickClose: true,
                });
        }
        
    //funcion para visualizar los reportes
        function onEachFeatureStyledIconCluster(feature, layer) 
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
        var capaGeojson4 = L.geoJson();
        function cargarCluster()
        {
            $.post("src/funciones.php",
                {
                    peticion: 'recupera-geojson-cluster'
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        //console.log(data);
                        mymap.removeLayer(capaGeojson4); 
                        geojsonFeature= eval('('+data+')');
                        
                        var markers = L.markerClusterGroup();
                        
                        capaGeojson4 = L.geoJson(geojsonFeature, 
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
                            },onEachFeature: onEachFeatureStyledIconCluster 
                            
                        } );
    
                        markers.addLayer(capaGeojson4);		
                        mymap.addLayer(markers);					
                    }
                });
    
    
    
        }
        
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
                    peticion: 'recupera-geojson-cluster-tiempo'
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