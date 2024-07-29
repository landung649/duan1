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
$d1="";
$d2="";
$d3="";
$dc="";
$noti="";
$td="";
$kq="";
if(isset($_POST['tinh'])&& $_POST['s1']<=10 && $_POST['s1']>0 && $_POST['s2']<=10 && $_POST['s2']>0 && $_POST['s3'] && $_POST['s3']>0){
    $toan=$_POST['s1'];
    $ly=$_POST['s2'];
    $hoa=$_POST['s3'];
    $dc=$_POST['dc'];
    $td=$toan+$ly+$hoa;
    if($toan>0 && $ly>0 && $hoa>0 && $td >= $dc)
    $kq ="đậu";
else $kq="rới";
} else
    $noti="vui long nhap so < 10";
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>university results</h1>
</section> 
<section>
<label >maths</label>
<input type="text" name="s1" value="<?php echo $toan?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label >physical</label>
<input type="text" name="s2" value="<?php echo $ly ?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
</section>
<section>
<label >chemistry</label>
<input type="text" name="s3" value="<?php echo $hoa ?>" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
</section>


<section>
<label >Benchmark</label>
<input type="text" name="dc" value="<?php echo $dc ?>" size="30"  >
</section>
<section>
<label >total score</label>
<input type="text" name="re" value="<?php echo $td?>" size="30" readonly >
</section>
<section>
<label >exam result</label>
<input type="text" name="cla" value="<?php echo $kq ?>" size="30" readonly >
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