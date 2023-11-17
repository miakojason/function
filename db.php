<?php
$rows=all('dept');// 在這裡指定資料表
dd($rows);//印出來
function all($table=null){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, 'root', '');
    if(isset($table) && !empty($table)){
        $sql = "select * from `$table`";
        $rows = $pdo->query($sql)->fetchAll();
        return $rows;
    }else{
        echo"錯誤:沒有指定的資料表名稱";
    }
  
}
//自定義印出來函式 
function dd($array)//dd簡單取名direct dump直接印
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>