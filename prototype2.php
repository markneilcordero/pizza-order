<!Doctype html>
<html>
<head>
    <title>Prototype 2</title>
    <!-- <meta http-equiv="refresh" content="5"> -->
</head>
<body>

<?php

    // Customer Information
    echo "<form action='prototype3.php' method='POST'>";
    echo "Name : " . $_POST['name'];
    echo "<br/>";
    echo "Address : " . $_POST['address'];
    echo "<br/>";
    echo "Contact Number : " . $_POST['contact'];
    echo "<br/>";

    if(isset($_POST['pizza'])){
        $size = $_POST['pizza'];

        $s = 100.00;
        $m = 200.00;
        $l = 300.00;

        if($size == "Small"){    
            $size_amount = $s;
        }elseif($size == "Medium"){
            $size_amount = $m;
        }elseif($size == "Large"){
            $size_amount = $l;
        }else{
            $size_amount = "";
        }
    }

    if(isset($_POST['crust'])){
        $crust = $_POST['crust'];

        $thin = 25.00;
        $regular = 50.00;
        $thick = 75.00;

        if($crust == "Thin"){
            $crust_amount = $thin;
        }elseif($crust == "Regular"){
            $crust_amount = $regular;
        }elseif($crust == "Thick"){
            $crust_amount = $thick;
        }else{
            $crush_amount = "";
        }
    }

    if(isset($_POST['drink'])){
        $drink = $_POST['drink'];

        $soft_drink = 25.00;
        $iced_tea = 30.00;
        $fruit_juice = 30.00;

        if($drink == "Soft Drinks"){
            $drink_amount = $soft_drink;
        }elseif($drink == "Iced Tea"){
            $drink_amount = $iced_tea;
        }elseif($drink == "Fruit Juice"){
            $drink_amount = $fruit_juice;
        }else{
            $drink_amount = "";
        }
    }

    if(isset($_POST['toppings'])){
        $toppings = $_POST['toppings'];

        $topp_amount = 20.00;
        $zero_amount = 0;

        if($toppings == ""){
            $toppings_amount = $zero_amount;
        }else{
            $toppings_amount = $topp_amount;
        }
    }

    $subTotal = $size_amount + $crust_amount + $drink_amount +
    $toppings_amount;

    $vat = $subTotal * 12 / 100;

    $totalAmount = $subTotal + $vat;

    echo "<br/>";
    // Customer Receipt
    echo "Size : " . $size . " : " . $size_amount;
    echo "<br/>";
    echo "Type : " . $crust . " : " . $crust_amount;
    echo "<br/>";
    echo "Drinks : " . $drink . " : " . $drink_amount;
    echo "<br/>";
    echo "Extra Toppings : " . $toppings . " : " . $toppings_amount;
    echo "<br/>";
    echo "Sub-total : " . $subTotal;
    echo "<br/>";
    echo "12% VAT : " . $vat;
    echo "<br/>";
    echo "TOTAL AMOUNT : " . $totalAmount;
    echo "<br/>";

?>

<input type="submit" value="Confirm Order"/>
</form>
<a href="prototype1.php"><button>Back</button></a>

</body>
</html>