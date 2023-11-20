function update($table, $id, $clos){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "update `$table` set ";
    
    if (!empty($cols)) {
        foreach ($clos as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
    } else {
        echo "錯誤:缺少要編輯的欄位陣列";
    }
    $sql .= join(",",$tmp);
    $tmp = [];
    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] ="`$col`='$value'";
        }
        $sql .= " where " .join(" && ",$tmp);
    } elseif (is_numeric($id)){
        $sql .= " where `id`= '$id' ";
    } else {
        echo "錯誤:參數的資料型態必須是數字或陣列";
    } 
    echo $sql;
    return $pdo->exec($sql); //知道影響幾列
}