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
    $t=$_POST['tu'];
    $vitri=strpos($c,$t);
    if($vitri===false) // === là để ktra cùng kiểu dữ liệu và giá trị
    $kq="ko có từ trong chuỗi!";
    else
    $kq="Tìm thấy từ $t trong câu ở vị trí $vitri.";
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
<label >Từ cần tìm</label>
<input type="text" name="tu" value="<?php ?>" size="30" required>
</section>


<section>
<label>Kết quả</label>
<input type="text " name="kq" value="<?php echo $kq?>" readonly size="30" >
</section>
<section>
    <p align="center"><?php ?></p>
</section>
<section>
<input  type="submit" style="width:80px;" name="tinh" value="Tìm kiếm"class="input4 " >
</section>
</form>
</section>
</body>
</html>