@extends('layouts.app')

@section('content')

<div class="flex justify-center w-full mt-8">
    <div class="bg-gray-100 rounded-lg w-1/4">

        <form action="{{ route('cakes.addcake') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="image" class="sr-only">Cake Photo</label>
                <input type="file" name="image" id="image" class="bg-white-100 border-2 p-4 rounded-lg w-full @error('image') border-red-500 @enderror" value="{{ old('image') }}"  />

                @error('image')
                    <div class='text-red-500 text-sm mt-2'>
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="cake_name" class="sr-only">Name</label>
                <input type="text" name="cake_name" id="cake_name" placeholder="Cake Name"
                    class="bg-white-100 border-2 p-4 rounded-lg w-full @error('name') border-red-500 @enderror" 
                    value="{{ old('cake_name') }}" />

                @error('cake_name')
                    <div class='text-red-500 text-sm mt-2'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="sr-only">Description</label>
                <textarea name="description" id="description" cols="20" rows="5" placeholder="Description" 
                class="bg-white-100 border-2 p-4 rounded-lg w-full" value="{{ old('description') }}"></textarea>

                @error('description')
                    <div class='text-red-500 text-sm mt-2'>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="sr-only">Price</label>
                <input type="number" name="price" id="price" placeholder="Price" step="any"
                    class="bg-white-100 border-2 p-4 rounded-lg w-full @error('email') border-red-500 @enderror" value="{{ old('price') }}" />

                @error('price')
                    <div class='text-red-500 text-sm mt-2'>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" name="Save"
                    class=" p-4 bg-pink-500 text-white rounded w-full  ">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
