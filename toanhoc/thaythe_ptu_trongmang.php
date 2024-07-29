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
    $dayso="";
    $sothay="";
    $sothe="";
    $mangcu="";
    $mangmoi="";
   if(isset($_POST['tinh'])){
    $dayso=$_POST['mang'];
    $sothay=$_POST['sothay'];
    $sothe=$_POST['sothe'];
    $arr=explode(",",$dayso);
    $mangcu=implode(" ; ",$arr);
    $so_pt=count($arr);
    $co=false;
    for($i=0;$i<$so_pt;$i++){
        if($arr[$i]==$sothay){
        $arr[$i]=$sothe;
        $co=true;
    }
}
  if($co==true){
    $mangmoi=implode(" ; ",$arr);
  }else{
    $mangmoi="ko có số $sothay trong mảng !!!";
  }

   }
   
   ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình thay thế phân tử trong mảng</h1>
</section>
<section>
<section>
<label>Nhập mảng</label>
<input  type="text" name="mang" value="<?php echo $dayso?>" size="25" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label>Số cần thay</label>
<input  type="text" name="sothay" value="<?php echo  $sothay ?>" size="25" required pattern="\d+" >
</section>
<section>
<label>Số thay thế</label>
<input  type="text" name="sothe" value="<?php echo $sothe ?>" size="25" required pattern="\d+" >
</section>
<input  type="submit" name="tinh" style="  width: 90px;"value="Thay thế"class="input4 " >
</section>


<section>
<label >Mảng cũ </label>
<input type="text" name="mangcu" value="<?php echo $mangcu ?>" size="25" readonly >
</section>

<section>
<label >mảng mới</label>
<input type="text" name="mangmoi" value="<?php echo $mangmoi?>" size="25" readonly >
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