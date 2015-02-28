<!DOCTYPE HTML>
<html>
<head>
    <title>添加文章页面</title>
    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body
        {
            padding: 20px;
        }
        textarea
        {
            width: 80%;
        }
    </style>
</head>

<body>

<ul class="breadcrumb">
    <li><a href="./index.php?r=admin/article/mag">文章管理</a> <span class="divider">→ </span></li>
    <li class="active">增加文章</li>
</ul>

<hr />

<!--<form method="post" action="{$smarty.const.__SELF__}" class="form-horizontal">-->
<?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="articleCategory">类  别：</label>-->
            <?php echo $form->label($article_model,'category'); ?>
        </div>
        <div class="controls">
            <?php echo $form->dropDownList($article_model,'category',$categoryInfos); ?>
<!--            <select id="articleCategory" name="category">-->
<!--                <option value="默认分类">默认分类</option>-->
<!--                <option value="随笔">随笔</option>-->
<!--                <option value="日记">日记</option>-->
<!--                <option value="摘录">摘录</option>-->
<!--                <option value="杂谈">杂谈</option>-->
<!--            </select>-->
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="articleTitle">标  题：</label>-->
            <?php echo $form->label($article_model,'title'); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="articleTitle" name="title" value="" />-->
            <?php echo $form->textField($article_model,'title'); ?>
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="articleContent">内  容：</label>-->
            <?php echo $form->label($article_model,'content'); ?>
        </div>
        <div class="controls">
<!--            <textarea id="articleContent" name="content" cols="100" rows="8" placeholder="文章内容"></textarea>-->
            <?php echo $form->textArea($article_model,'content',array('cols'=>'100','rows'=>'8','placeholder'=>'文章内容')); ?>
            <span class="label label-info">

            </span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="articleAuthor">作  者：</label>-->
            <?php echo $form->label($article_model,'author'); ?>
        </div>
        <div class="controls">
<!--            <input type="text" id="articleAuthor" name="author" value="admin" readonly="readonly" />-->
            <?php echo $form->textField($article_model,'author',array('value'=>'admin','readonly'=>'readonly')); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
<!--            <label for="articleCheck">审  核：</label>-->
            <?php echo $form->label($article_model,'ischecked'); ?>
        </div>
        <div class="controls">
            <?php echo $form->dropDownList($article_model,'ischecked',$checkInfos); ?>
<!--            <select id="articleCheck" name="ischecked">-->
<!--                <option value="0">不通过</option>-->
<!--                <option value="1">通过</option>-->
<!--            </select>-->
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login">添 加</button>
        </div>
    </div>
<?php $this->endWidget(); ?>
<!--</form>-->

<!-- 引入js文件 -->
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
