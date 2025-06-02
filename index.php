<?php
$modalidades = [
    [
        "title" => "Ciencias Sociales y Humanidades",
        "image" => "assets/humanidades.webp",
        "description" => "Comprender la dinámica del mundo natural a través del desarrollo de los
                            aportes de la Ciencia de la Vida, la Ciencia de la Tierra y la Ciencias
                            Físico- Químicas.
                            Observar, analizar y explicar los fenómenos de la Naturaleza con actitud
                            crítica, responsable y ética.
                            Manifestar amplitud de criterio frente a opiniones diversas,
                            comprendiendo el carácter de la Ciencia como una aproximación cambiante
                            y dinámica, sin dogmas ni verdades absolutas."
    ],
    [
        "title" => "Economía y Administración",
        "image" => "assets/economia.webp",
        "description" => "
Afrontar las nuevas variables y paradigmas, exige desarrollar en los jóvenes sus capacidades para intervenir, operar y estudiar en este ámbito con la convicción y flexibilidad necesarias. La capacitación para esta realidade se basa no sólo en el desarrollo de las tareas afines a la modalidad, sino que se distingue especialmente de la enseñanza estándar en aspectos que fortalecen el perfil de nuestros egresados."
    ],
    [
        "title" => "Ciencias Naturales",
        "image" => "assets/naturales.webp",
        "description" => "
Comprender la dinámica del mundo natural a través del desarrollo de los aportes de la Ciencia de la Vida, la Ciencia de la Tierra y la Ciencias Físico- Químicas. Observar, analizar y explicar los fenómenos de la Naturaleza con actitud crítica, responsable y ética. Manifestar amplitud de criterio frente a opiniones diversas, comprendiendo el carácter de la Ciencia como una aproximación cambiante y dinámica, sin dogmas ni verdades absolutas."
    ],

]

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Instituto Roberto Vicentin</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/eesopi-150.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <?php include 'navigation.php'; ?>

            <?php include 'header.php'; ?>

            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Enlaces útiles</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Alumnos</h2>
                                    <p class="mb-0">Contribuciones de los alumnos</p>
                                    <button type="button" class="btn btn-outline-success btn-sm">Proximamente...</button>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Instituto</h2>
                                    <a href="https://maps.app.goo.gl/kxoUhUWsFZ7WDf36A" target="_blank"> <p class="mb-0"> Calle 14 Nº 581 Avellaneda, Pcia. de Santa Fe, Avellaneda, Argentina</p></a>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-calendar-event"></i></i></div>
                                    <h2 class="h5">Incripciones Mesas de Examen</h2>
                                    <p class="mb-0">Ya puedes inscribirte en nuestras mesas de examenes hasta el <span class="fw-bolder text-danger">16 de junio del 2025 </span></p>
                                    <br>
                                    <a href= "fechasexamenes.html"><button type="button" class="btn btn-warning">Fechas</button></a>
                                    <a href="https://pc.aepa.ar/inscripexam" target="_blank"> <button type="button" class="btn btn-danger">Inscribete</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"¿Buscás nuevas pasiones por explotar o deseas potenciar tus habilidades existentes?"</div>
                                <p class="small text-nowrap mb-3" >Fotografía, Informática, Ciencia en Acción, Batucada, Comunidad Iluminar, Juegos de Rol y Agedrez. </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSehqq0j-upN5rc4828UcwIPlzceTJYxaaT___DbA982lSzYXw/viewform"><botton class="btn btn-primary" type="button">Ir a Talleres</button><a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Modalidades</h2>
                                <p class="lead fw-normal text-muted mb-5"> En el Instituto Roberto Vicentin, entendemos que cada estudiante tiene un camino único. Por eso, nuestras modalidades están enfocadas en brindarte una preparación integral, ya sea que apuntes a una carrera universitaria o busques una rápida y efectiva inserción en el mundo laboral. Te ofrecemos las herramientas y el acompañamiento para que tomes la mejor decisión y alcances tus objetivos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <?php foreach ($modalidades as $modalidad) : ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo $modalidad['image']; ?>" alt="<?php echo $modalidad['title']; ?>" />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3"><?php echo $modalidad['title']; ?></h5></a>
                                    <p class="card-text mb-0"><?php echo $modalidad['description']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="col-lg-4 mb-5">
                        </div>
                    </div>
                    <!-- Call to action-->
                    <!-- <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                                <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside> -->
                </div>
            </section>
            <?php include 'btn-whatsapp.php'; ?>
        </main>
        <?php include 'footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
