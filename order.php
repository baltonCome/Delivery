<?php

session_start();

include __DIR__.'/util/header.php';
require_once __DIR__.'/util/item.php';
require_once __DIR__.'/src/Database.php';

use Src\Database;

$database = new Database();

if(isset($_POST['add'])){

    if(isset($_SESSION['cart'])){

        $id_items_array = array_column($_SESSION['cart'], "item_id");
        print_r($id_items_array);
        if(in_array($_POST['item_id'], $id_items_array)){

            echo '<div class="alert alert-danger" role="alert"> Producto Já adicionado!</div>';
            header('location: order.php?status = error');
        }else{

            $count = count($_SESSION['cart']);
            $array_items = array('item_id' => $_POST['item_id']);
            $_SESSION['cart'][$count] = $array_items;
        }
    }else{

        $array_items = array('item_id' => $_POST['item_id']);
        $_SESSION['cart'][0] = $array_items;
    }
    
}

?>
    <main>
        <div class="row my-2">
            <div class="col-2">
                <div class="navbar-nav flex-column position-fixed">
                    <form action="" method="post">
                        <ul>
                        <li class= "outline">
                            <a type="submit" class="nav-link btn btn-warning my-2">Bolos</a>        
                        </li>
                        <li>
                            <a type="submit" class="nav-link btn btn-warning my-2" >Doces</a>
                        </li>
                        <li>
                            <a type="submit" class="nav-link btn btn-warning my-2" >Salgados</a>
                        </li>
                        <li>
                            <a type="submit" class="nav-link btn btn-warning my-2" >Sobremesas</a>
                        </li>
                    </ul>
                    </form>
                </div>
            </div>
            <div class="col-7">
                <div>
                    <img src="util/imgs/IMG-20210817-WA0051.jpg" alt="Menu de preços" class="img-fluid shadow">
                </div>
                <div>
                    <h3 class="text-center my-3">Itens em Destaque</h3>
                    <div class="row row-cols-1 row-cols-md-2">
                        <?php
                        $items = $database->getRows('items',array('order_by'=>'image ASC'));
                        foreach($items as $item){
                            product($item['item'], $item['price'],$item['image'], $item['id']);
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-3 position-sticky">
                <h3> <img src="util/icons/cart.png" alt=""> Carrinho</h3>
                <a class= "btn btn-warning" href="cart.php">
                <?php
                    if(isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo '<p> Processar Pedido ' .$count.'</p>';
                    }else{
                        echo 0;
                    }
                ?>                      
                </a>
            </div>
        </div>
    </main>
<?php
include __DIR__.'/util/footer.php';
?>