<?php

include __DIR__.'/util/header.php';
?>
    <main>
        
        <section  id="home">
            <!--<img src="util/imgs/Black_Forest_Cake-3.jpg" class="img-fluid" alt="header" alt="Responsive image">-->
            <div class="container ">
                <div class="row pt-5 ">
                    <div class="home-text text-center">
                        <h1>Jamila Kitutes</h1>
                        <p class ="display-3">Sabores Mágicos</p>
                        <p class="display-6">Uma vez provado, para sempre viciado!</p>
                        <button type="button" class="my-5 btn btn-warning btn-lg">Fazer pedido</button>
                        <div class="row">
                            <button type="button" class="col mx-5 btn btn-warning">Para eventos</button>
                            <button type="button" class="col mx-5 btn btn-warning">Contacte-nos</button>
                            <button type="button" class="col mx-5 btn btn-warning">Cobertura de entregas</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class= "col-12 justify-items-center text-center bg-#000">
            <img src="util/icons/discount_100px.png" alt="">
            <h5>Ofertas Imperdíveis</h5>
            <p>Ofereçemos bónus de +1 Item para compras superiores a 1200 Mts!</p>
        </div>        
        <hr/>
        <div>
            <h3 class="text-center my-5">Dúvidas sobre como pedir entraga?</h3>
            <div class= "row text-center">
                <div class= "col-xl-3 col-md-6 col-12">
                    <img src="util/icons/time_64px.png" alt="">
                    <h5>Escolha a hora</h5>
                    <p>Escolha a hoa que lhe convém receber a deliciosa encomenda, Seja preciso e fique a espera de nós!</p>
                </div>
                <div class= " col-xl-3 col-md-6 col-12">
                    <img src="util/icons/choose_100px.png" alt="" class="mb-3">
                    <h5>Selecione o pedido</h5>
                    <p>Faça a escolha do pedido, navegue pelo site escolha das inúmeras delicias e adicione ao carrinho o que desejar!</p>
                </div>
                <div class= "col-xl-3 col-md-6 col-12">
                    <img src="util/icons/next_location_64px.png" alt="">
                    <h5>Informe sua localização</h5>
                    <p>Indique sua localização, verifique com ajuda do nosso mapa no menu <strong>Zona de cobertura</strong> nossa área de cobertura para entregas </p>
                </div>
                <div class= "col-xl-3 col-md-6 col-12">
                    <img src="util/icons/delivery_60px.png" alt="" class="mb-1">
                    <h5>Espere pela Entrega</h5>
                    <p>O pagamento é feito no momento da entrega! Aceitamos <strong> Cash, M-pesa, M IZI  e conta móvel</strong></p>
                </div>
            </div>
        </div>
        <div class= "m-5">
            <div class="text-center m-2">
                <h3>Nossas Promoções</h3>
            </div>
            <div class="text-center row justify-content-center">
                <div id="carouselExampleDark" class="carousel carousel-light slide col-8" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner ">
                        <div class="carousel-item active" data-bs-interval="2000">
                        <img src="util/imgs/IMG-20210818-WA0011.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-warning">
                            <p class = "display-3"> Quartas loucas </p>
                            <p>Promoções de bolos no pote por apenas 75MT</p>
                        </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="util/imgs/IMG-20210818-WA0024.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-warning">
                            <p class ="display-3"> Quintas Abusadas</p>
                            <p>Promoções de cupcakes nas quintas</p>
                        </div>
                        </div>
                        <div class="carousel-item" data-interval="1000">
                        <img src="util/imgs/IMG-20210818-WA0041.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-warning">
                            <p class = "display-3 "> Sabados surreais</p>
                            <p> Promoção de bolos começando por apenas 700MT</p>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>    
    </main>
<?php
include __DIR__.'/util/footer.php';
?>