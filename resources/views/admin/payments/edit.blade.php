<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('payment.index','customers.index') }}"
                        class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Payment Index</a>
                </div>
                <div class="flex flex-col p-2 bg-slate-100">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('payment.update', $payment->payId)}}">
                            @csrf
                            @method('PUT')
                            <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">payId</label>
                            <div class="mt-1">
                              <input type="text" id="id" name="identification" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$payment->payId}}" />
                            </div>
                            @error('identification') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Payment_for</label>
                            <div class="mt-1">
                              <input type="text" id="fname" name="payfor" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$payment->payment_for}}" />
                            </div>
                            @error('payfor') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>


                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Amount</label>
                            <div class="mt-1">
                              <input type="text" id="lname" name="amount" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$payment->Amount}}"/>
                            </div>
                            @error('amount') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>

                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">customerId</label>
                            <div class="mt-1">
                              <input type="number" id="num" name="whopay" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$payment->customerId}}"/>
                            </div>
                            @error('whopay') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>


                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">FirstName</label>
                            <div class="mt-1">
                              <input type="telephone" id="tel" name="firstname" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$payment->customers->FirstName}}" />
                            </div>
                            @error('firstname') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          

                          

                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">LastName</label>
                            <div class="mt-1">
                              <input type="telephone" id="tel" name="lastname" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$payment->customers->LastName}}" />
                            </div>
                            @error('lastname') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>

    
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-admin-layout>
