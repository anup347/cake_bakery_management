@extends('layouts.app')

@section('content')
    <div class="flex content-center">
        <header class="bg-white dark:bg-gray-800  w-1/2">
            <nav class="bg-white dark:bg-gray-800">
                <div class="container p-6 mx-auto">
                    <p
                        class="block text-2xl font-bold text-center text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300">
                        {{ $order->cake->name }}</p>
                </div>
            </nav>
            <div
                class="container flex flex-col px-6 py-4 mx-auto space-y-6 lg:h-128 lg:py-16 lg:flex-row lg:items-center lg:space-x-6">
                <div class="flex flex-col items-center w-full lg:flex-row lg:w-1/2">
                    <div class="max-w-lg lg:mx-12 lg:order-2">

                            <div class="mt-6">
                                <span class="mt-6 text-gray-600 dark:text-gray-300">Base : ${{$order->cake->price }}</span>
                                <div><span class="mt-6 text-gray-600 dark:text-gray-300">{{ $order->cake->description }}</span></div>
                                <div><span class="mt-6 text-gray-600 dark:text-gray-300">{{ $order->custom_changes }}</span></div>
                                <div><span class="mt-6 text-gray-600 dark:text-gray-300">Total : ${{ $order->total }}</span></div>
                            </div>
                       
                    </div>
                </div>
                <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                    <img class="object-cover w-full h-full max-w-2xl rounded-md" src="{{ asset('CakeImages/' . $order->cake->image_path) }}"
                        alt="apple watch photo">
                </div>

            </div>
        </header>
    </div>
@endsection
