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
    $mang_ps="";
    $pt_ln="";
    $pt_nn="";
    $tongmang="";
   if(isset($_POST['tinh'])&& $_POST['so']>0)
   {
    $so=$_POST['so'];
    $arr=array();
    for($i=0;$i<$so;$i++)
    {
        $so_ngaunhien=rand(0,50);
        $arr[]=$so_ngaunhien;
    }
    $mang_ps=implode(", ", $arr);
    $pt_ln=max($arr);
    $pt_nn=min($arr);
    $tongmang=array_sum($arr);
   }
   
   
   ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình phát sinh mảng</h1>
</section>
<label>Nhập số</label>

<input  type="text" name="so" value="<?php ?>" size="25" required pattern="\d+" autofocus>

<section>
<input  type="submit" name="tinh" style="  width: 90px;"value="Phát sinh"class="input4 " >
</section>


<section>
<label >Mảng phát sinh</label>
<input type="text" name="ps" value="<?php echo $mang_ps?>" size="25" readonly >
</section>

<section>
<label >ptử lớn nhất</label>
<input type="text" name="ln" value="<?php echo $pt_ln ?>" size="25" readonly >
</section>

<section>
<label >ptử nhỏ nhất</label>
<input type="text" name="nn" value="<?php echo $pt_nn  ?>" size="25" readonly >
</section>

<section>
<label >Tổng các ptử</label>
<input type="text" name="tongl" value="<?php echo $tongmang?>" size="25" readonly >
</section>



<!-- 
<?php
if($noti != ""){
    ?>
    <h4><?php echo $noti ?></h4>
    <?php } ?> -->
<section>

</section>

</form>
</section>
</body>
</html>