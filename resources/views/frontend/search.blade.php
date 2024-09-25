<form action="/">
    <div
        class="md:flex md:items-center md:justify-center md:py-5 md:px-10 md:bg-black md:rounded-full sm:my-5 font-bold">
        <div class="flex items-center justify-center md:mx-2">
            <div class="relative">
                <select class="pl-10 pr-3 py-3 border rounded-full" name="location">
                    <option selected>
                        Location
                    </option>
                    @foreach ($locations as $location)
                        <option value={{ $location->id }}>{{ $location->name }}</option>
                    @endforeach
                </select>
                <div
                    class="absolute inset-y-0 left-0 px-3  
                            flex items-center  
                            pointer-events-none">
                    <img src="{{ asset('assets/images/icons/location.png') }}" class="pr-3">
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center md:mx-2">
            <div class="relative">
                <select class="pl-10 pr-5 py-3 border rounded-full" name="unit_type">
                    <option selected>
                        House Type
                    </option>
                    <option value='0'>Single Room</option>
                    <option value='1'>1 Bedroom</option>
                    <option value='2'>2 Bedroom</option>
                    <option value='3'>3 Bedroom</option>
                    <option value='4'>4 Bedroom</option>
                    <option value='5'>5 Bedroom</option>
                    <option value='6'>6+ Bedroom</option>
                </select>
                <div
                    class="absolute inset-y-0 left-0 px-3  
                            flex items-center  
                            pointer-events-none mr-3">
                    <img src="{{ asset('assets/images/icons/Roofing.png') }}">
                </div>
            </div>
        </div>
        <img src="menu_vertical.png" class="three_dot" alt="">

        <div class="mx-4">
            <button class="py-3 px-5 bg-yellow-400 hover:text-bright_red text-black rounded-full"><i
                    class="fa-solid fa-magnifying-glass mr-3"></i>Search</button>
        </div>

    </div>
</form>
