<?php
use app\components\HelloWidget;
use app\components\Hello2Widget;
?>

//使用这个小部件只需在视图中简单使用如下代码
<?= HelloWidget::widget(['message' => 'my message']) ?>
<br><br><br>
//以下是另一种可在begin() 和 end()调用中使用的HelloWidget
<?php Hello2Widget::begin(['message' => 'my message by use begin']); ?>
content that may contain <tag>'s
<?php Hello2Widget::end(); ?>