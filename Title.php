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

        if (strlen(self::$controller) > 0 AND strlen(self::$view) < 1) {
            $pre = self::$controller;
        } elseif (strlen(self::$view) > 0 AND strlen(self::$controller) > 0) {
            $pre = self::$view . ', ' . self::$controller;
        } elseif (strlen(self::$controller) < 1 AND strlen(self::$view) > 0) {
            $pre = self::$view;
        }

        if (strlen($pre) > 0) {
            $this->appendText($pre);
            $this->append(' &raquo; ');
        }

        if (strlen(self::$short) > 0) {
            $this->appendText(self::$short);
            $this->append(' ', self::$separator, ' ');
        } elseif (strlen(self::$long) > 0) {
            $this->appendText(self::$long);
            $this->append(' ', self::$separator, ' ');
        }

        $this->appendText(self::$ending);

        return parent::__toString();
    }

}
