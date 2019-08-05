function Buscador(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E){
			xmlhttp = false;
		}
	}
	if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function lookup(nombre){
	div = document.getElementById('suggestions');
	if(nombre.length == 0){
		$('#suggestions').hide();
	}else{
		elem = Buscador();
		elem.open("GET","controllers/rcp.php?nombre="+nombre); //se llama archivo rcp
		elem.onreadystatechange=function(){
			if(elem.readyState == 4){
				$('#suggestions').show();
				div.innerHTML = elem.responseText;
			}
		}
		elem.send(null)
	}
}

function fill_info(idreg){
	document.getElementById('id_reg').value = idreg;
	document.getElementById('producto_codigo').value =  idreg;
	setTimeout("$('#suggestions').hide();", 200);
	document.getElementById('producto_codigo').focus();
	carga_info();
}

function carga_info(){
	idregistro = document.getElementById('id_reg').value;
	div = document.getElementById('div_resp');
	ajax = Buscador();
	ajax.open("GET","controllers/rcp.php?idreg="+idregistro);
	ajax.onreadystatechange = function(){
		if (ajax.readyState == 4){
			div.innerHTML = ajax.responseText;
		}
	}
	ajax.send(null)
}


