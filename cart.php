<?php

session_start();

include __DIR__.'/util/header.php';
require_once __DIR__.'/util/item.php';
require_once __DIR__.'/src/Database.php';

use Src\Database;

$database = new Database();

if(isset($_POST['remove'])){
    print_r($_GET['action']);
    if($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key =>$value){
            if($value['item_id'] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo '<div class="alert alert-danger" role="alert"> Producto Eliminado!</div>';
                header('location: cart.php?status = sucess');
            }
        }
    }
}

?>

<div class="container">

    <div class ="row text-center">

        <div class="col-md-6">
            <div>
                <p class = "h3 my-3">Carrinho de Items</p>
                <?php
                
                $total =0;
                if(isset($_SESSION['cart'])){
                    $cart_item = array_column($_SESSION['cart'], 'item_id');
                    $items = $database->getRows('items',array('order_by'=>'image ASC'));

                    foreach ($cart_item as $c_item) {

                        foreach($items as $item){

                            if($item['id'] == $c_item){
                                cart($item['item'], $item['price'],$item['image'], $item['id']);
                                $total += (int)$item['price'];
                            }
                        }
                    }
                }else
                    echo '<p class = "h3"> Carrinho vazio </p>';
                ?>    
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <p class ='h3 my-3'> Cotação</p>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <?php
                            if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo '<p class = "h3"> Numero de Items: '.$count.' items </p>';
                            }else
                                echo '<p class = "h3"> Sem Items </p>';
                        ?>
                    </div>
                    <div class="col-md-6 text-center">
                        <p class = "h4"> Total a pagar: <?php echo $total;?> </p>
                    </div>
                </div>
                
            </div>


            <form action ="sendmail.php" method="POST" class = "my-10">
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input name = "email" type="email" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputPassword4">Senha</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" name="adress" placeholder="Bairro, Avenida e Rua">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Nome</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="phonenumber">Número de Telefone</label>
                        <input type="text" class="form-control col-md-6" name ="phone">
                        <label for="inputState">Hora da entrega</label>
                        <select name="hour" class="form-control col-md-6">
                            
                            <option selected>Escolha...</option>
                            <option><?php echo date("h:i", strtotime('+3 hour')); ?></option>
                            <option><?php echo date("h:i" , strtotime('+5 hour')); ?></option>
                            <option><?php echo date("h:i" , strtotime('+7 hour')); ?></option>
                            <option><?php echo date("h:i" , strtotime('+9 hour')); ?></option>
                        </select>
                    </div>
                </div>
                <button type="submit" value = "send" class="btn btn-warning my-5">Confirmar Ordem</button>
            </form>

            
        </div>
    </div>
</div>
