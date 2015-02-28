<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/9
 * Time: 14:05
 */

/**
 * Class IndexController 后台主页控制器
 */
class IndexController extends Controller{


    public function actionIndex(){
        $this -> renderPartial('index');
    }

    public function actionTop(){
        $this -> renderPartial('top');
    }

    public function actionleft(){
        $this -> renderPartial('left');
    }

    public function actionBottom(){
        $this -> renderPartial('bottom');
    }


}