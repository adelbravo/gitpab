<?php

namespace App\Model\Repository;

use App\Model\Entity\ContributorGroup;
use Illuminate\Database\Eloquent\Builder;

class ContributorGroupRepositoryEloquent extends RepositoryAbstractEloquent
{
    public function model()
    {
        return ContributorGroup::class;
    }

    public function getListQuery(array $parameters): Builder
    {
        $query = parent::getListQuery($parameters);
        $query->withCount('contributors');
        return $query;
    }
}
