<?php

namespace ClementCore\Model;

use ClementCore\Repository\ProjectTagRepository;
use Simply\Core\Model\TermObject;

class ProjectTag extends TermObject {
    static function getRepository() {
        return \Simply::get(ProjectTagRepository::class);
    }

    static function getType() {
        return 'project_tag';
    }
}
