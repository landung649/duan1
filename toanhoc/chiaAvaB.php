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
function chiahet($so,$a,$b){
    if($so % $a == 0 && $so % $b == 0){
        return true;
    }else
    return false;
}
$kq="";
 if(isset($_POST['tinh'])){
    $so_n=$_POST['n'];
    $so_a=$_POST['a'];
    $so_b=$_POST['b'];
    $so_bd=($so_a>$so_b)?$so_a:$so_b;
    for($i=$so_bd;$i<=$so_n;$i++){
        if(chiahet($i,$so_a,$so_b)==true)
        $kq.="$i;";
        else
        $kq="không có số nào";
    }
 }
 /*
 giả sử n=8 ; a=4 ; b=2
 for lần 1: lấy i = 4 -> chiahet(4,4,2) => true
 for lần 1: tăng i = 5 -> chiahet(5,4,2) => false
 for lần 1: tăng i = 6 -> chiahet(6,4,2) => false
 for lần 1: tăng i = 7 -> chiahet(7,4,2) => false
 for lần 1: tăng i = 8 -> chiahet(8,4,2) => true ===>>> kq là: 4;8
 */
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>Chia hết cho A và B</h1>
</section>
<section>
<label >Nhập n</label>
<input type="text" name="n" value="<?php ?>" size="30" required  pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
</section>

<section>
<label  >Nhập A</label>
<input type="text " name="a" value="<?php ?>" size="30" required  pattern="[-+]?[0-9]*[.,]?[0-9]+">
</section>
<section>
<label  >Nhập B</label>
<input type="text " name="b" value="<?php ?>" size="30" required  pattern="[-+]?[0-9]*[.,]?[0-9]+">
</section>

<section>
<input  type="submit" name="tinh" value="Tinh"class="input4 " >
</section>

<section>
<?php
if($kq != ""){
    ?>
    <h4><?php echo $kq ?></h4>
    <?php } ?>
</section>
</form>
</section>
</body>
</html>