<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('booking.index','customers.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Booking Index</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('booking.store') }}">
                            @csrf
                            <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">ID</label>
                            <div class="mt-1">
                              <input type="text" id="id" name="id" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$booking->
BookId}}" readonly/>
                            </div>
                            @error('id') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="date" class="block text-sm font-medium text-gray-700">startDate</label>
                            <div class="mt-1">
                              <input type="date" id="fname" name="startdate" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$booking->startDate}}" readonly/>
                            </div>
                            @error('startdate') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>


                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">endDate</label>
                            <div class="mt-1">
                              <input type="date" id="lname" name="enddate" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$booking->endDate}}"readonly/>
                            </div>
                            @error('enddate') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>

                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Amount</label>
                            <div class="mt-1">
                              <input type="currency" id="mail" name="amount" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$booking->Amount}}"readonly/>
                            </div>
                            @error('amount') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>


                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">whoPayed</label>
                            <div class="mt-1">
                              <input type="text" id="tel" name="whopayed" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$booking->customers}}" readonly/>
                            </div>
                            @error('whopayed') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>

    
                        
                        </form>
                      </div>
                      
                </div>
  
            </div>
        </div>
    </div>
</x-admin-layout>
