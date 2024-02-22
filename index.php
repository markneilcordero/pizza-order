<!Doctype html>
<html>
<head>
    <title>Pizza Ordering | Page 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <meta http-equiv="refresh" content="5"> -->
</head>
<body>

<div class="main">
    <h1 class="title">GWAPO'Z PIZZA ON-LINE ORDERING</h1>

    <div class="place">
        <p>#07 Super Gwapo St., Pasig City Philippines</p>
        <p><span>Tel #: 422-5267</span><span>Email: <a href="">gwapoz_pizza@yahoo.com</a></span><span>Website: www.gwapozpizza.com.ph</span></p>
    </div>

    <form action="index2.php","index3.php" method="POST">
    
    <p>Complete all entries below: (Customer Information)</p>

    <p>Customer Name : <input type="text" name="name" value="Mark Neil Cordero"/></p>
    <p>Address : <input type="text" name="address" value="West Rembo Makati City"/>
    <span style="float: right;">Contact Number : <input type="number" name="contact" placeholder="+63" value="09105169575"/></span></p>
    <p></p>

    <hr/>

    <p>CHOOSE YOUR ORDER:</p>

    <table border="2">
        <tr>
            <th>Pizza Size</th>
            <th>Amount</th>
            <td rowspan="4"></td>
            <th>Crust Type</th>
            <th>Amount</th>
            <td rowspan="4"></td>
            <th>Drinks</th>
            <th>Amount</th>
            <td rowspan="4"></td>
            <th>Extra Toppings</th>
        </tr>
        <tr>
            <td><input type="radio" name="pizza" value="Small"/>Small</td>
            <td>100.00</td>
            <td><input type="radio" name="crust" value="Thin"/>Thin</td>
            <td>Less 25% to Pizza Size</td>
            <td><input type="radio" name="drinks" value="Soft Drinks"/>Soft Drinks</td>
            <td>25.00</td>
            <td>
                <select name="toppings">
                    <option value="">Choose Toppings..</option>
                    <option value="Pepperoni">Pepperoni</option>
                    <option value="Mushroom">Mushroom</option>
                    <option value="Black Olive">Black Olive</option>
                    <option value="Onions">Onions</option>
                    <option value="Tomatoes">Tomatoes</option>
                    <option value="Cheese">Cheese</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="radio" name="pizza" value="Medium" id="100.00"/>Medium</td>
            <td><input type="hidden" name="p_amount" value="200.00"/>200.00</td>
            <td><input type="radio" name="crust" value="Regular"/>Regular</td>
            <td>same as Pizza Size</td>
            <td><input type="radio" name="drinks" value="Iced Tea"/>Iced Tea</td>
            <td>30.00</td>
            <td rowspan="2">Php 20.00 additional for extra toppings.</td>
        </tr>
        <tr>
            <td><input type="radio" name="pizza" value="Large"/>Large</td>
            <td>300.00</td>
            <td><input type="radio" name="crust" value="Thick"/>Thick</td>
            <td>add 25% to Pizza Size</td>
            <td><input type="radio" name="drinks" value="Fruit Juice"/>Fruit Juice</td>
            <td>30.00</td>
        </tr>
    </table>

    <p>Enter your comments and suggestions here : </p>
    <textarea></textarea>
    <br/>
    <input type="submit" value="Order"/>
    <input type="reset" value="Clear Order"/>
    </form>
</div>

</body>
</html>