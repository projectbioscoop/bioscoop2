@extends('master')

@section('links')
    <link rel="stylesheet" href="/css/chair.css">
@endsection

@section ('content')
    @foreach ($data as $movieData)
        <div class="titleItems bar">
            <h2>{{$movieData["movieName"]}} || {{ $movieData["theatherName"] }}</h2>
        </div>
        <div class="movieItems">
            <div class="seats col-lg-12 seat2">
            <?php $count = 0;?>
                @if (isset($movieData["rowsLoversSeats"]))
                    
                    @for ($j = $movieData["rowsLoversSeats"][0][count($movieData["rowsLoversSeats"][0])]["row_loveseat"]; $j < $movieData["rowsLoversSeats"][0]["row_loveseat"]; $j++)
                        <div class="seat" id="NormalSeat">
                            @for ($k = 0;$k < $movieData["amountOfChairsPerRow"];$k++)
                                <img src="/img/bioscoop/seat.png" alt="seat" id="seat-<?php echo $count;?>" class="<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ? print("bezet") : null)) ;  $count++;?>">
                            @endfor
                        </div>
                    @endfor
                    @for ($j = 0;$j < count($movieData["rowsLoversSeats"]);$j++)
                        <div class="seat" id="LoveSeat">
                            @for ($k = 0;$k < ($movieData["amountOfLoverChairs"] / 2 != 0 && $j % 2 == 0 ? $movieData["amountOfLoverChairs"] / 2 + 1 : $movieData["amountOfLoverChairs"] / 2) ;$k++)
                                <img src="/img/bioscoop/loveseat.png" alt="seat" id="seat-<?php echo $count;?>" class="<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ?  print("bezet") : null)) ;  $count++;?>">
                            @endfor
                        </div>
                    @endfor
                    @for ($j = 1; $j < $movieData["rowsLoversSeats"][0]["row_loveseat"]; $j++)
                        <div class="seat" id="NormalSeat">
                            @for ($k = 0;$k < $movieData["amountOfChairsPerRow"];$k++)
                                <img src="/img/bioscoop/seat.png" alt="seat" id="seat-<?php echo $count;?>" class=<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ?  print("bezet") : null)) ;  $count++;?>>
                            @endfor
                        </div>
                    @endfor
                @else
                    <div class="seat" id="NormalSeat">
                        @for ($k = 0;$k < $movieData["amountOfChairsPerRow"];$k++)
                            <img src="/img/bioscoop/seat.png" alt="seat" id="seat-<?php echo $count;?>" class=<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ?  print("bezet") : null)) ;  $count++;?>>
                        @endfor
                    </div>
                @endif
            </div>
        </div>
    @endforeach
@endsection