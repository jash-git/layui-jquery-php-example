<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="layui/css/layui.css"><!-- layui css 文件 -->
        <style><!-- class css 高度設定-->
        body {
            margin: 20px;
        }
        </style>      
    </head>
    
    <body> <!-- layui導航列(工具列/功能表) -->
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

        <br><br>

        <ul class="layui-nav layui-nav-tree" lay-shrink="all">
            <li class="layui-nav-item" lay-unselect><a href="#"><i class="layui-icon layui-icon-user"></i> 仪表图</a></li>
            <li class="layui-nav-item" lay-unselect><a href="#">列表</a></li>
            <li class="layui-nav-item" lay-unselect><a href="#">图文</a></li>
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;">项目方案</a>
                <dl class="layui-nav-child">
                    <dd><a href="#">驱动式</a></dd>
                    <dd><a href="#">扁平式</a></dd>
                    <dd><a href="#">龙虎式</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">项目方案</a>
                <dl class="layui-nav-child">
                    <dd><a href="#">驱动式</a></dd>
                    <dd><a href="#">扁平式</a></dd>
                    <dd><a href="#">龙虎式</a></dd>
                </dl>
            </li>
        </ul>
        
        <!-- body 末尾放置所有JS -->
        <script src="./js/jquery-3.7.1.js"></script>
        <script src="layui/layui.js"></script>    
        <script>
            $(document).ready(function () {
                CallAPI();
                layui.use(['element'], () => {//layui導航列(工具列/功能表) 所需要的JS模塊
                
                })                
            });    
                        
            function CallAPI() {
                $.ajax({            
                  url: './index_api.php',
                  type: 'Get',                          
                      beforeSend: function(){
                  },
                  
                  success: function(data) {
                    var StrMsg='';
                    for (var i = 0; i < data.length; i++) {
                       StrMsg+=data[i].state + ' - ' + data[i].times+'\n';
                       console.log(data[i].state + ' - ' + data[i].times);
                    }
                    
                    // JS彈出視窗顯示資料- alert(StrMsg);
                    //https://www.layuiweb.com/doc/index.htm ~ layer msg 顯示資料，藉此判斷可以使用layer
                    layui.use(['layer', 'form'], function(){
                      var layer = layui.layer
                      ,form = layui.form;
                      
                      layer.msg(StrMsg);
                    });
                    
                  },
                  
                  error: function() {
                  },
                  
                  complete: function() {

                  }              
                });              
            }            
          
        </script>
    </body>
</html>