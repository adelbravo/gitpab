<?php

namespace App\Http\Controllers;

use App\Model\Repository\ContributorRepositoryEloquent;
use App\Providers\AppServiceProvider;
use App\Http\Requests\FormRequest;

class ContributorGroupController extends CrudController
{
    protected function getService()
    {
        return app(AppServiceProvider::ELOQUENT_CONTRIBUTOR_GROUP_SERVICE);
    }

    protected function prepareDataForCreate(FormRequest $request, array $data)
    {
        /** @var ContributorRepositoryEloquent $contributorRepository */
        $contributorRepository = app(AppServiceProvider::CONTRIBUTOR_REPOSITORY);

        return array_merge($data, [
            'contributorsList' => $contributorRepository->getItemsForSelect(),
        ]);
    }

    protected function prepareDataForEdit(FormRequest $request, array $data)
    {
        return $this->prepareDataForCreate($request, $data);
    }
}
