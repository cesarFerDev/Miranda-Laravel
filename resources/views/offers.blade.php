@extends('layout')
@section('title')
Offers
@endsection
@section('content')
    <section class="section sub-header sub-header__return offers__background">
        <h4 class="section__header__text sub-header__header text--white">THE ULTIMATE LUXURY</h4>
        <h1 class="section__title__text sub-header__title text--white">Our Offers</h1>
        <div class="return__home__container">
            <div class="return__home__buttons">
              <a href="/home"><h4 class="return__home__button"><span class="return__button__text text--dark">Home</span></h4></a>
                <h4><strong>|</strong></h4>
                <h4 class="return__home__button"><span class="return__button__text text--golden">Offers</span></h4>
            </div>
        </div>
    </section>

    <section class="section offers">
        <div class="offers__cards__container">
            
          @foreach($rooms_offer as $index => $room)
            <div class="room__offer__card">
                <div class="room__offer__card__img">
                    <img src='{{$room->getPhotos()[0]}}' alt="Room Offer"/>
                </div>
                <div class="room__offer__card__info">
                    <div class="room__offer__card__info__row">
                        <div>
                            <h4 class="section__header__text text--margin  text--grey">{{$room->type}}</h4>
                        <h3 class="card__text__title text--margin  restaurant__text text--dark">{{$room->type}} {{$room->number}}</h3>
                        </div>
                        
                        <div class="room__offer__price__container">
                            <h4 class="offer__text__price price--before__text text--golden"><span class="text--lined">${{$room->price}}</span>/<span class="offer__text__price--petit text--lined">Night</span></h4>
                            <h4 class="offer__text__price text--red">${{$room->price - round((($room->price*$room->discount)/100), 2)}}/<span class="offer__text__price--petit">Night</span></h4>
                        </div>
                    </div>
                    <div class="room__card__grey__line"></div>
                    <div class="room__offer__card__info__row">
                        <div class="room__offer__description__container">
                            <p class="text text--margin ">{{$room->description}}</p>
                        </div>
                        
                        <div class="room__offer__amenities__container">
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/air.png" alt="Air Conditioner">
                                <p class="room-amenities__text text--grey">Air conditioner</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/wifi.png" alt="Wifi">
                                <p class="room-amenities__text text--grey">High speed WiFi</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/breakfast.png" alt="Breakfast">
                                <p class="room-amenities__text text--grey">Breakfast</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/kitchen.png" alt="Kitchen">
                                <p class="room-amenities__text text--grey">Kitchen</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/cleaning.png" alt="Cleaning">
                                <p class="room-amenities__text text--grey">Cleaning</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/shower.png" alt="Shower">
                                <p class="room-amenities__text text--grey">Shower</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/grocery.png" alt="Grocery">
                                <p class="room-amenities__text text--grey">Grocery</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/bed.png" alt="Single Bed">
                                <p class="room-amenities__text text--grey">Single Bed</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/shop.png" alt="Shop near">
                                <p class="room-amenities__text text--grey">Shop near</p>
                            </div>
                            <div class="room-amenities__element">
                                <img src="/assets/Rooms/Amenities/towels.png" alt="Towels">
                                <p class="room-amenities__text text--grey">Towels</p>
                            </div>
                        </div>
                    </div>
                    <a href = '/room/{{$room->id}}'>
                      <button class="button button--golden"><span class="button__text">BOOK NOW</span></button>
                    </a>
                </div>
                
            </div>
          @endforeach
        </div>
    </section>

    <section class="section popular-rooms">
        <h4 class="section__header__text text--margin text--golden">POPULAR LIST</h4>
        <h3 class="card__text__title restaurant__text text--margin text--white">Popular Rooms</h3>

        <div class="swiper popular__rooms__card__slider__mobile">
          <div class="swiper-wrapper popular__rooms__card__container">
            @foreach($rooms_popular as $index => $room)
            <div class="swiper-slide room__card">
              <div class="room__card__img__container">
                <a href = '/room/{{$room->id}}'><img
                  class="room__card__img"
                  src='{{$room->getPhotos()[0]}}'
                  alt="Room"
                /></a>
                <div class="rooms__icons">
                  <img
                    class="rooms__icons__icon"
                    src="/assets/Rooms-slider-icons/bed_icon.png"
                    alt="Bed Icon"
                  />
                  <img
                    class="rooms__icons__icon"
                    src="/assets/Rooms-slider-icons/wifi_icon.png"
                    alt="Wifi Icon"
                  />
                  <img
                    class="rooms__icons__icon"
                    src="/assets/Rooms-slider-icons/car_icon.png"
                    alt="Car Icon"
                  />
                  <img
                    class="rooms__icons__icon"
                    src="/assets/Rooms-slider-icons/snow_icon.png"
                    alt="Snow Icon"
                  />
                  <img
                    class="rooms__icons__icon"
                    src="/assets/Rooms-slider-icons/gym_icon.png"
                    alt="Gym Icon"
                  />
                  <img
                    class="rooms__icons__icon"
                    src="/assets/Rooms-slider-icons/smoke_icon.png"
                    alt="Smoke Icon"
                  />
                  <img
                    class="rooms__icons__icon"
                    src="/assets/Rooms-slider-icons/drink_icon.png"
                    alt="Drink Icon"
                  />
                </div>
              </div>
  
              <div class="room__card__text">
                <h3
                  class="text card__text__title room__text text--margin text--dark"
                >
                  {{$room->type}} {{$room->number}}
                </h3>
                <p class="text text--margin text--grey">
                  {{$room->description}}
                </p>
                <div class="room__pricing__text__container">
                  <h4
                    class="home__room__text__price room__text__price room__text__price--margin text--golden"
                  >
                    ${{$room->price}}/Night
                  </h4>
                  <h4
                    class="home__room__text__price room__text__price text--grey"
                  >
                    Booking Now
                  </h4>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-button swiper-button-prev"></div>
          <div class="swiper-button swiper-button-next"></div>
        </div>

        <div class="popular__rooms__card__slider">
          <div class="popular__rooms__card__container">
            @foreach($rooms_popular as $index => $room)
              <div class="room__card">
                <div class="room__card__img__container room__card__img__container__petit">
                <a href = '/room/{{$room->id}}'><img
                    class="room__card__img"
                    src='{{$room->getPhotos()[0]}}'
                    alt="Room"
                  /></a>
                  <div class="rooms__icons">
                    <img
                      class="rooms__icons__icon"
                      src="/assets/Rooms-slider-icons/bed_icon.png"
                      alt="Bed Icon"
                    />
                    <img
                      class="rooms__icons__icon"
                      src="/assets/Rooms-slider-icons/wifi_icon.png"
                      alt="Wifi Icon"
                    />
                    <img
                      class="rooms__icons__icon"
                      src="/assets/Rooms-slider-icons/car_icon.png"
                      alt="Car Icon"
                    />
                    <img
                      class="rooms__icons__icon"
                      src="/assets/Rooms-slider-icons/snow_icon.png"
                      alt="Snow Icon"
                    />
                    <img
                      class="rooms__icons__icon"
                      src="/assets/Rooms-slider-icons/gym_icon.png"
                      alt="Gym Icon"
                    />
                    <img
                      class="rooms__icons__icon"
                      src="/assets/Rooms-slider-icons/smoke_icon.png"
                      alt="Smoke Icon"
                    />
                    <img
                      class="rooms__icons__icon"
                      src="/assets/Rooms-slider-icons/drink_icon.png"
                      alt="Drink Icon"
                    />
                  </div>
                </div>
    
                <div class="room__card__text">
                  <h3
                    class="text card__text__title room__text text--margin text--dark"
                  >
                    {{$room->type}} {{$room->number}}
                  </h3>
                  <p class="text text--margin text--grey">
                    {{$room->description}}
                  </p>
                  <div class="room__pricing__text__container">
                    <h4
                      class="home__room__text__price room__text__price room__text__price--margin text--golden"
                    >
                      ${{$room->price}}/Night
                    </h4>
                    <h4
                      class="home__room__text__price room__text__price text--grey"
                    >
                      Booking Now
                    </h4>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="scripts/sliders.js"></script>
    <script src="scripts/burgerMenu.js"></script>
@endsection