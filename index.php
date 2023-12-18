<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Siglo 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a href="./" class="navbar-brand"><img src="./assets/img/logo2.png" alt="logo restaurant xxi" width="250"></a>

                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menubar" aria-controls="menubar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menubar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item"><a href="./" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Carta</a></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#mdlLogin">Reservar Mesa</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Pregunta Frecuentes</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-danger fw-medium" data-bs-toggle="modal" data-bs-target="#mdlLogin">INICIAR SESION</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <section>
            <h2 class="fw-normal text-center p-4">¡Platos destacados!</h2>

            <div class="container">
                <article class="d-flex justify-content-center align-items-center">
                    <div class="row row-cols-1-row cols-md-2 row-cols-lg-3 g-4">
                        <div class="col">
                            <article class="card">
                                <img src="./assets/img/platos/plato1.webp" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Plato 1</h5>
                                    <p class="card-text m-0">Rico plato para servir en familia o amigos, con un sabor unico y especial.</p>
                                    <h4 class="card-text text-end fw-bold m-0 text-danger">$ 15.00</h4>
                                    <a href="#" class="btn btn-outline-primary">Ver más <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </article>
                        </div>
                    
                        <div class="col">
                            <article class="card">
                                <img src="./assets/img/platos/plato1.webp" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Plato 1</h5>
                                    <p class="card-text m-0">Rico plato para servir en familia o amigos, con un sabor unico y especial.</p>
                                    <h4 class="card-text text-end fw-bold m-0 text-danger">$ 15.00</h4>
                                    <a href="#" class="btn btn-outline-primary">Ver más <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </article>
                        </div>
                    
                        <div class="col">
                            <article class="card">
                                <img src="./assets/img/platos/plato1.webp" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Plato 1</h5>
                                    <p class="card-text m-0">Rico plato para servir en familia o amigos, con un sabor unico y especial.</p>
                                    <h4 class="card-text text-end fw-bold m-0 text-danger">$ 15.00</h4>
                                    <a href="#" class="btn btn-outline-primary">Ver más <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>


    <footer>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/141371d4e4.js" crossorigin="anonymous"></script>
</body>
</html>


<?php include_once 'template/mdlLogin.html'; ?>

