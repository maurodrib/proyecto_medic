$(document).ready(function(){
	//-->Configuración views index//
//Funcionamiento del boton de recuperar cuenta//
	$('#r-cuenta').click(function(){
		if($('#form-recuperar').css({'display':'none'})){
			$('#form-recuperar').animate({
				height: "toggle",
				'padding-top': "toggle",
				'padding-bottom': "toggle",
				opacity: "toggle"
			});
			$('#form-ingreso').css({'display':'none'});
			$('#toggle-btn').css({'display':'none'});
		}
	});
//Funcionamiento del boton de crear cuenta//
	$('#c-cuenta').click(function(){
		if($('#form-c-cuenta').css({'display':'none'})){
			$('#form-c-cuenta').animate({
				height: "toggle",
				'padding-top': "toggle",
				'padding-bottom': "toggle",
				opacity: "toggle"
			});
			$('#form-ingreso').css({'display':'none'});
			$('#toggle-btn').css({'display':'none'});
		}
	});
});
//Ventanas Modales
	function winUsuario (){
		alert("hola");
	}

//const btnOpenModal =  document.querySelector("#windows");
//const btnCloseModal = document.querySelector("#windowsCerrar");
//const modal = document.querySelector("#windows");