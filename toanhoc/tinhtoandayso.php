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
    $tong="";
    $tich="";
    $tongle="";
    $tongchan="";
    if(isset($_POST['tinh'])&& $_POST['bd']>0 && $_POST['kt']>0 && $_POST['kt']>$_POST['bd'])
    {
        $bd=$_POST['bd'];
        $kt=$_POST['kt'];
        $tong=0;
        $tongle=0;
        $tongchan=0;
        $tich=1;
        $i=$bd;
        while($i<=$kt){
            $tong+=$i;
            $tich*=$i;
          
        // for($i=$bd;$i<=$kt;$i++){

        //     $tong+=$i;
        //     // ko liên quan nhau
        //     $tich*=$i;

            if($i % 2 != 0){
                $tongle+=$i;
            }else{
            $tongchan+=$i;
          }  $i++;
        }
    }
    /*
    Lần lặp 1: i=1 => tong=1 ; i tăng lên 1, đơn vị i=2
    Lần lặp 2: i=2 => tong=3 ; i tăng lên 1, đơn vị i=3
    Lần lặp 3: i=3 => tong=6 ; i tăng lên 1 -> i=4
    Lần lặp 4: i=4 => tong=10 ; i tăng lên 1 -> i=5
    Lần lặp 5: i=5 => tong=15 ; i tăng lên 1 -> i=6 , ko thoả đk - kết thúc
    */
    ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình tính dãy số</h1>
</section>
<label for=""style=" width: 200px;">Giới hạn của dãy số</label> <br><br><br>
Số Bắt Đầu:
<input style="  margin-left: 5px;   margin-right: 30px;" type="text" name="bd" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*?[0-9]+" autofocus>
Số kết thúc:
<input style="  margin-left: 5px; margin-right: 20px;" type="text" name="kt" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*?[0-9]+" >

<section><br>
<label style="  margin-left: 15px;" for="">kết quả</label>
</section>

<section>
<label >Tổng các số</label>
<input type="text" name="tong" value="<?php echo $tong?>" size="20" readonly >
</section>

<section>
<label >Tích các số</label>
<input type="text" name="tich" value="<?php echo $tich ?>" size="20" readonly >
</section>

<section>
<label >Tổng các số chẵn</label>
<input type="text" name="tongc" value="<?php echo $tongchan ?>" size="20" readonly >
</section>

<section>
<label >Tổng các số lẻ</label>
<input type="text" name="tongl" value="<?php echo $tongle ?>" size="20" readonly >
</section>

<section>
<input  type="submit" name="tinh" style="  width: 90px;"value="Tính toán"class="input4 " >
</section>

<!-- 
<?php
if($noti != ""){
    ?>
    <h4><?php echo $noti ?></h4>
    <?php } ?> -->
<section>

</section>

</form>
</section>
</body>
</html>