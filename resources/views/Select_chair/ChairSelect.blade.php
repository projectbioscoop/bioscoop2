@extends('master')

@section('links')
    <link rel="stylesheet" href="/css/chair.css">
@endsection
@section ('content')
<h2>{{ $movieData["theatherName"] }}</h2>
<div class="seats col-lg-12">
    <div class="seat" id="NormalSeat">
        
    </div>
    <div class="seat" id="LoveSeat">
        
    </div>
</div>

<div class="scherm col-lg-12">
    <img src="img/bioscoop/scherm.png" alt="">
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