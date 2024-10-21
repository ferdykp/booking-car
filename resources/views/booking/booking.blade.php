<x-layout>
    <x-slot:page_title>
        Input Car
    </x-slot:page_title>
    <x-slot:page_name>
        Input Car
    </x-slot:page_name>
    
    <!-- Notification -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div id="modalAdd" class="mt-8">
            <div class="w-full">
                <div class="flex flex-col px-5 py-6 bg-white rounded-md shadow-sm">
                    <div class="mt-6 w-full">
                        <label for="customer" class="block text-sm font-medium leading-6 text-gray-900">Customer Name</label>
                        <div class="mt-2">
                            <input type="text" id="customer" name="customer" value="{{ old('customer') }}" required autocomplete="customer" placeholder="Customer Name" class="block w-full max-w-xl rounded-md border-2 border-gray-900 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('customer')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 w-full">
                        <label for="no_hp" class="block text-sm font-medium leading-6 text-gray-900">Telephone Number</label>
                        <div class="mt-2">
                            <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required pattern="^\+?[0-9]{10,13}$" placeholder="Phone Number" class="block w-full max-w-xl rounded-md border-2 border-gray-900 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('no_hp')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 w-full">
                        <label for="rent_start" class="block text-sm font-medium leading-6 text-gray-900">Start Rental</label>
                        <div class="mt-2">
                            <input type="date" id="rent_start" name="rent_start" value="{{ old('rent_start') }}" required class="block w-full max-w-xl rounded-md border-2 border-gray-900 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('rent_start')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 w-full">
                        <label for="rent_end" class="block text-sm font-medium leading-6 text-gray-900">End Rental</label>
                        <div class="mt-2">
                            <input type="date" id="rent_end" name="rent_end" value="{{ old('rent_end') }}" required class="block w-full max-w-xl rounded-md border-2 border-gray-900 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('rent_end')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layout>
