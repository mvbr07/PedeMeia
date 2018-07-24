<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pede Meia</title>
        <?php
            include "includes.php";
        ?>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="pedeMeia centralizar"><h1>Pede Meia</h1></div>
            <a class="navbar-brand logIn" href="login.php">Log in</a>
        </div>        
        
        <?php
            include "menu.php";
        ?>

        <div class="row espaco">
            
        </div>
        
        <div class="row">
            <?php 
                for($x=0; $x < 6; $x++){
            ?>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 campoProduto">
                <a class="" data-toggle="modal" href='#modal-id<?php echo $x?>'>
                    <div class="polaroid"><img class="img" src="assets/img/teste.jpeg" alt="teste"></div> 
                </a>   
            </div>
            
            <div class="modal fade" id="modal-id<?php echo $x?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">teste</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <p>aaaaaaaaaaaaaaaaaaaa aaaaa aaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaa aaaaaaaaa</p>
                                
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="number" name="quant" id="inputQuant<?php echo $x?>" class="form-control" value="" min="1" max="" step="" required="required" title="">   
                            
                            <button type="button" class="btn btn-default">Comprar</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

        </div>

        <div class="row espaco">
            
        </div>

        <div class="row ">
            <p class="centralizar">rodape da pagina - 2018</p>
        </div>
        
    </div>    
</body>
</html>