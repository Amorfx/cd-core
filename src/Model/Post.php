<?php

namespace ClementCore\Model;

use Simply\Core\Model\CategoryObject;
use Simply\Core\Model\ModelFactory;
use Simply\Core\Model\PostTypeObject;

class Post extends PostTypeObject {
    /** @var CategoryObject */
    private $category;

    public function getMainCategory() {
        if (is_null($this->category)) {
            $postCategories = $this->getCategories();
            if (class_exists('WPSEO_Primary_Term')) {
                // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
                $wpseo_primary_term = new \WPSEO_Primary_Term( 'category', $this->getID() );
                $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
                $this->category = ModelFactory::create(get_term( $wpseo_primary_term ));
            } else {
                $this->category = $postCategories[0];
            }
        }
        return $this->category;
    }

    public static function getType() {
        return 'post';
    }
}
