<?php

function product ($item, $price, $img, $id, $prod = null){

   $prod .= '<div class="col mb-4">
                <form action="" method="post">
                    <div class="card shadow h-100">
                        <img src=util/imgs/'.$img.' class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-title h5">'.$item.'</p>
                            <p class="card-text">Preco: '.$price.' MTs</p>
                            <button class="btn btn-success" type="submit" name="add" value="_add">Adicionar</button>
                            <input type="hidden" name="item_id" value="'.$id.'">
                        </div>
                    </div>
                </form>
            </div>';
            echo $prod;
}

function cart ($item, $price, $img, $del, $prod = null){

    $prod .= '<form action="cart.php?action=remove&id='.$del.'" method="get">
                    <div>
                        <div class="row">
                            <div class="card col-md-8">
                                <img src=util/imgs/'.$img.' class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title h5">Item: '.$item.'</h5>
                                    <p class="card-text">Preco: '.$price.'Mts</p>
                                    <button name="remove" type= "submit" class="btn btn-danger">Remover</button>
                                </div>
                            </div>
                            <div class = "col-md-4">
                                <div class="">
                                    <button class =" btn btn-secondary "> <img src="util/icons/add_32px.png" alt=""></button>
                                    <input type="text" value ="1" name="" id="" class = "form-control">
                                    <button class =" btn btn-secondary "> <img src="util/icons/minus_32px.png" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>';
                echo $prod;
}