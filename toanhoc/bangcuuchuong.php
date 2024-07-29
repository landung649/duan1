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
   $kq="";

    if(isset($_POST['tinh'])&& $_POST['ct']>0 )
    {
        $so=$_POST['ct'];
        for($i=1;$i<=10;$i++)
        {
            $ct=$so*$i;
            $kq.= "$so x $i = $ct <br>";
        }
    }
    ?>
    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
 <h1> chương trình bảng cửu chương</h1>
</section>
Cửu chương:
<input style="  margin-left: 15px;   margin-right: 20px;" type="text" name="ct" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*?[0-9]+" autofocus>

<input  type="submit" name="tinh" style="  width: 90px; margin-right: 30px;"value="Tính toán"class="input4 " >
</section>

</form><br><br>

<?php
if($kq != ""){
?>
    
 
<section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
 <h1> Bảng cửu chương <?php echo $so ?></h1>
</section>
<h4><?php echo $kq ?></h4>
</section>

</form>   <?php } ?>
</section>
</body>
</html>