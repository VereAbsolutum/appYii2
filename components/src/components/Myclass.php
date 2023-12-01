<?php

namespace Components\src\components;

use yii\base\Widget;

class Myclass extends Widget
{
    public function renderView(string $view, array $params)
    {
        return $this->render($view, $params);
    }
}
