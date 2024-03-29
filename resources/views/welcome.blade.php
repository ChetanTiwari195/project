@extends('layouts.structure')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        @endif

        <!-- User Profile Picture -->
        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-blue-500">
            <img src="{{ asset('images/user-svgrepo-com.svg') }}" alt="Default Profile Photo" />
        </div>

        <!-- Other Photos and Videos -->
        <div class="grid grid-cols-3 gap-4">
            <!-- Example Photo Card -->
            <div class="bg-white rounded-lg shadow-md">
                <img src="{{ asset('path/to/photo.jpg') }}" alt="Photo" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="font-bold text-xl">Photo Title</h2>
                    <p class="text-gray-700">Photo description...</p>
                </div>
            </div>

            <!-- Example Video Card -->
            <div class="bg-white rounded-lg shadow-md">
                <video src="{{ asset('path/to/video.mp4') }}" class="w-full h-48 object-cover" controls></video>
                <div class="p-4">
                    <h2 class="font-bold text-xl">Video Title</h2>
                    <p class="text-gray-700">Video description...</p>
                </div>
            </div>

            <!-- Add more cards as needed -->
        </div>
    </div>
@endsection
