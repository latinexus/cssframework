<?php
/**
 * Creator: Eric Larrea
 * E-mail: elapez@gmail.com
 * From: www.latinex.us
 * Date: 24/08/2024
 * Time: 04:51 a. m.
 * Proyecto: cp_cssframework
 */
namespace Latinexus\Css;


abstract class CssFramework {
    abstract public function createButton(string $text, array $attributes = []): HtmlTag;
    abstract public function createForm(string $action, string $method, string $content, array $attributes = []): HtmlTag;
    abstract public function createInput(string $type, string $name, string $value = '', array $attributes = []): HtmlTag;
    abstract public function createCheckbox(string $name, string $label, bool $checked = false, array $attributes = []): HtmlTag;
    // Otros métodos comunes...
}