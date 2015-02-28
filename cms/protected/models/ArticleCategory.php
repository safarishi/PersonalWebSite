<?php
/**
 * Created by php_IDE.
 * User: SSHFL
 * Date: 2015/2/9
 * Time: 10:49
 */

/**
 * 两个基本方法
 * model
 * tableName
 * Class ArticleCategory 文章类别数据模型类
 */
class ArticleCategory extends CActiveRecord{
    /**
     * 获得数据模型的静态方法
     * @param string $className 类名
     * @return CActiveRecord 父类
     */
    public static function model($className = __CLASS__){
        return parent::model($className = __CLASS__);
    }

    public function tableName(){
        return '{{article_category}}';
    }

    public function attributeLabels(){
        return array(
            'seq'  => '类别序号',
            'name' => '类别名称',
        );
    }

    public function rules(){
        return array(
            array('seq,name','safe'),
        );
    }
}