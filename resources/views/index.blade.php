@extends('layout')
@section('title')
Home
@endsection
@section('content')
    <section class="section sub-header home__background">
        <h4 class="section__header__text sub-header__header text--white">
        THE ULTIMATE LUXURY EXPERIENCE
        </h4>
        <h1 class="section__title__text sub-header__title sub-header__home__title text--white">
        The Perfect Base For You
        </h1>
        <div class="sub-header__home__buttons__container">
        <a href="#video"><button class="button sub-header__button button--golden">
            
                <span class="button__text">TAKE A TOUR</span>
            
        </button></a>
        <a href='/about'><button class="button sub-header__button button--dark">
            
                <span class="button__text">LEARN MORE</span>
            
        </button></a>
        </div>
        
    </section>

    <section class="section booking">
        <form action="/rooms" class="booking__form__container">
        <div class="booking__inputs__container">
            <div class="date__container">
            <label class="booking__title__text" for="start">Arrival Date</label>
            <input
                type="date"
                name="start"
                class="booking__input__text home__date__input__field"
                placeholder="2023/06/21"
                required
            />
            </div>
            <div class="date__container">
            <label class="booking__title__text" for="end"
                >LeDeparture Date</label
            >
            <input
                type="date"
                name="end"
                class="booking__input__text home__date__input__field"
                placeholder="30th march 2020"
                required
            />
            </div>
        </div>
        
        <button type="submit" class="button booking__button button--golden">
            <span class="button__text">CHECK AVAILABILITY</span>
        </button>
        </form>
    </section>

    <section class="section about-us">
        <div class="about-us__text__container">
        <h4 class="section__header__text text--margin text--grey">ABOUT US</h4>
        <h1 class="section__title__text text--margin text--dark">
        Discover Our Underground.
        </h1>
        <p class="text text--margin text--grey">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.
        </p>
        <a href = '/rooms'><button class="button button--golden">
            <span class="button__text">BOOK NOW</span>
        </button></a>
        </div>
        
        
        <div class="home__cards">
        <div class="home__card first__home__card">
            <div class="home__card__img">
            <img
            src="https://images.unsplash.com/photo-1551731409-43eb3e517a1a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80"
            alt="Placeholder img"
            />
            </div>
            
            <div class="home__card__text first__home__card__text">
            <img
                class="home__card__icon"
                src="/assets/Cards/team-card-img.png"
                alt="Team Icon"
            />
            <img
                class="home__card__shadow__icon"
                src="/assets/Cards/team-card-img-shadow.png"
                alt="Team Icon Shadow"
            />
            <h3 class="card__text__title text--margin text--dark">Strong Team</h3>
            <p class="text text--dark home__card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor.
            </p>
            </div>
        </div>
        <div class="home__card second__home__card">
            <div class="home__card__img second__home__card__img">
            <img
            src="https://images.unsplash.com/photo-1444201983204-c43cbd584d93?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
            alt="Placeholder img"
            />
            </div>
            
            <div class="home__card__text home__card__text--dark">
            <img
                class="home__card__icon"
                src="/assets/Cards/calendar-img.png"
                alt="Calendar icon"
            />
            <h3 class="card__text__title text--margin text--white">
                Luxury Room
            </h3>
            <p class="text text--white home__card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor.
            </p>
            </div>
        </div>
        </div>
    </section>



    <section class="section home__rooms">
        <h4 class="section__header__text text--margin text--grey">ROOMS</h4>
        <h1 class="section__title__text text--margin text--dark">
        Hand Picked Rooms
        </h1>

        <div class="swiper home__rooms__card__slider__mobile">
        <div class="swiper-wrapper home__rooms__card__container">
            
            @foreach($rooms as $room)
                <div class="swiper-slide home__room__card">
                    <div class="room__card__img__container">
                        <a href = '/room/{{$room->id}}'><img
                        class="room__card__img"
                        src='{{$room->getPhotos()[0]}}'
                        alt="Room"
                        /></a>
                        <div class="rooms__icons home__rooms__icons">
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
                        <div class="home__room__card__text__container room__card__text home__room__card__text">
                        <div class="home__room__card__description__container">
                            <h3
                            class="text room__text card__text__title  text--margin text--dark"
                        >
                            {{$room->type}} {{$room->number}}
                        </h3>
                        <p class="text text--margin text--grey">
                            {{$room->description}}
                        </p>
                        </div>
                        
                        <div class="room__pricing__text__container">
                            <h4
                            class="home__room__text__price room__text__price--margin text--golden"
                            >
                            ${{$room->price}}/Night
                            </h4>
                            
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        </div>
    </section>

    <section id="video" class="section video-section">
        <div class="video-section__content__container">
        <div class="video-section__text__container">
            <h4 class="section__header__text text--margin text--golden">
            INTRO VIDEO
            </h4>
            <h1 class="section__title__text text--margin text--white">
            Meet With Our Luxury Place.
            </h1>
            <p class="text text--margin">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat you have to understand this.
            </p>
        </div>

        <div class="video__container">
            <video class="video" src="/assets/Videos/Miranda home page video (no audio).webm" autoplay loop muted></video>
        </div>

        <a href = '/rooms'><button class="button button--golden">
            <span class="button__text">BOOK NOW</span>
        </button></a>
        </div>
        <div class="golden__column"></div>
    </section>

    <section class="facilities">
        <h4 class="section__header__text text--margin text--grey">FACILITIES</h4>
        <h1 class="section__title__text text--margin text--dark">
        Core Features
        </h1>
        <div class="swiper facilities__slider__mobile">
        <div class="swiper-wrapper facilities__card__container">
            <div class="swiper-slide facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-01.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-01.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Have High Rating
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="swiper-slide facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-02.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-02.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Quiet Hours
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="swiper-slide facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-03.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-03.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Best Locations
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="swiper-slide facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-04.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-04.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Free Cancellation
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="swiper-slide facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-05.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-05.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Payment Options
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="swiper-slide facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-06.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-06.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Special Offers
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
        </div>
        <div class="swiper-pagination bolas"></div>
        </div>
        <div class="section facilities__slider">
        <div class="facilities__card__container">
            <div class="facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-01.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-01.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Have High Rating
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-02.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-02.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Quiet Hours
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-03.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-03.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Best Locations
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-04.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-04.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Free Cancellation
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-05.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-05.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Payment Options
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
            <div class="facilities__slider__card">
            <div class="facilities__slider__card__icons">
                <img
                class="facilities__slider__card__number"
                src="/assets/Cards/Facilities/facilities-number-06.png"
                alt="01"
                />
                <img
                class="facilities__slider__card__icon"
                src="/assets/Cards/Facilities/facilities-icon-06.png"
                alt="Icon 01"
                />
            </div>
            <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--dark">
                Special Offers
                </h3>
                <p class="text text--margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            </div>
        </div>
        <div class="swiper-pagination bolas"></div>
        </div>
    </section>

    <section class="section menu-section">
        <div class="menu__section__logo">
        <img src="/assets/Food-Menu/donut.png" alt="Donut" />
        </div>

        <h4 class="section__header__text text--margin text--grey">MENU</h4>
        <h1 class="section__title__text text--margin text--dark">
        Our Foods Menu
        </h1>
        <div class="swiper menu__section__slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="menu__section__card">
                <img
                class="menu__section__card__img"
                src="https://images.unsplash.com/photo-1606851094291-6efae152bb87?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                alt=""
                />
                <div class="menu__section__card__text">
                <h4 class="text menu__title__text text--margin text--dark">
                    Eggs & Bacon
                </h4>
                <p class="text menu__card__text text--dark">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                    do eiusmod tempor.
                </p>
                </div>
            </div>
            <div class="menu__section__card">
                <img
                class="menu__section__card__img"
                src="https://images.unsplash.com/photo-1492778297155-7be4c83960c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                alt=""
                />
                <div class="menu__section__card__text">
                <h4 class="text menu__title__text text--margin text--dark">
                    Tea or Coffee
                </h4>
                <p class="text menu__card__text text--dark">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                    do eiusmod tempor.
                </p>
                </div>
            </div>
            <div class="menu__section__card">
                <img
                class="menu__section__card__img"
                src="https://images.unsplash.com/photo-1610406765661-57646c40da59?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                alt=""
                />
                <div class="menu__section__card__text">
                <h4 class="text menu__title__text text--margin text--dark">
                    Chia Oatmeal
                </h4>
                <p class="text menu__card__text text--dark">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                    do eiusmod tempor.
                </p>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="menu__section__card">
                <img
                class="menu__section__card__img"
                src="https://images.unsplash.com/photo-1593450298063-4e08a162a437?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                alt=""
                />
                <div class="menu__section__card__text">
                <h4 class="text menu__title__text text--margin text--dark">
                    Fruit Parfait
                </h4>
                <p class="text menu__card__text text--dark">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                    do eiusmod tempor.
                </p>
                </div>
            </div>
            <div class="menu__section__card">
                <img
                class="menu__section__card__img"
                src="https://images.unsplash.com/photo-1645871306587-bebaa2f1dfc0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                alt=""
                />
                <div class="menu__section__card__text">
                <h4 class="text menu__title__text text--margin text--dark">
                    Marmalade Selection
                </h4>
                <p class="text menu__card__text text--dark">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                    do eiusmod tempor.
                </p>
                </div>
            </div>
            <div class="menu__section__card">
                <img
                class="menu__section__card__img"
                src="https://images.unsplash.com/photo-1625062798671-a2b45295b6e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                alt=""
                />
                <div class="menu__section__card__text">
                <h4 class="text menu__title__text text--margin text--dark">
                    Cheese Plate
                </h4>
                <p class="text menu__card__text text--dark">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                    do eiusmod tempor.
                </p>
                </div>
            </div>
            </div>
        </div>

        <div class="menu__section__slider__buttons">
            <div class="swiper-button menu-button swiper-button-prev"></div>
            <div class="swiper-button menu-button swiper-button-next"></div>
        </div>
        </div>
    </section>

    <section class="swiper carousel-images__mobile">
        <div class="swiper-wrapper carousel-images__container">
        <img
            class="swiper-slide carousel__img"
            src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
            alt=""
        />

        <img
            class="swiper-slide carousel__img"
            src="https://images.unsplash.com/photo-1598598795009-f80c5072e665?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
            alt=""
        />

        <img
            class="swiper-slide carousel__img"
            src="https://images.unsplash.com/photo-1501698335706-90b736210a61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
            alt=""
        />
        </div>
        <div class="swiper-pagination bolas"></div>
    </section>

    <section class="carousel-images">
        <div class="carousel-images__container__desktop">
        <img
            class="carousel__img"
            src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
            alt=""
        />

        <img
            class="carousel__img"
            src="https://images.unsplash.com/photo-1598598795009-f80c5072e665?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
            alt=""
        />

        <img
            class="carousel__img"
            src="https://images.unsplash.com/photo-1501698335706-90b736210a61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
            alt=""
        />
        </div>
    </section>

    <section class="achievements">
        <div class="achievement">
        <img
            class="achievement__icon"
            src="/assets/Achievements/rocket.png"
            alt=""
        />
        <h1 class="achievement__title__text text--white">84k+</h1>
        <p class="achievement__subtitle__text">Projects are Completed</p>
        </div>
        <div class="achievement">
        <img
            class="achievement__icon"
            src="/assets/Achievements/people.png"
            alt=""
        />
        <h1 class="achievement__title__text text--white">10M+</h1>
        <p class="achievement__subtitle__text">Active Backers Around World</p>
        </div>
        <div class="achievement">
        <img
            class="achievement__icon"
            src="/assets/Achievements/graph.png"
            alt=""
        />
        <h1 class="achievement__title__text text--white">02k+</h1>
        <p class="achievement__subtitle__text">Categories Served</p>
        </div>
        <div class="achievement">
        <img
            class="achievement__icon"
            src="/assets/Achievements/book.png"
            alt=""
        />
        <h1 class="achievement__title__text text--white">100M+</h1>
        <p class="achievement__subtitle__text">Idea Raised Funds</p>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/burgerMenu.js"></script>
    <script src="scripts/sliders.js"></script>
    <script src="scripts/cardSliders.js"></script>
@endsection