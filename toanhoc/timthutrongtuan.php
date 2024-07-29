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
$noti="";
    if(isset($_POST['tinh']) && $_POST['ngay']>0 && $_POST['ngay']<=31 && $_POST['thang']> 0 && $_POST['thang']<=12 && $_POST['nam']>0)
    {
        $ngay =$_POST['ngay'];
        $thang =$_POST['thang'];
        $nam =$_POST['nam'];
        $tonggiay=mktime(0,0,0,$thang,$ngay,$nam);
        $ngaytrongtuan=date("w",$tonggiay);
        switch ($ngaytrongtuan) {
            case 0: 
                $thu="Chủ nhật";
                break;
            case 1: 
                $thu="THỨ 2";
                break;
            case 2: 
                $thu="Thứ 3";
                break;
            case 3: 
                $thu="THỨ 4";
                break;
            case 4: 
                $thu="Thứ 5";
                break;
            case 5: 
                $thu="THỨ 6";
                break;
            default:
            $thu="THỨ 7";
                break;
        }
        $noti = "Ngày $ngay tháng $thang năm $nam là ngày $thu";
    }
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>Tìm số thứ trong tuần </h1>
</section>   
<section>
<label style="  margin-left: 20px;" for=""> ngày:</label>
<label style="  margin-left: -20px;" for="">Tháng:</label>
<label style="  margin-left: -20px;" for="">Năm:</label>
</section>
<section>
<input style="  margin-left: 2px;   margin-right: 10px;" type="text" name="ngay" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*?[0-9]+" autofocus>

<input style="  margin-left: 2px; margin-right: 10px;" type="text" name="thang" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*?[0-9]+" >

<input style="  margin-left: 2px; margin-right: 10px;" type="text" name="nam" value="<?php ?>" size="10" required pattern="[-+]?[0-9]*?[0-9]+" >

<input  type="submit" name="tinh"style=" width:100px;" value="Tìm số ngày"class="input4 " >
</section>



<?php
if($noti != ""){
    ?>
    <h4><?php echo $noti ?></h4>
    <?php } ?>
<section>
</section>

</form>
</section>
</body>
</html>