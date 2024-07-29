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
$duonglich="";
$can="";
$chi="";
$amlich="";
$arr_can=array("Canh","Tân","Nhâm","Quí","Giáp","Ất","Bính","Đinh","Mậu","Kỷ");
print_r($arr_can);
echo "<br>";
$arr_chi=array("Thân","Dậu","Tuất","Hợi","Tý","Sửu","Dấn","Mẹo","Thìn","Tỵ","Ngọ","Mùi");
$arr_hinhanh=array("than.webp","dau.webp","tuat.webp","hoi.jpg","ti.webp","suu.webp","dan.webp","meo.webp","thin.webp","ty.webp","ngo.webp","mui.webp");

print_r($arr_chi);
    if(isset($_POST['tinh'])&& $_POST['dl']>0){
            $duonglich=$_POST['dl'];
            $can=$arr_can[$duonglich%10];
            $chi=$arr_chi[$duonglich%12];
            $hinh=$arr_hinhanh[$duonglich%12];


            $amlich=$can." ".$chi; 
}
// $noti="";
//   if(isset($_POST['tinh']) && $_POST['nam'] > 0 )
//     {
//         $nam=$_POST['nam'];
//         switch($nam % 10)
//         {
//             case 0: $can="Canh";
//             break;
//             case  1: $can="Tân";
//             break;
//             case  2: $can="Nhân";
//             break;
//             case 3: $can="Quý";
//             break;
//             case 4: $can="Giáp";
//             break;
//             case 5: $can="Ất";
//             break;
//             case 6: $can="Binh";
//             break;
//             case 7: $can="Đinh";
//             break;
//             case 8: $can="Mậu";
//             break;
//             default: $can="Kỷ";

//         }
//         switch($nam % 12)
//         {
//             case 0: $can1="Thân";
//             break;
//             case  1: $can1="Dậu";
//             break;
//             case  2: $can1="Tuất";
//             break;
//             case 3: $can1="Hợi";
//             break;
//             case 4: $can1="Tí";
//             break;
//             case 5: $can1="Sửu";
//             break;
//             case 6: $can1="Dần";
//             break;
//             case 7: $can1="Mão";
//             break;
//             case 8: $can1="Thìn";
//             break;
//             case 8: $can1="Tỵ";
//             break;
//             case 8: $can1="Ngọ";
//             break;
//             default: $can1="Mùi";

//         }
//         $noti=$can." ".$can1; 
//     }
 ?>

    <section class="khung">
<form name="tinhdthcn" action="" method="post">
 <section>
<h1> chương trình đọc lịch âm</h1>
</section>   
<section>
<label style="  margin-left: 18px;" for=""> nhập năm:</label>
<label style="  margin-left: 165px;" for="">kết quả</label>
</section>
<section>

<input style="  margin-left: 2px;   margin-right: 30px;" type="text" name="dl" value="<?php echo $duonglich ?>" size="15" required pattern="[-+]?[0-9]*?[0-9]+" autofocus>
<input  type="submit" name="tinh" value="Chuyển"class="input4 " >

<input  style="  margin-left: 15px; margin-right: 15px;" type="text" class="iput3" name="chu" value="<?php echo $amlich?>" size="15" readonly >

</section>



<section>

<?php
if($amlich!= ""){
    ?>
    <h4><img src="../hinhanh/<?php echo $hinh ?>" style=" width:150px;"></h4>
    <?php } ?>
</section>

</form>
</section>
</body>
</html>