
@extends('app')

@section('content')
  <div>
    @forelse(json_decode($photo->images , true) as $image)
      <img src="{{ Voyager::image($image) }}" alt="Missing Gallery Photo" class="img-fluid img-thumbnail" style="padding:3px;margin:3px">
    @empty
      <tr>
        <td colspan="5"> No images selected in gallery! (go to admin webpage and add photos to the images column)</td>
      </tr>
    @endforelse
  </div>
@endsection


