<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
// $amount改成$a$巴拉巴拉下面for的$amount也要改成衣樣，就可以執行
function triangle($size)
{echo "<h2>正三角形</h2>";
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < ($size - 1 - $i); $j++) { //當條件 $j<=$i 成立時，內層迴圈就會執行
            echo "&nbsp"; //j++這個動作會一直重複，直到 $j 的值大於 $i，使得條件 $j<=$i 不再成立，內層迴圈結束。
        }
        for ($k = 0; $k < ($i * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    } echo "<hr>";
}
triangle(20);
?>

<?php
function triangle2($size)
{ echo"<h2>直角三角形</h2>";
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j <= $i; $j++) { //當條件 $j<=$i 成立時，內層迴圈就會執行
            echo "*"; //j++這個動作會一直重複，直到 $j 的值大於 $i，使得條件 $j<=$i 不再成立，內層迴圈結束。
        }
        echo "<br>";
    }echo "<hr>";
}
triangle2(15)
?>

<?php

function triangle3($size)
{echo"<h2>倒直角三角形</h2>";
    for ($i = $size - 1; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }echo "<hr>";
}
triangle2(5);
?>

<?php
function triangle4($size)
{echo"<h2>菱形</h2>";
    $mid = floor(($size * 2 - 1) / 2);
    $tmp = 0; //  要先宣告tmp=0定義不然下面tmp紅線//
    for ($i = 0; $i < ($size * 2 - 1); $i++) {
        if ($i <= $mid) {
            $tmp = $i; //i<=4時 tmp不便最多到4
        } else { //  要先宣告tmp=0定義不然下面tmp紅線，//
            $tmp = $tmp - 1; //更改 $tmp=$tmp-1;
        }
        for ($j = 0; $j < ($mid - $tmp); $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }echo "<hr>";
}
triangle(10);
?>

<?php
function triangle5($size)
{echo"<h2>矩形</h2>";

    for ($i = 0; $i < $size; $i++) {

        for ($j = 0; $j < $size; $j++) {
            if ($i == 0 || $i == $size - 1) {
                echo "*";
            } else if ($j == 0 || $j == $size - 1) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }echo "<hr>";
}
triangle3(10);
?>
<hr>
<hr>
<h1>呼叫三角形</h1>
<?php
stars('矩形',10);
stars('正三角形',7);
stars('倒直角三角形',7);
stars('菱形',7);
stars('直角三角形',7);
function stars($shape, $size)
{
    switch ($shape) {
        case '正三角形':
            triangle($size);
            break;
        case '直角三角形':
            triangle2($size);
            break;
        case '倒直角三角形':
            triangle3($size);
            break;
        case '菱形<':
            triangle4($size);
            break;
        case '矩形':
            triangle5($size);
            break;
    }
}

?>
