@extends('layouts.frontend.app')
@push('links')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
@endpush
<section>

    @include('frontend.frontnavinner')

</section>
<section>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="mx-auto inner-container mt-5">
        <div class="grid sm:grid-cols-1 md:grid-cols-3">
            <div class="bg-gray-200 p-5">
                <div class="rounded">
                    <img class="img-fluid property-img rounded"
                        src="{{ asset('storage/' . $property->thumbnail->image) }}" alt="{{ $property->name }}">
                </div>
                <div class="py-2 text-2xl font-bold text-black">
                    {{ $property->name }}
                </div>
                <div class="py-2 text-2xl text-black">
                    {{ $property->description }}
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Place_Marker.png') }}" class="featured-img" alt="">
                    <span class="py-2 ml-2 font-bold">Located in {{ $property->location->name }}
                        {{ $property->state }} {{ $property->country }}</span>

                </div>
                <hr>
                <div class="flex items-center text-black">
                    <span class="py-2 ml-2">Property managed by:</span>
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Saly-1.png') }}" class="featured-img" alt="">
                    <span class="py-2 font-bold ml-2">{{ $property->manager->first_name }}
                        {{ $property->manager->last_name }}</span>
                </div>
                <div class="flex items-center text-black">
                    <span class="py-2 ml-2">Contact Information</span>
                </div>

                <div class="flex items-center text-black">
                    <span class="py-2 font-bold ml-2">{{ $property->manager->email }}</span>
                </div>

            </div>

            <div class="md:col-span-2">

                <div class="tabs-container">
                    <ul id="tabs">
                        @foreach ($propert_unit_types as $unit_type)
                            <li><a id="tab{{ $unit_type->unit_type }}">{{ $unit_type->unit_type }} Bedrooms</a></li>
                        @endforeach


                    </ul>
                    @foreach ($propert_unit_types as $unit_type)
                        <div class="tabs_container" id="tab{{ $unit_type->unit_type }}C">
                            <section class="splide slider" id="slider{{ $unit_type->unit_type }}">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach ($propert_unit_images as $propert_unit_image)
                                            @if ($propert_unit_image->unit_type == $unit_type->unit_type)
                                                <li class="splide__slide">
                                                    <img src="{{ asset('storage/' . $propert_unit_image->image_name) }}"
                                                        alt="">
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </section>
                        </div>
                    @endforeach
                </div>
                <div class="flex m-2">
                    @foreach ($units as $unit)
                        <div class="col-xl-3 col-md-6 cdx-xxl-50 cdx-xl-50 mx-2">
                            <div class="cardf contact-card">
                                <div class="card-body">
                                    <div class="flex justify-between">
                                        <div class="media-body">
                                            <h4 class="font-bold">{{ $unit->name }}</h4>
                                        </div>
                                        <div class="media-body">
                                            <button id="modalBtn{{ $unit->id }}"
                                                class="px-2 py-1 rounded text-white bg-cyan-300 hover:font-bold hover:bg-cyan-500 shadow">Inquire
                                                More</button>
                                        </div>
                                    </div>
                                    <div class="user-detail">
                                        <ul class="info-list">
                                            <li class="font-bold"><span>{{ __('Bedroom') }} :-
                                                </span>{{ $unit->bedroom }} </li>
                                            <li><span>{{ __('Kitchen') }} :- </span>{{ $unit->kitchen }}</li>
                                            <li><span>{{ __('Bath') }} :- </span>{{ $unit->baths }}</li>
                                            <li><span>{{ __('Rent Type') }} :- </span>{{ $unit->rent_type }}</li>
                                            <li class="font-bold"><span>{{ __('Rent') }}
                                                    :-</span>{{ $unit->rent }}</li>
                                            <li><span>{{ __('Rent Duration') }} :-
                                                </span>{{ $unit->rent_duration }}
                                            </li>
                                            <li><span>{{ __('Deposit Type') }} :- </span>{{ $unit->deposit_type }}
                                            </li>
                                            <li><span>{{ __('Deposit Amount') }}
                                                    :-</span>{{ $unit->deposit_amount }}
                                            </li>
                                            <li><span>{{ __('Late Fee Type') }} :-
                                                </span>{{ $unit->late_fee_type }}
                                            </li>
                                            <li>
                                                <span>{{ __('Late Fee Amount') }} :-
                                                </span>{{ $unit->late_fee_amount }}
                                            </li>
                                            <li>
                                                <span>{{ __('Incident Receipt Amount') }}
                                                    :-</span>{{ $unit->incident_receipt_amount }}
                                            </li>
                                        </ul>
                                        <div class="user-action py-3">
                                            <p class="font-bold">{{ $unit->notes }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>





        </div>

        {{-- modal html --}}
        @foreach ($units as $unit)
            <div id="simpleModal{{ $unit->id }}" class="modal-overlay">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="closeBtn" id="closeBtn{{ $unit->id }}">&#x2715;</span>
                        <h2 class="font-bold">Inquire More on {{ $unit->name }} with {{ $unit->bedroom }} Bedrooms &
                            Rent of KSH: {{ $unit->rent }}</h2>
                    </div>
                    <div class="modal-body">
                        <p class="my-2 font-bold">Kindly Leave us with contacts we can reach by</p>
                        {{ Form::open(['url' => 'unit_inquries', 'method' => 'post', 'enctype' => 'form-data', 'id' => 'inquiry_form']) }}
                        <div class="form-group flex justify-between">
                            {{ Form::label('name', __('Name'), ['class' => 'form-label font-bold']) }}
                            {{ Form::text('name', null, ['class' => 'form-control m-1', 'placeholder' => __('Enter your fullname')]) }}
                        </div>
                        <div class="form-group flex justify-between">
                            {{ Form::label('email', __('Email'), ['class' => 'form-label font-bold']) }}
                            {{ Form::email('email', null, ['class' => 'form-control m-1', 'placeholder' => __('Enter your email')]) }}
                        </div>
                        <div class="form-group flex justify-between">
                            {{ Form::label('phone', __('Phone Number'), ['class' => 'form-label font-bold']) }}
                            {{ Form::text('phone', null, ['class' => 'form-control m-1', 'placeholder' => __('Enter your phonenumber')]) }}
                        </div>
                        <div class="form-group flex justify-between">
                            <input type="hidden" value="{{ $unit->id }}" name="unit_id" />
                            <input type="hidden" value="{{ $unit->property_id }}" name="property_id" />
                        </div>
                        <div class="form-group flex justify-between">
                            {{ Form::submit(__('Inquire'), ['class' => 'font-bold block py-1 px-3 border bg-yellow_bg rounded', 'id' => 'inquire-submit']) }}
                        </div>

                        {{ Form::close() }}
                        <p></p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    @push('js')
        <script src="{{ asset('assets/js/jssor.slider-28.1.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/unit_slider.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
        <script type="text/javascript">
            jssor_1_slider_init();
        </script>
        <script>
            $(document).ready(function() {
                $('#tabs li a:not(:first)').addClass('inactive');
                $('.tabs_container').hide();
                $('.tabs_container:first').show();

                $('#tabs li a').click(function() {
                    var t = $(this).attr('id');
                    if ($(this).hasClass('inactive')) { //this is the start of our condition 
                        $('#tabs li a').addClass('inactive');
                        $(this).removeClass('inactive');

                        $('.tabs_container').hide();
                        $('#' + t + 'C').fadeIn('slow');
                    }
                });

            });
        </script>
        <script>
            var slides = {!! json_encode($propert_unit_types->toArray()) !!};
            slides.forEach(slide => {
                new Splide("#slider" + slide.unit_type).mount();
            });
        </script>
        <script>
            var units = {!! json_encode($units->toArray()) !!};
            units.forEach(unit => {

                // Get modal element
                var modal = document.getElementById('simpleModal' + unit.id);
                // Get open modal button
                var modalBtn = document.getElementById('modalBtn' + unit.id);
                // Get close button
                //var closeBtn = document.getElementsByClassName('closeBtn')[0];
                var closeBtn = document.getElementById('closeBtn' + unit.id);


                // Listen for open click
                modalBtn.addEventListener('click', openModal);
                // Listen for close click
                closeBtn.addEventListener('click', closeModal);
                // Listen for outside click
                window.addEventListener('click', outsideClick);

                // Open modal
                function openModal() {
                    modal.style.display = 'block';
                }

                // Close modal
                function closeModal() {
                    modal.style.display = 'none';
                }

                // Click outside and close
                function outsideClick(e) {
                    if (e.target == modal) {
                        modal.style.display = 'none';
                    }
                }

            })
        </script>
    @endpush
</section>
