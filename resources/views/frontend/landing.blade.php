@extends('layouts.frontend.app')
{{-- @include('frontend.search') --}}
<section>

    @include('frontend.frontnav')
    <div class="background-container">
        <div class="content">
            @include('frontend.slider')
            @include('frontend.search')
        </div>
    </div>

</section>
<section class="mt-5">
    <div class="container featured-properties-title my-5">
        <span class="p-2 text-black font-bold text-lg"> Featured Properties</span>
    </div>
    <div class="container flex featured ">



        @foreach ($properties as $property)
            @if (!empty($property->thumbnail) && !empty($property->thumbnail->image))
                @php  $thumbnail= $property->thumbnail->image; @endphp
            @else
                @php  $thumbnail= 'default.jpg'; @endphp
            @endif

            <div class="w-96 mr-5 shadow card-container">
                <img class="img-fluid property-img" src="{{ asset('storage/' . $thumbnail) }}" alt="{{ $property->name }}"
                    style="border-top-left-radius: 20px;border-top-right-radius: 20px;">

                <div class="bg-featured_card_bg p-2">
                    <div class="flex justify-between items-center text-black">
                        <span class="py-2 text-2xl font-bold"><a
                                href="{{ route('frontend.properties.show', $property->id) }}">{{ $property->name }}</a></span>
                        <button class="px-3 py-1 bg-yellow_bg inline-block rounded shadow units_btn font-bold">
                            {{ $property->totalUnit() }}
                            Units</button>
                    </div>
                    <div class="flex items-center text-black">
                        <img src="{{ asset('assets/images/icons/Place_Marker.png') }}" class="featured-img"
                            alt="">
                        <span class="py-2 text-xl font-bold ml-2"
                            style="text-transform: capitalize;">{{ $property->location->name }}</span>
                    </div>
                    <p class="font-bold text-black my-3">
                        {{ $property->description }}
                    </p>
                    <div class="flex my-5">
                        <button
                            class=" px-5 py-1 bg-tt_black inline-block rounded-full shadow font-bold text-white">View
                            Property</button>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</section>
