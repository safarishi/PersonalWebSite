<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/9
 * Time: 11:50
 */

/**
 * Class Article 文章数据模型类
 */
class Article extends CActiveRecord{

    public static function model($className = __CLASS__){
        return parent::model($className = __CLASS__);
    }

    public function tableName(){
        return '{{article}}';
    }

    public function attributeLabels(){
        return array(
            'category'   => '类别',
            'title'      => '标题',
            'author'     => '作者',
            'content'    => '内容',
            'ischecked'  => '审核',
        );
    }

    public function rules(){
        return array(
            array('title,content,ischecked,category,author','safe'),
        );
    }

}