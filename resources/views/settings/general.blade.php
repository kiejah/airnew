@extends('layouts.app')
@section('page-title')
    {{ __('General Settings') }}
@endsection
@php
    $app_name = \App\Models\Custom::getValByName('app_name');
    $company_logo = \App\Models\Custom::getValByName('company_logo');
    $company_favicon = \App\Models\Custom::getValByName('company_favicon');
    $front_website_logo = \App\Models\Custom::getValByName('front_website_logo');
    
@endphp
@section('breadcrumb')
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">
                <h1>{{ __('Dashboard') }}</h1>
            </a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">{{ __('General Settings') }}</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <div class="card text-center">
                <div class="card-body">
                    <div class="col-12">
                        <h4 class="mb-0 mt-2">
                            @if (\Auth::user()->type == 'super admin')
                                {{ env('APP_NAME') }}
                            @else
                                {{ !empty($app_name) ? $app_name : env('APP_NAME') }}
                            @endif
                        </h4>
                        <p class="text-muted font-14">{{ __('Application Name') }}</p>
                    </div>
                    <div class="col-12 mt-20">
                        <img src="{{ asset('storage/logo/' . $company_logo) }}" class="custom-settings-logo" alt="">
                        {{-- <img src="{{asset(Storage::url('upload/logo')).'/'.$company_logo}}" class="setting-logo"  alt=""> --}}
                        <h4 class="mb-0 mt-2">{{ __('Logo') }}</h4>
                    </div>
                    <div class="col-12 mt-20">
                        {{-- <img src="{{ asset(Storage::url('upload/logo')) . '/' . $company_favicon }}" class=""
                            alt=""> --}}
                        <img src="{{ asset('storage/favicon/' . $company_favicon) }}" class="custom-settings-logo"
                            alt="">

                        <h4 class="mb-0 mt-2">{{ __('Favicon') }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-7">
            <div class="card">
                <div class="card-body">
                    {{ Form::model($loginUser, ['route' => ['setting.general'], 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('application_name', __('Application Name'), ['class' => 'form-label']) }}
                                {{ Form::text('application_name', !empty($app_name) ? $app_name : env('APP_NAME'), ['class' => 'form-control', 'placeholder' => __('Enter your application name'), 'required' => 'required']) }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('logo', __('Logo'), ['class' => 'form-label']) }}
                                {{ Form::file('logo', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('favicon', __('Favicon'), ['class' => 'form-label']) }}
                                {{ Form::file('favicon', ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        {{ Form::submit(__('Save'), ['class' => 'btn btn-primary btn-rounded']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
