function objetoAjax(){
 var xmlhttp=false;
  try{
   xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  }catch(e){
   try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   }catch(E){
    xmlhttp = false;
   }
  }
  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
   xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
 
function chek_album(){
 //donde se mostrará los registros
 nombre = document.getElementById('nombre_albun').value;
 divContenido = document.getElementById('nombre_albun_div');
 
 ajax=objetoAjax();
 ajax.open('GET', 'comprueba_usuario.php?nombre_user=' + nombre);
 divContenido.innerHTML= '<img  src="loading.gif" width="32" height="32" />';
 ajax.onreadystatechange=function() {
 
  if (ajax.readyState==4) {
   
   divContenido.innerHTML = ajax.responseText
  
  }
 }
 
 ajax.send(null)
}
 
function limpiar(){
document.getElementById('nombre_albun_div').innerHTML='<a onclick="chek_album();" href="#ver#ver"><strong>Comprobar Nombre</strong></a>';
}

