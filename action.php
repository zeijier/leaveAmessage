<?php
include ('menu.php');?>
<h3>操作留言</h3>
<?php
switch ($_GET['a']){
    case 'insert':
        $data[] = $_POST['title'];
        $data[] = $_POST['pers'];
        $data[] = $_POST['content'];
        $data[] = date('Y-m-d');
        // 获取访问者ip
        $data[] = $_SERVER['REMOTE_ADDR'];
        $jieguo = implode('##',$data);
//      追加写到ly.db 文件中 FILE_APPEND设置该属性为追加
        file_put_contents('./ly.db','@@'.$jieguo,FILE_APPEND);echo 'success';
        break;
    case 'delete':

        break;
    case 'update':

        break;
}