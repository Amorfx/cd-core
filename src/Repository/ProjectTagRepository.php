<?php

namespace ClementCore\Repository;

use Simply\Core\Repository\TermRepository;

final class ProjectTagRepository extends TermRepository {
    protected function getTaxonomy() {
        return 'project_tag';
    }
}
