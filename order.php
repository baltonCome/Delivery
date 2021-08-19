<?php

include __DIR__.'/util/header.php';
require_once __DIR__.'/util/item.php';

if(isset($_POST['add'])){
    $cart = 'Produto: Bolo 1 andar';
    $pric = '3000Mts';
}


?>
    <main>
        <div class="row my-2">
            <div class="col-2">
                <div class="navbar-nav flex-column position-fixed">
                    <ul>
                        <li class= "outline">
                            <a class="nav-link btn">Bolos</a>        
                        </li>
                        <li>
                            <a class="nav-link btn" >Doces</a>
                        </li>
                        <li>
                            <a class="nav-link btn" >Salgados</a>
                        </li>
                        <li>
                            <a class="nav-link btn" >Sobremesas</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-7">
                <div>
                    <img src="util/imgs/IMG-20210817-WA0051.jpg" alt="Menu de preços" class="img-fluid shadow">
                </div>
                <div>
                    <h3 class="text-center my-3">Itens em Destaque</h3>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="util/imgs/1Andar 3k (4).jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Bolo 1 Andar</p>
                                <p class="card-text">Preco: 3 000MTs</p>
                                <input type="hidden" name="price" value="3000">
                                <input type="hidden" name="prod" value="Bolo 1 Andar">
                                <button class="btn btn-success" type="submit" name="add" value="_add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="util/imgs/24cm x2 1.9k (4).jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Cupcake 12</p>
                                <p class="card-text">Preco: 1000MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="util/imgs/brand.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Mini Pizza</p>
                                <p class="card-text">Preco: 700MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="util/imgs/16cm 0.8k (3).jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Pudim, médio</p>
                                <p class="card-text">Preco: 600Mts</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-center my-3">Bolos</h3>
                    <div class="row row-cols-2 row-cols-md-3">
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="util/imgs/14cm 0.7k 2.0.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Bolo 14cm</p>
                                <p class="card-text">Preco: 700MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Cupcake 12</p>
                                <p class="card-text">Preco: 1000MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Mini Pizza</p>
                                <p class="card-text">Preco: 700MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Pudim, médio</p>
                                <p class="card-text">Preco: 600Mts</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Mini Pizza</p>
                                <p class="card-text">Preco: 700MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Pudim, médio</p>
                                <p class="card-text">Preco: 600Mts</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Bolo 26cm X2</p>
                                <p class="card-text">Preco: 2 200MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Cupcake 12</p>
                                <p class="card-text">Preco: 1000MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Mini Pizza</p>
                                <p class="card-text">Preco: 700MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Pudim, médio</p>
                                <p class="card-text">Preco: 600Mts</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Mini Pizza</p>
                                <p class="card-text">Preco: 700MTs</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card shadow h-100">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-title h5">Pudim, médio</p>
                                <p class="card-text">Preco: 600Mts</p>
                                <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 position-sticky">
                <h3> <img src="util/icons/cart.png" alt=""> Carrinho</h3>
                <p><?php $cart ?> <br> <?php $pric ?></p>
            </div>
        </div>
    </main>
<?php
include __DIR__.'/util/footer.php';
?>