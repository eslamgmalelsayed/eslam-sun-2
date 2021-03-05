<?php
if (isset($_POST['submit']))
{
    require_once('functions.php');   

    $name = $_POST['name'];
    $price = $_POST['price'];
    $priceWithDis = getPriceWithDiscount($price);
    $desc = $_POST['desc'];
    $regex = "/^[a-zA-Z\s]+$/";
    #rules
    $errors = [];
    #name → required | string | min:5 | max:255
    if (empty($name))
    {
        $errors[] = "insert a name";
    }  elseif ( ! preg_match($regex,$name))
    {
        $errors[] = "name not valid";
    } elseif (strlen($name < 5 && $name > 255))
    {
        $errors[] = "name must be between 5 to 255 chars";
    } else
    {
        echo "name is $name <hr>";
    }
    #price → required | number | min:0
    if (empty($price))
    {
        $errors[] = "insert price";
    } elseif (! is_numeric($price))
    {
        $errors[] = "price not valid";
    } elseif ($price < 0) {
        $errors[] = "price must be > 0";
    } else
    {
        echo "price is $price <hr>";
        echo "dicount = $priceWithDis <hr>";
    }
    #description → optional | string
    if ( ! is_string($desc) )
    {
        $errors[] = "description not valid";
    } else if (! empty($desc))
    {
        echo "description is $desc <hr>";
    }
    echo "show errors <br>";
    print_r($errors);
}