<?php
/**
 * Creator: Eric Larrea
 * E-mail: elapez@gmail.com
 * From: www.latinex.us
 * Date: 24/08/2024
 * Time: 05:58 a. m.
 * Proyecto: cp_cssframework
 */

namespace Latinexus\Css;


class HtmlTag {
    private string $tag;
    private array $attributes;
    private ?string $content;

    public function __construct(string $tag, array $attributes = [], ?string $content = null) {
        $this->tag = $tag;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    private function buildAttributes(): string {
        $attributesString = '';
        foreach ($this->attributes as $key => $value) {
            $attributesString .= sprintf(' %s="%s"', htmlspecialchars($key), htmlspecialchars($value));
        }
        return $attributesString;
    }

    public function toString(): string {
        $attributesString = $this->buildAttributes();
        $content = $this->content ?? '';
        return sprintf('<%s%s>%s</%s>', $this->tag, $attributesString, $content, $this->tag);
    }

    public function __toString(): string {
        return $this->toString();
    }
}