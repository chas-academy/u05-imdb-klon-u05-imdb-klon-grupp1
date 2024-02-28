@extends('layouts.app')

@section('content')
<div class="w-full max-h-40 overflow-x-auto"> <div class="flex flex-row -mx-4"> @foreach ($movies as $movie)
      <div class="w-40 h-40 flex-shrink-0 mx-4 bg-white rounded-lg shadow-md overflow-hidden"> <div class="p-4">
          <h3 class="text-lg font-semibold">{{ $movie->title }}</h3>
        </div>
        <div class="p-2 bg-gray-200 rounded-lg"> <img class="object-contain w-full h-full" src="{{ $movie->img_path }}" alt="{{ $movie->title }}">
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
