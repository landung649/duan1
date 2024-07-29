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
$bk="";
$dt="";
$cv="";
define("PI",3.14);
if(isset ($_POST['tinh'])){
   $bk=$_POST['bkinh'];
//    $dt=round(pi()*pow($bk,2),2);
//     $cv=round(2*pi()*$bk,2);
   $dt=PI*pow($bk,2);
    $cv=2*PI*$bk;

}
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>Bán kính hình tròn</h1>
</section>
<section>
<label >bán kính</label>
<input type="text" name="bkinh" value="<?php echo $bk?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label >Diện tích</label>
<input type="text" class="iput3" name="dtich" value="<?php echo $dt?>" size="30" readonly >
</section>
<section>
<label >chu vi</label>
<input type="text" class="iput3" name="cvi" value="<?php echo $cv?>" size="30" readonly >
</section>
<section>
<input  type="submit" name="tinh" value="Tinh"class="input4 " >
</section>
</form>
</section>
</body>
</html>