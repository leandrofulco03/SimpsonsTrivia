 function validar(){
  var name, username, email, password, passwordConfirm;
  name = document.getElementById('name').value;
  username = document.getElementById('username').value;
  email = document.getElementById('email').value;
  password = document.getElementById('password').value;
  passwordConfirm = document.getElementById('password-confirm').value;

  expresion = /\w+@\w+\.+[a-z]/;

 if(name === "" || username === "" || email === "" || password === ""){
   alert("Todos los campos son obligatorios");
   return false;
 }
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
}
