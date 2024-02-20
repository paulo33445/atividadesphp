<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  
    <title>calculadora</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <?php 
            if($_POST){
                $n1 = $_POST['N1']; 
                $n2 = $_POST['N2']; 
                $total = 0;

                if(isset($_POST['btomais'])){
                    $total = $n1 + $n2;
                }
                elseif(isset($_POST['btomenos'])){
                    $total = $n1 - $n2;
                }
                elseif(isset($_POST['btovezes'])){
                    $total = $n1 * $n2;
                }
                elseif(isset($_POST['btodiv'])){
                    $total = $n1 / $n2;
                }
                else{
                    echo ("erro");
                }
                
                echo ("O resultado da operação é: " . $total);
            }

              
            ?>
        </div>
    </div>
</div>
 
</body>
</html>