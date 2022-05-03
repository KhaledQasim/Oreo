
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSRF Token -->
  
  <title>الزهور لشرقية</title>
 </head>
 <body>




  <div>
    @forelse(json_decode($photo->images , true) as $image)
      <img src="{{ Voyager::image($image) }}" alt="Missing Gallery Photo" class="img-fluid img-thumbnail" style="padding:5px; margin:5px 0px 5px 0px">
    @empty
      <tr>
        <td colspan="5"> No images selected in gallery! (go to admin webpage and add photos to the images column)</td>
      </tr>
    @endforelse
  </div>
 </body>
</html>





