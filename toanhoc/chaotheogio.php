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
$h = "";
$noti = "";
if (isset($_POST['tinh'])) {
    $h = $_POST['hour'];

    if ($h >= 0 && $h < 24) {
        if ($h < 13)
            $noti = "Chào buổi sáng";
        elseif ($h <= 18)
            $noti = "Chào buổi chiều";
        else
            $noti = "Chào buổi tối";
    } else {
        $noti = "Nhập lại giờ";
    }
}
?>

<section class="khung">
    <form name="tinhdthcn" action="" method="post">
        <section>
            <h1>Chào theo giờ</h1>
        </section>
        <section>
            <label>Nhập giờ</label>
            <input type="text" name="hour" value="<?php echo $h ?>" size="30" required pattern="[0-9]+" autofocus>
        </section>
        <?php if ($noti != "") { ?>
            <section>
                <h4><?php echo $noti ?></h4>
            </section>
        <?php } ?>
        <section>
            <input type="submit" name="tinh" value="Tính" class="input4">
        </section>
    </form>
</section>
</body>
</html>
