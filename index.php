<html>
<head>
<meta charset="utf-8">
    <title>文本式留言板实例</title>
    <style>
        td,th{
            border:solid#000 1px;;
        }
    </style>
</head>
<body>
    <center>
        <?php include('menu.php');?>
        <h3>浏览留言</h3>
        <table width="800px"style="border-collapse: collapse;border: none">
            <th>标题</th>
            <th>留言者</th>
            <th>留言内容</th>
            <th>留言时间</th>
            <th>ip地址</th>
            <th>操作</th>
            <?php
//                读取留言
            $info = rtrim(file_get_contents('./ly.db'));
//                以@@ 拆分
            $infoarr = explode('@@',$info);
//            判断并遍历输出
            if (!empty($infoarr) && count($infoarr)>0){
//                echo '<pre>';
//                var_dump($infoarr);
//                die();
                foreach ($infoarr as $key=>$arr){
//            使用##拆分留言字段信息并输出
                    $ly = explode("##" ,$arr);
//                    var_dump($arr);
                    echo '<tr><td>'.$ly[0].'</td>
<td>'.$ly[1].'</td><td>'.$ly[2].'</td><td>'.$ly[3].'</td><td>'.$ly[4].'</td><td>删除 编辑</td></tr>';


                }
            }

            ?>
        </table>
    </center>
</body>
</html>