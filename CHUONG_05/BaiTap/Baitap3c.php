<?php
$x=rand(1,100);
$y=rand(1,100);
    if($x > $y)
{

echo "Kết quả cho phép nhân ".($x*$y)."";
echo "<br>Kết quả cho phép cộng ".($x+$y)."";
echo "<br>Kết quả cho phép chia ".($x/$y)."";
echo "<br>Kết quả cho phép trừ ".($x-$y)."";
echo "<br>Kết quả chia lấy dư ".($x%=$y)."";
}
else
{
    echo "x nhỏ hơn y";
}
?>