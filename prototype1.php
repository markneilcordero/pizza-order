<!Doctype html>
<html>
<head>
    <title>Prototype 1</title>
    <!-- <meta http-equiv="refresh" content="5"> -->
</head>
<body>

    <form action="prototype2.php" method="POST">

    <!-- Customer Information -->
    Customer Name : <input type="text" name="name" value="Mark Neil Cordero"/>
    <br/>
    Address : <input type="text" name="address" value="West Rembo Makati City"/>
    <br/>
    Contact Number : <input type="number" maxlength="11" name="contact" value="09105169575"/>
    <br/>
    
    <br/>
    <!-- Pizza -->
    <input type="radio" name="pizza" value="Small"/>Small
    <br/>
    <input type="radio" name="pizza" value="Medium"/>Medium
    <br/>
    <input type="radio" name="pizza" value="Large"/>Large
    <br/>

    <br/>
    <!-- Crust -->
    <input type="radio" name="crust" value="Thin"/>Thin
    <br/>
    <input type="radio" name="crust" value="Regular"/>Regular
    <br/>
    <input type="radio" name="crust" value="Thick"/>Thick
    <br/>

    <br/>
    <!-- Drinks -->
    <input type="radio" name="drink" value="Soft Drinks"/>Soft Drinks
    <br/>
    <input type="radio" name="drink" value="Iced Tea"/>Iced Tea
    <br/>
    <input type="radio" name="drink" value="Fruit Juice"/>Fruit Juice
    <br/>

    <br/>
    <!-- Toppings -->
    <select name="toppings">
        <option value="">Choose Toppings</option>
        <option value="Pepperoni">Pepperoni</option>
        <option value="Mushroom">Mushroom</option>
        <option value="Black Olive">Black Olive</option>
        <option value="Onions">Onions</option>
        <option value="Tomatoes">Tomatoes</option>
        <option value="Cheese">Cheese</option>
    </select>

    <input type="submit" value="Order"/>
    <input type="reset" value="Clear Order"/>

    </form>

</body>
</html>