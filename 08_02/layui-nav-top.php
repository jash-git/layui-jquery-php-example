<?php
    // 這是一個簡單的例子，你需要根據你的需求修改

    // 假設你有一個數據陣列
    $data = array(
        array('id' => 1, 'name' => '項目1'),
        array('id' => 2, 'name' => '項目2'),
        // 添加更多項目...
    );

    // 將數據轉換為 JSON 格式
    echo json_encode($data);
?>