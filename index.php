<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DODO</title>
  </head>
  <body>
    <div class="col-10 mx-auto">     
        <div class="row">   <!-- header -->
            <div class="col-2">
                <img src="img/logo.jpg" class="w-100">
            </div>
            <div class="col-7">
                
            </div>
            <div class="col-3 text-right">
                <button class="btn bg-btn-dodo mt-5 basket">Корзина</button>
            </div>

            <div class="bsk-box bg-white border rounded col-3 pt-3"> <!-- Корзина -->
                <?php 
                    $con = mysqli_connect('127.0.0.1', 'root', '', 'dodopizza');
                    $q = mysqli_query($con, "SELECT * FROM basket");
                    $num = mysqli_num_rows($q);
                    for ($i=0; $i < $num; $i++) { 
                        # code...
                        $str = $q -> fetch_assoc();
                 ?>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo $str['img'] ?>" class="w-100">
                    </div>
                    <div class="col-4 mt-2">
                        <h5><?php echo $str['name'] ?></h5>                        
                    </div>
                    <div class="col-2 mt-2 px-0 text-center">
                        <h5><?php echo $str['price'] ?> <span>₽</span></h5>                        
                    </div>
                    <div class="col-2 mt-2">
                   
                        <form action="delete-pizza.php" method="GET">
                            <input type="" name="id" class="d-none" value="<?php echo $str['id'] ?>">
                            <button style='border: none; background: none'> <img src="img/trash.png" class="w-100"></button>
                        </form>   
                   
                        
                    </div>
                </div>  
                <?php 
                    }
                 ?>
                 <h5>
                     Сумма заказа: <?php
                         $q = mysqli_query($con, "SELECT SUM(price) as total FROM basket");
                         $str = $q -> fetch_assoc();
                         echo $str['total'];
                         ?>

                 </h5>
   
                 <div class="row">
                     <button class="btn bg-btn-dodo cls my-3 ml-3">Закрыть</button>
                    <form action="clear.php" class="ml-3">
                        <button class="btn bg-btn-dodo cls my-3">Очистить</button>
                    </form>
                 </div>
                
            </div>
        </div>     
        <div class="d-flex">
            <h5><a class="text-decoration-none text-dark" href="#pizza">Пицца</a></h5>
            <h5 class="ml-3"><a class="text-decoration-none text-dark" href="#beverages">Напитки</a></h5>
            <h5 class="ml-3"><a class="text-decoration-none text-dark" href="#desserts">Дессерты</a></h5>
        </div>
        <div class="col-12 rounded banner mt-4"> <!-- banner -->            
        </div>

        <h1 class="my-5"><a name="pizza">Пицца</a></h1>
        <div class="row  pb-5">
            <?php 
                
                $q = mysqli_query($con, "SELECT * FROM products WHERE category = 'pizza'");
                $num = mysqli_num_rows($q);
                for ($i=0; $i < $num; $i++) { 
                    # code...
                    $str = $q -> fetch_assoc();
             ?>
            <div class="col-3">   
                <img src="<?php echo $str['img'] ?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $str['name'] ?></h3>   
                    <p class="text-secondary"><?php echo $str['description'] ?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $str['price'] ?> <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
                        <form action="insert-pizza.php" method="GET">
                            <input type="" name="name" class="d-none" value="<?php echo $str['name'] ?>">
                             <input type="" name="img" class="d-none" value="<?php echo $str['img'] ?>">
                              <input type="" name="price" class="d-none" value="<?php echo $str['price'] ?>">
                            <button class="btn bg-btn-dodo">Выбрать</button> 
                        </form>
                
                                              
                    </div>
                </div>       
            </div>
            <?php 
                }
             ?>
                                
        </div>

        <h1 class="my-5"><a name="beverages">Напитки</a></h1>
        <div class="row  pb-5">
            <?php 
                
                $q = mysqli_query($con, "SELECT * FROM products WHERE category = 'beverage'");
                $num = mysqli_num_rows($q);
                for ($i=0; $i < $num; $i++) { 
                    # code...
                    $str = $q -> fetch_assoc();
             ?>
            <div class="col-3">   
                <img src="<?php echo $str['img'] ?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $str['name'] ?></h3>   
                    <p class="text-secondary"><?php echo $str['description'] ?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $str['price'] ?> <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
                        <form action="insert-pizza.php" method="GET">
                            <input type="" name="name" class="d-none" value="<?php echo $str['name'] ?>">
                             <input type="" name="img" class="d-none" value="<?php echo $str['img'] ?>">
                              <input type="" name="price" class="d-none" value="<?php echo $str['price'] ?>">
                            <button class="btn bg-btn-dodo">Выбрать</button> 
                        </form>
                
                                              
                    </div>
                </div>       
            </div>
            <?php 
                }
             ?>
                                
        </div>
        <h1 class="my-5"><a name="desserts">Дессерты</a></h1>
        <div class="row  pb-5">
            <?php 
                
                $q = mysqli_query($con, "SELECT * FROM products WHERE category = 'dessert'");
                $num = mysqli_num_rows($q);
                for ($i=0; $i < $num; $i++) { 
                    # code...
                    $str = $q -> fetch_assoc();
             ?>
            <div class="col-3">   
                <img src="<?php echo $str['img'] ?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $str['name'] ?></h3>   
                    <p class="text-secondary"><?php echo $str['description'] ?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $str['price'] ?> <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
                        <form action="insert-pizza.php" method="GET">
                            <input type="" name="name" class="d-none" value="<?php echo $str['name'] ?>">
                             <input type="" name="img" class="d-none" value="<?php echo $str['img'] ?>">
                              <input type="" name="price" class="d-none" value="<?php echo $str['price'] ?>">
                            <button class="btn bg-btn-dodo">Выбрать</button> 
                        </form>
                
                                              
                    </div>
                </div>       
            </div>
            <?php 
                }
             ?>
                                
        </div>
    </div>

    <script type="text/javascript">
        let bsk = document.querySelector('.basket');
        let bsk_box = document.querySelector('.bsk-box');
        let close = document.querySelector('.cls');

        bsk.onclick = function() {
            bsk_box.style.display = "block";
        }

        close.onclick = function() {
            bsk_box.style.display = "none";
        }

    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>