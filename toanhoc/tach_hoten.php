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
  $ht="";
  $ho="";
  $td="";
  $ten="";
  if(isset($_POST['tinh']))
  {
    $ht=$_POST['ht'];
   $arr=explode(" ",$ht);
   print_r($arr);
   $ho=$arr[0];  // echo $ho;
   $so_pt=count($arr);
   $ten=$arr[$so_pt-1]; //echo $ten;

   for($i=1;$i<=$so_pt-2;$i++){
    $td.=$arr[$i]." "; 
   }


  }
    ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình tách họ tên</h1>
</section>
<label>Nhập họ tên</label>

<input  type="text" name="ht" value="<?php echo $ht?>" size="30" required  autofocus>



<section>
<label >Họ</label>
<input type="text" name="ho" value="<?php echo $ho?>" size="20" readonly >
</section>

<section>
<label >Tên Đệm</label>
<input type="text" name="td" value="<?php echo $td ?>" size="20" readonly >
</section>

<section>
<label >Tên</label>
<input type="text" name="ten" value="<?php echo $ten ?>" size="20" readonly >
</section>


<section>
<input  type="submit" name="tinh" style="  width: 90px;"value="Tách họ tên"class="input4 " >
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