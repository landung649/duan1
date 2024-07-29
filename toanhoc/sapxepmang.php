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
    $mang="";
    $mangtang="";
    $manggiam="";

   if(isset($_POST['tinh'])){
    $mang=$_POST['mang'];
    $arr=explode(",",$mang);
    sort($arr);
    $mangtang=implode(" ",$arr);
    rsort($arr);
    $manggiam=implode(" ",$arr);
  
   }
   
   ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình sắp xếp mảng</h1>
</section>
<section>
<section>
<label>Nhập mảng</label>
<input  type="text" name="mang" value="<?php echo $mang?>" size="25" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>

<input  type="submit" name="tinh" style="  width: 90px;"value="Phát sinh"class="input4 " >
</section>


<section>
<label >Tăng dần </label>
<input type="text" name="ps" value="<?php echo $mangtang?>" size="25" readonly >
</section>

<section>
<label >Giảm dần</label>
<input type="text" name="ln" value="<?php echo $manggiam ?>" size="25" readonly >
</section>

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