<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $min=0;
        $max=100;
        $num=rand($min, $max);
        if($num %  2==0) {
            $str="<p> il numero ($num) è pari</p>";
        } else {
            $str="<p> il numero ($num) è dispari</p>";
        }
        echo $str;
    ?>
    
</body>
</html>