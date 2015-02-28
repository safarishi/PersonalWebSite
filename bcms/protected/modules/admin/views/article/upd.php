<!DOCTYPE HTML>
<html>
<head>
    <title>修改文章信息的界面</title>
    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            padding: 20px;
        }
        textarea {
            width: 80%;
        }
    </style>
</head>

<body>


<ul class="breadcrumb">
    <li><a href="./index.php?r=admin/article/mag">文章管理</a> <span class="divider">→ </span></li>
    <li class="active">修改文章</li>
</ul>

<hr />

<!--<form action="{$smarty.const.__SELF__}" method="post">-->
    <?php $form = $this->beginWidget('CActiveForm'); ?>
<!--    <input type="hidden" name="id" value="{$info.id}" />-->
    <?php echo $form->hiddenField($article_model,'id',array('value'=>$infos['id'])); ?>
<!--    类别：<input type="text" name="category" value="{$info.category}" readonly="readonly"/><br />-->
<?php echo $form->label($article_model,'category'); ?>
<?php echo $form->textField($article_model,'category',array('value'=>$infos['category'],'readonly'=>'readonly')); ?>
<?php echo $form->label($article_model,'title'); ?>
<?php echo $form->textField($article_model,'title',array('value'=>$infos['title'])); ?>
<?php echo $form->label($article_model,'author'); ?>
<?php echo $form->textField($article_model,'author',array('value'=>$infos['author'],'readonly'=>'readonly')); ?>
<?php echo $form->label($article_model,'content'); ?>
<?php echo $form->textArea($article_model,'content',array('rows'=>15,'value'=>$infos['content'])); ?>
<!--    标题：<input type="text" name="title" value="{$info.title}" />-->
<!--    作者：<input type="text" name="author" value="{$info.author}" readonly="readonly"/>-->
<!--    <br />-->
<!--    内容：<textarea name="content" rows="15">{$info.content}</textarea><br>-->
<br />
    <input type="submit" value="修改" />
<!--</form>-->
<?php $this->endWidget(); ?>


<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
