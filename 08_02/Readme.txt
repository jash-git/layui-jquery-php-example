PHP 產生 LAYUI 導航列表 AJAX

資料來源: ChatGPT

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


<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>使用 AJAX 的 LAYUI 導航列表</title>
    <!-- 引入 LAYUI 相關的 CSS 和 JS 文件 -->
    <link rel="stylesheet" href="path/to/layui/css/layui.css">
    <script src="path/to/layui/layui.js"></script>
</head>
<body>

<!-- 這是一個用於顯示導航列表的容器 -->
<ul class="layui-nav" lay-filter="nav-demo"></ul>

<script>
// 使用 AJAX 請求後端數據
layui.use('jquery', function(){
    var $ = layui.jquery;

    $.ajax({
        url: 'your_php_file.php', // 替換為你的 PHP 文件的路徑
        type: 'GET',
        dataType: 'json',
        success: function(data){
            // 將返回的數據動態生成導航列表
            var navContainer = $('.layui-nav');
            for(var i = 0; i < data.length; i++){
                navContainer.append('<li class="layui-nav-item"><a href="#">'+data[i].name+'</a></li>');
            }
            // 更新 LAYUI
            layui.nav('nav-demo');
        }
    });
});
</script>

</body>
</html>