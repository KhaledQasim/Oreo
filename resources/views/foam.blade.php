@extends('app')

@section('content')




    <div class="album py-5">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @forelse ($photos as $photo)
                @if ($photo->type == "foam")
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="photos-{{$photo->id}}">
                            <img class="card-img-top" src="{{ Voyager::image($photo->image) }}"  alt="Loading...">
                            </a>
                        <div class="card-body">
                            <p class="card-text" style="text-align: center; color:black; text-decoration: underline white">{{$photo->description}}</p>
                        </div>
                        </div>
                    </div>
                @endif
            @empty
                <h3>No Galleries Found</h3>
            @endforelse



          </div>
        </div>
      </div>
    </div>

@endsection
