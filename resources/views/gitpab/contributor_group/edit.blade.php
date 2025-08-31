@extends('partial.crud.edit', [
    'pageTitle' => __('messages.Edit contributor group'),
])

@section('form')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                @include('partial.form.element.text', [
                    'name' => 'name',
                    'value' => $object->name,
                    'label' => __('messages.Name'),
                    'isRequired' => true,
                ])
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                @include('partial.form.element.select', [
                    'name' => 'contributors[]',
                    'list' => $contributorsList,
                    'selected' => $object->contributors->pluck('id')->toArray(),
                    'options' => ['multiple' => 'multiple'],
                    'label' => __('messages.Contributors'),
                ])
            </div>
        </div>
    </div>
@endsection
