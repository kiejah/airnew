<div class='flex justify-between items-center mx-auto nav-bg top-nav-inner'>
    <img src={{ asset('assets/images/logo/black_logo.png') }} class='logo'>
    <ul class='flex text-black font-bold'>
        <li class='mx-3'><a class= "hover:text-bright_red" href="{{ route('frontend.home') }}">Home</a></li>
        <li class='mx-3'><a class= "hover:text-bright_red" href="{{ route('frontend.properties') }}">Properties</a></li>
        <li class='mx-3'><a class= "hover:text-bright_red" href="{{ route('frontend.about_us') }}">About us</a></li>
        <li class='mx-3'>Contact us</li>
        <li class='mx-3'><a href="#"
                class="rounded-full lg:p-4 md:p-2 border-2 border-bright_red getStarted hover:text-white">Get
                Started</a>
        </li>
    </ul>
</div>
