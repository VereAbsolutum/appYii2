<?php

namespace Components\src\components;

use Components\src\components\Myclass;

class InputPrepend extends Myclass
{
    private $content;

    public function renderHtml($content, $prepend)
    {
        if (!isset($content)) {
            return false;
        }

        if (!isset($prepend)) {
            return false;
        }

        return $this->renwidgetderView('inputPrepend', [
            'content' => $content,
            'prepend' => $prepend
        ]);
    }
}
