@extends('app')
 
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
                <tbody class="alldata">
                    @forelse($photos as $photo)
                        <tr>
                            <td>{{$photo->id}}</td>
                            <td><img id="thumbnail-image" src="{{ Voyager::image($photo->image) }}" alt="description of myimage"></td>
                            <td>{{$photo->description}}</td>
                            <td><a target=”_blank” href="photo-{{$photo->id}}" class="btn btn-info">View</a></td>
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
@endsection