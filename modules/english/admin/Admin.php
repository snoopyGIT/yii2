<?php
namespace app\modules\english\admin;

class Admin extends \yii\base\Module {
    public function init() {
        parent::init();
        
        $this->params['moduleName'] = 'english-admin';
    }
}