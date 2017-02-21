<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class Hello2Widget extends Widget {
    public $message;
    
    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
        ob_start();
        echo $this->message.'---<br>---';
    }
    
    public function run() {
        $content = ob_get_clean();
        return Html::encode($content);
    }
}