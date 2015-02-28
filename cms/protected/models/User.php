<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/6
 * Time: 17:02
 */

/**
 * Class User 用户数据模型model
 * 两个基本方法
 * model
 * tableName
 */
class User extends CActiveRecord{

    public $password2; // 确认密码

    /**
     * 获得数据模型的静态方法
     * @param string $className
     * @return CActiveRecord 父类CActiveRecord
     */
    public static function model($className = __CLASS__){
        return parent::model($className = __CLASS__);
    }

    /**
     * 获得数据表的名字
     * @return string 数据表名称
     */
    public function tableName(){
        return '{{user}}';
    }

    /**
     * 设置标签名字与数据库表字段以及数据模型对象属性对应
     * @return array
     */
    public function attributeLabels(){
        return array(
            'username'  => '用户名',
            'password'  => '密 码',
            'password2' => '确认密码',
            'email'     => '邮 箱',
            'birthday'  => '生 日',
            'gender'    => '性 别',
            'nickname'  => '昵 称',
        );
    }

    public function rules(){
        return array(
            array('username','required','message'=>'用户名必填'),
            array('username','match','pattern'=>'/^[A-Za-z-_]{5,12}$/','message'=>'用户名不合法'),
            array('password','required','message'=>'密码必填'),
            // 验证确认密码password2 要与密码的信息一致
            array('password2','compare','compareAttribute'=>'password','message'=>'两次密码要相一致'),
            // 验证邮箱
            array('email','email','allowEmpty'=>false,'message'=>'邮箱格式不正确'),
            // 验证昵称，全为汉字
            array('nickname','match','pattern'=>'/^[\x{4e00}-\x{9fa5}]+$/u','message'=>'昵称需全为汉字'),

            /**
             * 为没有具体验证规则的属性，设置安全的验证规则，否则attributes不给接受信息
             */
            array('birthday,gender','safe'),
        );
    }


}