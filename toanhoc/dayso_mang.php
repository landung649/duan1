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
    $ds="";
    $tong="";
    $tich="";
    $tongle="";
    $tongchan="";
    if(isset($_POST['tinh']))
    {
        $ds=$_POST['ds'];
        $arr=explode(",",$ds);
        print_r($arr);
        $so_pt=count($arr);
        echo $so_pt;

        $tong=0;
        $tich=1;
        $tongchan=0;
        $tongle=0;
        for($i=0;$i<$so_pt;$i++){
            $tong+=$arr[$i];
            $tich*=$arr[$i];
            if($arr[$i]%2!=0)
            $tongle+=$arr[$i];
            else
            $tongchan+=$arr[$i];
        }
    }
    ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình tính dãy số</h1>
</section>
<label>Nhập mảng</label>

<input  type="text" name="ds" value="<?php echo $ds?>" size="30" required pattern="[-+]?[0-9]*?[0-9]+" autofocus>


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