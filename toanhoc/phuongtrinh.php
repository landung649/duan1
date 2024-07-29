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
    function pt_bac1($b,$c){
        if($b==0){
            if($c==0)
            return "pt có vô số nghiệm";
            else
            return "pt vô nghiệm";
        }else{
            return "pt có 1 nghiệm: x = ". round(-$c/$b,2);
        }
    }

    function pt_bac2($a,$b,$c){
        $delta=pow($b,2)-4*$a*$c;
        if($delta<0)
        return "pt vô no";
        elseif($delta==0)
        return "pt có nghiệm kép: x1 = x2 = ".round(-$b/(2*$a),2);
        else
        $x1=round((-$b + sqrt($delta))/(2*$a),2);
        $x2=round((-$b - sqrt($delta))/(2*$a),2);
        return "pt có 2 no là: x1 = $x1 và x2 = $x2";
    }
$kq="";

    if(isset($_POST['tinh'])){
        $sa=$_POST['so_a'];
        $sb=$_POST['so_b'];
        $sc=$_POST['so_c'];
        if($sa==0)
        $kq=pt_bac1($sb,$sc);
    else
        $kq=pt_bac2($sa,$sb,$sc);
     
    }
?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1>giải phương trình bậc 2 </h1>
</section>   
<section>
nhập số: 
<b style="  margin-left: 20px; ">a</b>
<input style="  margin-left: 2px;   margin-right: 20px;" type="text" name="so_a" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*[.,]?[0-9]+" autofocus>
<b>b</b>
<input style="  margin-left: 2px; margin-right: 20px;" type="text" name="so_b" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
<b>c</b>
<input style="  margin-left: 2px; margin-right: 10px;" type="text" name="so_c" value="<?php ?>" size="5" required pattern="[-+]?[0-9]*[.,]?[0-9]+" >
<b>= 0</b>
</section>
<section>
<b style="  margin-right: 270px; ">  Nghiệm : </b>
<input  style="  margin-left: -240px; margin-right: 50px;" type="text" class="iput3" name="dtich" value="<?php echo $kq ?>" size="35" readonly >
</section>

<!-- 
<?php
if($noti != ""){
    ?>
    <h4><?php echo $noti ?></h4>
    <?php } ?> -->
<section>
<input  type="submit" name="tinh" value="Tinh"class="input4 " >
</section>

</form>
</section>
</body>
</html>