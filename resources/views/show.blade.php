{{-- @extends('app')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-11" id="photos-table">
            <table class="table table-bordered table-responsive table-striped" >
                <thead>
                    <th>ID</th>
                    <th>Thumbnail</th>
                    <th>Description</th>
                    <th>View Gallery</th>
                </thead>
                <tbody>
                <tbody>
                    @forelse($photos as $photo)
                        <tr>
                            <td>{{$photo->id}}</td>
                            <td><img  src="{{ Voyager::image($photo->image) }}" alt="No Gallery Thumbnail Image Selected!" class="img-fluid img-thumbnail"></td>
                            <td>{{$photo->description}}</td>
                            <td><a target=”_blank” href="gallery-{{$photo->id}}" class="btn btn-info">View</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Galleries Found</td>
                        </tr>
                    @endforelse
                  </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection --}}
@extends('app')

@section('content')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('../resources/css/gallery.css') }}" >

</head>


    <div class="wrapper">

        <div class="gallery">
            @forelse($photos as $photo)
                <div class="gallery__item">
                    <a href="gallery-{{$photo->id}}" class="gallery__link">
                        <img src="{{ Voyager::image($photo->image) }}" class="gallery__image" alt="No Gallery Thumbnail Image Selected!">
                        <div class="gallery__overlay">
                            <span>{{$photo->description}}</span>
                        </div>
                    </a>
                </div>
            @empty
                <h3>No Galleries Found</h3>
            @endforelse

        </div>

    </div>



@endsection

