<?php

function product ($name, $price, $image){

    return '<div class="col mb-4">
                <div class="card shadow h-100">
                <img src="$image.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-title h5">Bolo 1 Andar</p>
                    <p class="card-text">Preco: 3 000MTs</p>
                    <button class="btn btn-success" type="submit" name="add">Adicionar</button>
                </div>
                </div>
            </div>';
}