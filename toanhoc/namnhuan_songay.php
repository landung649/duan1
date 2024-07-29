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
function ktra_nam($n){
    if(($n % 4 == 0 && $n % 100 != 0) || ($n % 400 == 0)){
        return true;
      
    }  else
        return false;
}
$songay="";
$kq="";
if(isset($_POST['tinh']) && $_POST['thang'] >0 && $_POST['thang'] <= 12 && $_POST['nam'] > 0){
    $thang=$_POST['thang'];
    $nam=$_POST['nam'];
    $songay=cal_days_in_month(CAL_GREGORIAN,$thang,$nam);
    if(ktra_nam($nam))
    $kq="năm $nam là năm nhuận <br> Tháng $thang năm $nam có $songay ngày ";
    else
    $kq="Tháng $thang năm $nam có $songay ngày";
}
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>Tìm số ngày trong tháng</h1>
</section>   
<section>

<b>Tháng</b>
<input style="  margin-left: 2px;   margin-right: 30px;" type="text" name="thang" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*?[0-9]+" autofocus>
<b>Năm</b>
<input style="  margin-left: 2px; margin-right: 30px;" type="text" name="nam" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*?[0-9]+" >
</section>



<?php
if($kq != ""){
    ?>
    <h4><?php echo $kq ?></h4>
    <?php } ?>
<section>
<input  type="submit" name="tinh"style=" width:100px;" value="Tìm số ngày"class="input4 " >
</section>

</form>
</section>
</body>
</html>