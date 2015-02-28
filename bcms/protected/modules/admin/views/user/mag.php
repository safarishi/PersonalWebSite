<!DOCTYPE HTML>
<html>
<head>
    <title>管理用户的界面</title>
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
                        <h5>用 户 表</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>用户名</th>
                                <th>密码</th>
                                <th>邮箱</th>
                                <th>生日</th>
                                <th>性别</th>
                                <th>昵称</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
<!--                            {foreach $info as $k=>$v}-->
                            <?php foreach($infos as $_v){ ?>
                            <tr>
                                <td><?php echo $_v['id']; ?></td>
                                <td><?php echo $_v['username']; ?></td>
                                <td><?php echo $_v['password']; ?></td>
                                <td><?php echo $_v['email']; ?></td>
                                <td><?php echo $_v['birthday']; ?></td>
                                <td><?php echo $_v['gender']; ?></td>
                                <td><?php echo $_v['nickname']; ?></td>
                                <td>
                                    <a href="./index.php?r=admin/user/del/id/<?php echo $_v['id'];?>">删除</a>
                                </td>
                            </tr>
                            <?php } ?>
<!--                            {/foreach}-->
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
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css"></script>
<script src="<?php echo ADMIN_JS_URL; ?>jquery.uniform.js"></script>
<script src="<?php echo ADMIN_JS_URL; ?>select2.min.js"></script>
<script src="<?php echo ADMIN_JS_URL; ?>jquery.dataTables.min.js"></script>
<script src="<?php echo ADMIN_JS_URL; ?>matrix.tables.js"></script>
</body>
</html>
