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
    function hamdonvi($so){
        if($so>=0 && $so<=9){
            switch($so){
                case 0:return "không"; 
                case 1:return "một"; 
                case 2:return "Hai"; 
                case 3:return "Ba"; 
                case 4:return "bốn"; 
                case 5:return "năm"; 
                case 6:return "Sáu"; 
                case 7:return "Bảy"; 
                case 8:return "Tám"; 
                default:return "CHÍN";
            
               }
        }
    }
    function ham_hangchuc($so){
        if($so>=10 && $so<=99){
            // tách từng số ra để đọc 
            $sothu1= floor($so/10); //floor(3.9) , làm tròn xuống sẽ đc là: 3
            $sothu2= $so%10; // đc : 9

            $chuso1=hamdonvi($sothu1);
            $chuso2=hamdonvi($sothu2);

            if($so==10)
            return "Mười";
            elseif($so==15)
            return "Mười lăm";
            elseif($sothu1==1)
            return "Mười $chuso2";
            elseif($sothu2==5)
            return "$chuso1 mươi lăm";
            elseif($sothu2==0)
            return "$chuso1 mươi";
            elseif($sothu2==1)
            return "$chuso1 mươi mốt";
            else
            return "$chuso1 mươi $chuso2";
        }
    }
    function ham_hangtram($so){
        //số:545
        $hangtram=floor($so/100); //5
        $hangchuc=$so%100; //45

        $chuhtram=hamdonvi($hangtram);
        $chuhchuc=ham_hangchuc($hangchuc);

        return "$chuhtram trăm $chuhchuc";
    }
$noti="";
    if(isset($_POST['tinh'])&& $_POST['so']>=0 && $_POST['so']<=999){
        $so=$_POST['so'];
        if($so<10){
            $noti=hamdonvi($so);
        }elseif($so<100){
            $noti=ham_hangchuc($so);
        }else{
            $noti=ham_hangtram($so);
        }
    }
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình đọc số bằng chữ</h1>
</section>   
<section>
<label style="  margin-left: 12px;" for=""> nhập số:</label>
<label style="  margin-left: 125px;" for="">kết quả</label>
</section>
<section>

<input style="  margin-left: 2px;   margin-right: 15px;" type="text" name="so" value="<?php ?>" size="8" required pattern="[-+]?[0-9]*?[0-9]+" autofocus>
<input  type="submit" name="tinh" value="Chuyển"class="input4 " >

<input  style="  margin-left: 15px; margin-right: 15px;" type="text" class="iput3" name="chu" value="<?php echo $noti ?>" size="25" readonly >

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