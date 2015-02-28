<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/9
 * Time: 14:28
 */

class ArticleCategoryController extends Controller{
    /**
     * 文章类别的管理页面
     * @throws CException
     */
    public function actionMag(){

        $ac_model = ArticleCategory::model();

        $sql = "SELECT * FROM {{article_category}} ORDER BY seq ASC";
        $ac_info = $ac_model -> findAllBySql($sql);
        $infos = array();
        foreach($ac_info as $_v){
            $infos[] = $_v -> attributes;
        }

        $this -> renderPartial('mag',array('infos'=>$infos));
    }

    /**
     * 修改文章类别的信息
     * @param $id 文章类别的序号
     * @throws CException
     */
    public function actionUpd($id){
        // 获得文章类别的数据模型
        $ac_model = ArticleCategory::model();
        $sql = "SELECT * FROM {{article_category}} WHERE seq=$id";
        $ac_info = $ac_model -> findBySql($sql);
        $name = $ac_info -> name;

        // 判断是否有提交表单数据
        if(isset($_POST['ArticleCategory'])){
            foreach($_POST['ArticleCategory'] as $_k => $_v){
                $ac_info -> $_k = $_v;
            }
            if($ac_info -> save()){
                $this -> redirect('./index.php?r=admin/articlecategory/mag');
            }else{
                echo 'upd error';
            }

        }else{
            $this -> renderPartial('upd',array('ac_model'=>$ac_model,'id'=>$id,'name'=>$name));
        }
    }

    /**
     * 删除文章类别
     * @param $id 文章类别序号
     */
    public function actionDel($id){

        $ac_model = ArticleCategory::model();
        $sql = "SELECT * FROM {{article_category}} WHERE seq=$id";
        $ac_info = $ac_model -> findBySql($sql);

        if($ac_info -> delete()){
            $this -> redirect('./index.php?r=admin/articlecategory/mag');
        }else{
            echo 'del error';
        }
        exit;
    }

    /**
     * 添加文章类别业务逻辑
     * @throws CException
     */
    public function actionAdd(){
        // 实例化文章类别数据模型对象
        $ac_model = new ArticleCategory();

        // 判断表单是否有提交数据
        if(isset($_POST['ArticleCategory'])){
            $ac_model -> attributes = $_POST['ArticleCategory'];
            if($ac_model->save()){
                $this -> redirect('./index.php?r=admin/articlecategory/mag');
            }else{
                echo 'insert fail';
            }
        }else{
            // 将数据模型对象传递到视图中供小物件使用
            $this -> renderPartial('add',array('ac_model'=>$ac_model));
        }

    }

}