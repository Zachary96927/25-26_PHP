<?php include "includes/header.php"; ?>

<h1>Contact Us</h1>
<form method="get" action="contactAction.php">
    <!--<input type="text" name="name" id="name" placeholder="Enter name"> <br />
    <input type="email" name="email" id="email" placeholder="Enter email"> <br />
    <input type="text" name="message" id="message" placeholder="Enter your message"> <br /> -->
    <label>How Many Milk Gallons?</label>
    <input type="text" name="fruitQuant" id="fruitQuant" placeholder="Please enter the number.">
    <label>Which Flavor?</label>
    <input type="text" name="milkFlav" id="milkFlav" placeholder="Please enter the flavor">
    <input type="submit" name="submit">



</form>
<?php include "includes/footer.php"; ?>
