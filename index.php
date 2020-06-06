<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part4</title>
</head>
<body>
    <p>
        <?php
            function calculate($nb1, $nb2){
                if($nb1 > $nb2){
                    $result = 'Le premier nombre est plus grand';
                }
                elseif($nb1 < $nb2){
                    $result = 'Le premier nombre est plus petit';
                }
                elseif($nb1 == $nb2){
                    $result = 'Les deux nombres sont identiques';
                }
                return $result;
            }
            echo(calculate(3, 2));
        ?>
    </p>
</body>
</html>