<?php
/**
 * Creator: Eric Larrea
 * E-mail: elapez@gmail.com
 * From: www.latinex.us
 * Date: 24/08/2024
 * Time: 04:57 a. m.
 * Proyecto: cp_cssframework
 */

namespace Latinexus\Css;

use Latinexus\Css\HtmlTag;

class MaterializeCss extends CssFramework
{

    public function createButton(string $text, array $attributes = []): HtmlTag
    {
        $attributes['class'] = ($attributes['class'] ?? '') . ' btn';
        return new HtmlTag('button', $attributes, $text);
    }

    public function createForm(string $action, string $method, string $content, array $attributes = []): HtmlTag
    {
        $attributes['action'] = $action;
        $attributes['method'] = $method;
        $attributes['class'] = ($attributes['class'] ?? '') . ' col s12';
        return new HtmlTag('form', $attributes, $content);
    }

    public function createInput(string $type, string $name, string $value = '', array $attributes = []): HtmlTag
    {
        $attributes['type'] = $type;
        $attributes['name'] = $name;
        $attributes['value'] = $value;
        return new HtmlTag('input', $attributes);
    }

    public function createCheckbox(string $name, string $label, bool $checked = false, array $attributes = []): HtmlTag
    {
        $attributes['type'] = 'checkbox';
        $attributes['name'] = $name;
        if ($checked) {
            $attributes['checked'] = 'checked';
        }

        $inputTag = new HtmlTag('input', $attributes);
        $spanTag = new HtmlTag('span', [], $label);
        return new HtmlTag('label', [], $inputTag->toString() . $spanTag->toString());
    }
}