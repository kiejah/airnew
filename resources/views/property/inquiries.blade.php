@extends('layouts.app')
@section('page-title')
    {{ __('Property Unit Enquiries') }}
@endsection

@push('css-page')
    <style>
        #hiddenElement {
            display: none;
            padding: 10px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }
    </style>
@endpush

@section('breadcrumb')
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">
                <h1>{{ __('Dashboard') }}</h1>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('property.index') }}">{{ __('Property') }}</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">{{ __('Enquiries') }}</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="prop-heading">
            <p class="text-dark">{{ $property->name }} Unit Enquiries</p>
        </div>
    </div>

    <div class="row">
        @foreach ($units as $unit)
            <div class="col-md-4 cdx-xxl-50 cdx-xl-50">
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h4>{{ $unit->name }}</h4>
                            </div>
                        </div>
                        @php
                            $inquiries = App\Helpers\InquiriesHelper::getInquiries($unit->id);
                        @endphp
                        <div class="user-detail">
                            <ul class="info-list inq-titles">
                                <li><span>Name</li>
                                <li><span>Email</li>
                                <li><span>Phone</li>
                            </ul>
                            @foreach ($inquiries as $inq)
                                <ul class="info-list inq-name-list">
                                    <li>{{ $inq->booker_name }}</li>
                                    <li>{{ $inq->booker_email }}</li>
                                    <li>{{ $inq->booker_phone }}</li>
                                </ul>
                                <hr>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
