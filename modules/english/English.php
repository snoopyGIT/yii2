<?php
namespace app\modules\english;

class English extends \yii\base\Module {
    public function init() {
        parent::init();
        
        $this->params['moduleName'] = 'english';
        $this->modules = [  //这里是二级模块的配置
            'admin' => ['class' => 'app\modules\english\admin\Admin']
        ];
    }
}