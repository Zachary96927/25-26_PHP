<?php include "includes/header.php"; ?>

<h1>See info:</h1>
<!-- Name: <?php echo $_GET["name"]; ?> <br />
Email: <?php echo $_GET["email"]; ?><br />
Message: <?php echo $_GET["message"]; ?><br /> -->

<?php
// Variables in PHP start with $
/*$firstVariable = 5;
$secondVariable = "Milk";

$numOne = 2;
$numTwo = 1;

//Conditional statements (if/else/else if)
if($numOne > $numTwo){
    echo "numOne is bigger";
    }else{
    echo "numTwo is bigger";
}*/

// Milk Gallons cost $5.50
echo "<h2>You purchased " . $_GET["fruitQuant"] . " milk gallons</h2>";
echo "<h2>The cost of the milk gallons is " . $_GET["fruitQuant"] * 5.5 . " dollars.</h2>";
echo "<h2>You chose " . $_GET["milkFlav"] . " flavor.</h2>";
?>
<?php include "includes/footer.php"; ?>
