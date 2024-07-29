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
$ten="";
$scu="";
$smoi="";
$dg=2000;
$tt="";
$bl="";
if(isset($_POST['tinh'])){
    $ten=$_POST['ten'];
    $scu=$_POST['csocu'];
    $smoi=$_POST['csomoi'];
    $dg=$_POST['dgia'];
  if($scu<$smoi)
  $tt=number_format(($smoi-$scu)*$dg,0,',','.');
else
$bl ="chỉ số sai";

}
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>Thanh toán</h1>
</section>
<section>
<label >Tên chủ hộ</label>
<input type="text" name="ten" value="<?php ?>" size="30" required  autofocus>
</section>

<section>
<label  >Chỉ số cũ</label>
<input type="text " style="margin-left:-35px;"name="csocu" value="<?php ?>" size="30" required  pattern="[-+]?[0-9]*[.,]?[0-9]+"><b> (kw)</b>
</section>
<section>
<label  >Chỉ số mới</label>
<input type="text " style="margin-left:-35px;"name="csomoi" value="<?php ?>" size="30" required  pattern="[-+]?[0-9]*[.,]?[0-9]+"><b> (kw)</b>
</section>

<section>
<label  >Đơn giá</label>
<input type="text " style="margin-left:-35px;"name="dgia" value="<?php echo $dg ?>" size="30" required  pattern="[-+]?[0-9]*[.,]?[0-9]+"><b> (vnd)</b>
</section>
<section>
<label  >số tiền</label>
<input type="text " style="margin-left:-35px;"name="sotien" value="<?php  echo $tt?>" size="30" ><b> (vnd)</b>
</section>
<section>
    <p align="center"><?php echo $bl ?></p>
</section>
<section>
<input  type="submit" name="tinh" value="Tinh"class="input4 " >
</section>
</form>
</section>
</body>
</html>