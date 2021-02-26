
<?php
#ex4 write a script to draw the multiplication table

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        div{
            border: 1px solid red;
            background: #000;
            color: #fff;
            width: 90px;
            height: 40px;
            display: inline-block;
            padding: .3rem;
        }
    </style>
</head>
<body>
    <?php for( $i = 1; $i <= 12; $i++){ ?>
    <?php for($j = 1; $j <= 12; $j++){ ?>
        <div>
        <?= "$i * $j = ".$i*$j." "; ?>
        </div>
    <?php } ?>
    <?= "<br>"; ?>
    <?php } ?>
</body>
</html>