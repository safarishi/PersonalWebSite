<?php
/**
 * Created by PhpStorm.
 * User: sshfl
 * Date: 2015/2/13
 * Time: 21:10
 */

/**
 * Class AdminController 后台管理员控制器
 */
class AdminController extends Controller{
    /*
     * 后台管理员登陆逻辑
     */
    public function actionLogin(){
        $login_model = new LoginForm();

        // 判断是否有提交表单
        if(isset($_POST['LoginForm'])){
            $login_model -> attributes = $_POST['LoginForm'];
            // 用户名和密码的判断（包括真实性）validate，持久化session信息login
            if($login_model->validate() && $login_model->login()){ // 先进行数据校验$login_model->validate()其会走模型rules方法的校验
                $this -> redirect('./index.php?r=admin/index/index');
            }
        }

        $this -> renderPartial('login',array('login_model'=>$login_model));
    }

}