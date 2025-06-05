@extends('partial.crud.index', [
    'pageTitle' => __('messages.Contributor groups')
])

@section('contentTable')
    @include('gitpab.contributor_group.index_table', [
        'columnTitleName' => 'contributor_group.name',
        'columnTitleLabel' => __('messages.Name'),
    ])
@endsection
