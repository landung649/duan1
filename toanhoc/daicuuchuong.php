<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/toan.css">
    <style>
        .flex-container {
            display: flex;
            flex-wrap: wrap;
          
        }
        .flex-item {
            margin: 10px;
            padding: 10px;
            background: rgb(237, 243, 73);
            border: 1px solid #ccc;
            width: 100px; /* You can adjust the width as needed */
        }
    </style>
</head>
<body>
    <?php
    $kq = "";

    // Kiểm tra nếu nút 'tinh' đã được nhấn và 'bd' nhỏ hơn 'kt'
    if (isset($_POST['tinh']) && $_POST['bd'] < $_POST['kt']) {
        $bd = $_POST['bd'];
        $kt = $_POST['kt'];
        // Vòng lặp để tạo bảng cửu chương
        for ($dem = $bd; $dem <= $kt; $dem++) {
            $kq .= "<div class='flex-item'>";
            for ($i = 1; $i <= 10; $i++) {
                $ct = $dem * $i;
                $kq .= "$dem x $i = $ct <br>";
            }
            $kq .= "</div>";
        }
    }
    ?>

    <section class="khung">
        <form name="tinhdthcn" action="" method="post">
            <section>
                <h1  style="width: 300px;">Chương trình bảng cửu chương</h1>
                <label for="" style="width: 200px;">Dãy cửu chương</label><br>
            </section>
            <section>
                Cửu chương từ:
                <input style="margin-left: 15px; margin-right: 20px;" type="text" name="bd" value="<?php echo isset($_POST['bd']) ? $_POST['bd'] : ''; ?>" size="5" required pattern="[-+]?[0-9]*[0-9]+" autofocus>
                Đến:
                <input style="margin-left: 10px; margin-right: 20px;" type="text" name="kt" value="<?php echo isset($_POST['kt']) ? $_POST['kt'] : ''; ?>" size="5" required pattern="[-+]?[0-9]*[0-9]+">
            </section><br>
            <section>
                <input type="submit" name="tinh" style="width: 90px;" value="Tính toán" class="input4">
            </section>
        </form><br>

        <?php if ($kq != "") { ?>
            <section>
                <h1 style=" background-color: rgb(38, 522, 523); color:#000">Bảng cửu chương từ <?php echo $bd ?> đến <?php echo $kt ?></h1>
                <div class="flex-container">
                    <?php echo $kq; ?>
                </div>
            </section>
        <?php } ?>
    </section>
</body>
</html>
