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
$tb="";
$kq="";
$xl="";
$d1="";
$d2="";
$noti="";

if(isset($_POST['tinh'])&& $_POST['s1']<=10 && $_POST['s2']<=10){
    $d1=$_POST['s1'];
    $d2=$_POST['s2'];
    $tb=round(($d1+$d2*2)/3,2);
    if($tb>=5)
    $kq="len lop";
else $kq="truot";

if($tb >=8)
$xl="gioi";
elseif($tb>6.5)
$xl="kha";
elseif($tb>=5)
$xl="tb";
else
$xl="yeu";
} else
    $noti="vui long nhap so < 10";
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>learning outcomes</h1>
</section> 
<section>
<label >semester 1</label>
<input type="text" name="s1" value="<?php echo $d1?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label >semester 2</label>
<input type="text" name="s2" value="<?php echo $d2 ?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
</section>


<section>
<label >medium score</label>
<input type="text" name="ms" value="<?php echo $tb ?>" size="30" readonly >
</section>
<section>
<label >result</label>
<input type="text" name="re" value="<?php echo $kq?>" size="30" readonly >
</section>
<section>
<label >classification</label>
<input type="text" name="cla" value="<?php echo $xl ?>" size="30" readonly >
</section> <br>
<?php
if($noti != ""){
    ?>
    <h4><?php echo $noti ?></h4>
    <?php } ?>
<section>
<input  type="submit" name="tinh" value="Tinh"class="input4 " >
</section>

</form>
</section>
</body>
</html>