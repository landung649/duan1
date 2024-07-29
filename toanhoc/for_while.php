<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tong=0;
    $i=1;
    while($i<=10){
        $tong+=$i;
        $i++;
    }
    echo $tong;

?><br>

<?php
$tong1=0;
for($t=1;$t<=10;$t++){
    $tong1+=$t;
}
echo $tong1;
?>
</body>
</html>