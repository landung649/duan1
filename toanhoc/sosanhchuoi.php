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
$kq="";
if(isset($_POST['tinh'])){
    $c1=$_POST['c1'];
    $c2=$_POST['c2'];

   
  
    $tam=strcmp($c1,$c2); 
    
    $cdc1=strlen($c1);
    $cdc2=strlen($c2);
    if($tam==0){
        $kq="2 chuỗi bằng nhau";
    }elseif($cdc1>$cdc2){
        $kq="Chuỗi thứ nhất dài hơn chuỗi thứ 2";
    }else{
        $kq="Chuỗi thứ 2 dài hơn chuỗi thứ 1";
        
    }


}


?>

    <section class="khung">
<form  action="" method="post">
 <section>
<h1>Chương trình 2 chuỗi</h1>
</section>
<section>
<label >chuỗi 1</label>
<input type="text" name="c1" value="<?php ?>" size="30" required  autofocus>
</section>

<section>
<label >Chuỗi 2</label>
<input type="text" name="c2" value="<?php ?>" size="30" required>
</section>

<section>
<label>Kết quả</label>
<input type="text " name="kq" value="<?php echo $kq?>" readonly size="30" >
</section>
<section>
    <p align="center"><?php ?></p>
</section>
<section>
<input  type="submit" style="width:80px;" name="tinh" value="Thay thế"class="input4 " >
</section>
</form>
</section>
</body>
</html>