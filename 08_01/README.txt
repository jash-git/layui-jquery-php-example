PHP 控制 LAYUI 導航列表

資料來源: ChatGPT3.5

要在 PHP 中控制 LAYUI 導航列表，您可以使用 PHP 生成 HTML 代碼，並與 LAYUI 的相應組件集成。以下是一個簡單的例子，演示如何在 PHP 中生成 LAYUI 導航列表

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>PHP 控制 LAYUI 導航列表</title>
    <!-- 引入 LAYUI 的 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/layui/2.6.8/css/layui.css">
</head>
<body>

<!-- 定義一個容器，用於顯示 LAYUI 導航列表 -->
<div class="layui-container">
    <ul class="layui-nav">
        <?php
        // 在這裡使用 PHP 生成導航列表的 HTML 代碼
        $navItems = array("首頁", "產品", "服務", "關於我們", "聯絡我們");

        foreach ($navItems as $item) {
            echo "<li class='layui-nav-item'><a href='#'>$item</a></li>";
        }
        ?>
    </ul>
</div>

<!-- 引入 LAYUI 的 JS 文件 -->
<script src="https://cdn.staticfile.org/layui/2.6.8/layui.js"></script>
<!-- 初始化 LAYUI -->
<script>
    layui.use('element', function(){
        var element = layui.element;
    });
</script>

</body>
</html>