<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/5
 * Time: 15:08
 */

/**
 * Class UserController 用户控制器
 */
class UserController extends Controller{

    /**
     * 处理用户登录的业务逻辑
     * @throws CException
     */
    public function actionLogin(){

        // 将数据模型传递到视图中去
        // 创建独立模型对象
        $user_login = new LoginForm();

        if(isset($_POST['LoginForm'])){
            // 收集表单信息
            $user_login->attributes = $_POST['LoginForm'];
//            var_dump($_POST['LoginForm']); exit;
            // 校验数据，走的是rules()方法
            // 此处不仅仅是校验用户名和密码是否填写，还要校验真实性（在模型里边自定义方法校验真实性)
            // 用户信息进行session存储，调用模型里边的一个方法login()，就可以进行session存储
            if($user_login->validate() && $user_login->login()){
                // 用户登录成功页面重定向到首页
                $this -> redirect('./index.php?r=index/index');
//                echo 'login success';
            }else{
                echo 'login fail';
            }
        }

        $this -> renderPartial('login',array('user_login'=>$user_login));
    }

    /*
     * 退出登录
     */
    public function actionLogout(){
        // session and cookie delete together
        Yii::app()->user->logout();
        // 成功之后页面重定向
        $this -> redirect('./index.php?r=index/index');
    }

    /**
     * 处理用户注册逻辑
     * @throws CException
     */
    public function actionRegister(){
        $user_model = new User(); // 获得数据模型对象User
        // 用户性别单选按钮信息
        $gender[0] = '保密';
        $gender[1] = '男';
        $gender[2] = '女';
        // 如果用户有注册表单
        if(isset($_POST['User'])){
            // 密码MD5加密，确认密码也要加密
            $_POST['User']['password']  = md5($_POST['User']['password']);
            $_POST['User']['password2'] = md5($_POST['User']['password2']);
            /*
             * 给模型收集表单信息
             * 这其实是对foreach的改进，就是优化
             */
            $user_model -> attributes = $_POST['User'];
            if($user_model -> save())
                $this -> redirect('./index.php?r=index/index');
        }

        $this -> renderPartial('register',array('user_model'=>$user_model,'gender'=>$gender));

    }

    public function actionLeaveMsg(){

        // 获得用户留言数据模型
        $msg_model = new Message();
        // 检测表单是否由提交数据
        if(isset($_POST['Message'])){
            /*
             * 给模型收集表单信息
             * 这其实是对foreach的改进，就是优化
             */
            $msg_model -> attributes = $_POST['Message'];

            if($msg_model->save()){
                $this -> redirect('./index.php?r=index/index');
            }else{
                echo '留言失败';
            }

        }else{
            // 表示么有提交表单数据
        }

        // 将上面获得到的数据模型传到视图中，因为构建小物件是需要用到的
        $this -> renderPartial('leaveMsg',array('msg_model'=>$msg_model));
    }

}