<x-app-layout>

    <div class="container p-3">
        <div class="container p-3 text-center">
           
            <h2 class="mb-4">Movies</h2>
        </div>
    </div>

    <div class="container sm mx-auto">
        <table class="table" style="width: 100%">
            <thead>
                <tr>
                    <th>MovieCard</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <td>
                        <!--card Start-->
                        <div class="container card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                       
                                        <img src="{{ asset($movie->img_path) }}" class="img img-rounded img-fluid"/>
                                        <p class="text-secondary text-center">15 Minutes Ago</p>
                                    </div>
                                    
                                    <div class="col-md-10">
    <a class="float-left" href="{{ route('movies.show', $movie) }}">
        <h2 class="card-title">{{$movie->title}}</h2>
        {{$movie->release_date}}
    </a>
    </div>
    <div class="clearfix">
        <p class="float-left mt-3" style="display: block;">
            PG-13 |  {{ $movie->top_rating }} <i class="text-warning fa fa-star"></i>  {{ $movie->genre }}
        </p>
    </div>


    <p class="float-left">
    
    <button type="button" class="btn btn-success btn-sm">84</button> Metascore
  </p>
</div>
                                        <div class="clearfix"></div>
                                        <p>{{$movie->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card End-->
                    </div>
                    </td>
                    <td style="text-align: right">
                        <a href="{{route('movies.edit', $movie)}}" class="btn btn-primary"> <!--blue pen button -->
                            <i class="fas fa-marker"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('movies.destroy', $movie)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </button><!--red delete button -->
                        </form>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{-- Pagination --}}
        {{$movies->links()}}
        {{-- {!! $movies->links() !!} --}}
    </div>
</x-app-layout>