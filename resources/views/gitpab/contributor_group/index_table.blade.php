@extends('partial.table.base')

@php
$columnTitleName = isset($columnTitleName) ? $columnTitleName : 'name';
$columnTitleLabel = isset($columnTitleLabel) ? $columnTitleLabel : __('messages.Title');
$orderLinkParams = $request->all();
unset($orderLinkParams['submit']);
@endphp

@section('tableThead')
    <tr>
        @include('partial.table.thcell', [
            'column' => 'id',
            'label' => __('messages.ID'),
            'order' => $order,
            'orderDirection' => $orderDirection,
            'orderLinkRoute' => $indexRoute,
            'orderLinkParams' => $orderLinkParams,
        ])

        @include('partial.table.thcell', [
            'column' => $columnTitleName,
            'label' => $columnTitleLabel,
            'order' => $order,
            'orderDirection' => $orderDirection,
            'orderLinkRoute' => $indexRoute,
            'orderLinkParams' => $orderLinkParams,
        ])

        <th>@lang('messages.Contributors')</th>

        @include('partial.table.thcell', [
            'column' => 'created_at',
            'label' => __('messages.Created At'),
        ])

        <th></th>
    </tr>
@endsection
@section('tableTbody')
    @forelse ($itemsList->items() as $item)
        <tr>
            <td class="col-md-1"><a href="{{ route('contributor_group.show', $item->id) }}">{{ $item->id }}</a></td>
            <td class="col-md-3">{{ $item->name }}</td>
            <td class="col-md-5">
                @foreach ($item->contributors as $contributor)
                    <span class="label label-default">{{ $contributor->name }}</span>
                @endforeach
            </td>
            <td class="col-md-2">{{ $item->created_at }}</td>
            <td class="col-md-1">
                <a href="{{ route($editRoute, [$item->id]) }}" class="btn btn-xs text-success" data-token="{{ csrf_token() }}">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="col-md-12">@lang('messages.Data not found')</td>
        </tr>
    @endforelse
@endsection
