
function validacion(){
	var nombre = document.forms["nuevousuario"]["nombre"].value;
	if (nombre == ""){
		alert("el campo nombre no puede estar vacío");
		return false;
}
	var apellido= document.forms["nuevousuario"]["apellido1"].value;
	if (apellido == ""){
		alert("el campo apellido no puede estar vacío");
		return false;
}
	var email = document.forms["nuevousuario"]["email"].value;
	if (email == ""){
		alert("el campo email no puede estar vacío");
		return false;
}
	var username = document.forms["nuevousuario"]["username"].value;
	if (username == ""){
		alert("el campo username no puede estar vacío");
		return false;
}





}
