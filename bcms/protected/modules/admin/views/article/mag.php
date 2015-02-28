<!DOCTYPE HTML>
<html>
<head>
    <title>后台文章管理页面</title>
    <link href="<?php echo ADMIN_CSS_URL; ?>select2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ADMIN_CSS_URL; ?>matrix-style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ADMIN_CSS_URL; ?>font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="content" style="margin-left: 10px;">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-th"></i></span>
                        <h5>文 章 表</h5>
                        <h5>//→ <a href="./index.php?r=admin/article/add">添加文章</a></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>类别</th>
                                <th>标题</th>
                                <th>内容</th>
                                <th>完成时间</th>
                                <th>作者</th>
                                <th>审核状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($infos as $_v){ ?>
                            <tr>
                                <td><?php echo $_v['id']; ?></td>
                                <td><?php echo $_v['category']; ?></td>
                                <td><?php echo $_v['title']; ?></td>
                                <td>
                                    <a href="#">查看文章内容</a>
                                </td>
                                <td><?php echo $_v['finishtime']; ?></td>
                                <td><?php echo $_v['author']; ?></td>
                                <td><?php echo $_v['ischecked']; ?></td>
                                <td>
                                    <a href="./index.php?r=admin/article/del/id/<?php echo $_v['id']; ?>">删除</a>
                                    /
                                    <a href="./index.php?r=admin/article/upd/id/<?php echo $_v['id']; ?>">修改</a>
                                    -/
                                    <a href="./index.php?r=admin/article/check/id/<?php echo $_v['id']; ?>">审核</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js"></script>
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.min.css"></script>
<script src="<?php echo ADMIN_JS_URL; ?>jquery.uniform.js"></script>
<script src="<?php echo ADMIN_JS_URL; ?>select2.min.js"></script>
<script src="<?php echo ADMIN_JS_URL; ?>jquery.dataTables.min.js"></script>
<script src="<?php echo ADMIN_JS_URL; ?>matrix.tables.js"></script>
</body>
</html>
