<?php
/**
 * Created by PhpStorm.
 * User: sshfl
 * Date: 2015/2/13
 * Time: 21:18
 */

/**
 * Class Admin 管理员数据模型类
 */
class Admin extends CActiveRecord{
    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{admin}}';
    }

}