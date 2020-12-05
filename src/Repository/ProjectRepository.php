<?php

namespace ClementCore\Repository;

use ClementCore\Model\Project;
use Simply\Core\Repository\PostRepository;

class ProjectRepository extends PostRepository {
    public function getClassName() {
        return Project::class;
    }
}
