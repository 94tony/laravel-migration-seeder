<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($allTrips as $trip)
        <div class="card">
            <img src="{{$trip->cover}}" alt="">
            <h2>{{$trip->nazione}}</h2>
            <h2>{{$trip->citta}}</h2>
            <h2>{{$trip->prezzo}}</h2>
            <h2>{{$trip->data}}</h2>



          


            
        </div>
    @endforeach
</body>
</html>