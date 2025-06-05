@extends('partial.crud.create', ['pageTitle' => __('messages.Create contributor group')])

@section('form')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! view('partial.form.element.text', [
                    'name' => 'name',
                    'label' => __('messages.Name'),
                    'isRequired' => true,
                ])->render() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! view('partial.form.element.select', [
                    'name' => 'contributors[]',
                    'list' => $contributorsList,
                    'options' => ['multiple' => 'multiple'],
                    'label' => __('messages.Contributors'),
                ])->render() !!}
            </div>
        </div>
    </div>
@endsection
