<?php

namespace Onimla\UFC\SemanticUI;

class Image extends \Onimla\UFC\Image {

    use \Onimla\SemanticUI\Traits\Component;

    public function __construct($alt = FALSE) {
        parent::__construct($alt);
        $this->setComponent();
        $this->addClass('image');
    }

}
