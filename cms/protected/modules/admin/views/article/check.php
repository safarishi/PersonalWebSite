<!DOCTYPE HTML>
<html>
<head>
    <title>审核文章状态的页面</title>
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
    <li class="active">审核文章</li>
</ul>

<hr />

<!--<form action="{$smarty.const.__SELF__}" method="post">-->
    <?php $form = $this->beginWidget('CActiveForm'); ?>
    <input type="hidden" name="id" value="{$info.id}" />
<?php echo $form->hiddenField($article_model,'id',array('value'=>$infos['id'])); ?>
<!--    标题：<input type="text" name="title" value="{$info.title}" readonly="readonly" />-->
<!--    类别：<input type="text" name="category" value="{$info.category}" readonly="readonly">-->
<!--    作者：<input type="text" name="author" value="{$info.author}" readonly="readonly" />-->
<!--    <textarea rows="14" readonly="readonly">{$info.content}</textarea>-->
<!--    <br />-->

<?php echo $form->label($article_model,'category'); ?>
<?php echo $form->textField($article_model,'category',array('value'=>$infos['category'],'readonly'=>'readonly')); ?>
<?php echo $form->label($article_model,'title'); ?>
<?php echo $form->textField($article_model,'title',array('value'=>$infos['title'],'readonly'=>'readonly')); ?>
<?php echo $form->label($article_model,'author'); ?>
<?php echo $form->textField($article_model,'author',array('value'=>$infos['author'],'readonly'=>'readonly')); ?>
<?php echo $form->label($article_model,'ischecked'); ?>
<?php echo $form->dropDownList($article_model,'ischecked',$checkInfos); ?>

<!--    审核状态：<select name="ischecked">-->
<!--        <option value="0">未通过</option>-->
<!--        <option value="1">通过</option>-->
<!--    </select><br />-->
<br />
    <input type="submit" value="提交审核" />
<?php $this->endWidget(); ?>
</body>
</html>
