<!DOCTYPE HTML>
<html>
<head>
    <title>增加文章类别界面</title>

    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding: 20px; }
    </style>

</head>

<body>

<ul class="breadcrumb">
    <li><a href="./index.php?r=admin/articlecategory/mag">文章类别管理</a> <span class="divider">→ </span></li>
    <li class="active">增加文章类别</li>
</ul>

<hr />

    <?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="acSeq">类别编号：</label>-->
            <?php echo $form->labelEx($ac_model,'seq',array('for'=>'acSeq')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="acSeq" name="seq" value="" />-->
            <?php echo $form->textField($ac_model,'seq',array('id'=>'acSeq')); ?>
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="acName">类别名称：</label>-->
            <?php echo $form->labelEx($ac_model,'name',array('for'=>'acName')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="acName" name="name" value="" />-->
            <?php echo $form->textField($ac_model,'name',array('id'=>'acName')); ?>
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login">添 加</button>
        </div>
    </div>
<?php $this->endWidget(); ?>


<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL;?>bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo LIBS_STATIC_URL;?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
