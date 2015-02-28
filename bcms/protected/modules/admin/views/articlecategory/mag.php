<!DOCTYPE HTML>
<html>
<head>
    <title>文章类别管理页面</title>

    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        body{
            padding:20px;

        }

    </style>

</head>

<body>
<span class="icon"><i class="icon-th"></i> 文章类别表</span>
<hr />
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>文章类别</th>
        <th>操作</th>
    </tr>
    <?php foreach($infos as $_v){ ?>
    <tr>
        <td><?php echo $_v['seq']; ?></td>
        <td><?php echo $_v['name']; ?></td>
        <td>
            <a href="./index.php?r=admin/articlecategory/upd/id/<?php echo $_v['seq']; ?>">修改</a>
            /
            <a href="./index.php?r=admin/articlecategory/del/id/<?php echo $_v['seq']; ?>">删除</a>
        </td>
    </tr>
    <?php }?>
</table>
<br />
<hr />
<a href="./index.php?r=admin/articlecategory/add">增加文章类别</a>



</body>
</html>
