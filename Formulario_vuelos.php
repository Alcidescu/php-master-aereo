<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->

    <title>Formularios Vuelos</title>

    <!-- Favicons -->
    <link href="assets/Imagenes que se pueden ocupar/airport-MMAA.png" rel="icon">
    <link href="assets/Imagenes que se pueden ocupar/protesis.jpg" rel="apple-touch-icon">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/tooplate-style.css">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>


<body>
    
    <section style="background:khaki" class="banner" id="fixed-top">

        <div class="container">
            <div class="row">
                <!--
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="tabs-content">
                            <h4>Choose Your Direction:</h4>
                            <ul class="social-links">
                                <li><a href="http://facebook.com">Find us on <em>Facebook</em><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="http://youtube.com">Our <em>YouTube</em> Channel<i
                                            class="fa fa-youtube"></i></a></li>
                                <li><a href="http://instagram.com">Follow our <em>instagram</em><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="page-direction-button">
                            <a href="contact.html"><i class="fa fa-phone"></i>Contact Us Now</a>
                        </div>
                    </div>
                -->
            </div>
            <div class="container d-flex align-items-center justify-content-lg-between">
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1">
                        <div class="submit-form">
                            <h4>Formulario<em> crear vuelos</em>!</h4>
                            <form id="form-submit" action="BDVuelos.php" method="POST">
                                <div class="row">
                                    <div class="form-wrapper">
                                        <div>
                                            <label for="from"> Operador:
                                                <br>
                                                <input name="Operador" type="text" placeholder="Nombre de Operador" class="">
                                                <i class="col-md-6"></i>
                                            </label>
                                            <label for="from"> Sub - Operador:
                                                <br>
                                                <input name="SubOP" type="text" placeholder="Nombre del Sub-Operador" class="">
                                                <i class="col-md-6"></i>
                                            </label>
                                            <label for="from"> Matricula del Avión:
                                                <br>
                                                <input name="Matricula" type="text" placeholder="Matricula del avión" class="">
                                                <i class="col-md-6"></i>
                                            </label>
                                            </label>
                                            <label for="from"> Empresa:
                                                <br>
                                                <input name="Empresa" type="text" placeholder="Empresa" class="">
                                                <i class="col-md-6"></i>
                                            </label>
                                            <label for="from"> Precio:
                                                <br>
                                                <input name="Precio" type="text" placeholder="Precio" class="">
                                                <i class="col-md-6"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="Origen">De:</label>
                                            <select required name='Origen' onchange='this.form()'>
                                                <option >Seleciona tu localización</option>                                            
                                                <option >Lima (LIM) - Aeropuerto Internacional Jorge Chávez</option>
                                                <option >Arequipa (AQP) - Aeropuerto Internacional Rodríguez Ballón</option>
                                                <option >Chiclayo (CIX) - Aeropuerto Internacional Cap. FAP José Abelardo Quiñones González</option>
                                                <option >Trujillo (TRU) - Aeropuerto Internacional Cap. FAP Carlos Martínez de Pinillos</option>
                                                <option >Huaraz (HZ) - Aeropuerto Comandante FAP Germán Arias Graziani</option>
                                                <option >Ayacucho (AYP) - Aeropuerto Coronel FAP Alfredo Mendívil Duarte</option>
                                                <option >Cajamarca (CJA) - Aeropuerto Mayor General FAP Armando Revoredo Iglesias</option>
                                                <option >Tumbes (TMB) - Aeropuerto Cap. FAP Pedro Canga Rodríguez</option>
                                                <option >Piura (PIU) - Aeropuerto Internacional Cap. FAP Guillermo Concha Ibérico</option>
                                                <option >Jauja (JAU) - Aeropuerto de Jauja</option>
                                                <option >Tarapoto (TPP) - Aeropuerto Cad. FAP Guillermo del Castillo Paredes
                                                </option>
                                                <option >Juliaca (JUL) - Aeropuerto Internacional Inca Manco Cápac</option>
                                                <option >Ilo (ILQ) - Aeropuerto de Ilo</option>
                                                <option >Oxapampa (OXZ) - Aeropuerto de Oxapampa
                                                (AIV)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="Destino">A:</label>
                                            <select required name='Destino' onchange='this.form()'>
                                                <option >Seleciona la localización</option>
                                                <option >Lima (LIM) - Aeropuerto Internacional Jorge Chávez</option>
                                                <option >Arequipa (AQP) - Aeropuerto Internacional Rodríguez Ballón</option>
                                                <option >Chiclayo (CIX) - Aeropuerto Internacional Cap. FAP José Abelardo Quiñones González</option>
                                                <option >Trujillo (TRU) - Aeropuerto Internacional Cap. FAP Carlos Martínez de Pinillos</option>
                                                <option >Huaraz (HZ) - Aeropuerto Comandante FAP Germán Arias Graziani</option>
                                                <option >Ayacucho (AYP) - Aeropuerto Coronel FAP Alfredo Mendívil Duarte</option>
                                                <option >Cajamarca (CJA) - Aeropuerto Mayor General FAP Armando Revoredo Iglesias</option>
                                                <option >Tumbes (TMB) - Aeropuerto Cap. FAP Pedro Canga Rodríguez</option>
                                                <option >Piura (PIU) - Aeropuerto Internacional Cap. FAP Guillermo Concha Ibérico</option>
                                                <option >Jauja (JAU) - Aeropuerto de Jauja</option>
                                                <option >Tarapoto (TPP) - Aeropuerto Cad. FAP Guillermo del Castillo Paredes
                                                </option>
                                                <option >Juliaca (JUL) - Aeropuerto Internacional Inca Manco Cápac</option>
                                                <option >Ilo (ILQ) - Aeropuerto de Ilo</option>
                                                <option >Oxapampa (OXZ) - Aeropuerto de Oxapampa
                                                (AIV)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="departure">Fecha de Salida:</label>
                                            <input name="FechaSalida" type="date" class=" id="deparure" placeholder="Seleciona la Fecha" required onchange='this.form()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="return">Fecha de llegada:</label>
                                            <input name="FechaLlegada" type="date" class="" id="return" placeholder="Seleciona la Fecha" required onchange='this.form()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="Hora Salida">Hora:</label>
                                            <select required name='Hora' onchange='this.form()'>
                                                <option >Selecciona la hora de vuelo</option>
                                                <option > 12:00 - 1:00 </option>
                                                <option > 1:00 - 2:00 </option>
                                                <option >2:00 - 3:00 </option>
                                                <option >3:00 - 4:00 </option>
                                                <option >4:00 - 5:00 </option>
                                                <option >5:00 - 6:00 </option>
                                                <option >7:00 - 8:00</option>
                                                <option >8:00 - 9:00</option>
                                                <option >9:00 - 10:00</option>
                                                <option >10:00 - 11:00</option>
                                                <option >11:00 - 12:00</option>
                                            </select>
                                            <select name="Horario" id="">
                                                <option> Selecciona el Horario</option>
                                                <option> PM</option>
                                                <option> AM</option>
                                            </select>
                                            <label for="TipoVuelo">Tipo de vuelo:</label>
                                            <select name="TipoVuelo" id="">
                                                <option> Selecciona el Tipo de vuelo</option>
                                                <option> Comercial</option>
                                                <option> Privado</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ModoVuelo">Modo de vuelo:</label>
                                            <select name="ModoVuelo" id="">
                                                <option> Selecciona el modo de vuelo</option>
                                                <option> Redondo</option>
                                                <option> Solo Vuelo</option>
                                            </select>
                                            <div class="col-md-6">
                                        <fieldset>
                                                <br>
                                                <br>
                                                <br>
                                                
                                            <button type="submit" id="form-submit" class="btn" style="width: 500px; height: 35px; background:gold" a href="index.php">Crear Vuelo
                                                Ahora</button>
                                                <br>
                                                <br>
                                        </fieldset>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>
    </section>
    </footer>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {



            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }
    </script>
</body>

</html>
