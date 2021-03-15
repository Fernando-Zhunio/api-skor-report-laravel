<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        
        .font-facebook {
            font-family: 'Nunito', 'Segoe UI';
        }
        
        .col-8 h3 {
            color: darkblue;
            border-width: 3px!important;
            border-color: darkblue !important;
        }
        
        ul {
            list-style: none;
        }
        
        tr,
        td {
            border: none;
        }
        
        .califique span {
            color: #ffc107!important;
        }
    </style>
</head>

<body class="antialiased">


    <div class="row m-0 font-facebook">
        <div class="col-4 bg-dark p-4 text-white">
            <div class="d-flex justify-content-center ">
                <img class="w-75 rounded-circle" src="img/fz-img.jpg" alt="imagen de fernando zhunio">
            </div>
            <div>
                <div>
                    <h3 class="border-bottom">Perfil</h3>
                    <p style="text-align: justify; font-size: small;">Mi nombre es Fernando Zhunio soy desarrollador de software. A lo largo de estos años me he dedicado al 100% en lo que es el desarrollo de software y así ir aprendiendo cada vez cosas nuevas entre frameworks modernos con angular, laravel
                        y Vue además de un sin número de librerías JavaScript hasta un poco la creación de videojuegos y un poco de Aws, así como la importancia del seo y el deploy.</p>
                </div>
                <div>
                    <h3 class="border-bottom">Contacto</h3>
                    <div>
                        <ul class="p-0">
                            <li class="d-flex align-items-center mb-2">
                                <i class="far fa-envelope fa-2x"></i>
                                <span class="ms-2">fzhunio91@hotmail.com</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <!-- <i class="far fa-envelope fa-2x"></i> -->
                                <i class="fas fa-phone-alt fa-2x"></i>
                                <span class="ms-2">0939749166</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <!-- <i class="far fa-envelope fa-2x"></i> -->
                                <!-- <i class="fas fa-phone-alt fa-2x"></i> -->
                                <i class="fas fa-map-marked-alt fa-2x"></i>
                                <span class="ms-2">El Fortín bl 8 mz 1511 Ecuador -
                                    Guayaquil</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <!-- <i class="far fa-envelope fa-2x"></i> -->
                                <!-- <i class="fas fa-phone-alt fa-2x"></i> -->
                                <i class="fab fa-github fa-2x"></i>
                                <span class="ms-2"><a style="text-decoration: none;color: white;" href="https://github.com/Fernando-Zhunio"> https://github.com/Fernando-Zhunio</a></span>
                            </li>
                        </ul>
                    </div>
                </div>




                <div>
                    <h3 class="border-bottom">Calificaciones</h3>
                    <div>
                        <h5 class="ps-3">Base de datos</h5>
                        <ul class="califique">
                            <li>Mysql <span>●●●●●</span> </li>
                            <li>Postgresql <span>●●●●</span></li>
                            <li>Mongo Db <span>●●●●</span></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="ps-3">Lenguajes de programación</h5>
                        <ul class="califique">
                            <li>C# <span>●●●●●</span></li>
                            <li>Java <span>●●●●●</span></li>
                            <li>Typescript <span>●●●●●</span></li>
                            <li>Javascript <span>●●●●</span></li>
                            <li>Php <span>●●●●</span></li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="ps-3">Frameworks y otros</h5>
                        <ul class="califique">
                            <li>Angular y Vue <span>●●●●●</span></li>
                            <li>Ionic <span>●●●●●</span></li>
                            <li>Laravel <span>●●●●</span></li>
                            <li>Jquery <span>●●●●</span></li>
                            <li>Bootstrap <span>●●●●●</span></li>
                            <li>Unity <span>●●●</span></li>
                            <li>Html <span>●●●●●</span></li>
                            <li>Css <span>●●●●</span></li>
                        </ul>
                    </div>

                </div>







            </div>
        </div>
        <div class="col-8 p-3">
            <div class="text-center mb-3">
                <h1 class="font-facebook fw-bold text-uppercase mb-0">Fernando Zhunio</h1>
                <div class="lead text-muted">Desarrollador de Software</div>
            </div>
            <div>
                <h3 class="border-bottom"><i class="fas fa-briefcase me-2"></i>Experiencia Profesional</h3>
                <table class="table popover-header mb-3 shadow">
                    <tbody>
                        <tr>
                            <td style="white-space: nowrap;">2012 - 2015</td>
                            <td>KLYSTRON S.A (ELECTROFACIL) Ayudante de exhibición, Ayudante de vendedor</td>
                        </tr>
                        <tr>
                            <td style="white-space: nowrap;">2015 - 2016</td>
                            <td>SMART FINGERS ADVERTISING (SFA) Instalador de vinilos control de máquina y todo tipo de publicidad</td>
                        </tr>
                        <tr>
                            <td style="white-space: nowrap;">2016 - 2017</td>
                            <td>Inurasa (Infraestructura Urbana Y Agrícola S.A.) Supervisor de maquinarias</td>
                        </tr>
                        <tr>
                            <td style="white-space: nowrap;">2020 - 2021</td>
                            <td>Novicompu (Novisolutions) Desarrollador de Software</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <h3 class="border-bottom"><i class="fas fa-user-graduate me-2"></i>Formación Académica</h3>
                <div class="pe-3 popover-header mb-3 shadow">
                    <div>
                        <h5>Secundaria</h5>
                        <p>(1ro hasta 3ro) Colegio Fiscal Mixto diurno CALICUCHIMA (4to hasta 6to) Unidad Educativa Fiscomicional IRFEYAL. </p>
                    </div>
                    <div>
                        <h5>Universidad</h5>
                        <p>Universidad de Guayaquil, Ingeniería en sistemas computacionales</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="border-bottom"><i class="fas fa-graduation-cap me-2"></i>Cursos</h3>
                <div class="pe-3 popover-header mb-3 shadow">
                    <div class="fw-ligth">
                        <i class="fas fa-ruler-combined"></i> <strong>AutoCAD:</strong> Servicio Ecuatoriano de Capacitación Profesional – SECAP, diseño 2d de planos y 3d de figuras y formas, 120 horas de duración.
                    </div>
                    <div>
                        <i class="fab fa-angular"></i><strong>Angular:</strong> edutin y udemy cursos online 60 horas de duración.
                    </div>
                </div>
            </div>

            <div>
                <h3 class="border-bottom"><i class="fas fa-university me-2"></i>Conocimiento</h3>
                <div class="pe-3 popover-header mb-3 shadow">
                    <ul class="p-0">
                        <li><i class="fas fa-arrow-right"></i> Desarrollo Frontend con Angular <i class="fab fa-angular"></i> o Vue <i class="fab fa-vuejs"></i>.</li>
                        <li><i class="fas fa-arrow-right"></i> Desarrollo Backend con laravel <i class="fab fa-laravel"></i>.</li>
                        <li><i class="fas fa-arrow-right"></i> Desarrollo en Multiplataforma con Ionic <i class="fab fa-android"></i>.</li>
                        <li><i class="fas fa-arrow-right"></i> Desarrollo de programas de escritorio con Java <i class="fab fa-java"></i> o C#.</li>
                        <li><i class="fas fa-arrow-right"></i> Diseño con css <i class="fab fa-css3"></i>, Bootstrap 4 <i class="fab fa-bootstrap"></i> y angular material.</li>
                        <li><i class="fas fa-arrow-right"></i> Diseño de base de datos con mysql, postgresql <i class="fas fa-database"></i>.</li>
                        <li><i class="fas fa-arrow-right"></i> Conocimiento empírico de Unity <i class="fab fa-unity"></i> motor de desarrollo de videojuegos.</li>
                    </ul>
                </div>
            </div>



        </div>
    </div>
</body>

</html>