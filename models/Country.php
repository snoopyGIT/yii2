<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Country继承自活动记录类的类 ActiveRecord， 把它放在 models/Country.php 文件，去代表和读取 country 表的数据。
 */
class Country extends ActiveRecord {
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