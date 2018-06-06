<?php
    function myAutoload($className)
    {  
        $pathToFile = $className . '.php';
        $separator = array('\\', '/');
        $pathToFile = str_replace( $separator , DIRECTORY_SEPARATOR, $pathToFile );
        if (file_exists($pathToFile)){
            include "$pathToFile"; 
        } 
        else 
        {             
            echo "<br><span style=\"font-size: 22px; color: red; font-style: italic; \";>Файл с классом \"$className\" не найден.</span>";
        }
    };
    spl_autoload_register('myAutoload');
    $duckEn = new \classes\birds\Scrooge('Scrooge McDuck', '');
    $duckEn->makeSound(); 
    $penParker = new \classes\products\BallpointPen('Parker Jotter', 3000);
    $penParker->setMark();
    $penPero = new \classes\products\BallpointPen('Pero Caran', 3500, 'черная');
    $penPero->setMark();
    $Mini = new \classes\products\Car('MINICooper', 1500000);
    $Mini->setMark();
    $tvLG = new \classes\products\TV('LG 43UH610V', 49000);
    $tvLG->setMark();
    $tvSony = new \classes\products\TV('Sony KD-65XE9305', 46000);
    $tvSony->setMark();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>lesson 3.3</title>
    <style>
        * {
            font-family: sans-serif;
        }
       
        h1 {
            font-style: italic;
            font-size: 22px;
            color: green;   
        }
        body {
            max-width: 1000px;
            margin: 10px auto;
        }
        li {
            padding: 10px 0;
        }
        button {
            border: 2px solid green;
            font-size: 16px; 
            display: inline-block;
            width: 40%; 
            margin-right: -50%;
        }
    </style>
</head>
<body>

<h1>История корзины</h1>
    
<?php
    $Baskett = new \classes\Basket();
    $Baskett->addProduct($penParker);
    $Baskett->addProduct($penParker);
    $Baskett->addProduct($penParker);
    echo '<br>';
    
    $Baskett->addProduct($penParker);
    $Baskett->addProduct($tvLG);
    $Baskett->addProduct($tvSony);
    echo '<br>';
    
    $Baskett->deleteOneProduct($penParker);
    $Baskett->deleteOneProduct($tvSony);
    echo '<br>';
    
    $Baskett->addProduct($Mini);
?>

<h1>Вывод корзины</h1>
    
<?php
    $Baskett->showAllProduct(); 
?>
    
<h1>Вывод заказа</h1>
    
<?php
    $Order = new \classes\Order();
    $Order->setOrder($Baskett); 
    $Order->showAllProduct(); 
?>
    
<br>
<button>Подтвердить заказ</button>
</body>
</html>
