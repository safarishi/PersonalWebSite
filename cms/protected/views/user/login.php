<!DOCTYPE HTML>
<html>
<head>
    <title>用户登录界面</title>
    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding: 20px; }
    </style>

    <script type="text/javascript">
        function checkLogin()
        {
            String.prototype.trim = function()
            {
                return this.replace(/(^\s*) | (\s*$)/g, '');
            };

            var username = login.username.value;
            var password = login.password.value;

            if(username.trim()=="")
            {
                alert("请输入用户名！！");
                login.username.select();
                return false;
            }

            if(password.trim()=="")
            {
                alert("请输入密码！！");
                login.password.select();
                return false;
            }

        }
    </script>
</head>

<body>

<ul class="breadcrumb">
    <li><a href="./index.php?r=index/index">网站首页</a> <span class="divider">→ </span></li>
    <li class="active">用户登录</li>
</ul>

<hr />

<!--<form method="post" action="{$smarty.const.__SELF__}" class="form-horizontal" name="login">-->
    <?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="userName">用户名：</label>-->
            <?php echo $form->labelEx($user_login,'username',array('for'=>'userName')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="userName" name="username" required="required" />-->
            <?php echo $form->textField($user_login,'username',array('id'=>'userName','required'=>'required')); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="userPsw">密　码：</label>-->
            <?php echo $form->labelEx($user_login,'password',array('for'=>'userPsw')); ?>
        </div>
        <div class="controls">
<!--            <input type="password" id="userPsw" name="password" required="required" />-->
            <?php echo $form->textField($user_login,'password',array('id'=>'userPsw','required'=>'required')); ?>
            <?php echo $form->error($user_login,'password'); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login" onclick="return checkLogin();">登 陆</button>
        </div>
    </div>
<!--</form>-->
<?php $this->endWidget(); ?>

<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
