// JavaScript Document
function error(msg){
	alert (msg);
	}
	
function formulario(f) {

if (f.item.value   == '' || f.descripcion.value == '' || f.length.value == '' || f.width.value == '' || f.heigth.value == '' || f.weightkg.value == ''  || f.dclvalue.value == '' ) {
	alert ('There are empty fields, please fill them'); 
	return false; 
}else{
	return true;
}
}

function formulario1(f) {

if (f.codigo.value   == '' || f.empresa.value == '' || f.razon.value == '' || f.direccion.value == '' || f.telefono.value == '' || f.celular.value == '') {
	alert ('There are empty fields, please fill them'); 
	return false; 
}else{
	return true;
}
}

function status_msg(config)
{ 
	var options = {
		id: "status",	
		container_selector: "body",
		container : null,
		action: "open",
		msg: "Cargando..."
	};
	options = $.extend(options,config);
	container = options.container || $(options.container_selector);
	switch(options.action){
		case "close":
			$("#"+options.id).remove();
			break;
		default: 	//Open	
			
			container.append('<div id="'+options.id+'" class="ui-widget ui-widget-content ui-corner-all"></div>');
			$("#"+options.id).append('<div class="ui-widget-overlay"></div>');
			$("#"+options.id).append('<div class="status_msg ui-widget-content ui-corner-all"><p><img src="../images/loading.gif"/><strong>'+options.msg+"</strong></p></div>");
	}
}