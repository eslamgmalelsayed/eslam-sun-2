<?php

#3- write a script add-product.php containing a form to add new product.


?>
<h1>Add New Product</h1>
<form method="POST" action="handle-add-product.php">
    <input type="text" name="name"><br><br>
    <input type="number"  name="price"><br><br>
    <textarea name="desc" rows="6"></textarea><br><br>
    <input type="submit" name="submit" value="submit">
</form>