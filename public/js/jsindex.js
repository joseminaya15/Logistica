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

var arrayComercializa  = [];
var arrayCompany       = [];
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
	if(validateEmailCorporative(email)){
      	msj('error', 'Ingrese un email corporativo');
		return;
	}
	if(phone == null || phone == '') {
		msj('error', 'Teléfono debe completarse');
		return;
	}
	if(birthday == null || birthday == '') {
		msj('error', 'Cumpleaños debe completarse');
		return;
	}
	$(".jm-checkbox--comercializa .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('input');
		var idChecked  = inputChecked.attr('id');
		arrayComercializa.push(idChecked);
	});
	$(".jm-checkbox--company .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		arrayCompany.push(textChecked);
	})
	arrayComercializa = (arrayComercializa == null) ? '' : arrayComercializa.toString();
	arrayCompany  = (arrayCompany == null) ? '' : arrayCompany.toString();
	// if(arrayComercializa == null || arrayComercializa == '') {
	// 	msj('error', 'Seleccione una marca que comercialice su empresa');
	// 	return;
	// }
	// if(arrayCompany == null || arrayCompany == '') {
	// 	msj('error', 'Seleccione que describe mejor a tu empresa');
	// 	return;
	// }
	$.ajax({
		data : {Company      : company,
			    Direccion    : direccion,
				Name	     : name,
				Surname	     : surname,
				Position     : position,
				Email 	     : email,
				Phone	     : phone,
				Birthday	 : birthday,
				Deporte   	 : deporte,
				Comercializa : arrayComercializa,
				Description  : arrayCompany},
		url  : 'home/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.js-input').find('input').val('');
				$('.js-checkbox').find('.mdl-checkbox').removeClass('is-checked');
				$('.js-checkbox').find('input').prop("checked", false);
				arrayComercializa  = [];
				arrayCompany       = [];
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
function validateEmailCorporative(email){
    var re = /[a-zA-Z0-9@]+(?=hotmail.com|yahoo.com|gmail.com|outlook.com)/;
    return re.test(email);
}
function verificarDatos(e) {
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}