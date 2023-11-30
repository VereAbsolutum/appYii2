<?php

use Components\src\components\Span;
use yii\base\Widget;

class ScUtilSpan extends Widget
{
    public static function widget($config = [])
    {
        $span = new Span($config);
        return $span;
    }
}
