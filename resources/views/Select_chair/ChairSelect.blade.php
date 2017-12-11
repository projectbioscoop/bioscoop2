@extends('master')

@section('links')
    <link rel="stylesheet" href="/css/chair.css">
@endsection
@section ('content')
<h2>{{ $movieData["theatherName"] }}</h2>
<div class="seats col-lg-12">
<?php $count = 0;?>
    @if (isset($movieData["rowsLoversSeats"]))
        @for ($j = 0; $j < ($movieData["capacity"] / $movieData["amountOfChairsPerRow"] - $movieData["rowsLoversSeats"][0]["row_loveseat"]); $j++)
            <div class="seat" id="NormalSeat">
                @for ($k = 0;$k < $movieData["amountOfChairsPerRow"];$k++)
                    <img src="/img/bioscoop/seat.png" alt="seat" id="seat-<?php echo $count;?>" class="<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ? print("bezet chair") : print("chair"))) ;  $count++;?>">
                @endfor
            </div>
        @endfor
        @for ($j = 0;$j < count($movieData["rowsLoversSeats"]);$j++)
            <div class="seat" id="LoveSeat">
                @for ($k = 0;$k < ($movieData["amountOfLoverChairs"] / 2 != 0 && $j % 2 != 0 ? $movieData["amountOfLoverChairs"] / 2 - 1 : $movieData["amountOfLoverChairs"] / 2) ;$k++)
                    <img src="/img/bioscoop/loveseat.png" alt="seat" id="seat-<?php echo $count;?>" class="<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ?  print("bezet chair") : print("chair"))) ;  $count++;?>">
                @endfor
            </div>
        @endfor
        @for ($j = 1; $j < $movieData["rowsLoversSeats"][0]["row_loveseat"]; $j++)
            <div class="seat" id="NormalSeat">
                @for ($k = 0;$k < $movieData["amountOfChairsPerRow"];$k++)
                    <img src="/img/bioscoop/seat.png" alt="seat" id="seat-<?php echo $count;?>" class=<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ?  print("bezet chair") : print("chair"))) ;  $count++;?>>
                @endfor
            </div>
        @endfor
    @else
        <div class="seat" id="NormalSeat">
            @for ($k = 0;$k < $movieData["amountOfChairsPerRow"];$k++)
                <img src="/img/bioscoop/seat.png" alt="seat" id="seat-<?php echo $count;?>" class=<?php (!isset($movieData["chairs"][0][$count]["used"])? null :($movieData["chairs"][0][$count]["used"] == 1 ?  print("bezet chair") : print("chair"))) ;  $count++;?>>
            @endfor
        </div>
    @endif
</div>

<div class="scherm col-lg-12">
    <img src="/img/bioscoop/scherm.png" alt="Tv-screen">
</div>

@endsection
@section('LeftBar')
    <div class="left_bar col-lg-12">
        <h2>Stoel Selector</h2>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi autem, deleniti dolor doloribus error esse ipsum laboriosam laudantium libero minima modi nulla, quam quis recusandae sint tempora ullam, vitae voluptatibus.</span><span>Magni minus possimus rem suscipit. Inventore minus nisi numquam totam. Atque delectus inventore itaque, iure iusto nemo nihil nisi, nostrum obcaecati odit pariatur placeat, porro quae rerum similique tempore voluptates?</span><span>Animi consequuntur dolore exercitationem inventore itaque nisi nulla possimus quam voluptate.
               A assumenda at autem consequatur consequuntur dolorem doloremque ea, fugiat ipsum iste laborum minima, nobis, temporibus veniam voluptatum. Eaque?</span></p>
    </div>
@endsection

@section('RightBar')
    <div class="right_bar col-lg-12">
        <h2>Kiezen</h2>
    </div>
@endsection