{{--
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
@endsection --}}

@extends('app')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('gallery-clean.css') }}">
</head>
<body>
<div class="container gallery-container">
    <div class="tz-gallery">
        <div class="row">
            <div>
                <div>
                    @forelse(json_decode($photo->images , true) as $image)
                        <a class="lightbox " href="{{ Voyager::image($image) }}">
                            <img class="img-fluid img-thumbnail" src="{{ Voyager::image($image) }}" alt="Missing Gallery Photo" style="padding:3px;margin:3px">
                        </a>
                    @empty
                        <h4>No images selected in gallery! (go to admin webpage and add photos to the images column)</h4>
                    @endforelse
                </div>
            </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>

@endsection
