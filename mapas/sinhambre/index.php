<!DOCTYPE html lang="en-UK">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SINHAMBRE - CRUZADA NACIONAL</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="js/variables.js" charset="utf-8"></script>
		<script src="js/chosen.jquery.min.js" charset="utf-8"></script>
		<script src="js/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
		
		<link rel="stylesheet" href="js/chosen.min.css" />
		<link rel="stylesheet" href="src/tipsy.css" />
		<link rel="stylesheet" href="src/themes/default.css" />
		<link rel="stylesheet" href="src/themes/default.date.css" />
		<link rel="stylesheet" href="//cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="//cdn.leafletjs.com/leaflet-0.7/leaflet.ie.css" />
		<![endif]-->
		<style type="text/css" media="screen">
@font-face {
    font-family: 'Roboto';
    src: url('/common/fonts/Roboto-Bold.ttf') format('truetype');
		    font-weight: bold;
}

@font-face {
    font-family: 'Roboto';
		    src: url('/common/fonts/Roboto-Regular.ttf') format('truetype');
		    font-weight: normal;
}

@font-face {
    font-family: 'Bebas Neue';
		    src: url('/common/fonts/bebasneue-webfont.eot');
		    src: url('/common/fonts/bebasneue-webfont.eot?#iefix') format('embedded-opentype'),
		         url('/common/fonts/bebasneue-webfont.woff') format('woff'),
		         url('/common/fonts/bebasneue-webfont.ttf') format('truetype'),
		         url('/common/fonts/bebasneue-webfont.svg#bebas_neueregular') format('svg');
		    font-weight: normal;
		    font-style: normal;
}

body {
    margin: 0;
    padding: 0;
    font: 14px/20px 'Roboto', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
    overflow: hidden;
}

#img_header {
    height: 65px;
    background-color: #ff5000;
}

#img_header img {
    margin-left: auto;
    margin-right: auto;
    position: absolute;
    left: 0;
    right: 0;
}

#header {
    font-family: 'Bebas Neue', serif;
    font-size: 40px;
    width: 100%;
    background-color: #fff;
    color: #000;
    text-align: center;
    line-height: 52px;
}

#header a {
    text-decoration: none;
}

#map {
    position: absolute;
    width: 100%;
    top: 0;
    bottom: 0;
    overflow: hidden;
}

.tipsy {
    font-family: 'Rockwell', serif;
    font-size: 14px;
    margin-left: 10px;
}

#agency-select-wrapper {
    position: absolute;
    left: 10px;
    bottom: -245px;
    z-index: 3000;
    background-color: #fff;
}
#legend {
  background-color: #fff;
  position: absolute;
  padding: 5px 10px;
  top: 495px;
  left: 10px;
  color: #000;
  text-align: center;
}
.legend-label {
  width: 53px;
  height: 20px;
  line-height: 20px;
  font-size: 8px;
  text-transform: uppercase;
}
.legend-title {
  font-size: 12px;
  text-transform: uppercase;
  color: #222;
  padding: 3px;
  background-color: #eee;
  margin-bottom: 3px;
  font-weight: 700;
}
#datos_mun {
    background-color: #fff;
    font-family: "Roboto", "Arial", sans-serif;
    position: absolute;
    top: 20px;
    right: 20px;
    width: 225px;
}

.mundata-box {
    border-bottom: 1px solid #eee;
    position: relative;
    height: 80px;
}

#datos_mun .state_box {
    background-color: rgb(251,169,135);
    height: 66px;
    position: relative;
    color: #fff;
}

.state_box .state_name {
    position: absolute;
    left: 90px;
    top: 15px;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: 700;
    width: 200px;
}

.state_box .num_mun {
    position: absolute;
    left: 90px;
    top: 30px;
    font-size: 11px;
}

#datos_mun .nom_mun {
    background-color: #ff5000;
    font-size: 14px;
    padding: 5px 10px;
    font-weight: 700;
    color: #fff;
}

#datos_mun .box-title {
    padding: 5px 10px;
    font-size: 12px;
    text-transform: uppercase;
}

