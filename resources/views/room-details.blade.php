@extends('layout')
@section('title')
Room Details
@endsection
@section('content')
    <section
      class="section sub-header sub-header__return room__details__background"
    >
      <h4 class="section__header__text sub-header__header text--white">
        THE ULTIMATE LUXURY
      </h4>
      <h1 class="section__title__text sub-header__title text--white">
        Ultimate Rooms
      </h1>
      <div class="return__home__container">
        <div class="return__home__buttons">
          <a href="/home"><h4 class="return__home__button"><span class="return__button__text text--dark">Home</span></h4></a>
            <h4><strong>|</strong></h4>
            <h4 class="return__home__button"><span class="return__button__text text--golden">Room Details</span></h4>
        </div>
    </div>
    </section>
    <section class="section room-info">
      <div class="room-info__header">
        <div class="room-info__header__text">
          <div>
            <h4 class="section__header__text text--margin text--grey">
            
              {{strtoupper($room->type)}}
            
              
            </h4>
            <h3
              class="card__text__title restaurant__text text--margin text--dark"
            >
              {{$room->type}} {{$room->number}}
            </h3>
          </div>
          
          <h4
            class="home__room__text__price room__details__text__price text--margin text--golden"
          >
            ${{$room->price}}/Night
          </h4>
        </div>
        <div class="room-info__header__img">
          <img
            src='{{$room->getPhotos()[0]}}'
            alt="Room"
          />
        </div>
        <form method="POST" action='/room/{{$room->id}}' class="room-availability">
          @csrf
          <h4 class="text room__availability__text text--margin text--dark">
            Check Availability
          </h4>
          <div class="room__details__form__date__container">
            <div class="date__container">
              <label class="booking__title__text text--dark" for="check-in"
                >Check In</label
              >
              <input
                type="date"
                name="check_in"
                class="date__input__field room-detail__input__field room-detail__input__text input__field--bright text--grey"
                placeholder="24th march 2020"
              />
            </div>
            <div class="date__container">
              <label class="booking__title__text text--dark" for="check-out"
                >Check Out</label
              >
              <input
                type="date"
                name="check_out"
                class="date__input__field room-detail__input__field room-detail__input__text input__field--bright text--grey"
                placeholder="24th march 2020"
              />
            </div>
          </div>

          <div>
            <h4 class="booking__title__text text--dark">Personal Info</h4>
            <div class="contact__input__container">
              <img src="/assets/Input/name-icon.png" alt="" />
              <input
                type="text"
                name="name"
                class="room-detail__input__field room-detail__input__text input__field--bright text--grey"
                placeholder="Your full name"
              />
            </div>
            <div class="contact__input__container">
              <img src="/assets/Input/mail-contact.png" alt="" />
              <input
                type="email"
                name="email"
                class="room-detail__input__field room-detail__input__text input__field--bright text--grey"
                placeholder="Enter email address"
              />
            </div>
            <div class="contact__input__container">
              <img src="/assets/Input/phone-contact.png" alt="" />
              <input
                type="text"
                name="contact"
                class="room-detail__input__field room-detail__input__text input__field--bright text--grey"
                placeholder="Add phone number"
              />
            </div>
            <div class="contact__input__container">
              <img src="/assets/Input/pencil.png" alt="" />
              <textarea
                name="special-request"
                class="room-detail__input__field room-detail__input__text input__field--bright text--grey"
                placeholder="Tell us what you need"
                rooms="20"
              ></textarea>
            </div>
            
          </div>

          <button
            type="submit"
            class="button room-detail__button button--golden"
          >
            <span class="button__text">CHECK AVAILABILITY</span>
          </button>
        </form>
      </div>
      <p class="text text--margin">
        {{$room->description}}
      </p>
      <div class="room-detail__section room-detail__amenities">
        <h3 class="card__text__title text--dark">Amenities</h3>
        <div class="grey__line"></div>
        <div class="room-amenities__container">
          <div class="room-amenities__element">
            <img
              src="/assets/Rooms/Amenities/air.png"
              alt="Air Conditioner"
            />
            <p class="room-amenities__text text--grey">Air conditioner</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/wifi.png" alt="Wifi" />
            <p class="room-amenities__text text--grey">High speed WiFi</p>
          </div>
          <div class="room-amenities__element">
            <img
              src="/assets/Rooms/Amenities/breakfast.png"
              alt="Breakfast"
            />
            <p class="room-amenities__text text--grey">Breakfast</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/kitchen.png" alt="Kitchen" />
            <p class="room-amenities__text text--grey">Kitchen</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/cleaning.png" alt="Cleaning" />
            <p class="room-amenities__text text--grey">Cleaning</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/shower.png" alt="Shower" />
            <p class="room-amenities__text text--grey">Shower</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/grocery.png" alt="Grocery" />
            <p class="room-amenities__text text--grey">Grocery</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/bed.png" alt="Single Bed" />
            <p class="room-amenities__text text--grey">Single Bed</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/shop.png" alt="Shop near" />
            <p class="room-amenities__text text--grey">Shop near</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/towels.png" alt="Towels" />
            <p class="room-amenities__text text--grey">Towels</p>
          </div>
          <div class="room-amenities__element">
            <img
              src="/assets/Rooms/Amenities/support.png"
              alt="24/7 Online Support"
            />
            <p class="room-amenities__text text--grey">24/7 Online Support</p>
          </div>
          <div class="room-amenities__element">
            <img
              src="/assets/Rooms/Amenities/locker.png"
              alt="Strong Locker"
            />
            <p class="room-amenities__text text--grey">Strong Locker</p>
          </div>
          <div class="room-amenities__element">
            <img
              src="/assets/Rooms/Amenities/security.png"
              alt="Smart Security"
            />
            <p class="room-amenities__text text--grey">Smart Security</p>
          </div>
          <div class="room-amenities__element">
            <img src="/assets/Rooms/Amenities/expert.png" alt="Expert Team" />
            <p class="room-amenities__text text--grey">Expert Team</p>
          </div>
        </div>
        
        
      </div>
      <div class="section employee__info">
        <img src="https://f4.bcbits.com/img/0025239196_25.jpg" alt="" />
        <h3 class="card__text__title text--margin text--dark">Jekk0</h3>
        <h4 class="section__header__text text--margin text--golden">
          MANAGER
        </h4>
        <p class="text text--margin">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore.
        </p>
      </div>
      <div class="room-detail__section">
        <h3 class="card__text__title text--dark">Cancellation</h3>
        <div class="grey__line"></div>
        <p class="text">
          {{$room->cancellation}}
        </p>
      </div>
      <div class="room-detail__section">
        <h3 class="card__text__title text--dark">Related Rooms</h3>
        <div class="grey__line"></div>
        <div class="swiper popular__rooms__card__slider__mobile">
          <div class="swiper-wrapper popular__rooms__card__container">
            @foreach($rooms_related as $index => $room)
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
        <div class="related__rooms__card__slider">
          <div class="related__rooms__card__container">
            
            @foreach($rooms_related as $index => $room)
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
      </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="scripts/sliders.js"></script>
    <script src="scripts/burgerMenu.js"></script>
@endsection