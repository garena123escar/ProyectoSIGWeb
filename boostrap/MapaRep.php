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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximumscale=1.0, user-scalable=no" />
    <title>Aplicacion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/iconos-embedded.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
        body {
        padding: 0;
        margin: 0;
        }
        html, body, #mapid {
        height: 100%;
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

</head>

<body style="text-align: center;">
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="border-bottom-style: solid;">
        <div class="container"><a class="navbar-brand" href="MapaRep.php?logueado=si" style="border-style: none;border-bottom-style: none;">CityReporte</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse text-center" id="navcol-1"><a class="text-center" href="Perfil.php">Datos de Usuario</a>
                <ul class="nav navbar-nav ml-auto"></ul><a href="index.php">Cerrar Sesión</a></div>
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
			<option value="accidentes">Accidente</option>
			

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
    <div id="ventana-reporte1" class="modal">
		<div class="modal-header">
		<h3 class="modal-title" id="myModalLabel">Generar reporte de noticias</h3>

           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>
		<form enctype="multipart/form-data">
			<label for="cx1_form">Coordenada X:</label><br>
			<input type="text" id="cx1_form" name="cx1_form"><br>
			<label for="cy1_form">Coordenada Y:</label><br>
			<input type="text" id="cy1_form" name="cy1_form"><br>
			
			<label for="opciones_form1">Seleccione de la lista:</label><br>
			<select id="opciones_form1" name="opciones_form1">
			<option value="bloqueos">Bloqueos</option>
			

			</select>
			<br>

			<label for="descrip_form1">Descripcion del reporte:</label><br>
			<input type="text" id="descrip_form1" name="descrip_form1"><br>

			<label for="foto_form1">Foto: </label>
  			<input type="file" id="foto_form1" name="foto_form1" accept=".jpg,.png">
			<br>
			<input type="button" id="boton-envio-reporte1" value="Enviar Reporte">

		  </form>
		  <div id="div_mensaje_ventana_reporte1"></div>
    </div>
    
    <div id="ventana-reporte2" class="modal">
		<div class="modal-header">
		<h3 class="modal-title" id="myModalLabel">Generar reporte de noticias</h3>

           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>
		<form enctype="multipart/form-data">
			<label for="cx2_form">Coordenada X:</label><br>
			<input type="text" id="cx2_form" name="cx2_form"><br>
			<label for="cy2_form">Coordenada Y:</label><br>
			<input type="text" id="cy2_form" name="cy2_form"><br>
			
			<label for="opciones_form2">Seleccione de la lista:</label><br>
			<select id="opciones_form2" name="opciones_form2">
			<option value="DesNaturales">Desastres naturales</option>
			

			</select>
			<br>

			<label for="descrip_form2">Descripcion del reporte:</label><br>
			<input type="text" id="descrip_form2" name="descrip_form2"><br>

			<label for="foto_form2">Foto: </label>
  			<input type="file" id="foto_form2" name="foto_form2" accept=".jpg,.png">
			<br>
			<input type="button" id="boton-envio-reporte2" value="Enviar Reporte">

		  </form>
		  <div id="div_mensaje_ventana_reporte2"></div>
    </div>
    <div id="ventana-reporte3" class="modal">
		<div class="modal-header">
		<h3 class="modal-title" id="myModalLabel">Generar reporte de noticias</h3>

           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>
		<form enctype="multipart/form-data">
			<label for="cx3_form">Coordenada X:</label><br>
			<input type="text" id="cx3_form" name="cx3_form"><br>
			<label for="cy3_form">Coordenada Y:</label><br>
			<input type="text" id="cy3_form" name="cy3_form"><br>
			
			<label for="opciones_form3">Seleccione de la lista:</label><br>
			<select id="opciones_form3" name="opciones_form3">
			<option value="violencia">Violencia</option>
			

			</select>
			<br>

			<label for="descrip_form3">Descripcion del reporte:</label><br>
			<input type="text" id="descrip_form3" name="descrip_form3"><br>

			<label for="foto_form3">Foto: </label>
  			<input type="file" id="foto_form3" name="foto_form3" accept=".jpg,.png">
			<br>
			<input type="button" id="boton-envio-reporte3" value="Enviar Reporte">

		  </form>
		  <div id="div_mensaje_ventana_reporte3"></div>
	</div>

    <div id="ventana-reporte4" class="modal">
		<div class="modal-header">
		<h3 class="modal-title" id="myModalLabel">Generar reporte de noticias</h3>

           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
      </div>
		<form enctype="multipart/form-data">
			<label for="cx4_form">Coordenada X:</label><br>
			<input type="text" id="cx4_form" name="cx4_form"><br>
			<label for="cy4_form">Coordenada Y:</label><br>
			<input type="text" id="cy4_form" name="cy4_form"><br>
			
			<label for="opciones_form4">Seleccione de la lista:</label><br>
			<select id="opciones_form4" name="opciones_form4">
			<option value="hurtos">Hurtos</option>
			

			</select>
			<br>

			<label for="descrip_form4">Descripcion del reporte:</label><br>
			<input type="text" id="descrip_form4" name="descrip_form4"><br>

			<label for="foto_form4">Foto: </label>
  			<input type="file" id="foto_form4" name="foto_form4" accept=".jpg,.png">
			<br>
			<input type="button" id="boton-envio-reporte4" value="Enviar Reporte">

		  </form>
		  <div id="div_mensaje_ventana_reporte4"></div>
	</div>

    <!-- End: Navigation Clean -->
    <!-- Start: Map Clean -->
	<div id="mapid"></div>
    <!-- End: Map Clean -->
    </body>
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
      
    
        var wmLayer = L.tileLayer.wms('http://idesc.cali.gov.co:8081/geoserver/wms?service=WMS&version=1.1.0', 
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
            "Comunas": wmLayer
          },
        };

        var layerControl=L.control.groupedLayers(basemaps, groupedOverlays);
        layerControl.addTo(mymap);
    
   
        var flag_registrar=false;
     
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
                        html: 'Reportar Accidentes',
                        tooltip: 'Reportar Accidente'
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
                        className: 'icon-accidentes',
                    },
                    /* Use L.Toolbar2 for sub-toolbars. A sub-toolbar is,
                     * by definition, contained inside another toolbar, so it
                     * doesn't need the additional styling and behavior of a
                     * L.Toolbar2.Control or L.Toolbar2.Popup.
                     */
                    subToolbar: new L.Toolbar2({ 
                        actions: [Reportar, Cancel]
                    })
                }
            });

            
        var flag_registrar1=false;
    
    
        var ImmediateSubAction1 = L.Toolbar2.Action.extend({
                initialize: function(map, myAction) {
                    this.map = map;
                    this.myAction = myAction;
                    L.Toolbar2.Action.prototype.initialize.call(this);                
                },
                addHooks: function() {
                    this.myAction.disable();
                }
            });
            var Reportar1 = ImmediateSubAction1.extend({
                options: {
                    toolbarIcon: {
                        html: 'Reportar Bloqueos'
                    }
                },
                addHooks: function() {
                    alert( "A continuación marque el sitio de reporte:" );
                    //Cambio de estado la vabriable bandera
                    document.getElementById('mapid').style.cursor = 'crosshair';
                    flag_registrar1=true;
                    lanzarVentanaRegistro1(e);
                    ImmediateSubAction.prototype.addHooks.call(this);
                    }
                });
         
            var Cancel1 = ImmediateSubAction1.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="fa fa-times"></i>',
                        tooltip: 'Cancelar'
                    }   
                }
            });
        var MyCustomAction1 = L.Toolbar2.Action.extend({
                options: {
                    toolbarIcon: {
                        className: 'icon-bloqueos',
                    },
                    /* Use L.Toolbar2 for sub-toolbars. A sub-toolbar is,
                     * by definition, contained inside another toolbar, so it
                     * doesn't need the additional styling and behavior of a
                     * L.Toolbar2.Control or L.Toolbar2.Popup.
                     */
                    subToolbar: new L.Toolbar2({ 
                        actions: [Reportar1, Cancel1]
                    })
                }
            });

        var flag_registrar2=false;
   
    
        var ImmediateSubAction2 = L.Toolbar2.Action.extend({
                initialize: function(map, myAction) {
                    this.map = map;
                    this.myAction = myAction;
                    L.Toolbar2.Action.prototype.initialize.call(this);                
                },
                addHooks: function() {
                    this.myAction.disable();
                }
            });
            var Reportar2 = ImmediateSubAction2.extend({
                options: {
                    toolbarIcon: {
                        html: 'Reportar Desastres'                        
                    }
                },
                addHooks: function() {
                    alert( "A continuación marque el sitio de reporte:" );
                    //Cambio de estado la vabriable bandera
                    document.getElementById('mapid').style.cursor = 'crosshair';
                    flag_registrar2=true;
                    lanzarVentanaRegistro2(e);
                    ImmediateSubAction2.prototype.addHooks.call(this);
                    }
                });
    
            var Cancel2 = ImmediateSubAction2.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="fa fa-times"></i>',
                        tooltip: 'Cancel'
                    }   
                }
            });
        var MyCustomActions2 = L.Toolbar2.Action.extend({
                options: {
                    toolbarIcon: {
                        className: 'icon-desastres',
                    },
                    /* Use L.Toolbar2 for sub-toolbars. A sub-toolbar is,
                     * by definition, contained inside another toolbar, so it
                     * doesn't need the additional styling and behavior of a
                     * L.Toolbar2.Control or L.Toolbar2.Popup.
                     */
                    subToolbar: new L.Toolbar2({ 
                        actions: [Reportar2, Cancel2]
                    })
                }
            });
        var flag_registrar3=false;
   
    
        var ImmediateSubAction3 = L.Toolbar2.Action.extend({
                initialize: function(map, myAction) {
                    this.map = map;
                    this.myAction = myAction;
                    L.Toolbar2.Action.prototype.initialize.call(this);                
                },
                addHooks: function() {
                    this.myAction.disable();
                }
            });
            var Reportar3 = ImmediateSubAction3.extend({
                options: {
                    toolbarIcon: {
                        html: 'Reportar hechos violentos',
                        tooltip: 'See the whole world'
                    }
                },
                addHooks: function() {
                    alert( "A continuación marque el sitio de reporte:" );
                    //Cambio de estado la vabriable bandera
                    flag_registrar3=true;
                    lanzarVentanaRegistro3(e);
                    ImmediateSubAction3.prototype.addHooks.call(this);
                    }
                });
              
            var Cancel3 = ImmediateSubAction3.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="fa fa-times"></i>',
                        tooltip: 'Cancel'
                    }   
                }
            });
        var MyCustomAction3 = L.Toolbar2.Action.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="icon-violencia"></i>',
                    },
                    /* Use L.Toolbar2 for sub-toolbars. A sub-toolbar is,
                     * by definition, contained inside another toolbar, so it
                     * doesn't need the additional styling and behavior of a
                     * L.Toolbar2.Control or L.Toolbar2.Popup.
                     */
                    subToolbar: new L.Toolbar2({ 
                        actions: [Reportar3, Cancel3]
                    })
                }
            });

            var flag_registrar4=false;
 
    
        var ImmediateSubAction4 = L.Toolbar2.Action.extend({
                initialize: function(map, myAction) {
                    this.map = map;
                    this.myAction = myAction;
                    L.Toolbar2.Action.prototype.initialize.call(this);                
                },
                addHooks: function() {
                    this.myAction.disable();
                }
            });
            var Reportar4 = ImmediateSubAction3.extend({
                options: {
                    toolbarIcon: {
                        html: 'Reportar hurtos',
                        tooltip: 'See the whole world'
                    }
                },
                addHooks: function() {
                    alert( "A continuación marque el sitio de reporte:" );
                    //Cambio de estado la vabriable bandera
                    flag_registrar4=true;
                    lanzarVentanaRegistro4(e);
                    ImmediateSubAction4.prototype.addHooks.call(this);
                    }
                });
                
            var Cancel4 = ImmediateSubAction3.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="fa fa-times"></i>',
                        tooltip: 'Cancelar'
                    }   
                }
            });
        var MyCustomAction4 = L.Toolbar2.Action.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="icon-hurtos"></i>',
                    },
                    /* Use L.Toolbar2 for sub-toolbars. A sub-toolbar is,
                     * by definition, contained inside another toolbar, so it
                     * doesn't need the additional styling and behavior of a
                     * L.Toolbar2.Control or L.Toolbar2.Popup.
                     */
                    subToolbar: new L.Toolbar2({ 
                        actions: [Reportar4, Cancel4]
                    })
                }
            });

            var flag_clustter=false;
            var ImmediateSubActionv = L.Toolbar2.Action.extend({
                initialize: function(map, myAction) {
                    this.map = map;
                    this.myAction = myAction;
                    L.Toolbar2.Action.prototype.initialize.call(this);                
                },
                addHooks: function() {
                    this.myAction.disable();
                }
            });
                var Visualizarv = ImmediateSubActionv.extend({
                options: {
                    toolbarIcon: {
                        html: 'Visualizar mis Reportes',
                        tooltip: 'Visualizar'
                    }
                },
                addHooks: function() {
                      var flag_clustter=false;
                    alert( "A continuación se muestran los reportes creados por ti:" );
                      //Cambio de estado la vabriable bandera
                      cargarClustert();
                    ImmediateSubActionv.prototype.addHooks.call(this);
                }
            });
            var Cancelv = ImmediateSubActionv.extend({
                options: {
                    toolbarIcon: {
                        html: '<i class="fa fa-times"></i>',
                        tooltip: 'Cancelar'
                    }   
                }
            });
        var MyCustomActionv = L.Toolbar2.Action.extend({
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
                        actions: [Visualizarv, Cancelv]
                    })
                }
            });

            

            new L.Toolbar2.Control({
                position: 'topleft',
                actions: [MyCustomAction,MyCustomAction1,MyCustomActions2,MyCustomAction3,MyCustomAction4,MyCustomActionv]
            }).addTo(mymap);

    function onLocationFound(e) {
    var radius = e.accuracy;

        L.marker(e.latlng).addTo(mymap).bindPopup("You are within " + radius + " meters from this point").openPopup();
        L.circle(e.latlng, radius).addTo(mymap);
    }
    mymap.on('locationfound', onLocationFound);          
      
             

    
      ////TERMINA INTENTO 

        function onMapClick(e) {
        
        if(flag_registrar)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
                lanzarVentanaRegistro(e);
            }	
        else
            if(flag_registrar1)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
                lanzarVentanaRegistro1(e);
            }

        else
            if(flag_registrar2)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
                lanzarVentanaRegistro2(e);
            }
        else
            if(flag_registrar3)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
                lanzarVentanaRegistro3(e);
            }            
        else
            if(flag_registrar4)
            {
                //caso para lanzar ventana modal una vez de click sobre el mapa
                lanzarVentanaRegistro4(e);
            } 
        }
                  
            
           
        //function onMapClick1(e1) {
        //    if(flag_registrar1)
        //    {
        //        //caso para lanzar ventana modal una vez de click sobre el mapa
        //       lanzarVentanaRegistro1(e1);
        //    }
        //}
    
        mymap.on('click', onMapClick);
        //Para que el cursor retorne estado por defecto en el mapa
        mymap.on('mousedown', function (e) { document.getElementById('mapid').style.cursor = ''; });
       
       //mymap.on('click', onMapClick1);
        //Para que el cursor retorne estado por defecto en el mapa
       //mymap.on('mousedown', function (e1) { document.getElementById('mapid').style.cursor = ''; });
       var geojsonFeature;
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
                    closeExisting: true,
                    escapeClose: true,
                      clickClose: true,
                });
        }


