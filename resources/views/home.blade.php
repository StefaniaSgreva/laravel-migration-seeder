<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container">
            <h1 class="text-center py-4">Departing Trains</h1>
                
            <table class="table table-light table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Agency</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Train code</th>
                    <th scope="col">Carriages Number</th>
                    <th scope="col">On Time</th>
                    <th scope="col">Cancelled</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                  <tr>
                    <th scope="row">{{$train->id}}</th>
                    <td>{{$train->agency}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriages_number}}</td>
                    <td>{{$train->on_time ? 'yes' : 'no'}}</td>
                    <td>{{$train->cancelled ? 'cancelled' : ''}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </main>
</body>

</html>
