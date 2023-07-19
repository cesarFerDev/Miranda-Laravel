@extends('layout')
@section('title')
Rooms
@endsection
@section('content')
    <section class="section sub-header sub-header__return rooms__background">
        <h4 class="section__header__text sub-header__header text--white">THE ULTIMATE LUXURY</h4>
        <h1 class="section__title__text sub-header__title text--white">Ultimate Room</h1>
        <div class="return__home__container">
            <div class="return__home__buttons">
                <a href="/home"><h4 class="return__home__button"><span class="return__button__text text--dark">Home</span></h4></a>
                <h4><strong>|</strong></h4>
                <h4 class="return__home__button"><span class="return__button__text text--golden">Rooms</span></h4>
            </div>
        </div>
    </section>

    <section class="section rooms">
        <div class="rooms__grid__container">
            
            @foreach($rooms as $room)
                <div class="room__card">
                    <div class="room__card__img__container room__card__img__container__petit">
                        <a href = '/room/{{$room->id}}'>
                            <img class="room__card__img" src='{{$room->getPhotos()[0]}}'>
                        </a>
                        <div class="rooms__icons">
                            <img class="rooms__icons__icon" src="/assets/Rooms-slider-icons/bed_icon.png" alt="Bed Icon">
                            <img class="rooms__icons__icon" src="/assets/Rooms-slider-icons/wifi_icon.png" alt="Wifi Icon">
                            <img class="rooms__icons__icon" src="/assets/Rooms-slider-icons/car_icon.png" alt="Car Icon">
                            <img class="rooms__icons__icon" src="/assets/Rooms-slider-icons/snow_icon.png" alt="Snow Icon">
                            <img class="rooms__icons__icon" src="/assets/Rooms-slider-icons/gym_icon.png" alt="Gym Icon">
                            <img class="rooms__icons__icon" src="/assets/Rooms-slider-icons/smoke_icon.png" alt="Smoke Icon">
                            <img class="rooms__icons__icon" src="/assets/Rooms-slider-icons/drink_icon.png" alt="Drink Icon">
                        </div>
                    </div>
                    
                    <div class="room__card__text">
                        <h3 class="text card__text__title room__text text--margin text--dark">{{$room->type}} {{$room->number}}</h3>
                        <p class="text text--margin text--grey">{{$room->description}}</p>
                        <div class="room__pricing__text__container">
                            <h4 class="home__room__text__price room__text__price room__text__price--margin text--golden">${{$room->price}}/Night</h4>
                            <h4 class="home__room__text__price room__text__price text--grey">Booking Now</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
        
        <!-- <div class="paginator">
            <button class="paginator__element paginator__text">
                <p class="paginator__text">‹‹</p>
            </button>
            <div class="paginator__element">
                <p class="paginator__text">1</p>
            </div>
            <div class="paginator__element">
                <p class="paginator__text">2</p>
            </div>
            <div class="paginator__element">
                <p class="paginator__text">3</p>
            </div>
            <div class="paginator__element">
                <p>...</p>
            </div>
            <div class="paginator__element">
                <p class="paginator__text">10</p>
            </div>
            <div class="paginator__element">
                <p class="paginator__text">››</p>
            </div>
        </div> -->
    </section>
@endsection
@section('scripts')
    <script src="scripts/burgerMenu.js"></script>
    <!-- <script src="scripts/paginator.js"></script> -->
@endsection