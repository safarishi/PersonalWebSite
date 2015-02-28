<?php
/**
 * Created by PhpStorm.
 * User: sshfl
 * Date: 2015/2/8
 * Time: 22:40
 */

/**
 * 用户留言数据模型
 * 两个基本方法
 * model
 * tableName
 */
class Message extends CActiveRecord{
    public static function model($className = __CLASS__){
        return parent::model($className = __CLASS__);
    }

    public function tableName(){
        return '{{message}}';
    }

    public function attributeLabels(){
        return array(
            'youare'  => '来自',
            'subject' => '主题',
            'content' => '内容',
        );
    }

    public function rules(){
        return array(
            array('content','required','message'=>'留言内容不可为空'),
            /**
             * 为没有具体验证规则的属性，设置安全的验证规则，否则attributes不给接受信息
             */
            array('youare,subject','safe'),
        );
    }

}