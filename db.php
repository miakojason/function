<?php
$rows = all('students',['dept'=>'3'] ,"order by id desc"); // 在這裡指定資料表
dd($rows); //印出來
// 預設值要設空，空值才能跑
// "select * from `$table` $where";
function all($table = null, $where = '',$other='')
{
    $sql = "select * from `$table`";
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, 'root', '');
    // $a = "select * from `$table`";
    $sql = "select * from `$table`";
    // 預設值要設空，空值才能跑
    if (isset($table) && !empty($table)) {

        if (is_array($where)) {
            /**
             * ['dept'=>'2','graduate_at=>'12']=> where `dept`='2' && `graduate_at='12'
             * $sql=''select *from `$table` where `dept`='2' &&`graduate_at`='12'"
             */
            if (!empty($where)) {
                foreach ($where as $col => $value) {
                    $tmp[] = "`$col`='$value'";
                }
                // $sql = "select * from `$table` where" . join("&&", $tmp);
                // $sql = "{$a}}where" . join("&&", $tmp);
                $sql .= "where" . join("&&", $tmp);
            }
        } else {
            $sql .= "$where";
        }
        $sql .=$other;
        // $tmp[];
        // $sql = "select * from `$table`";
        //  $sql = "$a";
        // 
        print_r($sql);//檢查sql查詢有沒有錯誤失敗顯示出來
        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;                     //PDO::FETCH_ASSOC減少顯示的欄位省流量大小
                                          // FETCH_NUM索引值      
        
    } else {
        echo "錯誤:沒有指定的資料表名稱";
    }
}


//自定義印出來函式 
function dd($array) //dd簡單取名direct dump直接印
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
