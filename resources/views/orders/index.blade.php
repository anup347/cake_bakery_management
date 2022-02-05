@extends('layouts.app')

@section('content')


<div class="w-1/2 mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <img class="object-cover w-full h-96" src="{{ asset('CakeImages/' . $cake->image_path) }}" alt="{{ $cake->name }}">

    <div class="p-6">
        <div>
           <!-- <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Product</span>
            <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline">I Built A Successful Blog In One Year</a>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie parturient et sem ipsum volutpat vel. Natoque sem et aliquam mauris egestas quam volutpat viverra. In pretium nec senectus erat. Et malesuada lobortis.</p>
           -->
            <p class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">${{ $cake->price }} </p>

            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> {{ $cake->description }} </p>
            <form action="{{ route('orders.index',$cake) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="cstm_changes" class="sr-only">Custom Changes</label>
                    <textarea name="cstm_changes" id="cstm_changes" cols="20" rows="5" placeholder="Please describe your customization"
                        class="bg-white-100 border-2 p-4 rounded-lg w-full" value="{{ old('cstm_changes')}}"></textarea>
                </div>
    
                <div>
                    <button type="submit" name="Order" class=" p-4 bg-pink-500 text-white rounded w-full  ">Order</button>
                </div>
            </form>
        </div>

        <!--<div class="mt-4">
            <div class="flex items-center">
                <div class="flex items-center">
                    <img class="object-cover h-10 rounded-full" src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60" alt="Avatar">
                    <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">Jone Doe</a>
                </div>
                <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">21 SEP 2015</span>
            </div>
        </div>-->
    </div>
</div>







@endsection
