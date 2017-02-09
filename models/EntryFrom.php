<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * EntryFrom 是一个表单处理模型
 */
class EntryFrom extends Model {
    public $name;
    public $email;
    
    /**
     * 创建验证规则
     * 
     * @return array
     */
    public function rules() {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }
}