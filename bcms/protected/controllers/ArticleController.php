<?php
/**
 * Created by PhpStorm.
 * User: sshfl
 * Date: 2015/2/8
 * Time: 23:18
 */

/**
 * Class ArticleController 文章控制器
 */
class ArticleController extends Controller{

    /**
     * 显示文章列表的业务逻辑
     * @throws CException
     */
    public function actionShowlist($flag = 1){

        // 获得文章类别数据模型对象
        $ac_model = ArticleCategory::model();
        $article_model = Article::model();

        switch($flag){
            case 1:
                $sql = "SELECT * FROM {{article}} WHERE category='默认分类' AND ischecked=1";
                break;
            case 2:
                $sql = "SELECT * FROM {{article}} WHERE category='日记' AND ischecked=1";
                break;
            case 3:
                $sql = "SELECT * FROM {{article}} WHERE category='摘录' AND ischecked=1";
                break;
            case 4:
                $sql = "SELECT * FROM {{article}} WHERE category='杂谈' AND ischecked=1";
                break;
            case 5:
                $sql = "SELECT * FROM {{article}} WHERE category='随笔' AND ischecked=1";
                break;
            case 6:
                $sql = "SELECT * FROM {{article}} WHERE category='测试'";
                break;
        }

        $article_info = $article_model->findAllBySql($sql);
        $info = array();
        foreach($article_info as $_v){
            $info[] = $_v->attributes;
        }

        $sql = "SELECT * FROM {{article_category}} ORDER BY seq ASC";
        $ac_info = $ac_model->findAllBySql($sql);
        $infos = array();
        foreach($ac_info as $_v){
            $infos[] = $_v->attributes;
        }

        $this -> renderPartial('showList',array('infos'=>$infos,'info'=>$info));
    }

    public function actionContent($id){
        // 获得文章数据模型对象
        $article_model = Article::model();
        // 根据主键查找对应的一篇文章
        $article_info = $article_model -> findByPk($id);
        $info = $article_info->attributes;
//        var_dump($article_info->attributes); exit;

        // 获得文章类别的数据模型类对象
        $ac_model = ArticleCategory::model();
        $sql = "SELECT * FROM {{article_category}} ORDER BY seq ASC";
        $ac_info = $ac_model -> findAllBySql($sql);

        $infos = array();
        foreach($ac_info as $_v){
            $infos[] = $_v->attributes;
        }

        $this ->renderPartial('content',array('infos'=>$infos,'info'=>$info));
    }

    /**
     * 首页更多文章业务逻辑
     * @throws CException
     */
    public function actionShowMore(){
        // 获得数据模型对象model
        $ac_model = ArticleCategory::model();
        $article_model = Article::model();

        $sql0 = "SELECT * FROM {{article_category}} ORDER BY seq ASC";
        $sql = "SELECT * FROM {{article}} WHERE `ischecked`=1 ORDER BY `finishtime` DESC LIMIT 6";

        $ac_info = $ac_model -> findAllBySql($sql0);
        $article_info = $article_model -> findAllBySql($sql);

        /*
         * 处理获得的数据并传递到视图
         */
        $infos = array();
        foreach($ac_info as $_v){
            $infos[] = $_v->attributes;
        }

        $info = array();
        foreach($article_info as $_v){
            $info[] = $_v->attributes;
        }

        $this -> renderPartial('showList',array('info'=>$info,'infos'=>$infos));
    }

}