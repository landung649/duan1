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
    $mang1="";
    $mang2="";
    $timmang1="";
    $timmang2="";


   if(isset($_POST['tinh'])){
    $mang1=$_POST['mang1'];
    $mang2=$_POST['mang2'];
    $arr1=explode(",",$mang1);
    $arr2=explode(",",$mang2);

    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    $arr11=array_diff($arr1,$arr2);
    echo "<pre>";
    print_r($arr11);
    echo "</pre>";
  $timmang1=implode(" ; ",$arr11);
  $arr22=array_diff($arr2,$arr1);
  echo "<pre>";
  print_r($arr22);
  echo "</pre>";
$timmang2=implode(" ; ",$arr22);
   }

   
   ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình tìm phần tử khác nhau trong hai mảng</h1>
</section>
<section>
<section>
<label>Nhập mảng 1</label>
<input  type="text" name="mang1" value="<?php echo $mang1?>" size="32" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label>Nhập mảng 2</label>
<input  type="text" name="mang2" value="<?php echo $mang2?>" size="32" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
</section>



<section>
<label >ptu chỉ có trong mảng 1 </label>
<input type="text" name="ps" value="<?php echo $timmang1 ?>" size="32" readonly >
</section>

<section>
<label >ptu chỉ có trong mảng 2</label>
<input type="text" name="ln" value="<?php echo $timmang2 ?>" size="32" readonly > 
</section><br>

<input  type="submit" name="tinh" style="  width: 90px;"value="Tìm kiếm"class="input4 " >
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