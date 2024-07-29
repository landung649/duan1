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
    $mang_rutgon="";
    $ptu_xh="";


   if(isset($_POST['tinh'])){
    $mang=$_POST['mang'];
    $arr1=explode(",",$mang);
    $arr_aa=array_unique($arr1);
    $mang_rutgon=implode(" ",$arr_aa);
    $arr_xh=array_count_values($arr1);
    foreach($arr_xh as $k=>$v){
        $ptu_xh.="$k:$v lần; ";
    }

   }

   
   ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình tìm số lần phần tử xuất hiện trong mảng</h1>
</section>
<section>
<section>
<label>Nhập mảng </label>
<input  type="text" name="mang" value="<?php echo $mang ?>" size="32" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>



<section>
<label >số lần ptu xuất hiện  </label>
<input type="text" name="ps" value="<?php echo $ptu_xh ?>" size="32" readonly >
</section>

<section>
<label >mảng rút gọn</label>
<input type="text" name="ln" value="<?php echo $mang_rutgon?>" size="32" readonly > 
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