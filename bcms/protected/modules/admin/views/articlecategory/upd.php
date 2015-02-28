<!DOCTYPE HTML>
<html>
<head>
    <title>修改文章类别界面</title>
    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            padding: 20px;
        }
    </style>
</head>

<body>

<ul class="breadcrumb">
    <li><a href="./index.php?r=admin/articlecategory/mag">文章类别管理</a> <span class="divider">→ </span></li>
    <li class="active">修改文章类别</li>
</ul>

<hr />
<!--<form method="post" action="{$smarty.const.__SELF__}" class="form-horizontal">-->
    <?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="acSeq">类别编号：</label>-->
            <?php echo $form->labelEx($ac_model,'seq',array('for'=>'acSeq')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="acSeq" name="seq" value="{$info.seq}" />-->
            <?php echo $form->textField($ac_model,'seq',array('id'=>'acSeq','value'=>$id,'readonly'=>'readonly')); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="acName">类别名称：</label>-->
            <?php echo $form->labelEx($ac_model,'name',array('for'=>'acName')); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="acName" name="name" value="{$info.name}" />-->
            <?php echo $form->textField($ac_model,'name',array('id'=>'acName','value'=>$name)); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login">修 改</button>
        </div>
    </div>
<?php $this->endWidget();?>

<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
