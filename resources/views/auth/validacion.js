window.onload = function validar(){
  var name, username, email, password;
  name = document.getElementById('name').value;
  username = document.getElementById('username').value;
  email = document.getElementById('email').value;
  password = document.getElementById('password').value;

 if(name === ""){
   alert("El campo Nombre está vacio");
   return false;
 }

}
