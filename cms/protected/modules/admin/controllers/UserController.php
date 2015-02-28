<?php
/**
 * Created by PhpStorm.
 * User: sshfl
 * Date: 2015/2/9
 * Time: 22:05
 */

/**
 * Class UserController 后台用户控制器类
 */
class UserController extends Controller{
    /**
     * 后台用户管理页面
     * @throws CException
     */
    public function actionMag(){

        // 获得用户数据模型对象
        $user_model = User::model();
        /*
         * 查询出数据库中的全部数据
         * 并进行相应的处理后传递到视图中
         */
        $user_info = $user_model->findAll();
        $infos = array();
        foreach($user_info as $_v){
            $infos[] = $_v->attributes;
        }
        $this -> renderPartial('mag',array('infos'=>$infos));
    }

    /*
     * 删除用户
     */
    public function actionDel($id){
        // 实例化用户数据模型对象model
        $user_model = User::model();
        // 获得被删除商品的模型对象
        $user_info = $user_model -> findByPk($id);
        if($user_info->delete()){ // 注意是 $goods_info 调用 delete 方法
            $this -> redirect('./index.php?r=admin/user/mag');
        }else{
            echo 'del fail';
        }
    }
}