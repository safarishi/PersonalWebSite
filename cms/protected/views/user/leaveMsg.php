<!DOCTYPE HTML>
<html>
<head>
    <title>留言界面</title>

    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding: 20px; }
    </style>

</head>

<body>

<ul class="breadcrumb">
    <li><a href="./index.php?r=index/index">网站首页</a> <span class="divider">→ </span></li>
    <li class="active">给我留言</li>
</ul>

<hr />

<?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="userName">来　自：</label>-->
            <?php echo $form->label($msg_model,'youare',array('for'=>'userName')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="userName" name="youare" value="{$smarty.session.username}" placeholder="您是..." />-->
            <?php echo $form->textField($msg_model,'youare',array('id'=>'userName','placeholder'=>'您是...')); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="uSubject">主　题：</label>-->
            <?php echo $form->label($msg_model,'subject',array('for'=>'uSubject')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="uSubject" name="subject" />-->
            <?php echo $form->textField($msg_model,'subject',array('id'=>'uSubject')); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="userContent">内　容：</label>-->
            <?php echo $form->label($msg_model,'content',array('for'=>'userContent')); ?>
        </div>
        <div class="controls">
<!--            <textarea cols="35" rows="5" id="userContent" name="content" placeholder="留言内容"></textarea>-->
            <?php echo $form->textArea($msg_model,'content',array('id'=>'userContent','cols'=>'35','rows'=>'5','placeholder'=>'留言内容')); ?>
            <span class="label label-info">
                <!-- 表单验证失败显示错误信息 -->
                <?php echo $form->error($msg_model,'content'); ?>
            </span>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login">留言</button>
        </div>
    </div>
<?php $this->endWidget(); ?>


<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
