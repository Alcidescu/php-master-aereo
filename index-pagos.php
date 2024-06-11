<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->

    <title>Reservas</title>

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
    
    <!-- ======= Header ======= -->
    <header id="header" style="background: black;" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.php">MMAA<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>

                    <li><a class="nav-link scrollto" href="index-pagos.php">Reservas</a></li>
                    <li class="dropdown"><a href=""><span>Listas de Aerolineas</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="https://www.lan.com">LAN Perú</a></li>
                            <li><a href="https://www.vivaperu.com">Viva Air Perú</a></li>
                            <li><a href="https://www.skyairline.com">Sky Airline</a></li>
                            <li><a href="https://www.starperu.com">Star Perú</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="Aeropuertos.php"><span>Aeropuertos</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Lista completa de Aeropuertos</a></li>
                            <li><a href="#">Lima</a></li>
                            <li><a href="#">Cusco</a></li>
                            <li><a href="#">Arequipa</a></li>
                            <li><a href="#">Trujillo</a></li>
                            <li><a href="#">Piura</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="Interesante.php"><span>Interesante</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Los mejores Aviones</a></li>
                            <li><a href="#">Información util para viajar</a></li>
                            <li><a href="#">Aeropuerto mas activos</a></li>
                            <li><a href="#">5 Aerolineas mas seguras</a></li>
                            <li><a href="#">Miedo al volar y como vencerlo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Sobre el sitio</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Politica y privacidad</a></li>
                            <li><a href="#">Terminos y condiciones</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Contactanos</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="Login.php" class="get-started-btn scrollto">Iniciar Sesión</a>

        </div>
    </header><!-- End Header -->
    <section class="banner" id="top">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="submit-form">
                        <h4>Reserva tu vuelo <em>Ahora</em>!</h4>
                        <form id="form-submit" action="BDVueloSolicitado.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="from">De:</label>
                                        <select required name='from' onchange='this.form()'>
                                            <option value="">Seleciona tu localización</option>
                                            <option value="Lima (LIM) - Aeropuerto Internacional Jorge Chávez">Lima (LIM) - Aeropuerto Internacional Jorge Chávez</option>
                                            <option value="Arequipa (AQP) - Aeropuerto Internacional Rodríguez Ballón">Arequipa (AQP) - Aeropuerto Internacional Rodríguez Ballón</option>
                                            <option value="Chiclayo (CIX) - Aeropuerto Internacional Cap. FAP José Abelardo Quiñones González">Chiclayo (CIX) - Aeropuerto Internacional Cap. FAP José Abelardo Quiñones González</option>
                                            <option value="Trujillo (TRU) - Aeropuerto Internacional Cap. FAP Carlos Martínez de Pinillos">Trujillo (TRU) - Aeropuerto Internacional Cap. FAP Carlos Martínez de Pinillos</option>
                                            <option value="Huaraz (HZ) - Aeropuerto Comandante FAP Germán Arias Graziani">Huaraz (HZ) - Aeropuerto Comandante FAP Germán Arias Graziani</option>
                                            <option value="Ayacucho (AYP) - Aeropuerto Coronel FAP Alfredo Mendívil Duarte">Ayacucho (AYP) - Aeropuerto Coronel FAP Alfredo Mendívil Duarte</option>
                                            <option value="Cajamarca (CJA) - Aeropuerto Mayor General FAP Armando Revoredo Iglesias">Cajamarca (CJA) - Aeropuerto Mayor General FAP Armando Revoredo Iglesias</option>
                                            <option value="Tumbes (TMB) - Aeropuerto Cap. FAP Pedro Canga Rodríguez">Tumbes (TMB) - Aeropuerto Cap. FAP Pedro Canga Rodríguez</option>
                                            <option value="Piura (PIU) - Aeropuerto Internacional Cap. FAP Guillermo Concha Ibérico">Piura (PIU) - Aeropuerto Internacional Cap. FAP Guillermo Concha Ibérico</option>
                                            <option value="Jauja (JAU) - Aeropuerto de Jauja">Jauja (JAU) - Aeropuerto de Jauja</option>
                                            <option value="Tarapoto (TPP) - Aeropuerto Cad. FAP Guillermo del Castillo Paredes">Tarapoto (TPP) - Aeropuerto Cad. FAP Guillermo del Castillo Paredes</option>
                                            <option value="Juliaca (JUL) - Aeropuerto Internacional Inca Manco Cápac">Juliaca (JUL) - Aeropuerto Internacional Inca Manco Cápac</option>
                                            <option value="Ilo (ILQ) - Aeropuerto de Ilo">Ilo (ILQ) - Aeropuerto de Ilo</option>
                                            <option value="Oxapampa (OXZ) - Aeropuerto de Oxapampa (AIV)">Oxapampa (OXZ) - Aeropuerto de Oxapampa (AIV)</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="to">A:</label>

                                        <select required name='to' onchange='this.form()'>
                                            <option value="">Seleciona tu localización</option>
                                            <option value="Lima (LIM) - Aeropuerto Internacional Jorge Chávez">Lima (LIM) - Aeropuerto Internacional Jorge Chávez</option>
                                            <option value="Arequipa (AQP) - Aeropuerto Internacional Rodríguez Ballón">Arequipa (AQP) - Aeropuerto Internacional Rodríguez Ballón</option>
                                            <option value="Chiclayo (CIX) - Aeropuerto Internacional Cap. FAP José Abelardo Quiñones González">Chiclayo (CIX) - Aeropuerto Internacional Cap. FAP José Abelardo Quiñones González</option>
                                            <option value="Trujillo (TRU) - Aeropuerto Internacional Cap. FAP Carlos Martínez de Pinillos">Trujillo (TRU) - Aeropuerto Internacional Cap. FAP Carlos Martínez de Pinillos</option>
                                            <option value="Huaraz (HZ) - Aeropuerto Comandante FAP Germán Arias Graziani">Huaraz (HZ) - Aeropuerto Comandante FAP Germán Arias Graziani</option>
                                            <option value="Ayacucho (AYP) - Aeropuerto Coronel FAP Alfredo Mendívil Duarte">Ayacucho (AYP) - Aeropuerto Coronel FAP Alfredo Mendívil Duarte</option>
                                            <option value="Cajamarca (CJA) - Aeropuerto Mayor General FAP Armando Revoredo Iglesias">Cajamarca (CJA) - Aeropuerto Mayor General FAP Armando Revoredo Iglesias</option>
                                            <option value="Tumbes (TMB) - Aeropuerto Cap. FAP Pedro Canga Rodríguez">Tumbes (TMB) - Aeropuerto Cap. FAP Pedro Canga Rodríguez</option>
                                            <option value="Piura (PIU) - Aeropuerto Internacional Cap. FAP Guillermo Concha Ibérico">Piura (PIU) - Aeropuerto Internacional Cap. FAP Guillermo Concha Ibérico</option>
                                            <option value="Jauja (JAU) - Aeropuerto de Jauja">Jauja (JAU) - Aeropuerto de Jauja</option>
                                            <option value="Tarapoto (TPP) - Aeropuerto Cad. FAP Guillermo del Castillo Paredes">Tarapoto (TPP) - Aeropuerto Cad. FAP Guillermo del Castillo Paredes</option>
                                            <option value="Juliaca (JUL) - Aeropuerto Internacional Inca Manco Cápac">Juliaca (JUL) - Aeropuerto Internacional Inca Manco Cápac</option>
                                            <option value="Ilo (ILQ) - Aeropuerto de Ilo">Ilo (ILQ) - Aeropuerto de Ilo</option>
                                            <option value="Oxapampa (OXZ) - Aeropuerto de Oxapampa (AIV)">Oxapampa (OXZ) - Aeropuerto de Oxapampa (AIV)</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="departure">Fecha de Salida:</label>
                                        <input name="departure" type="text" class="form-control date" id="departure" placeholder="Seleciona la Fecha" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="return">Fecha de llegada:</label>
                                        <input name="return" type="text" class="form-control date" id="return" placeholder="Seleciona la Fecha" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <div class="radio-select">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <label for="round">Redondo</label>
                                                <input type="radio" name="trip" id="round" value="round" required>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <label for="oneway">Unidireccional</label>
                                                <input type="radio" name="trip" id="oneway" value="one-way" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Consultar Vuelos Ahora!!</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>



    <div class="tabs-content" id="weather">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>CONSULTA EL TIEMPO PARA LOS PRÓXIMOS 5 DIAS</h2>
                        </div>
        </div>
        <div class="wrapper">
            <div class="col-md-12">
                <div class="weather-content">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                                <li><a href="#monday" class="active">LUNES</a></li>
                                <li><a href="#tuesday">MARTES</a></li>
                                <li><a href="#wednesday">MIÉRCOLES</a></li>
                                <li><a href="#thursday">JUEVES</a></li>
                                <li><a href="#friday">VIERNES</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <section id="second-tab-group" class="weathergroup">
                                <div id="monday">
                                    <div class="row">
                                        <!-- Monday Weather -->
                                        <div class="col-md-4">
                                            <div class="weather-item">
                                                <h6>LIMA</h6>
                                                
                                                <div id="lima-monday" class="weather-icon"></div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <div class="weather-item">
                                                <h6>CUSCO</h6>
                                                <div id="cusco-monday" class="weather-icon"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="weather-item">
                                                <h6>AREQUIPA</h6>
                                                <div id="arequipa-monday" class="weather-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Include other days' weather information similarly -->
                                <div id="tuesday">
                                    <div class="row">
                                        <!-- Tuesday Weather -->
                                        <div class="col-md-4">
                                            <div class="weather-item">
                                                <h6>LIMA</h6>
                                                <div id="lima-tuesday" class="weather-icon"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="weather-item">
                                                <h6>CUSCO</h6>
                                                <div id="cusco-tuesday" class="weather-icon"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="weather-item">
                                                <h6>AREQUIPA</h6>
                                                <div id="arequipa-tuesday" class="weather-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Similar structure as Monday, replace "monday" with "tuesday" -->
                                    </div>
                                </div>
                                <div id="wednesday">
                                    <div class="row">
                                        <!-- Wednesday Weather -->
                                         
                                        <!-- Similar structure as Monday, replace "monday" with "wednesday" -->
                                    </div>
                                </div>
                                <div id="thursday">
                                    <div class="row">
                                        <!-- Thursday Weather -->
                                        <!-- Similar structure as Monday, replace "monday" with "thursday" -->
                                    </div>
                                </div>
                                <div id="friday">
                                    <div class="row">
                                        <!-- Friday Weather -->
                                        <!-- Similar structure as Monday, replace "monday" with "friday" -->
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const apiKey = 'c5c94d1902a09e2f04a5a8715eb5545f'; // key aqpi

    async function fetchWeather(city) {
        const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city},pe&appid=${apiKey}&units=metric`);
        const data = await response.json();
        return data;
    }

    function displayWeather(data, elementId) {
        const { main, weather } = data;
        const weatherElement = document.getElementById(elementId);
        weatherElement.innerHTML = `
            <p>Temperatura: ${main.temp}°C</p>
            <p>Clima: ${weather[0].description}</p>
        `;
    }

    document.addEventListener('DOMContentLoaded', async () => {
        // Fetch and display weather for Monday
        const limaMondayWeather = await fetchWeather('Lima');
        displayWeather(limaMondayWeather, 'lima-monday');

        const cuscoMondayWeather = await fetchWeather('Cusco');
        displayWeather(cuscoMondayWeather, 'cusco-monday');

        const arequipaMondayWeather = await fetchWeather('Arequipa');
        displayWeather(arequipaMondayWeather, 'arequipa-monday');

        // Fetch and display weather for Tuesday
        const limaTuesdayWeather = await fetchWeather('Lima');
        displayWeather(limaMondayWeather, 'lima-tuesday');

        const cuscoTuesdayWeather = await fetchWeather('Cusco');
        displayWeather(cuscoMondayWeather, 'cusco-tuesday');

        const arequipaTuesdayWeather = await fetchWeather('Arequipa');
        displayWeather(arequipaMondayWeather, 'arequipa-tuesday');

        // Fetch and display weather for Wednesday
        // Similar code structure as Monday, replace "monday" with "wednesday"

        // Fetch and display weather for Thursday
        // Similar code structure as Monday, replace "monday" with "thursday"

        // Fetch and display weather for Friday
        // Similar code structure as Monday, replace "monday" with "friday"
    });
</script>


    <section class="services">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>INFORMACIÓN SOBRE PAQUETES DISPONIBLES</h2>
                </div>
                <div class="col-md-4">
                    <div class="service-item first-service">
                        <div class="service-icon"></div>
                        <h4>BÁSICO</h4>
                        <p>Esté paquete cuenta con asiento compartido tradiciona; Podras llevar contigo un bolso
                            como por ejemplo una mochilla, alimentos y bebidas corren por tu cuenta.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item second-service">
                        <div class="service-icon"></div>
                        <h4>PLUS</h4>
                        <p>Te incluye un asiendo individual al igual que un control de oxigeno en caso de que te haga
                            falta
                            así como también incluye un aguia minera de 800 ML y un aperitivo al gusto, ofreciendote un
                            equipaje
                            de hasta 15 kilos.
                        </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item third-service">
                        <div class="service-icon"></div>
                        <h4>PREMIUM</h4>
                        <p>Cuenta con una asiento cama matrimonial, un refri por si necesitas algun alimento de manera
                            inmediata, televisor de 14 pulgadas,
                            un par de gafas anti-luz, permitiendote un almacenamiento dentro del avión de hasta
                            30 kilos.
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="tabs-content" id="recommended-hotel">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                       
                <div class="col-md-8">
                    <section id="third-tab-group" class="recommendedgroup">
                        <div id="livingroom">
                            <div class="text-content">
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/rMxTreSFMgE">
                                </iframe>
                            </div>
                        </div>
                        <div id="suitroom">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="owl-suiteroom" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="suiteroom-item">
                                                <img src="img/suite-02.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Clean And Relaxing Room</h4>
                                                    <span>Aurora Resort</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="suiteroom-item">
                                                <img src="img/suite-01.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Special Suite Room TV</h4>
                                                    <span>Khao Yai Hotel</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="suiteroom-item">
                                                <img src="img/suite-03.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>The Best Sitting</h4>
                                                    <span>Hotel Grand</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="swimingpool">
                            <img src="img/swiming-pool.jpg" alt="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content">
                                        <h4>Lovely View Swiming Pool For Special Guests</h4>
                                        <span>Victoria Resort and Spa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="massage">
                            <img src="img/massage-service.jpg" alt="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content">
                                        <h4>Perfect Place For Relaxation</h4>
                                        <span>Napali Beach</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fitness">
                            <img src="img/fitness-service.jpg" alt="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content">
                                        <h4>Insane Street Workout</h4>
                                        <span>Hua Hin Beach</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="event">
                            <img src="img/evening-event.jpg" alt="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content">
                                        <h4>Finest Winery Night</h4>
                                        <span>Queen Restaurant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    </div>
    -->



    <section id="most-visited">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Most Visited Places</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="owl-mostvisited" class="owl-carousel owl-theme">
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/cusco.jpg" alt="">
                                <div class="text-content">
                                    <h4>Macchu Picchu</h4>
                                    <span>CUSCO</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Lorem ipsum dolor</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-03.jpg" alt="">
                                <div class="text-content">
                                    <h4>Proin dignissim</h4>
                                    <span>Paris</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-04.jpg" alt="">
                                <div class="text-content">
                                    <h4>Fusce sed ipsum</h4>
                                    <span>Hollywood</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Vivamus egestas</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Aliquam elit metus</h4>
                                    <span>New York</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-03.jpg" alt="">
                                <div class="text-content">
                                    <h4>Phasellus pharetra</h4>
                                    <span>Paris</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-04.jpg" alt="">
                                <div class="text-content">
                                    <h4>In in quam efficitur</h4>
                                    <span>Hollywood</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Sed faucibus odio</h4>
                                    <span>NEW YORK</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Donec varius porttitor</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top">Back To Top</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/tooplate"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <p>Copyright &copy; 2018 Flight Tour and Travel Company

                        | Design: <em>Tooplate</em></p>
                </div>
            </div>
        </div>
        -->
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
