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
    $mangA="";
    $mangB="";
    $so_ptA="";
    $so_ptB="";
    $mangC="";
    $mangtang="";
    $manggiam="";

   if(isset($_POST['tinh'])){
    $mangA=$_POST['mangA'];
    $mangB=$_POST['mangB'];
    $arr1=explode(",",$mangA);
    $arr2=explode(",",$mangB);
    $so_ptA=count($arr1);
    $so_ptB=count($arr2);

    $arr3=array_merge($arr1,$arr2);
    $mangC=implode(" ",$arr3);
    sort($arr3);
    $mangtang=implode(" ",$arr3);
    rsort($arr3);
    $manggiam=implode(" ",$arr3);
  
   }
   
   ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình sắp xếp mảng</h1>
</section>
<section>
<section>
<label>Nhập mảng A</label>
<input  type="text" name="mangA" value="<?php echo $mangA?>" size="25" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label>Nhập mảng B</label>
<input  type="text" name="mangB" value="<?php echo $mangB?>" size="25" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
</section>

<input  type="submit" name="tinh" style="  width: 90px;"value="Thực hiện"class="input4 " >
</section>
<section>
<label >Ptử mảng A</label>
<input type="text" name="ps" value="<?php echo $so_ptA ?>" size="25" readonly >
</section>
<section>
<label >Ptử mảng B</label>
<input type="text" name="ps" value="<?php echo $so_ptB ?>" size="25" readonly >
</section>
<section>
<label >Mảng C </label>
<input type="text" name="ps" value="<?php echo $mangC?>" size="25" readonly >
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