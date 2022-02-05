@extends('layouts.app')

@section('content')


    <div class="mt-8 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        @foreach ($cakes as $cake)

            <div class="bg-white rounded-lg  overflow-hidden relative">
                <a href="{{ route('cakes.show', $cake) }}" class="">
                    <img class="w-full h-32 md:h-48 object-cover" src="{{ asset('CakeImages/' . $cake->image_path) }}"
                        alt="{{ $cake->name }}">

                    <div class="m-4">
                        <span class="font-bold">
                            {{ $cake->name }}
                        </span>
                        <span class="block text-gray-500 text-sm">
                            <span class="font-bold">
                                {{ $cake->description }}
                            </span>

                    </div>

                    <div class="bg-gray-100 rounded-lg absolute top-0 mt-2 ml-2">
                        <span>${{ $cake->price }}</span>
                    </div>
                </a>
            </div>

        @endforeach

    </div>
@endsection
