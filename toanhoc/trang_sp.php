<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str_sp="";
    $arr_sp=array("sản phẩm 1"=>"1a695abea29b9c7ceb7dd5940b8b2fbe.jpg", "sản phẩm 2"=>"1a695abea29b9c7ceb7dd5940b8b2fbe.jpg","sản phẩm 3"=>"1a695abea29b9c7ceb7dd5940b8b2fbe.jpg",
    "sản phẩm 5"=>"1a695abea29b9c7ceb7dd5940b8b2fbe.jpg","sản phẩm 5"=>"1a695abea29b9c7ceb7dd5940b8b2fbe.jpg","sản phẩm 6"=>"1a695abea29b9c7ceb7dd5940b8b2fbe.jpg" );
   foreach($arr_sp as $ten=>$hinh){
   
 $str_sp.="<section><img src=\"../hinhanh/$hinh\">$ten</section>";

   }


?>
<section>
    <?php
    echo $str_sp;
    ?>
</section>
</body>
</html>