<?php

namespace Components\src\components;

class Span
{
    private $content;
    private $class;
    private $id;
    private $style;

    public function __construct($content, $class = null, $id = null, $style = null)
    {
        $this->content = $content;
        $this->class = $class;
        $this->id = $id;
        $this->style = $style;
    }

    public function render()
    {
        $attributeString = '';

        if ($this->class !== null) {
            $attributeString .= " class=\"{$this->class}\"";
        }

        if ($this->id !== null) {
            $attributeString .= " id=\"{$this->id}\"";
        }

        if ($this->style !== null) {
            $attributeString .= " style=\"{$this->style}\"";
        }

        return "<span {$attributeString}>{$this->content}</span>";
    }
}
