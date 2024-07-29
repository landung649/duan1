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
if (isset($_POST['tinh'])) {
    $so = $_POST['so'];
    if($so>1){
        $co =true;
        $i=2;
        while($i<$so){
            if($so%$i==0){
                $co=false;
                break;
            }
            $i++;
        }
        // for($i=2;$i<$so;$i++){
        //     if($so%$i==0){
        //         $co= false;
        //         break;
        //     }
        // }
        if($co)
        $noti="$so là số nguyên tố";
        else
        $noti="$so ko phải là số nguyên tố";

    }
    else
    {
        $noti="$so ko phai số nguyên tố";
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
            <input type="text" name="so" style="  margin-left: -60px;" value="<?php  ?>" size="30" required pattern="[0-9]+" autofocus>
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
