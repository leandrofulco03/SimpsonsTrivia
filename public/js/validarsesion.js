function validarSesion(){
 var email, password;
 email = document.getElementById('email').value;
 password = document.getElementById('password').value;

if (email === "" || password === "") {
  alert("Completá los campos");
  return false;
}

}
