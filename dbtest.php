<?php
    // mysqlへのアクセス
    $mysqli = new mysqli("$hostname:$port","$username","$password", "$name");
    // sql文の発行
    $result = $mysqli->query("select * from test");
    // 取得した行分繰り返し
    while ($row = $result->fetch_row()) {
        //　テーブルの列分繰り返し 
　　　　　　　　　　　　　　　　for($i = 0; $i < mysqli_num_fields ( $result ); $i ++) {
            // 要素の表示
            echo "$row[$i]";
        }
    }
    // 結果を開放
    result->close();
    // 接続を閉じる
    $mysqli->close();
?>
