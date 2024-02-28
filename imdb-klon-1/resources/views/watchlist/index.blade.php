@extends('layouts.app')

@section('content')
<div class="w-full overflow-x-hidden">
  <div class="flex flex-row -mx-2 overflow-x-scroll scrollbar-smooth touch-scroll snap-x snap-mandatory">
    @foreach ($movies as $key => $movie)
      <!-- Adjust sizes and spacing for a cleaner look -->
      <a class="inline-block px-2 w-full snap-start flex-shrink-0" href="{{ route('movies.show', $movie) }}" style="width: auto;">
        <img class="object-cover w-full h-full object-fit:fill" style="max-width: 200px; max-height: 300px;" src="{{ $movie->img_path }}" alt="{{ $movie->title }}">
      </a>
      @if ($key === 0)
        <div class="inline-block px-2 snap-start flex-shrink-0" style="width: auto;"></div>
      @endif
      @if ($loop->last)
        <div class="inline-block px-2 snap-start flex-shrink-0" style="width: auto;"></div>
      @endif
    @endforeach
  </div>
  <div class="flex justify-between absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" style="display: none;">
    <button class="bg-white hover:bg-gray-200 rounded-full p-2">
      <svg class="w-6 h-6 fill-current text-black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L10.293 4.586A1 1 0 0112.707 5.293z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M7.293 5.293a1 1 0 000 1.414l4 4a1 1 0 001.414-1.414L5.707 4.586A1 1 0 107.293 5.293z" clip-rule="evenodd"></path></svg>
    </button>
    <button class="bg-white hover:bg-gray-200 rounded-full p-2">
      <svg class="w-6 h-6 fill-current text-black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L11.586 15.414A1 1 0 0010.293 14.707z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M12.707 14.707a1 1 0 000-1.414l-4-4a1 1 0 00-1.414 1.414L14.293 15.414A1 1 0 0012.707 14.707z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
</div>
@endsection
