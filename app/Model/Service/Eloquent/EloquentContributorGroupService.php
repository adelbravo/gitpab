<?php

namespace App\Model\Service\Eloquent;

use App\Model\Repository\ContributorGroupRepositoryEloquent;
use App\Providers\AppServiceProvider;
use Illuminate\Support\Arr;

class EloquentContributorGroupService extends CrudServiceAbstract
{
    public function __construct()
    {
        $this->repository = app(AppServiceProvider::CONTRIBUTOR_GROUP_REPOSITORY);
    }

    protected function saveObjectRelationships($object, $attributes)
    {
        $contributors = Arr::get($attributes, 'contributors', []);
        if ($contributors !== null) {
            $object->contributors()->sync($contributors);
        }
    }
}
