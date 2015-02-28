<!DOCTYPE HTML>
<html>
<head>
    <title>用户注册界面</title>

    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding: 20px; }
    </style>
    <script type="text/javascript" src="<?php echo HOME_JS_URL; ?>reg.js"></script>
</head>

<body>

<ul class="breadcrumb">
    <li><a href="./index.php?r=index/index">网站首页</a> <span class="divider">→ </span></li>
    <li class="active">用户注册</li>
</ul>

<hr />

<?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="control-group">
        <div class="control-label">
            <?php echo $form->labelEx($user_model,'username',array('for'=>'userName')); ?>
        </div>
        <div class="controls">
            <?php echo $form->textField($user_model,'username',array('id'=>'userName')); ?>
            <span class="label label-info">
                <!-- 表单验证失败显示错误信息 -->
                <?php echo $form->error($user_model,'username'); ?>
            </span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <?php echo $form->labelEx($user_model,'password',array('for'=>'userPsw')); ?>
        </div>
        <div class="controls">
            <?php echo $form->passwordField($user_model,'password',array('id'=>'userPsw')); ?>
            <span class="label label-info">
                <!-- 表单验证失败显示错误信息 -->
                <?php echo $form->error($user_model,'password'); ?>
            </span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <?php echo $form->labelEx($user_model,'password2',array('for'=>'userPsw')); ?>
        </div>
        <div class="controls">
            <?php echo $form->passwordField($user_model,'password2',array('id'=>'userPsw')); ?>
            <span class="label label-info">
                <!-- 表单验证失败显示错误信息 -->
                <?php echo $form->error($user_model,'password2'); ?>
            </span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="userEmail">电子邮箱：</label>-->
            <?php echo $form->labelEx($user_model,'email',array('for'=>'userEmail')); ?>
        </div>
        <div class="controls">
<!--            <input type="email" id="userEmail" name="email" required="required" value="" />-->
            <?php echo $form->emailField($user_model,'email',array('id'=>'userEmail')); ?>
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="userBirthday">生　日：</label>-->
            <?php echo $form->label($user_model,'birthday',array('for'=>'userBirthday')); ?>
        </div>
        <div class="controls">
<!--            <input type="date" id="userBirthday" name="birthday" required="required" value="" />-->
            <?php echo $form->textField($user_model,'birthday',array('id'=>'userBirthday')); ?>
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label>性　别：</label>-->
            <?php echo $form->label($user_model,'gender'); ?>
        </div>
        <div class="controls">
<!--            <input type="radio" name="gender" value="男" />男-->
<!--            <input type="radio" name="gender" value="女" />女-->
<!--            <input type="radio" name="gender" value="保密" checked="checked" />保密-->
            <?php echo $form->radioButtonList($user_model,'gender',$gender); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="userNickname">昵　称：</label>-->
            <?php echo $form->label($user_model,'nickname',array('for'=>'userNickname')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="userNickname" name="nickname" required="required" value="" />-->
            <?php echo $form->textField($user_model,'nickname',array('id'=>'userNickname')); ?>
            <span class="label label-info">
                <!-- 表单验证失败显示错误信息 -->
                <?php echo $form->error($user_model,'nickname'); ?>
            </span>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login" onclick="return checkRegister();">注 册</button>
        </div>
    </div>
<?php $this->endWidget(); ?>


<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
