@extends('layouts.app')
@section('page-title')
    {{ __('Property Create') }}
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

@push('script-page')
    <script src="{{ asset('assets/js/vendors/dropzone/dropzone.js') }}"></script>
    <script>
        var dropzone = new Dropzone('#demo-upload', {
            previewTemplate: document.querySelector('.preview-dropzon').innerHTML,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 10,
            filesizeBase: 1000,
            autoProcessQueue: false,
            thumbnail: function(file, dataUrl) {
                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });
        var dropzone = new Dropzone('#onebed-upload', {
            previewTemplate: document.querySelector('.onebed-dropzon').innerHTML,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 10,
            filesizeBase: 1000,
            autoProcessQueue: false,
            thumbnail: function(file, dataUrl) {

                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });
        var dropzone = new Dropzone('#twobed-upload', {
            previewTemplate: document.querySelector('.twobed-dropzon').innerHTML,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 10,
            filesizeBase: 1000,
            autoProcessQueue: false,
            thumbnail: function(file, dataUrl) {

                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });
        var dropzone = new Dropzone('#threebed-upload', {
            previewTemplate: document.querySelector('.threebed-dropzon').innerHTML,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 10,
            filesizeBase: 1000,
            autoProcessQueue: false,
            thumbnail: function(file, dataUrl) {

                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });
        var dropzone = new Dropzone('#fourbed-upload', {
            previewTemplate: document.querySelector('.fourbed-dropzon').innerHTML,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 10,
            filesizeBase: 1000,
            autoProcessQueue: false,
            thumbnail: function(file, dataUrl) {

                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });
        var dropzone = new Dropzone('#fivebed-upload', {
            previewTemplate: document.querySelector('.fivebed-dropzon').innerHTML,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 10,
            filesizeBase: 1000,
            autoProcessQueue: false,
            thumbnail: function(file, dataUrl) {

                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });
        var dropzone = new Dropzone('#sixbed-upload', {
            previewTemplate: document.querySelector('.sixbed-dropzon').innerHTML,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 10,
            filesizeBase: 1000,
            autoProcessQueue: false,
            thumbnail: function(file, dataUrl) {

                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });


        $('#property-submit').on('click', function() {
            "use strict";
            $('#property-submit').attr('disabled', true);
            var fd = new FormData();
            var file = document.getElementById('thumbnail').files[0];

            var files = $('#demo-upload').get(0).dropzone.getAcceptedFiles();
            $.each(files, function(key, file) {
                fd.append('property_images[' + key + ']', $('#demo-upload')[0].dropzone
                    .getAcceptedFiles()[key]); // attach dropzone image element
            });

            var onebed_files = $('#onebed-upload').get(0).dropzone.getAcceptedFiles();
            if (onebed_files.length > 0) {
                $.each(onebed_files, function(key, file) {
                    fd.append('onebed_images[' + key + ']', $('#onebed-upload')[0].dropzone
                        .getAcceptedFiles()[key]); // attach dropzone image element
                });
            }
            var twobed_files = $('#twobed-upload').get(0).dropzone.getAcceptedFiles();
            if (twobed_files.length > 0) {
                $.each(twobed_files, function(key, file) {
                    fd.append('twobed_images[' + key + ']', $('#twobed-upload')[0].dropzone
                        .getAcceptedFiles()[key]); // attach dropzone image element
                });
            }
            var threebed_files = $('#threebed-upload').get(0).dropzone.getAcceptedFiles();
            if (threebed_files.length > 0) {
                $.each(threebed_files, function(key, file) {
                    fd.append('threebed_images[' + key + ']', $('#threebed-upload')[0].dropzone
                        .getAcceptedFiles()[key]); // attach dropzone image element
                });
            }
            var fourbed_files = $('#fourbed-upload').get(0).dropzone.getAcceptedFiles();
            if (fourbed_files.length > 0) {
                $.each(fourbed_files, function(key, file) {
                    fd.append('fourbed_images[' + key + ']', $('#fourbed-upload')[0].dropzone
                        .getAcceptedFiles()[key]); // attach dropzone image element
                });
            }
            var fivebed_files = $('#fivebed-upload').get(0).dropzone.getAcceptedFiles();
            if (fivebed_files.length > 0) {
                $.each(fivebed_files, function(key, file) {
                    fd.append('fivebed_images[' + key + ']', $('#fivebed-upload')[0].dropzone
                        .getAcceptedFiles()[key]); // attach dropzone image element
                });
            }
            var sixbed_files = $('#sixbed-upload').get(0).dropzone.getAcceptedFiles();
            if (sixbed_files.length > 0) {
                $.each(sixbed_files, function(key, file) {
                    fd.append('sixbed_images[' + key + ']', $('#sixbed-upload')[0].dropzone
                        .getAcceptedFiles()[key]); // attach dropzone image element
                });
            }

            fd.append('thumbnail', file);
            var other_data = $('#property_form').serializeArray();
            $.each(other_data, function(key, input) {
                fd.append(input.name, input.value);
            });

            $.ajax({
                url: "{{ route('property.store') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: fd,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(data) {
                    if (data.status == "success") {

                        console.log('Messg', data);
                        $('#property-submit').attr('disabled', true);
                        toastrs(data.status, data.msg, data.status);
                        var url = '{{ route('property.show', ':id') }}';
                        url = url.replace(':id', data.id);
                        setTimeout(() => {
                            window.location.href = url;
                        }, "1000");

                    } else {
                        toastrs('Error', data.msg, 'error');
                        $('#property-submit').attr('disabled', false);
                    }
                },
                error: function(data) {
                    $('#property-submit').attr('disabled', false);
                    if (data.error) {
                        toastrs('Error', data.error, 'error');
                    } else {
                        toastrs('Error', data, 'error');
                    }
                },
            });
        });
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');

        // Add event listener to each checkbox
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const hiddenElement = document.getElementById('hiddenElement-' + this.id);
                hiddenElement.style.display = this.checked ? 'block' : 'none';
            });
        });
    </script>
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
            <a href="#">{{ __('Create') }}</a>
        </li>
    </ul>
@endsection
@section('content')
    {{ Form::open(['url' => 'property', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'property_form']) }}
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="info-group">
                        <div class="form-group ">
                            {{ Form::label('type', __('Type'), ['class' => 'form-label']) }}
                            {{ Form::select('type', $types, null, ['class' => 'form-control hidesearch']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name', __('Name'), ['class' => 'form-label']) }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('Enter Property Name')]) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('description', __('Description'), ['class' => 'form-label']) }}
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 8, 'placeholder' => __('Enter Property Description')]) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('thumbnail', __('Featured Image'), ['class' => 'form-label']) }}
                            {{ Form::file('thumbnail', ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="info-group">
                        <div class="form-group">
                            {{ Form::label('country', __('Country'), ['class' => 'form-label']) }}
                            {{ Form::text('country', null, ['class' => 'form-control', 'placeholder' => __('Enter property country')]) }}
                        </div>

                        <div class="form-group ">
                            {{ Form::label('location', __('Location'), ['class' => 'form-label']) }}
                            <select class="form-control hidesearch" name="location">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {{ Form::label('state', __('County'), ['class' => 'form-label']) }}
                            {{ Form::text('state', null, ['class' => 'form-control', 'placeholder' => __('Enter property county')]) }}
                        </div>
                        {{-- <div class="form-group">
                            {{ Form::label('city', __('Town'), ['class' => 'form-label']) }}
                            {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => __('Enter property\'s nearest Town')]) }}
                        </div> --}}
                        <div class="form-group">
                            {{ Form::label('zip_code', __('P.O Box'), ['class' => 'form-label']) }}
                            {{ Form::text('zip_code', null, ['class' => 'form-control', 'placeholder' => __('Enter property P.O Box')]) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('address', __('Physical Address'), ['class' => 'form-label']) }}
                            {{ Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => __('Enter property physical Address')]) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('type', __('Set as a Featured Property'), ['class' => 'form-label']) }}
                            <select class="form-control hidesearch" name="featured_id">
                                <option selected value ='0'>No</option>
                                <option value ='1'>Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Unit types Available</h4>
                </div>
                <div class="card-body">
                    <div class="info-group d-flex flex-row justify-content-between">
                        <div class="form-group ">
                            {{ Form::label('one_bed', __('One Bedroom'), ['class' => 'form-label']) }}
                            {{ Form::checkbox('one_bed') }}

                        </div>
                        <div class="form-group ">
                            {{ Form::label('two_bed', __('Two Bedroom'), ['class' => 'form-label']) }}
                            {{ Form::checkbox('two_bed') }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('three_bed', __('Three Bedroom'), ['class' => 'form-label']) }}
                            {{ Form::checkbox('three_bed') }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('four_bed', __('Four Bedroom'), ['class' => 'form-label']) }}
                            {{ Form::checkbox('four_bed') }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('five_bed', __('Five Bedroom'), ['class' => 'form-label']) }}
                            {{ Form::checkbox('five_bed') }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('six_bed', __('Six Bedrooms'), ['class' => 'form-label']) }}
                            {{ Form::checkbox('six_bed') }}
                        </div>

                    </div>

                    <div class="info-group d-flex flex-row">
                        <div class="form-group ">
                            <div id="hiddenElement-one_bed" class="hiddenElement">
                                <div class="card-body">
                                    <div class="dropzone needsclick" id='onebed-upload' action="#">
                                        <div class="dz-message needsclick">
                                            <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                                            <h6>{{ __('Drop One Bedroom images here.') }}</h6>
                                        </div>
                                    </div>
                                    <div class="onebed-dropzon" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail="" src="" alt="">
                                            </div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="">
                                                </span></div>
                                            <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- twobed drag zone --}}
                        <div class="form-group ">
                            <div id="hiddenElement-two_bed" class="hiddenElement">
                                <div class="card-body">
                                    <div class="dropzone needsclick" id='twobed-upload' action="#">
                                        <div class="dz-message needsclick">
                                            <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                                            <h6>{{ __('Drop Two Bedroom images here.') }}</h6>
                                        </div>
                                    </div>
                                    <div class="twobed-dropzon" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail="" src="" alt="">
                                            </div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="">
                                                </span></div>
                                            <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- threebed drag zone --}}
                        <div class="form-group ">
                            <div id="hiddenElement-three_bed" class="hiddenElement">
                                <div class="card-body">
                                    <div class="dropzone needsclick" id='threebed-upload' action="#">
                                        <div class="dz-message needsclick">
                                            <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                                            <h6>{{ __('Drop Three Bedroom images here.') }}</h6>
                                        </div>
                                    </div>
                                    <div class="threebed-dropzon" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail="" src=""
                                                    alt="">
                                            </div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="">
                                                </span></div>
                                            <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- fourbed drag zone --}}
                        <div class="form-group ">
                            <div id="hiddenElement-four_bed" class="hiddenElement">
                                <div class="card-body">
                                    <div class="dropzone needsclick" id='fourbed-upload' action="#">
                                        <div class="dz-message needsclick">
                                            <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                                            <h6>{{ __('Drop Four Bedroom images here.') }}</h6>
                                        </div>
                                    </div>
                                    <div class="fourbed-dropzon" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail="" src=""
                                                    alt="">
                                            </div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="">
                                                </span></div>
                                            <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- fivebed drag zone --}}
                        <div class="form-group ">
                            <div id="hiddenElement-five_bed" class="hiddenElement">
                                <div class="card-body">
                                    <div class="dropzone needsclick" id='fivebed-upload' action="#">
                                        <div class="dz-message needsclick">
                                            <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                                            <h6>{{ __('Drop Five Bedroom images here.') }}</h6>
                                        </div>
                                    </div>
                                    <div class="fivebed-dropzon" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail="" src=""
                                                    alt="">
                                            </div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="">
                                                </span></div>
                                            <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- sixbed drag zone --}}
                        <div class="form-group ">
                            <div id="hiddenElement-six_bed" class="hiddenElement">
                                <div class="card-body">
                                    <div class="dropzone needsclick" id='sixbed-upload' action="#">
                                        <div class="dz-message needsclick">
                                            <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                                            <h6>{{ __('Drop Six Bedroom images here.') }}</h6>
                                        </div>
                                    </div>
                                    <div class="sixbed-dropzon" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail="" src=""
                                                    alt="">
                                            </div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="">
                                                </span></div>
                                            <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ Form::label('demo-upload', __('Property Images'), ['class' => 'form-label']) }}
                </div>
                <div class="card-body">
                    <div class="dropzone needsclick demo-upload" id='demo-upload' action="#">
                        <div class="dz-message needsclick">
                            <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                            <h3>{{ __('Drop files here or click to upload.') }}</h3>
                        </div>
                    </div>
                    <div class="preview-dropzon" style="display: none;">
                        <div class="dz-preview dz-file-preview">
                            <div class="dz-image"><img data-dz-thumbnail="" src="" alt=""></div>
                            <div class="dz-details">
                                <div class="dz-size"><span data-dz-size=""></span></div>
                                <div class="dz-filename"><span data-dz-name=""></span></div>
                            </div>
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""> </span></div>
                            <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="group-button text-end">
                {{ Form::submit(__('Create'), ['class' => 'btn btn-primary btn-rounded', 'id' => 'property-submit']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
@endsection
