<?php

# 1 - write a function getNumMatches that searches for a word in an array of words and returns.

/*
function getNumMatches ($word)
{
    $words = ['book','pen','ban','book'];
    $k = 0;
    for ($i=0; $i < count($words); $i++) { 
        if ($word == $words[$i]) {
            $k++;
        }
    }
    return $k;
}
$matches = getNumMatches('book');
echo $matches;
*/

#2- write a function getPriceWithDiscount that takes the price and returns the price after discount.

function getPriceWithDiscount ($price)
{
    if ( $price < 1000 && $price >= 0 ) {
        $price *= 10/100; 
    } elseif ( $price >= 1000 )
    {
        $price *= 5/100;
    }
    else
    {
        $price = "not valid num";
    }
    return $price;
}
