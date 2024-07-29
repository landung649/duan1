<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/toan.css">
</head>
<body>
<?php
$numa="";
$numb="";
$numc="";
$big="";
if(isset($_POST['tinh'])){
    $numa=$_POST['na'];
    $numb=$_POST['nb'];
    $numc=$_POST['nc'];
  
    $big=$numa;

    if($big<$numb)
    $big=$numb;
    if($big<$numc)
    $big=$numc;

}
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>bigger number</h1>
</section>
<section>
<label >number a</label>
<input type="text" name="na" value="<?php echo $numa ?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label >number b</label>
<input type="text" name="nb" value="<?php echo $numb ?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
</section>
<section>
<label >number c</label>
<input type="text" name="nc" value="<?php echo $numc ?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
</section>

<section>
<label >big number</label>
<input type="text" name="big" value="<?php echo $big ?>" size="30" readonly >
</section>
<section>
<input  type="submit" name="tinh" value="Tinh"class="input4 " >
</section>

</form>
</section>
</body>
</html>