.mundata-box .beneficiarios, .mundata-box .inversion, .mundata-box .avance, .mundata-box .programado-metas {
    color: #ff5000;
    padding: 2px 10px;
    font-weight: 700;
    font-size: 28px;
    margin-top: 8px;
}


.mundata-box .programado-metas {
	position: absolute;
}

.avance {
    position: absolute;
}
.state_image {
	padding-top: 3px;
	margin-left: 15px;
}
#datos {
    width: 300px;
    background-color: #fff;
    z-index: 2000;
    position: absolute;
    left: 10px;
    top: 130px;
    font-family: "Roboto", serif;
}
#types {
	width: 200px;
    background-color: #fff;
    z-index: 1999;
    position: absolute;
    left: 10px;
    top: 340px;
    font-family: "Roboto", serif;
}
#search {
	width: 300px;
	padding: 5px;
    background-color: #fff;
    z-index: 1999;
    position: absolute;
    left: 10px;
    top: 290px;
    font-family: "Roboto", serif;
}
#search input {
	width: 240px;
	float: left;
}
#searchbutton {
	padding: 6px 5px;
	background-color: #8431a6;
	color: #fff;
	float: right;
	font-size: 10px;
	font-weight: bold;
	border-radius: 3px;
	cursor: pointer;
}
#searchbutton:hover {
	background-color: #e4d3e9;
}
.datos-title {
    font-family: "Roboto", sans-serif;
    background-color: #8431a6;
    padding: 5px 10px;
    font-size: 12px;
    font-weight: 700;
    text-align: left;
    color: #fff;
}

.datos-entidad {
    font-size: 11px;
}

.varname {
    padding: 2px 10px;
    border-bottom: 1px solid #eee;
    font-size: 12px;
    line-height: 24px;
    font-weight: bold;
}
.nombre-variable-selected, .nombre-agency-selected, .nombre-type-selected {
	color: #8431a6;
}
.varname:hover {
    background-color: rgb(228,211,233);
}

.agency {
    padding: 1px 10px;
}

#datos .values {
    float: right;
    font-weight: 700;
    font-size: 13px;
}

.chosen-container {
	margin: 10px;
}

