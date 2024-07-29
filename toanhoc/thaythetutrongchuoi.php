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
    $c=$_POST['chuoi'];
    $g=$_POST['goc'];
    $tt=$_POST['tt'];

    $kq= str_replace($g,$tt,$c);
}


?>

    <section class="khung">
<form  action="" method="post">
 <section>
<h1>Chương trình thay thế từ trong chuỗi</h1>
</section>
<section>
<label >chuỗi</label>
<input type="text" name="chuoi" value="<?php ?>" size="30" required  autofocus>
</section>

<section>
<label >Từ gốc</label>
<input type="text" name="goc" value="<?php ?>" size="30" required>
</section>

<section>
<label >Thay thế </label>
<input type="text" name="tt" value="<?php ?>" size="30" required  >
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