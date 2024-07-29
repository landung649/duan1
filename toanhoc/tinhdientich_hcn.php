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
$dt="";
// if(isset($_GET['tinh'])){
//    $cd=$_GET['cdai']; 
//    $cr=$_GET['crong'];// lấy giá trị ng dùng nhập sau gán cho biến ta đặt
//    $dt=$cd*$cr;//tính diện tích 
  

// }

if(isset ($_POST['tinh'])){
    $cd=$_POST['cdai'];
    $cr=$_POST['crong'];
    $dt=$cd*$cr;
}
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>Tính diện tích hình chữ nhật</h1>
</section>
<section>
<label >chiều dài</label>
<input type="text" name="cdai" value="" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>
<section>
<label >chiều rộng</label>
<input type="text" name="crong" value="" size="30" required pattern="[-+]?[0-9]*[.,]?[0-9]+">
</section>
<section>
<label >Diện tích</label>
<input type="text" class="iput3" name="dtich" value="<?php echo $cd.' * '.$cr.' = '. $dt?>" size="30" readonly >
</section>
<section>
<input  type="submit" name="tinh" value="Tinh"class="input4 " >
</section>
</form>
</section>
</body>
</html>