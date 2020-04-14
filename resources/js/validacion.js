window.onload = function validar(){
var  name = document.getElementById('nameForm');
var  username = document.getElementById('username').value;
var  email = document.getElementById('email').value;
var  password = document.getElementById('password').value;

name.onblur = function(){
console.log("Algo");
 }
}
