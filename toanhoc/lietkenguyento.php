<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài liệu</title>
    <link rel="stylesheet" href="../css/toan.css">
</head>
<body>
<?php
$noti = "";
function ktra($so_n)
{
 
    for ($i = 2; $i < $so_n; $i++) {
        if ($so_n % $i == 0) {
             return false;
         
        }
    }
    return true;
}
if (isset($_POST['tinh'])) {
    $so = $_POST['so'];
    if ($so > 1) {
        $noti = "Các số nguyên tố của $so là: ";
        for ($n = 2; $n <= $so; $n++) {
            if (ktra($n)==true) {
                $noti .= "$n ";
                //Nếu $co vẫn là true sau vòng lặp bên trong, $n là số nguyên tố và được thêm vào $noti.
            }
        }
    } else {
        $noti = "$so không phải là số nguyên tố";
    }
}
?>

<section class="khung">
    <form name="tinhdthcn" action="" method="post">
        <section>
            <h1>Chương trình tìm số nguyên tố</h1>
        </section>
        <section>
            <label>Nhập số</label>
            <input type="text" name="so" style="margin-left: -60px;" value="<?php if (isset($so)) echo $so; ?>" size="30" required pattern="[0-9]+" autofocus>
        </section>
        <?php if ($noti != "") { ?>
            <section>
                <h4 style="width:350px;"><?php echo $noti; ?></h4>
            </section>
        <?php } ?>
        <section>
            <input type="submit" name="tinh" value="Tính" class="input4">
        </section>
    </form>
</section>
</body>
</html>
