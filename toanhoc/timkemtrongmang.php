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
    $so_tim="";
    $kq="";
    $m="";

   if(isset($_POST['tinh'])){
    $mang=$_POST['mang'];
    $so_tim=$_POST['so'];
    $arr=explode(",",$mang);
    $m=implode(" ",$arr);
    $vitri=array_search($so_tim,$arr);
    if($vitri!==false){
        $vitri+=1;
        $kq="số $so_tim tại ví trí thứ $vitri trong mảng";
    }else
    $kq="ko tìm thấy số trong mảng";

   }
   
   ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình phát sinh mảng</h1>
</section>
<section>
<section>
<label>Nhập mảng</label>
<input  type="text" name="mang" value="<?php echo $mang?>" size="25" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label>Số cần tìm</label>
<input  type="text" name="so" value="<?php echo $so_tim ?>" size="25" required pattern="\d+" >
</section>
<input  type="submit" name="tinh" style="  width: 90px;"value="Phát sinh"class="input4 " >
</section>


<section>
<label >Mảng </label>
<input type="text" name="ps" value="<?php echo $m ?>" size="25" readonly >
</section>

<section>
<label >Kết quả</label>
<input type="text" name="ln" value="<?php echo $kq?>" size="25" readonly >
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