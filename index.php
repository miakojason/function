<h1>自訂函式</h1>
<?php
//自訂函式
$c=20;   
function sum($a,$b){

    // global呼叫外面區域函數
    global $c;
 
    $sum=$a+$b+$c;
    echo "輸入:".$a."、".$b;
    echo "<br>";
    return $sum;
}

$sum=sum(10,20);
echo "總和是：".$sum;
echo "<hr>";
$sum=sum(10,20);
echo "總和是：".$sum;
echo "<hr>";

echo "總和是:".sum(56,21);
// echo "總和是2:".sum(77);

?>
<h1>不定參數的用法</h1>
<?php
function sum2(...$arg) {
    $sum = 0;

    foreach ($arg as $num) {
        if(is_numeric($num))
        $sum += $num;
    }

    return $sum;
}
echo sum2(1,2);
echo"<hr>";
echo sum2(23,45,89);
echo"<hr>";
echo sum2(23,98,34,89,22,3,4);
echo"<hr>";


?>