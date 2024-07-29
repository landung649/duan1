<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Program</title>
    <link rel="stylesheet" href="../css/toan.css">
</head>
<body>
<?php
$kq = "";
if (isset($_POST['tinh']) && $_POST['ngay'] > 0 && $_POST['ngay'] <= 31 && $_POST['thang'] > 0 && $_POST['thang'] <= 12 && $_POST['nam'] > 0) {
    $ngay = intval($_POST['ngay']);
    $thang = intval($_POST['thang']);
    $nam = intval($_POST['nam']);
    $tuoi = date("Y") - $nam;
    $kq = "Năm nay bạn $tuoi tuổi <br>";

    $currentYear = date("Y");
    $tong_tg_hientai = mktime(0, 0, 0, date("m"), date("d"), $currentYear);
    $tong_tg_sinh = mktime(0, 0, 0, $thang, $ngay, $currentYear);
    $tong_tg_chenhlech = $tong_tg_hientai - $tong_tg_sinh;
    $tong_songay = $tong_tg_chenhlech / (24 * 60 * 60);

    if ($tong_songay > 0) {
        $kq .= "Sinh nhật của bạn đã qua " . intval($tong_songay) . " ngày";
    } elseif ($tong_songay < 0) {
        $kq .= "Còn " . abs(intval($tong_songay)) . " ngày nữa là đến sinh nhật của bạn";
    } else {
        $kq .= "Hôm nay là sinh nhật của bạn";
    }
}
?>

<section class="khung">
    <form name="tinhdthcn" action="" method="post">
        <section>
            <h1>Chương trình sinh nhật</h1>
        </section>
        <section>
             Birthday
            <b style="margin-left: 5px;">Day</b>
            <input style="margin-left: 2px; margin-right: 10px;" type="text" name="ngay" value="<?php echo isset($_POST['ngay']) ? $_POST['ngay'] : ''; ?>" size="5" required pattern="\d+">
            <b>Month</b>
            <input style="margin-left: 2px; margin-right: 10px;" type="text" name="thang" value="<?php echo isset($_POST['thang']) ? $_POST['thang'] : ''; ?>" size="5" required pattern="\d+">
            <b>Year</b>
            <input style="margin-left: 2px; margin-right: 1px;" type="text" name="nam" value="<?php echo isset($_POST['nam']) ? $_POST['nam'] : ''; ?>" size="5" required pattern="\d+">
        </section>

        <?php
        if ($kq != "") {
            echo "<h4 style='width:350px;'>$kq</h4>";
        }
        ?>

        <section>
            <input type="submit" name="tinh" style="width:90px;" value="Thông báo" class="input4">
        </section>
    </form>
</section>
</body>
</html>
