<!Doctype html>
<html>
<head>
    <title>Pizza Ordering | Page 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <meta http-equiv="refresh" content="5"> -->
</head>
<body>

<div class="main">
    <h1 class="title">GWAPO'Z PIZZA ON-LINE ORDERING</h1>

    <h2>ORDER INFORMATION : </h2>

    <table border="2">
        <tr>
            <td>Customer Name : </td>
            <td><?php echo $_POST['name']; ?></td>
        </tr>
        <tr>
            <td>Customer Address : </td>
            <td><?php echo $_POST['address']; ?></td>
        </tr>
        <tr>
            <td>Contact Number : </td>
            <td><?php echo $_POST['contact'] ?></td>
        </tr>
    </table>
    
    <br/>

    <table border="2">
        <tr>
            <td colspan="2"><h3>YOUR PIZZA ORDER : </h3></td>
            <td><h3>Amount</h3></td>
        </tr>
        <tr>
            <td>Size : </td>
            <td><strong><?php echo $_POST['pizza']; ?></strong></td>
            <td>
                <?php 
                    if(isset($_POST['pizza'])){
                        $pizza = $_POST['pizza'];
                        $s = 100.00;
                        $m = 200.00;
                        $l = 300.00;

                        if($pizza == "Small"){
                            $pizza_amount = $s;
                            echo $pizza_amount;
                        }elseif($pizza == "Medium"){
                            $pizza_amount = $m;
                            echo $pizza_amount;
                        }elseif($pizza == "Large"){
                            $pizza_amount = $l;
                            echo $pizza_amount;
                        }else{
                            echo "";
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Type : </td>
            <td><strong><?php echo $_POST['crust']; ?></strong></td>
            <td>
                <?php 
                    if(isset($_POST['crust'])){
                        $crust = $_POST['crust'];
                        $thin = 25.00;
                        $regular = 50.00;
                        $thick = 75.00;

                        if($crust == "Thin"){
                            $crust_amount = $thin;
                            echo $crust_amount;
                        }elseif($crust == "Regular"){
                            $crust_amount = $regular;
                            echo $crust_amount;
                        }elseif($crust == "Thick"){
                            $crust_amount = $thick;
                            echo $crust_amount;
                        }else{
                            echo "";
                        }
                    }
                ?>
             </td>
        </tr>
        <tr>
            <td>Drinks : </td>
            <td><strong><?php echo $_POST['drinks']; ?></strong></td>
            <td>
                <?php  
                if(isset($_POST['drinks'])){
                    $drink = $_POST['drinks'];
                    $soft_drink = 25.00;
                    $iced_tea = 30.00;
                    $fruit_juice = 30.00;

                    if($drink == "Soft Drinks"){
                        $drink_amount = $soft_drink;
                        echo $drink_amount;
                    }elseif($drink == "Iced Tea"){
                        $drink_amount = $iced_tea;
                        echo $drink_amount;
                    }elseif($drink == "Fruit Juice"){
                        $drink_amount = $fruit_juice;
                        echo $drink_amount;
                    }else{
                        echo "";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Extre Toppings : </td>
            <td><strong><?php echo $_POST['toppings']; ?></strong></td>
            <td>
                <?php
                    if(isset($_POST['toppings'])){
                        $topp = $_POST['toppings'];
                        $topp_amount = 20.00;

                        if($topp == ""){
                            $topp_amount = 0;
                        }else{
                            echo $topp_amount;
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Sub-Total</td>
            <td>
                <?php 
                    $subTotal = $pizza_amount + $crust_amount + $drink_amount + $topp_amount;
                    echo $subTotal; 
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><strong>12% VAT</strong></td>
            <td>
                <?php 
                    $vat = $subTotal * 12 / 100;
                    echo $vat;
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><strong>TOTAL AMOUNT</strong></td>
            <td>
                <?php 
                    $totalAmount = $subTotal + $vat;
                    echo $totalAmount; 
                ?>
            </td>
        </tr>
    </table>

    <br/>

    <a href="index3.php"><button>Confirm Order</button></a>
    <a href="index.php"><button>Back</button></a>
</div>

</body>
</html>