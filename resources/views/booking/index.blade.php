@extends('layouts.app')
@section('page-title')
    {{ __('Invoice') }}
@endsection
@section('breadcrumb')
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">
                <h1>{{ __('Dashboard') }}</h1>
            </a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">{{ __('Invoice') }}</a>
        </li>
    </ul>
@endsection
@section('card-action-btn')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="display dataTable cell-border datatbl-advance">
                        <thead>
                            <tr>
                                <th>{{ __('unit') }}</th>
                                <th>{{ __('In Property') }}</th>
                                <th>{{ __('Inquiring Name') }}</th>
                                <th>{{ __('Inquiring Email') }}</th>
                                <th>{{ __('Inquiring Phone') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                @foreach ($property->bookings as $booker)
                                    <tr role="row">
                                        <td></td>
                                        <td>{{ $property->name }}</td>
                                        <td>{{ $booker->booker_name }}</td>
                                        <td>{{ $booker->booker_email }}</td>
                                        <td>{{ $booker->booker_phone }}</td>

                                    </tr>
                                @endforeach
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
