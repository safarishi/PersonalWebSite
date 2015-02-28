<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/5
 * Time: 14:16
 */

class IndexController extends Controller{

    public function actionIndex(){
        $this -> renderPartial('index');
    }

}