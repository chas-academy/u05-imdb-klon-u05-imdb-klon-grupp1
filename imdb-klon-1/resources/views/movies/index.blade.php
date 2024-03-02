{{ -- Added a partial to have the movies be included without a new header for the front-page -- }}
<x-app-layout>
    @include('layouts.partials.allMovies')
</x-app-layout>