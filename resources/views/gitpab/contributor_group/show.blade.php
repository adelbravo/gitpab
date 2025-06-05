@extends('partial.crud.show', [
    'pageTitle' => __('messages.View contributor group')
])

@section('form')
    <div class="row">
        <div class="col-md-2">@lang('messages.ID')</div>
        <div class="col-md-10">{{ $object->id }}</div>
    </div>
    <div class="row">
        <div class="col-md-2">@lang('messages.Name')</div>
        <div class="col-md-10">{{ $object->name }}</div>
    </div>
    <div class="row">
        <div class="col-md-2">@lang('messages.Contributors')</div>
        <div class="col-md-10">
            @foreach ($object->contributors as $contributor)
                <span class="label label-default">{{ $contributor->name }}</span>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">@lang('messages.Created At')</div>
        <div class="col-md-10">{{ $object->created_at }}</div>
    </div>
@endsection
