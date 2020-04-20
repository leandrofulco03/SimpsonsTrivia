 function validar(){
  var name, username, email, password, passwordConfirm;
  name = document.getElementById('name').value;
  username = document.getElementById('username').value;
  email = document.getElementById('email').value;
  password = document.getElementById('password').value;
  passwordConfirm = document.getElementById('password-confirm').value;

  //Expresion regular para formato mail
  expresion = /\w+@\w+\.+[a-z]/;

 if(name === "" || username === "" || email === "" || password === ""){
   alert("Todos los campos son obligatorios");
   return false;
 }
 //length te mide el largo del string
else if(username.length < 6){
  alert("El Nombre de Usuario debe tener mas de 6 caracteres");
  return false;
}
else if(username.length >15){
  alert("El Nombre de Usuario es demasiado largo");
  return false;
}
else if(!expresion.test(email)){
  alert("El Email no es válido");
  return false;
}
else if(password.length < 8){
  alert("La contraseña debe tener minimo 8 caracteres");
  return false;
}
else if(password != passwordConfirm){
  alert("Las contraseñas no coinciden");
  return false;
}

//Primero traemos los paises
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var options = JSON.parse(xmlhttp.responseText);
        var option = "";
        for( var pais in options.contenido){
                option += "<option value=" + options.contenido[pais] + ">" + pais + "</option>";
        }
        selectPaises.innerHTML = option;
}
};
xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getPaises", true);
xmlhttp.send();
//Cuando elijo otro pais, mostrarme las provincias si elegi argentina
selectPaises.onchange = function(e){
	var value = e.target.value;
	if (value == 1){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
    		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        	var options = JSON.parse(xmlhttp.responseText);
        	var option = "";
        	for( var provincia in options.contenido){
                	option += "<option value=" + options.contenido[provincia] + ">" + provincia + "</option>";
        	}
        	selectProvincias.innerHTML = option;
		}
		};
		xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getRegiones?idPais=1", true);
		xmlhttp.send();
		} else {
			selectProvincias.innerHTML = "";
        }
}




}
