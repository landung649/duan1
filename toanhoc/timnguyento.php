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

$kq = "";
if (isset($_POST['tinh'])) {
    $so = $_POST['so'];
    if($so>1){
        for($n=2;$n<=$so;$n++)
{        $co =true;
        $i=2;
        while($i<$n){
            if($n%$i==0){
                $co=false;
                break;
            }
            $i++;
        }
     
        if($co==true)
        $kq.="$n ";
     
    }
    $kq="các số nguyên tố của $so là: ".$kq;
    }
    else
    {
        $kq="$so ko phai số nguyên tố";
    }
/*
giả sử: số nhập vào là 5
bắt đầu: n =2; n <= số; n đc bật true; thì vào while nó ko hợp lệ; nó vẫn là true nên đc in ra
tiếp: n=3; n <= số; n đc true; vào vòng lặp while ; 2 < 3 ; 3:2 != 0 -> n vẫn true ; i=3; i ko nhỏ 3 , n thoát while => kq sẽ đc 2; 3
tiếp: n=4; n<=5; n là true ; vào while 2<4;  4:2==0 ; n là false ->n ko đc in => kq vẫn là 2;3

tiếp: n=5; 5 <= 5, n là true ; vào while 2<5;  5:2 != 0 , nó vẫn true; i đc tăng lên (i=3)
                            3<5__________3<5; 5:3 != 0_______________________________(i=4)
                            4<5__________4<5; 5:4 != 0_______________________________(i=5)
                            i ko nhỏ hơn n ; ko thoả mãn while; thoát while
tiếp : n =6 ; ko thoả đk n<= số; thoát for ; Xuất kq

     => kq= 2; 3; 5
*/
   
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
        <?php if ($kq != "") { ?>
            <section>
                <h4 style="width:350px;"><?php echo $kq ?></h4>
            </section>
        <?php } ?>
        <section>
            <input type="submit" name="tinh" value="Tính" class="input4">
        </section>
    </form>
</section>
</body>
</html>
