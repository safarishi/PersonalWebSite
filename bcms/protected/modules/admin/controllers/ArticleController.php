<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/9
 * Time: 16:25
 */

/**
 * Class ArticleController 后台文章控制器
 */
class ArticleController extends Controller{
    /**
     * 处理后台文章管理业务逻辑
     * @throws CException
     */
    public function actionMag(){
        // 获得文章数据模型对象
        $article_model = Article::model();
        $article_info = $article_model -> findAll();

        $infos = array();
        foreach($article_info as $_v){
            $infos[] = $_v->attributes;
        }

        $this -> renderPartial('mag',array('infos'=>$infos));
    }

    /**
     * @param $id 文章主键id
     * @throws CException
     */
    public function actionUpd($id){
        // 获得文章数据表模型对象
        $article_model = Article::model();
        $article_info = $article_model -> findByPk($id);
        $infos = $article_info->attributes;
        if(isset($_POST['Article'])){

            $article_info -> attributes = $_POST['Article'];
            if($article_info->save()){
                $this -> redirect('./index.php?r=admin/article/mag');
            }else{
                echo 'upd error articel';
            }

        }else{
            $this -> renderPartial('upd',array('article_model'=>$article_model,'infos'=>$infos));
        }
    }

    public function actionCheck($id){

        $checkInfos[] = '未通过';
        $checkInfos[] = '通过';

        // 获得文章数据表模型对象
        $article_model = Article::model();
        $article_info = $article_model -> findByPk($id);
        $infos = $article_info->attributes;
        // 判断表单是否有提交数据
        if(isset($_POST['Article'])){
            $article_info -> attributes = $_POST['Article'];
            if($article_info->save()){
                $this->redirect('./index.php?r=admin/article/mag');
            }else{
                echo 'check error articel';
            }

        }else{
            $this -> renderPartial('check',array('article_model'=>$article_model,'infos'=>$infos,'checkInfos'=>$checkInfos));
        }

    }

    /**
     * 根据文章主键id删除指定的文章
     * @param $id 文章主键id
     */
    public function actionDel($id){
        // 获得文章数据表模型对象
        $article_model = Article::model();
        $article_info = $article_model -> findByPk($id);
        if($article_info -> delete()){
            $this -> redirect('./index.php?r=admin/article/mag');
        }else{
            echo 'del error';
        }
    }

    /**
     * 添加文章业务逻辑
     * @throws CException
     */
    public function actionAdd(){
        // 文章类别信息
        $categoryInfos[1] = '默认分类';
        $categoryInfos[2] = '日记';
        $categoryInfos[3] = '摘录';
        $categoryInfos[4] = '杂谈';
        $categoryInfos[5] = '随笔';
        // 文章审核状态信息
        $checkInfos[] = '不通过';
        $checkInfos[] = '通过';
        // 实例化模型类对象
        $article_model = new Article();

        // 检测表单是否有提交
        if(isset($_POST['Article'])){
            // 表单有提交post数据
            $article_model -> attributes = $_POST['Article'];
            if($article_model->save()){
                $this -> redirect('./index.php?r=admin/article/mag');
            }else{
                echo 'add error';
            }

        }else{
            // 没有提交表单数据则展现表单
            $this -> renderPartial('add',array('article_model'=>$article_model,'categoryInfos'=>$categoryInfos,'checkInfos'=>$checkInfos));
        }

    }

}