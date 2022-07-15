<!DOCTYPE html>
<html lang="en">
<head>
<?php include "componentes/head.html"; ?>
    <title>GoPro</title>
</head>
<body>
    <header>
        <?php include "componentes/menu.html"; ?>
        <!-- <video autoplay muted loop src="video/video.mp4"></video> -->
        <img src="img/fondo-1.png" alt="">
        <h1 class="titulo">Be a Hero</h1>
        <div class="mensaje flex fdcolumn jbetween acenter">
            <p>Accede a nuestro comparador</p>
            <a href="comparador.php">Comparar</a>
        </div>
    </header>
    <section class="galeria flex flwrap">
        <div class="mi-col flex fdcolumn">
            <div class="fila izquierda">
                <div class="tarjeton">
                    <h2>GoPro Hero 10</h2>
                    <h3>Una nueva forma de grabar</h3>
                    <p> 
                        <a href="">Leer más </a>
                        <a href="">Comprar ahora </a>
                    </p>
                </div>
                <img src="img/pexels-frans-van-heerden-624015.jpg" alt="">
                <div class=" marco flex acenter jcenter" >
                    <img src="img/hero10-manosmujer.jpg" alt="">
                </div>
            </div>
            <div class="fila izquierda segunda">
                <div class="tarjeton">
                    <h2>GoPro Hero 8</h2>
                    <h3> Más allá de la acción</h3>
                    <p> 
                        <a href="">Leer más </a>
                        <a href="">Comprar ahora </a>
                    </p>
                </div>
                <img src="img/pexels-inchs-7048175.jpg" alt="">
                <div class=" marco flex acenter jcenter" >
                    <img src="img/hero8agua.PNG" alt="">
                </div>
            </div>    
        </div>
        <div class="mi-col flex fdcolumn">
            <div class="fila derecha">
                <div class="tarjeton">
                    <h2>GoPro Hero 9</h2>
                    <h3>Imágenes por encima de todo</h3>
                    <p> 
                        <a href="">Leer más </a>
                        <a href="">Comprar ahora </a>
                    </p>
                </div>
                <img src="img/pexels-piccinng-3075993.jpg"  alt="">
                <div class=" marco flex acenter jcenter" >
                    <img src="img/hero9noche.PNG" alt="">
                </div>
            </div>
            <div class="fila derecha segunda">
                <div class="tarjeton">
                    <h2>GoPro MAX</h2>
                    <h3>Todo en uno</h3>
                    <p> 
                        <a href="">Leer más </a>
                        <a href="">Comprar ahora </a>
                    </p>
                </div>
                <img src="img/pexels-photo-bmx.jpeg"  alt="">
                <div class=" marco flex acenter jcenter" >
                    <img src="img/gopromax360.PNG" alt="">
                </div>
            </div>    
        </div>
    </section>
    <section class="slider wrapper">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/tortuga.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Capturado con GoPro HERO10 Black </h5>
                        <p>
                            <a href="#">Galería</a> 
                            <a href="#">Leer más</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <video autoplay muted loop class="d-block w-100" src="video/production_4761738.mp4"></video>
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Capturado con GoPro HERO10 Black Edición para creadores</h5>
                        <p>
                            <a href="#">Galería</a> 
                            <a href="#">Leer más</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/paracaidas.png" alt="">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Capturado con GoPro HERO10 Black Bones</h5>
                        <p>
                            <a href="#">Galería</a> 
                            <a href="#">Leer más</a>
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <div class="col-triple">
        <h2>Descubre los productos GoPro en diversos ámbitos</h2>
    </div>
    <section class="galeria flwrap flex wrapper-tarjeton">
        <div class="mi-col flex fdcolumn zoom">
            <div class="tarjeton triple">
                <h4>Accesorios para tu GoPro</h4>
                <p>
                    ver más <i class="fa-solid fa-chevron-right"></i>
                </p>
            </div>
            <img src="img/accesoriosgoproretoque.png" alt="">
        </div>
        <div class="mi-col flex fdcolumn zoom">
            <div class="tarjeton triple">
                <h4>Edita y comparte como un Pro</h4>
                <p>
                    ver más <i class="fa-solid fa-chevron-right"></i>
                </p>
            </div>
            <img src="img/editor-editado.png" alt="">
        </div>
        <div class="mi-col flex fdcolumn zoom">
            <div class="tarjeton triple">
                <h4>Complementos para el estilo GoPro</h4>
                <p>
                    ver más <i class="fa-solid fa-chevron-right"></i>
                </p>
            </div>
            <img src= "img/mochilas-retoque.png"  alt="">    
            </div>
    </section>
    <?php include "componentes/footer.html"; ?>
</body>
</html>
