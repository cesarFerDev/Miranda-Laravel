@extends('layout')
@section('title')
About Us
@endsection
@section('content')
    <section class="section sub-header sub-header__return about__background">
        <h4 class="section__header__text sub-header__header text--white">THE ULTIMATE LUXURY</h4>
        <h1 class="section__title__text sub-header__title text--white">About Us</h1>
        <div class="return__home__container">
            <div class="return__home__buttons">
                <a href="/home"><h4 class="return__home__button"><span class="return__button__text text--dark">Home</span></h4></a>
                <h4><strong>|</strong></h4>
                <h4 class="return__home__button"><span class="return__button__text text--golden">About</span></h4>
            </div>
        </div>
    </section>

    <section class="section about-section about-video">
        <div class="about-content__container">
            <video src="/assets/Videos/Miranda demo hotel.mp4" autoplay controls loop muted></video>
        </div>
        <h3 class="card__text__title about__video__title text--margin text--dark">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h3>
    </section>

    <section class="section about-section services-icons">
        <div class="service">
            <img src="/assets/About-Page/Services/coffee.svg" alt="Cup of coffee"/>
            <h4 class="service__text text--dark">BREAKFAST</h4>
        </div>
        <div class="service">
            <img class="svg__plane" src="/assets/About-Page/Services/plane.svg" alt="Cup of coffee"/>
            <h4 class="service__text text--dark">AIRPORT PICKUP</h4>
        </div>
        <div class="service">
            <img src="/assets/About-Page/Services/map.svg" alt="Cup of coffee"/>
            <h4 class="service__text text--dark">CITY GUIDE</h4>
        </div>
        <div class="service">
            <img src="/assets/About-Page/Services/bed.svg" alt="Cup of coffee"/>
            <h4 class="service__text text--dark">LUXURY ROOM</h4>
        </div>
    </section>

    <section class="restaurant about-section">
        <div class="about-content__container">
            <img src="https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""/>
        </div>
        <div class="restaurant__text__container">
            <h4 class="section__header__text text--margin text--grey">RESTAURANT</h4>
            <h3 class="card__text__title restaurant__text text--margin text--dark">Get Restaurant Facilities & Many Other More</h3>
            <p class="text text--margin text--grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="button button--golden"><span class="button__text">TAKE A TOUR</span></button>
        </div> 
    </section>

    <section class="facilities facilities--dark">
        <h4 class="section__header__text text--margin text--white">FACILITIES</h4>
        <h1 class="section__title__text text--margin text--white">Core Features</h1>
        <div class="swiper facilities__slider__mobile">
          <div class="swiper-wrapper facilities__card__container">
            <div class="swiper-slide facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-01-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-01.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Have High Rating
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-02-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-02.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Quiet Hours
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-03-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-03.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Best Locations
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-04-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-04.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Free Cancellation
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-05-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-05.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Payment Options
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-06-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-06.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Special Offers
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="section facilities__slider">
          <div class="facilities__card__container">
            <div class="facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-01-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-01.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Have High Rating
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-02-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-02.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Quiet Hours
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-03-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-03.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Best Locations
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-04-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-04.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Free Cancellation
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-05-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-05.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Payment Options
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="facilities__slider__card facilities__slider__card--dark">
              <div class="facilities__slider__card__icons">
                <img
                  class="facilities__slider__card__number"
                  src="/assets/Cards/Facilities/facilities-number-06-dark.png"
                  alt="01"
                />
                <img
                  class="facilities__slider__card__icon"
                  src="/assets/Cards/Facilities/facilities-icon-06.png"
                  alt="Icon 01"
                />
              </div>
              <div class="facilities__slider__card__text">
                <h3 class="card__text__title text--margin text--white">
                  Special Offers
                </h3>
                <p class="text text--white text--margin">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination bolas"></div>
        </div>
    </section>

    <section class="section about-section counter__section">
        <h4 class="section__header__text text--margin text--grey">COUNTER</h4>
        <h1 class="section__title__text text--margin text--dark">Some Fun Facts</h1>
        <div class="facts__container">
            <div class="fact">
                <div class="fact__content">
                    <img class="fact__icon" src="/assets/About-Page/Facts/happy.png" alt="Happy User"/>
                    <div class="fact__text__container">
                        <h1 class="section__title__text fact__text">8000</h1>
                        <p class="text fact__text">Happy Users</p>
                    </div>
                </div>
                <img src="/assets/About-Page/Facts/arrow-icon.png" alt="Arrow Icon"/>
            </div>
            <div class="fact">
                <div class="fact__content">
                    <img class="fact__icon" src="/assets/About-Page/Facts/thumb-up.png" alt="Thumb Up"/>
                    <div class="fact__text__container">
                        <h1 class="section__title__text fact__text">10M</h1>
                        <p class="text fact__text">Reviews & Appreciate</p>
                    </div>
                </div>
                <img src="/assets/About-Page/Facts/arrow-icon.png" alt="Arrow Icon"/>
            </div>
            <div class="fact">
                <div class="fact__content">
                    <img class="fact__icon" src="/assets/About-Page/Facts/world.png" alt="World"/>
                    <div class="fact__text__container">
                        <h1 class="section__title__text fact__text">100</h1>
                        <p class="text fact__text">Country Coverage</p>
                    </div>
                </div>
                <img src="/assets/About-Page/Facts/arrow-icon.png" alt="Arrow Icon"/>
            </div>
        </div>
    </section>

    <section class="swiper carousel-images__mobile">
      <div class="swiper-wrapper carousel-images__container">
        <img src="https://images.unsplash.com/photo-1455587734955-081b22074882?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Carousel Image"/>
        <img src="https://images.unsplash.com/photo-1445019980597-93fa8acb246c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1474&q=80" alt="Carousel Image"/>
      </div>
      <div class="swiper-pagination bolas"></div>
    </section>
    <section class="about-photos__slider__container">
      <img src="https://images.unsplash.com/photo-1455587734955-081b22074882?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Carousel Image"/>
      <img src="https://images.unsplash.com/photo-1445019980597-93fa8acb246c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1474&q=80" alt="Carousel Image"/>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/burgerMenu.js"></script>
    <script src="scripts/sliders.js"></script>
    <script src="scripts/cardSliders.js"></script>
@endsection