var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$("nav").addClass("navbarcolor");
	} else {
		$("nav").removeClass("navbarcolor");
	}
});
$('a.link[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : (y - 40)
 	}, 'slow');
});
$('#home .owl-carousel').owlCarousel({
	lazyLoad : true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	mouseDrag: false,
	dots: false,
	autoplayTimeout : 3000
});

var arrayServer            = [];
var arrayStorage           = [];
var arrayWireless          = [];
var arrayHyperconvergencia = [];
var arrayVideovigilancia   = [];
var arrayComunicaciones    = [];
var arrayCableado          = [];
var arrayMetalmecanica     = [];
var arrayPotencia          = [];
var arrayComputadoras      = [];
var arrayImpresion         = [];
var arraySoftware          = [];
var arrayCompany           = [];
function sendInformation(){
	var company 	 = $('#company').val();
	var direccion  	 = $('#address').val();
	var name 		 = $('#name').val();
	var surname 	 = $('#surname').val();
	var position 	 = $('#position').val();
	var email 		 = $('#email').val();
	var phone 		 = $('#phone').val();
	var birthday     = $('#birthday').val();
	var deporte      = $('#sport').val();
	// var comercializa = $('#commercialization').val();
	// var description  = $('#description').val();
	if(company == null || company == '') {
		msj('error', 'Empresa debe completarse');
		return;
	}
	if(direccion == null || direccion == '') {
		msj('error', 'Direccion debe completarse');
		return;
	}
	if(name == null || name == '') {
		msj('error', 'Nombre debe completarse');
		return;
	}
	if(surname == null || surname == '') {
		msj('error', 'Apellido debe completarse');
		return;
	}
	if(position == null || position == '') {
		msj('error', 'Cargo debe completarse');
		return;
	}
	if(email == null || email == '') {
		msj('error', 'Email debe completarse');
		return;
	}
	if(!validateEmail(email)){
		msj('error', 'El formato de email es incorrecto');
		return;
	}
	// if(validateEmailCorporative(email)){
    //   	msj('error', 'Ingrese un email corporativo');
	// 	return;
	// }
	if(phone == null || phone == '') {
		msj('error', 'Teléfono debe completarse');
		return;
	}
	if(birthday == null || birthday == '') {
		msj('error', 'Cumpleaños debe completarse');
		return;
	}
	// $(".jm-checkbox--comercializa .is-checked").each(function (){
	// 	var isChecked    = $(this);
	// 	var inputChecked = isChecked.find('input');
	// 	var nameOtros    = inputChecked.attr('data-name');
	// 	var textChecked  = isChecked.find('.mdl-radio__label').text();
	// 	var idChecked    = inputChecked.attr('id');
	// 	arrayComercializa.push(idChecked);
	// 	if(nameOtros == "otros"){
	// 		var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
	// 		arrayComercializa.push(divInput);
	// 	}
	// });
	$(".jm-checkbox--server .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayServer.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayServer.push(divInput);
		}
	})
	$(".jm-checkbox--storage .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayStorage.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayStorage.push(divInput);
		}
	})
	$(".jm-checkbox--wireless .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayWireless.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayWireless.push(divInput);
		}
	})
	$(".jm-checkbox--hyperconvergencia .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayHyperconvergencia.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayHyperconvergencia.push(divInput);
		}
	})
	$(".jm-checkbox--videovigilancia .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayVideovigilancia.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayVideovigilancia.push(divInput);
		}
	})
	$(".jm-checkbox--comunicaciones .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayComunicaciones.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayComunicaciones.push(divInput);
		}
	})
	$(".jm-checkbox--cableado .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayCableado.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayCableado.push(divInput);
		}
	})
	$(".jm-checkbox--metalmecanica .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayMetalmecanica.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayMetalmecanica.push(divInput);
		}
	})
	$(".jm-checkbox--potencia .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayPotencia.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayPotencia.push(divInput);
		}
	})
	$(".jm-checkbox--computadoras .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayComputadoras.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayComputadoras.push(divInput);
		}
	})
	$(".jm-checkbox--impresion .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayImpresion.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayImpresion.push(divInput);
		}
	})
	$(".jm-checkbox--software .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arraySoftware.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arraySoftware.push(divInput);
		}
	})
	$(".jm-checkbox--company .is-checked").each(function (){
		var isChecked    = $(this);
		var textChecked = isChecked.find('.mdl-checkbox__label').text();
		arrayCompany.push(textChecked);
	})
	arrayServer            = (arrayServer == null) ? '' : arrayServer.toString();
	arrayStorage           = (arrayStorage == null) ? '' : arrayStorage.toString();
	arrayWireless          = (arrayWireless == null) ? '' : arrayWireless.toString();
	arrayHyperconvergencia = (arrayHyperconvergencia == null) ? '' : arrayHyperconvergencia.toString();
	arrayVideovigilancia   = (arrayVideovigilancia == null) ? '' : arrayVideovigilancia.toString();
	arrayComunicaciones    = (arrayComunicaciones == null) ? '' : arrayComunicaciones.toString();
	arrayCableado          = (arrayCableado == null) ? '' : arrayCableado.toString();
	arrayMetalmecanica     = (arrayMetalmecanica == null) ? '' : arrayMetalmecanica.toString();
	arrayPotencia          = (arrayPotencia == null) ? '' : arrayPotencia.toString();
	arrayComputadoras      = (arrayComputadoras == null) ? '' : arrayComputadoras.toString();
	arrayImpresion         = (arrayImpresion == null) ? '' : arrayImpresion.toString();
	arraySoftware          = (arraySoftware == null) ? '' : arraySoftware.toString();
	arrayCompany           = (arrayCompany == null) ? '' : arrayCompany.toString();
	// if(arrayComercializa == null || arrayComercializa == '') {
	// 	msj('error', 'Seleccione una marca que comercialice su empresa');
	// 	return;
	// }
	// if(arrayCompany == null || arrayCompany == '') {
	// 	msj('error', 'Seleccione que describe mejor a tu empresa');
	// 	return;
	// }
	$.ajax({
		data : {Company           : company,
			    Direccion         : direccion,
				Name	          : name,
				Surname	          : surname,
				Position          : position,
				Email 	          : email,
				Phone	          : phone,
				Birthday	      : birthday,
				Deporte   	      : deporte,
				Server            : arrayServer,
				Storage           : arrayStorage,
				Wireless          : arrayWireless,
				Hyperconvergencia : arrayHyperconvergencia,
				Videovigilancia   : arrayVideovigilancia,
				Comunicaciones    : arrayComunicaciones,
				Cableado          : arrayCableado,
				Metalmecanica     : arrayMetalmecanica,
				Potencia          : arrayPotencia,
				Computadoras      : arrayComputadoras,
				Impresion         : arrayImpresion,
				Software          : arraySoftware,
				Description       : arrayCompany},
		url  : 'home/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.js-input').find('input').val('');
				$('.js-checkbox').find('.mdl-checkbox').removeClass('is-checked');
				$('.js-checkbox').find('input').prop("checked", false);
				arrayServer            = [];
				arrayStorage           = [];
				arrayWireless          = [];
				arrayHyperconvergencia = [];
				arrayVideovigilancia   = [];
				arrayComunicaciones    = [];
				arrayCableado          = [];
				arrayMetalmecanica     = [];
				arrayPotencia          = [];
				arrayComputadoras      = [];
				arrayImpresion         = [];
				arraySoftware          = [];
				arrayCompany           = [];
				$('#confirmation').addClass('aparecer');
				msj('success', data.msj);
        	}else{
        		msj('error', data.msj);
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
// function validateEmailCorporative(email){
//     var re = /[a-zA-Z0-9@]+(?=hotmail.com|yahoo.com|gmail.com|outlook.com)/;
//     return re.test(email);
// }
function verificarDatos(e) {
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}
function checkedOtros(element){
	var isChecked    = element;
	var idChecked    = isChecked.attr('id');
	var divInput     = element.parents('.jm-list--checkbox').find('.jm-input');
	console.log(idChecked);
	if(element.is(":checked")){
		divInput.css('display','block');
	}else{
		divInput.css('display','none');
	}
}