//Evento click para boton boton-envio-reporte

                $("#boton-envio-reporte1").click(function() 
        {
            console.log('Enviar formulario y cerrar ventana modal');
            //capturar los datos del formulario
    
            var cx1_ = $('#cx1_form').val();
            var cy1_ = $('#cy1_form').val();
            var opcion1_ = $('#opciones_form1').val();
            var descripcion1_ = $('#descrip_form1').val();
            var usuario1_= "<?php echo $_SESSION["iduser"];?>";
            var usuario_11= "<?php echo $_SESSION["usuario"];?>";
    
    
    
            //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
            $.post("src/funciones.php",
                {
                    peticion: 'registro-desde-ventana-modal', 
                    parametros: {  x:cx1_ ,  y: cy1_,  tipo: opcion1_ , descripcion: descripcion1_, usuario : usuario1_,nombres:usuario_11}
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        if(data=='NUEVO_REPORTE_CREADO')
                        {
                           $('#div_mensaje_ventana_reporte1').html('<h2>Su reporte ha sido registrado</h2>');
                        }else
                        {
                            $('#div_mensaje_ventana_reporte1').html('<h2>Lo sentimos, no se puede realizar el reporte</h2>');	
                        }	
                    }
                });	
            //Para cerrar la ventana modal	
            $.modal.close();
        }); 

        function lanzarVentanaRegistro1(e)
        {
            // Capturo las coordenadas clickeadas sobre el mapa
            coordenada_y = e.latlng.lat.toString();
            coordenada_x = e.latlng.lng.toString();
            // Envio las coordenadas a los campos dentro del form
            $('#cx1_form').val(coordenada_x);
            $('#cy1_form').val(coordenada_y);
    
            //Limpio los campos del formulario
            $('#opciones_form1').val("");
            $('#descripcion_form1').val("");
            $('#div_mensaje_ventana_reporte1').html("");
    
            // lanzo ventana modal para registrar datos de reporte
            $('#ventana-reporte1').modal(
                {
                    closeExisting: true,
                    escapeClose: true,
                      clickClose: true,
                });
        }    


    //Evento click para boton boton-envio-reporte

        $("#boton-envio-reporte2").click(function() 
        {
            console.log('Enviar formulario y cerrar ventana modal');
            //capturar los datos del formulario
    
            var cx2_ = $('#cx2_form').val();
            var cy2_ = $('#cy2_form').val();
            var opcion2_ = $('#opciones_form2').val();
            var descripcion2_ = $('#descrip_form2').val();
            var usuario2_= "<?php echo $_SESSION["iduser"];?>";
            var usuario_21= "<?php echo $_SESSION["usuario"];?>";
    
    
    
            //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
            $.post("src/funciones.php",
                {
                    peticion: 'registro-desde-ventana-modal', 
                    parametros: {  x:cx2_ ,  y: cy2_,  tipo: opcion2_ , descripcion: descripcion2_, usuario : usuario2_,nombres:usuario_21}
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        if(data=='NUEVO_REPORTE_CREADO')
                        {
                           $('#div_mensaje_ventana_reporte2').html('<h2>Su reporte ha sido registrado</h2>');
                        }else
                        {
                            $('#div_mensaje_ventana_reporte2').html('<h2>Lo sentimos, no se puede realizar el reporte</h2>');	
                        }	
                    }
                });	
            //Para cerrar la ventana modal	
            $.modal.close();
        }); 

        function lanzarVentanaRegistro2(e)
        {
            // Capturo las coordenadas clickeadas sobre el mapa
            coordenada_y = e.latlng.lat.toString();
            coordenada_x = e.latlng.lng.toString();
            // Envio las coordenadas a los campos dentro del form
            $('#cx2_form').val(coordenada_x);
            $('#cy2_form').val(coordenada_y);
    
            //Limpio los campos del formulario
            $('#opciones_form2').val("");
            $('#descripcion_form2').val("");
            $('#div_mensaje_ventana_reporte2').html("");
    
            // lanzo ventana modal para registrar datos de reporte
            $('#ventana-reporte2').modal(
                {
                    closeExisting: true,
                    escapeClose: true,
                      clickClose: true,
                });
        }    
 
    //Evento click para boton boton-envio-reporte

    $("#boton-envio-reporte3").click(function() 
        {
            console.log('Enviar formulario y cerrar ventana modal');
            //capturar los datos del formulario
    
            var cx3_ = $('#cx3_form').val();
            var cy3_ = $('#cy3_form').val();
            var opcion3_ = $('#opciones_form3').val();
            var descripcion3_ = $('#descrip_form3').val();
            var usuario3_= "<?php echo $_SESSION["iduser"];?>";
            var usuario_31= "<?php echo $_SESSION["usuario"];?>";
    
    
    
            //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
            $.post("src/funciones.php",
                {
                    peticion: 'registro-desde-ventana-modal', 
                    parametros: {  x:cx3_ ,  y: cy3_,  tipo: opcion3_ , descripcion: descripcion3_, usuario : usuario3_,nombres:usuario_31}
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        if(data=='NUEVO_REPORTE_CREADO')
                        {
                           $('#div_mensaje_ventana_reporte3').html('<h2>Su reporte ha sido registrado</h2>');
                        }else
                        {
                            $('#div_mensaje_ventana_reporte3').html('<h2>Lo sentimos, no se puede realizar el reporte</h2>');	
                        }	
                    }
                });	
            //Para cerrar la ventana modal	
            $.modal.close();
        }); 

        function lanzarVentanaRegistro3(e)
        {
            // Capturo las coordenadas clickeadas sobre el mapa
            coordenada_y = e.latlng.lat.toString();
            coordenada_x = e.latlng.lng.toString();
            // Envio las coordenadas a los campos dentro del form
            $('#cx3_form').val(coordenada_x);
            $('#cy3_form').val(coordenada_y);
    
            //Limpio los campos del formulario
            $('#opciones_form3').val("");
            $('#descripcion_form3').val("");
            $('#div_mensaje_ventana_reporte3').html("");
    
            // lanzo ventana modal para registrar datos de reporte
            $('#ventana-reporte3').modal(
                {
                    closeExisting: true,
                    escapeClose: true,
                      clickClose: true,
                });
        }        

    //Evento click para boton boton-envio-reporte

    $("#boton-envio-reporte4").click(function() 
        {
            console.log('Enviar formulario y cerrar ventana modal');
            //capturar los datos del formulario
    
            var cx4_ = $('#cx4_form').val();
            var cy4_ = $('#cy4_form').val();
            var opcion4_ = $('#opciones_form4').val();
            var descripcion4_ = $('#descrip_form4').val();
            var usuario4_= "<?php echo $_SESSION["iduser"];?>";
            var usuario_41= "<?php echo $_SESSION["usuario"];?>";
    
    
    
            //Hago la peticion registro-desde-ventana-modal mediante el metodo post a funciones.php		
            $.post("src/funciones.php",
                {
                    peticion: 'registro-desde-ventana-modal', 
                    parametros: {  x:cx4_ ,  y: cy4_,  tipo: opcion4_ , descripcion: descripcion4_, usuario : usuario4_,nombres:usuario_41}
                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        if(data=='NUEVO_REPORTE_CREADO')
                        {
                           $('#div_mensaje_ventana_reporte4').html('<h2>Su reporte ha sido registrado</h2>');
                        }else
                        {
                            $('#div_mensaje_ventana_reporte4').html('<h2>Lo sentimos, no se puede realizar el reporte</h2>');	
                        }	
                    }
                });	
            //Para cerrar la ventana modal	
            $.modal.close();
        }); 

        function lanzarVentanaRegistro4(e)
        {
            // Capturo las coordenadas clickeadas sobre el mapa
            coordenada_y = e.latlng.lat.toString();
            coordenada_x = e.latlng.lng.toString();
            // Envio las coordenadas a los campos dentro del form
            $('#cx4_form').val(coordenada_x);
            $('#cy4_form').val(coordenada_y);
    
            //Limpio los campos del formulario
            $('#opciones_form4').val("");
            $('#descripcion_form4').val("");
            $('#div_mensaje_ventana_reporte4').html("");
    
            // lanzo ventana modal para registrar datos de reporte
            $('#ventana-reporte4').modal(
                {
                    closeExisting: true,
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
                mensaje+="Fecha de reporte: "+feature.properties.fecha_registro+"<br>";		
                layer.bindPopup(''+mensaje+'');
            }
        }
         //funcion mapa de calor Semana15
        var capaGeojson4 = L.geoJson();
        var user_ = "<?php echo $_SESSION["usuario"];?>"
        function cargarCluster()
        {
            $.post("src/funciones.php",
                {
                    peticion: 'recupera-geojson-cluster-user',
                    parametros: { user: user_ }

                },
                function(data, status){
                    console.log("Datos recibidos: " + data + "\nStatus: " + status);
                    if(status=='success')
                    {
                        console.log(data);
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
                var mensaje="Barrio: "+feature.properties.barrio+"<br>";
                mensaje+="Tipo: "+feature.properties.tipo+"<br>";
                mensaje+="descripcion: "+feature.properties.descripcion+"<br>";
                mensaje+="Fecha de reporte: "+feature.properties.fecha_registro+"<br>";		
                mensaje+="ID: "+feature.properties.id_reporte+"<br>";		
                layer.bindPopup(''+mensaje+'');
            }
        }
         //funcion mapa de calor Semana15
        var capaGeojson5 = L.geoJson();
        var user_ = "<?php echo $_SESSION["usuario"];?>"
        function cargarClustert()
        {
            $.post("src/funciones.php",
                {
                    peticion: 'recupera-geojson-cluster-user',
                    parametros: { user: user_ }
                },
                function(data, status){
                    console.log("Datos recibidos: " + user_ + "\nStatus: " + status);
                    if(status=='success')
                    {
                        console.log(data);
                        mymap.removeLayer(capaGeojson5); 
                        geojsonFeatureconsulta2= eval('('+data+')');
    
                        var markers = L.markerClusterGroup();
    
                        capaGeojson5 = L.geoJson(geojsonFeatureconsulta2, 
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


</html>