.current-variable {
	padding: 10px;
	font-weight: 700px;
	border-bottom: 1px solid #eee;
}
.unidad {
	padding: 5px 10px;
	background-color: #eee;
	font-size: 10px;
	line-height: 14px;
	text-align: right;
}

		</style>
		<script src="//cdn.leafletjs.com/leaflet-0.7/leaflet-src.js"></script>
		<script src="js/leaflet.utfgrid.js"></script>
	</head>
	<body>
		<?php include_once('/srv/www/cartografica.mx/public_html/common/analyticstracking.php'); ?>

		<div id="map"></div>
		<div id='legend'>
			<div class="legend-title">Nivel</div>
			<div style="background-color: #FF5000; color: #FFF;" class="legend-label">Muy Alto</div>
			<div style="background-color: #FBA987; color: #222;" class="legend-label">Alto</div>
			<div style="background-color: #e4d3e9; color: #222;" class="legend-label">Bajo</div>
			<div style="background-color: #8431A6; color: #FFF;" class="legend-label">Muy Bajo</div>
		</div>
		<div id="agency-select-wrapper">
				<div onmousedown='toggle_categorias();' id="categorias-list" class="datos-title">Categorías (mostrar)</div>
				<div onmousedown='change_category("alimentacion");' id="p1" class="varname agency nombre-agency-selected">ACCESO A LA ALIMENTACIÓN</div>
				<div onmousedown='change_category("al");' id="al" class="varname agency">ACCESO A LA ALIMENTACIÓN E INGRESO INFERIOR A LA LÍNEA DE BIENESTAR MÍNIMO</div>
				<div onmousedown='change_category("rezedu");' id="rezedu" class="varname agency">REZAGO EDUCATIVO</div>
				<div onmousedown='change_category("vivcal");' id="vivcal" class="varname agency">CALIDAD Y ESPACIOS EN LA VIVIENDA</div>
				<div onmousedown='change_category("vivservbas");' id="vivservbas" class="varname agency">SERVICIOS BÁSICOS EN LA VIVIENDA</div>
				<div onmousedown='change_category("salud");' id="salud" class="varname agency">ACCESO A LOS SERVICIOS DE SALUD</div>
				<div onmousedown='change_category("segsoc");' id="segsoc" class="varname agency">ACCESO A LA SEGURIDAD SOCIAL</div>
				<div onmousedown='change_category("genero");' id="genero" class="varname agency">EJE TRANSVERSAL DE LA PERSPECTIVA DE GÉNERO</div>
				<div onmousedown='change_category("inginf");' id="inginf" class="varname agency">INGRESO INFERIOR A LA LÍNEA DE BIENESTAR MÍNIMO</div>
                                
		</div>
		
		<div id="datos">
		</div>
		
		<div id="types">
			<div onmousedown="change_type('ben')" id="ben" class="varname types">Beneficiarios</div>
			<div onmousedown="change_type('inv')" id="inv" class="varname types">Inversión</div>
			<!-- <div onmousedown="change_type('programado')" id="programado" class="varname types">Programado / Metas</div> -->
			<div onmousedown="change_type('avabs')" id="avabs" class="varname types">Avance</div>
			<!-- <div onmousedown="change_type('avrel')" id="avrel" class="varname types">Avance (Relativo)</div> -->
		</div>
		<div id="search">
			<input class="form-control" type="text" id="searchbox" name="searchbox" placeholder="Buscar municipio por nombre...">
			<div onmousedown="searchMunicipio();" id="searchbutton">Buscar</div>
		</div>
		<div id="datos_mun">
			
			<div class="mundata-box state_box">
				<div class="state_image"></div>
				<div class="state_name"></div>
				<div class="num_mun"></div>
			</div>
                        <div class="nom_mun">Da click en un municipio...</div>
			<div class="unidad"></div>
			<!--
			<div class="familias_box mundata-box">
				<div class="box-title">Programado / Metas</div>
				<span class="programado-metas">--</span>
			</div> -->
			<div class="mundata-box beneficiarios_box">
				<div class="box-title">Beneficiarios</div>
				<div class="beneficiarios">--</div>
			</div>
			<div class="mundata-box  inversion_box">
				<div class="box-title">Inversión</div>
				<div class="inversion">--</div>
			</div>
			<div class="avance_box mundata-box">
				<div class="box-title">Avance</div>
				<span class="avance">--</span>
			</div>
                        <div style="padding:5px;">Datos actualizados al 30 de noviembre de 2014</div>
		</div>

		<script type="text/javascript" charset="utf-8">
		
			function commaSeparateNumber(val){
			    while (/(\d+)(\d{3})/.test(val.toString())){
			      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
			    }
			    return val;
			  }
			   
			var municipios = null;
			var categorias_visible = false;
			var highlight = null;
			var c_type = "ben";
			var c_var, c_cat, var_root;
			var c_data = null;
			
			$("#ben").addClass("nombre-type-selected");
			
			function toggle_categorias() {
				if (categorias_visible == false) {
					$("#agency-select-wrapper").animate({
						bottom: "0px",
					}, 500);
					$("#categorias-list").html("Categorias (ocultar)");
					categorias_visible = true;
				}
				else {
					$("#agency-select-wrapper").animate({
						bottom: "-245px",
					}, 500);
					$("#categorias-list").html("Categorias (mostrar)");
					categorias_visible = false;
				}
			}
			
			function replaceNA(i) {
				if (parseInt(i) == -1) return "N/A";
				else return i;
			}
			
			function add_municipios_layer(v1) {
				var_root = v1;
				c_var = var_root + "_" + c_type;
				$(".nombre-variable").removeClass("nombre-variable-selected");
				$("#varbutton-"+v1).addClass("nombre-variable-selected");
				if (municipios != null) map.removeLayer(municipios);
				municipios = new L.TileLayer.WMS("/geoserver/sinhambre/wms", {
					viewparams: 'var:' + c_var,
					layers: 'sinhambre:sinhambre',
					transparent: 'true',
					sld: 'http://104.236.179.77/sinhambre/php/quantile.php?var='+c_var,
					format: 'image/png',
					opacity: '0.5',
					tiled: 'true',
					detectRetina: 'true'
				});
				map.addLayer(municipios);
				if (c_data != null) {
					$(".nom_mun").html(c_data[1].nom_mun);
					$(".state_name").html(entidades_list[parseInt(c_data[1].cve_ent)]);
					$(".num_mun").html(entidades_count_mun[parseInt(c_data[1].cve_ent)] + " municipios");
					$(".state_image").html("<img src='img/estados/"+parseInt(c_data[1].cve_ent)+".png' />");
					$(".unidad").html("Unidad: " + c_data[1][var_root + "_unidad"]);
					$(".beneficiarios").html(replaceNA(commaSeparateNumber(parseInt(c_data[1][var_root + "_ben"]))));
					$(".inversion").html("$" + commaSeparateNumber(parseInt(c_data[1][var_root + "_inv"])));
					//$(".programado-metas").html(replaceNA(commaSeparateNumber(parseInt(c_data[1][var_root + "_programado"]))));
					//if (parseInt(c_data[1][var_root + "_avrel"]) != -1) $(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])) + " (" + Math.round(parseFloat(c_data[1][var_root + "_avrel"])*100) + "%)");
					//else $(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])) + " (N/A)");
					$(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])));
				}
		    }
		    
		    function change_type(type) {
		    	$(".types").removeClass("nombre-type-selected");
		    	$("#"+type).addClass("nombre-type-selected");
		    	c_type = type;
			    add_municipios_layer(var_root);
		    }
		    
		    function change_category(cat_name) {
		    	if (categorias_visible == true) toggle_categorias();
			    $(".agency").removeClass("nombre-agency-selected");
				$("#"+cat_name).addClass("nombre-agency-selected");
				
				$("#datos").empty();
				$("#datos").append('<div class="datos-title varlist-title">Categoría: '+$(".nombre-agency-selected").text()+'</div>');
				$("#datos").append('<div class="current-variable"></div>');
				$("#datos").append('<select data-placeholder="Elija una variable..." class="chosen-select">');
				$.each(variables[cat_name], function (key, data) {
					$("#datos select").append('<option value='+cat_name+"_"+data.variable+' id="varbutton-'+cat_name+"_"+data.variable+'">'+data.desc+'</option>');
				});
				$("#datos").append('</select>');
				$(".chosen-select").chosen({width: "280px"});
				$(".current-variable").html(variables[cat_name][0].desc);
				$(".chosen-container-single .chosen-single span").html("Elija una variable...");
				c_cat = cat_name;
				var_root = variables[cat_name][0].variable;
				add_municipios_layer(c_cat + "_" + var_root);
				$(".chosen-select").change(function(evt, params) {
					$(".current-variable").html($(this).find("option:selected").text());
					$(".chosen-container-single .chosen-single span").html("Elija una variable...");
					add_municipios_layer(params.selected);
				});
		    }
		
			var entidades_list = ["", "Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Coahuila", "Colima", "Chiapas", "Chihuahua", "Distrito Federal", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "México", "Michoacán", "Morelos", "Nayarit", "Nuevo León", "Oaxaca", "Puebla", "Querétaro", "Quintana Roo", "San Luis Potosí", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas"];
			var entidades_count_mun = [0,11,5,5,11,38,10,118,67,16,39,46,81,84,125,125,113,33,20,51,570,217,18,9,58,18,72,17,43,60,212,106,58];
			
			var map = new L.Map('map', {
				maxZoom: 14,
				minZoom: 5
			}).setView(new L.LatLng(21.25,-101.5),5);
			map.scrollWheelZoom.disable();
		

			var baseLayer = new L.TileLayer("http://{s}.google.com/vt/?hl=en&x={x}&y={y}&z={z}&s={s}&apistyle=p.s%3A-100%2Cs.t%3A1314%7Cp.v%3Aoff%2Cs.t%3A6%7Cp.l%3A31%2Cs.t%3A3%7Cp.v%3Aoff%2Cs.t%3A18%7Cp.v%3Aoff%2Cs.t%3A2%7Cp.v%3Aoff%2Cs.t%3A5%7Cp.l%3A47%2Cs.t%3A20%7Cp.v%3Aoff%2Cs.t%3A4%7Cp.v%3Aoff%2Cs.t%3A5%7Cs.e%3Al%7Cp.v%3Aoff&style=47,37%7Csmartmaps", {
				subdomains: ['mt0','mt1','mt2','mt3'],
				detectRetina: 'true',
				zIndex: -1,
				attribution: 'Desarrollado por <a href="http://cartografica.mx">Cartográfica</a> | Datos al 30 de noviembre de 2014, Datos del mapa base &copy; <a href="http://google.com">Google</a>',
			});
			map.addLayer(baseLayer);
			
			var entidades = new L.TileLayer.WMS("/geoserver/geom/wms", {
				layers: 'geom:entidades',
				transparent: 'true',
				format: 'image/png',
				opacity: '0.5',
				tiled: 'true',
				detectRetina: 'true',
				zIndex: 200
			});
	        map.addLayer(entidades);
		    
		    change_category("rezedu");
		    
		    $("#searchbox").keyup(function(event){
			    if(event.keyCode == 13){
			        searchMunicipio();
			    }
			});
		    
		    function searchMunicipio() {
			    (function ($) {
			    	$.getJSON( "/sinhambre/php/munsearch.php", { s: $("#searchbox").val() } )
					.done(function( data ) {
						c_data = data;
						if (highlight != null) map.removeLayer(highlight);
						highlight = L.geoJson(data[0]);
						map.addLayer(highlight);
						map.fitBounds(highlight.getBounds(), {padding: [200,200]});
						$(".nom_mun").html(data[1].nom_mun);
						$(".state_name").html(entidades_list[parseInt(data[1].cve_ent)]);
						$(".num_mun").html(entidades_count_mun[parseInt(data[1].cve_ent)] + " municipios");
						$(".state_image").html("<img src='img/estados/"+parseInt(data[1].cve_ent)+".png' />");
						$(".unidad").html("Unidad: " + data[1][var_root + "_unidad"]);
						$(".beneficiarios").html(replaceNA(commaSeparateNumber(parseInt(data[1][var_root + "_ben"]))));
						$(".inversion").html("$" + commaSeparateNumber(parseInt(data[1][var_root + "_inv"])));
						//$(".programado-metas").html(replaceNA(commaSeparateNumber(parseInt(data[1][var_root + "_programado"]))));
						//if (parseInt(c_data[1][var_root + "_avrel"]) != -1) $(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])) + " (" + Math.round(parseFloat(c_data[1][var_root + "_avrel"])*100) + "%)");
						//else $(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])) + " (N/A)");
						$(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])));
					});
			    }(jQuery));
		    }
		    
		    map.on('click', function(e) {
			    (function ($) {
			    	$.getJSON( "/sinhambre/php/attributes.php", { lat: parseFloat(e.latlng.lat), lon: parseFloat(e.latlng.lng) } )
					.done(function( data ) {
						if (data != null) {
							c_data = data;
							if (highlight != null) map.removeLayer(highlight);
							highlight = L.geoJson(data[0]);
							map.addLayer(highlight);
							$(".nom_mun").html(data[1].nom_mun);
							$(".state_name").html(entidades_list[parseInt(data[1].cve_ent)]);
							$(".num_mun").html(entidades_count_mun[parseInt(data[1].cve_ent)] + " municipios");
							$(".state_image").html("<img src='img/estados/"+parseInt(data[1].cve_ent)+".png' />");
							$(".unidad").html("Unidad: " + data[1][var_root + "_unidad"]);
							$(".beneficiarios").html(replaceNA(commaSeparateNumber(parseInt(data[1][var_root + "_ben"]))));
							$(".inversion").html("$" + commaSeparateNumber(parseInt(data[1][var_root + "_inv"])));
							//$(".programado-metas").html(replaceNA(commaSeparateNumber(parseInt(data[1][var_root + "_programado"]))));
							//if (parseInt(c_data[1][var_root + "_avrel"]) != -1) $(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])) + " (" + Math.round(parseFloat(c_data[1][var_root + "_avrel"])*100) + "%)");
							//else $(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])) + " (N/A)");
							$(".avance").html(commaSeparateNumber(parseInt(data[1][var_root + "_avabs"])));
						}
					});
			    }(jQuery));
			});

		</script>

	</body>

</html>