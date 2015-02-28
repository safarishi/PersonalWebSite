<!DOCTYPE HTML>
<html>
<head>
    <title>文章显示列表页</title>
    <script type="text/javascript" src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo LIBS_STATIC_URL; ?>bootstrap/js/bootstrap.js"></script>
    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo LIBS_STATIC_URL; ?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo HOME_CSS_URL; ?>style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo HOME_CSS_URL; ?>main.css" rel="stylesheet" type="text/css" />


</head>

<body>

<!-- tst -->
<div class="container">
    <div id="page-head" class="clearfix">
        <div class="pull-left">
            <a href="./index.php?r=index/index">
                <img src="<?php echo HOME_IMG_URL; ?>logo/logo.png" alt="个人网站LOGO" style="height:60px;" />
            </a>
        </div>
        <div id="page-head-right">
            <div id="main-menu">
                <a href="./index.php?r=index/index">网站首页</a>
                <!--a href="#/servlet/ListArticleUIServlet">网站文章</a-->
                <a href="./index.php?r=user/leaveMsg">给我留言</a>
            </div>
        </div>
    </div>

    <div class="ad">
        <img src="<?php echo HOME_IMG_URL; ?>pb/naruto-hinata.jpg" style="height:270px;width:100%;" />
    </div>

    <!-- test -->
    <div class="list_main">
        <div class="article_type">
            <h2>文章列表</h2>
            <div class="article_type_content">
                <ul>
                    <?php foreach($infos as $_v){?>
                    <li><a href="./index.php?r=article/showList/flag/<?php echo $_v['seq']; ?>"><?php echo $_v['name']; ?></a></li>
<!--                    <li><a href="{$smarty.const.__CONTROLLER__}/showlist/flag/1">日记</a></li>-->
<!--                    <li><a href="{$smarty.const.__CONTROLLER__}/showlist/flag/2">摘录</a></li>-->
<!--                    <li><a href="{$smarty.const.__CONTROLLER__}/showlist/flag/3">杂谈</a></li>-->
<!--                    <li><a href="{$smarty.const.__CONTROLLER__}/showlist/flag/4">随笔</a></li>-->
                    <?php }?>
                </ul>
            </div><!--article_type_content结束-->
        </div><!--article_type结束-->
        <div class="list_box">

            <h2>文章中心</h2>
            <div class="article_list">
                <ul>
                    <?php foreach($info as $_k=>$_v){ ?>
                    <li><span><?php echo  substr($_v['finishtime'],0,10); ?></span> <a href="./index.php?r=article/content/id/<?php echo $_v['id']?>"><?php echo $_v['title']; ?></a></li>
                    <?php } ?>

                </ul>
            </div><!--article_list结束-->

            <!--div class="page">
                <a href="#">首页</a>
                <a href="#">&lt;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">…</a><a href="#">&gt;</a>
                <a href="#">末页</a>
            </div--><!--page结束-->

        </div><!--list_box结束-->
    </div><!--list_main结束-->
</div>
<!-- test end -->



</body>
</html>
