
<h1>自訂函式</h1>
<?php
//自訂函式
$c = 20;
// $c全域函數在function的外面，functio要使用請用global呼叫
function sum($a, $b)
{
    // global呼叫外面區域函數
    global $c;
    $sum = $a + $b + $c;
    echo "輸入:" . $a . "、" . $b;
    echo "<br>";
    return $sum;
}
$sum = sum(10, 20);
echo "總和是：" . $sum;
echo "<hr>";
$sum = sum(10, 20);
echo "總和是：" . $sum;
echo "<hr>";
echo "總和是:" . sum(56, 21);
?>
<h1>不定參數的用法</h1>
<?php
function sum2(...$arg)
{
    $sum = 0;
    foreach ($arg as $num) {
        // if(is_numeric($num))判斷是不是數字，增加程式運作可靠性
        if (is_numeric($num))
            $sum += $num;
    }
    return $sum;
}
echo sum2(1, 2);
echo "<hr>";
echo sum2(23, 45, 89);
echo "<hr>";
echo sum2(23, 98, 34, 89, 22, 3, 4);
echo "<hr>";
?>
<h1>自訂函式的預設值</h1>
<?php
// 預設值可以放在裡面
function sum3($a, $b, $c = 3)
{
    $sum = ($a + $b) * $c;
    echo "$a 、 $b , 倍數 $c <br>";
    return $sum;
}
echo "總和是" . sum3(10, 15);
echo "<hr>";
echo "總和是" . sum3(10, 15, 10);
echo "<hr>";
echo "總和是" . sum3(1, 2, 3);
echo "<hr>";
?>
