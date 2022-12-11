<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('customers.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Customer Index</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('customers.store') }}">
                            @csrf
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">FirstName</label>
                            <div class="mt-1">
                              <input type="text" id="fname" name="firstname" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('firstname') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>


                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">LastName</label>
                            <div class="mt-1">
                              <input type="text" id="lname" name="lastname" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('lastname') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>

                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                              <input type="email" id="mail" name="customeremail" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('email') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>


                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Telephone</label>
                            <div class="mt-1">
                              <input type="telephone" id="tel" name="telephone" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('telephone') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>

                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                              <input type="text" id="pass" name="password" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('pass') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6 pt-5">
                            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Create</button>
                          </div>
                        </form>
                      </div>
                      
                </div>
  
            </div>
        </div>
    </div>
</x-admin-layout>
