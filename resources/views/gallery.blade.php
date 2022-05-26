
@extends('app')

@section('content')




    <div class="album py-5">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @forelse ($products as $product)

                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="{{$product->type}}">
                            <img class="card-img-top" src="{{ Voyager::image($product->image) }}"  alt="Loading...">
                            </a>
                        <div class="card-body">
                            <p class="card-text" style="text-transform: capitalize;text-align: center; color:black;">{{$product->type}}</p>
                        </div>
                        </div>
                    </div>




            @empty
                <h3>No Galleries Found</h3>
            @endforelse




          </div>
        </div>
      </div>
    </div>

@endsection


