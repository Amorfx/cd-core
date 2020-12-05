<?php

namespace ClementCore\Model;

use Simply\Core\Model\PostTypeObject;

class Project extends PostTypeObject {
    private $tags;

    public function getTags() {
        if (!is_null($this->tags)) {
            return $this->tags;
        }
        $this->tags = get_the_terms($this->post, 'project_tag');
        return $this->tags;
    }

    public static function getType() {
        return 'project';
    }
}
