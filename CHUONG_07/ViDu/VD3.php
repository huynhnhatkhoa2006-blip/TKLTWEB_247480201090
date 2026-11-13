<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD3</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $userame = "root";
    $password = "";

    $conn = mysqli_connect($servername, $userame, $password, $database);
    //Thực hiện lệnh INSERT INTO
    $mahang = "HNK";
    $tenhang = "Huỳnh Nhật Khoa";
    $mansx = "HNK";
    $namsx = "2006";
    $gia = "12355";
    $sql = "INSERT INTO hanghoa (mahang, tenhang, mansx, namsx, gia)
                        VALUES('$mahang','$tenhang','$mansx','$namsx','$gia' )";
    if($result = mysqli_query($conn, $sql)){
        echo ("Mẫu tin đã thêm thành công.");

    }
    else{
        echo"Thêm dữ liệu thất bại".mysqli_error($conn);
    }
    mysqli_close($conn);

    ?>
</body>
</html>