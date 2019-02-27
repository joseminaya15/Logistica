<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE Logistica">
    <meta name="keywords"               content="HPE Logistica">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="December 15, 2018"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#425563">
	<title>HPE Logistica</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <!-- <div class="js-header">
        <div class="js-header--container">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/logistica.jpg">
            </div>
        </div>
    </div> -->
    <nav class="navbar navbar-default">
        <div class="js-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand link" href="#home">
                    <img src="<?php echo RUTA_IMG?>logo/logistica.jpg">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active"><a class="link" href="#home">Inicio</a></li>
                    <li class="nav-item"><a class="link" href="#partners">Partners</a></li>
                    <li class="nav-item"><a class="link" href="#register">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="js-fondo fondo1"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo2"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo3"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo4"></div>
            </div>
        </div>
        <div class="js-container">
            <div class="js-home js-flex">
                <div class="js-contenido">
                    <h2>"T&uacute; aceptas los retos sin pesta&ntilde;ear?"</h2>
                    <p>Para nosotros tú eres un VIP, te invitamos a ser parte del equipo ganador.</p>
                    <p>Mi&eacute;rcoles 20 de Marzo</p>
                    <p>Panam&aacute;</p>
                    <a href="#register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link js-button">Registrese aqu&iacute;</a>
                </div>
            </div>
        </div>
    </section>
    <section id="partners" class="js-section js-white">
        <div class="js-container">
            <h2 class="js-title">PARTNERS</h2>
            <div class="js-partners">
                <img src="<?php echo RUTA_IMG?>partners/fujikura.png">
                <img src="<?php echo RUTA_IMG?>partners/lifeison.png">
                <img src="<?php echo RUTA_IMG?>partners/cablofil.png">
                <img src="<?php echo RUTA_IMG?>partners/cisco.png">
                <img src="<?php echo RUTA_IMG?>partners/commscope.png">
                <img src="<?php echo RUTA_IMG?>partners/greenlee.png">
                <img src="<?php echo RUTA_IMG?>partners/greatlakes.png">
                <img src="<?php echo RUTA_IMG?>partners/epson.png">
                <img src="<?php echo RUTA_IMG?>partners/ahua.png">
                <img src="<?php echo RUTA_IMG?>partners/cpi.png" style="width: initial;">
                <img src="<?php echo RUTA_IMG?>partners/hpe.png">
                <img src="<?php echo RUTA_IMG?>partners/hp.png" style="width: initial;">
                <img src="<?php echo RUTA_IMG?>partners/leviton.png">
                <img src="<?php echo RUTA_IMG?>partners/lexmark.png">
                <img src="<?php echo RUTA_IMG?>partners/microsoft.png">
                <img src="<?php echo RUTA_IMG?>partners/superior.png">
                <img src="<?php echo RUTA_IMG?>partners/tripplite.png">
                <img src="<?php echo RUTA_IMG?>partners/legrand.png">
            </div>
        </div>
    </section>
    <section id="register" class="js-section">
        <div class="js-container">
            <!-- <div class="js-information">
                <h1>El ORBE ofrece a sus clientes soluciones tecnol&oacute;gicas innovadoras, basadas en el portafolio de l&iacute;deres de la industria como HPE y SAS, para apoyarles en su proceso de transformaci&oacute;n y en su capacidad para tomar mejores decisiones y generar mayores resultados para su negocio.</h1>
                <h2>Jueves 7 de Febrero, 2019</h2>
                <h3>Hora de inicio: 4:00 p.m.</h3>
                <p>K'abel Sala de eventos</p>
                <span>6A Avenida 9-18 zona 10, Edificio Sixtino2 nivel 10, Ciudad de Guatemala</span>
                <h4>Un evento de</h4>
                <img src="<?php echo RUTA_IMG?>logo/logo-orbe.png">
            </div> -->
            <div class="js-title">
                <h2>REG&Iacute;STRESE AHORA</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="js-input">
                        <label for="text">Empresa*</label>
                        <input type="text" id="company" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="js-input">
                        <label for="text">Direccion F&iacute;sica de la Empresa*</label>
                        <input type="text" id="direccion" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Nombre*</label>
                        <input type="text" id="name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Apellido*</label>
                        <input type="text" id="surname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Cargo*</label>
                        <input type="text" id="position">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Email Corporativo*</label>
                        <input type="text" id="email" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Tel&eacute;fono*</label>
                        <input type="text" id="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input js-date js-flex">
                        <input class="js-disabled" type="text" id="birthday" name="birthday" maxlength="10" placeholder="Fecha de cumpleaños*" value="" style="pointer-events: none" disabled>
                        <div class="js-icon">
                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="mdi mdi-date_range"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Deporte que le gusta*</label>
                        <input type="text" id="deporte">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input js-select">
                        <select name="comercializa" id="comercializa" title="Que marcas comercializa tu empresa? (Más de una)" multiple> 
                            <option value="HPE">HPE</option>
                            <option value="ARUBA Networks">ARUBA Networks</option>
                            <option value="CISCO">CISCO</option>
                            <option value="DELL/EMC">DELL/EMC</option>
                            <option value="NUTANIX">NUTANIX</option>
                            <option value="NETAPP">NETAPP</option>
                            <option value="PURE STORAGE">PURE STORAGE</option>
                            <option value="UBIQUITI">UBIQUITI</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <div class="js-input js-select">
                        <select name="description" id="description" title="Selecciona opciones que describan mejor a tu compañía (Más de una)." multiple> 
                            <option value="Venta, instalación y Reparación de equipo de cómputo.">Venta, instalación y Reparación de equipo de cómputo.</option>
                            <option value="Venta de sistemas especiales (sistema de videovigilancia y seguridad, alarmas e incendio, paneles solares).">Venta de sistemas especiales (sistema de videovigilancia y seguridad, alarmas e incendio, paneles solares).</option>
                            <option value="Desarrolladores de software e integradores.">Desarrolladores de software e integradores.</option>
                            <option value="Venta, instalación y reparación de equipo de impresión.">Venta, instalación y reparación de equipo de impresión.</option>
                            <option value="Venta e instalación de cableado estructurado, fibra óptica y/o datacenter.">Venta e instalación de cableado estructurado, fibra óptica y/o datacenter</option>
                            <option value="Venta e instalación de sistema de potencia, aires de precisión, sistema de confinamiento.">Venta e instalación de sistema de potencia, aires de precisión, sistema de confinamiento.</option>
                            <option value="Venta de soluciones en comunicaciones e inalámbricas.">Venta de soluciones en comunicaciones e inalámbricas.</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="js-section--button text-center">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendInformation()">Enviar</button>
            </div>
            <div id="confirmation" class="js-confirmation">
                <h2>Registro realizado correctamente. Lo esperamos</h2>
            </div>
        </div>
    </section>
    <footer class="js-section p-t-20 p-b-20">
        <div class="js-container text-center">
            <p>&copy;Copyright 2019 Hewlett Packard Enterprise Development LP</p>
            <p class="content">*Completando está información participa en un sorteo al final del evento.</p>
        </div>
    </footer>

	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        initButtonCalendarDaysMaxToday('birthday');
    </script>
</body>
</html>