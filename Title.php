<?php

namespace Onimla\UFC;

class Title extends \Onimla\HTML\Element {

    static $separator = '&bull;';
    static $view;
    static $controller;
    static $long;
    static $short;
    static $ending = 'Campus Sobral – Universidade Federal do Ceará';

    public function __construct() {
        parent::__construct('title');
    }

    public function __toString() {
        $pre = NULL;

        if (strlen(static::$controller) > 0 AND strlen(static::$view) < 1) {
            $pre = static::$controller;
        } elseif (strlen(static::$view) > 0 AND strlen(static::$controller) > 0) {
            $pre = static::$view . ', ' . static::$controller;
        } elseif (strlen(static::$controller) < 1 AND strlen(static::$view) > 0) {
            $pre = static::$view;
        }

        if (strlen($pre) > 0) {
            $this->appendText($pre);
            $this->append(' &raquo; ');
        }

        if (strlen(static::$short) > 0) {
            $this->appendText(static::$short);
            $this->append(' ', static::$separator, ' ');
        } elseif (strlen(static::$long) > 0) {
            $this->appendText(static::$long);
            $this->append(' ', static::$separator, ' ');
        }

        $this->appendText(static::$ending);

        return parent::__toString();
    }

}
