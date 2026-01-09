<?php
$conn = new mysqli(
 "mealdb.c8xa824ic05d.us-east-1.rds.amazonaws.com",
 "admin",
 "SecurePass!123",
 "meal_order"
);

if ($_POST) {
 $conn->query("INSERT INTO orders (name, meal, qty)
 VALUES ('$_POST[name]', '$_POST[meal]', $_POST[qty])");
}
?>

<h2>Meal Order</h2>
<form method="POST">
Name: <input name="name"><br><br>
Meal:
<select name="meal">
<option>Burger</option>
<option>Pizza</option>
</select><br><br>
Quantity:
<input type="number" name="qty"><br><br>
<button>Order</button>
</form>

<img src="https://meal-images-123.s3.us-east-1.amazonaws.com/pizza.jpg" width="200">
<img src="https://meal-images-123.s3.us-east-1.amazonaws.com/burger.jpg" width="200">
