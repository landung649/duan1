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

$bd="";
$kt="";
$tt="";
$noti = "";
if (isset($_POST['tinh']) && $_POST['g1']>=10 && $_POST['g2']<=24) {
    $bd=$_POST['g1'];
    $kt=$_POST['g2'];
if($kt > $bd){
    if($kt<=17)
    //TH1: giờ bắt đầu >= 10, giờ kết thúc <=17, tính 50.000/h
        $tt=number_format(($kt - $bd) * 50000,'0',',','.');
    elseif($bg >17)
    //TH2: giờ bắt đầu > 17, giờ kết thúc <= 24
        $tt=number_format(($kt - $bd) * 100000,'0',',','.');
    else
    //TH3: nằm trong 2 khoảng 
        $tt=number_format((17-$bd)*50000 + ($kt-17)*100000,'0',',','.'); 
}else
    $noti="giờ kết thúc phải lớn hơn giờ bắt đầu";
}else 
    $noti="nhập giờ hợp lệ"
?>

<section class="khung">
    <form  action="" method="post">
        <section>
            <h1>Giờ karaoke</h1>
        </section>
        <section>
            <label> giờ bắt đầu</label>
            <input type="text" name="g1" value="<?php echo $bd ?>" size="30" required pattern="[0-9]+" autofocus>
        </section>
        <section>
            <label>giờ kết thúc</label>
            <input type="text" name="g2" value="<?php echo $kt ?>" size="30" required pattern="[0-9]+" >
        </section>
        <section>
<label >số tiền thanh toán</label>
<input type="text" name="tt" value="<?php echo $tt ?>" size="30" readonly >
</section> <br>
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
