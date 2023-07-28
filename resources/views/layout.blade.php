<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="/styles/style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
   </head>

   <body>
        <header class="header">
        <div class="header__background">
        </div>
        <div class="header__content">
            <div class="left__header__content">
            <button class="button burger__button__closed"></button>
            <div class="logo logo__header">
                <a href="/home">
                    <div class="logo__image__rectangle logo__background--white">
                        <h2 class="logo__image__H">H</h2>
                    </div>
                </a>
                <div class="logo__text__container">
                    <h3 class="logo__text logo__text--bold">HOTEL</h3>
                    <h3 class="logo__text">MIRANDA</h3>
                </div>
            </div>
            <ul class="header__menu__closed">
                <a href="/about"><li class="menu__item">About Us</li></a>
                <a href="/rooms"><li class="menu__item">Rooms</li></a>
                <a href="/offers"><li class="menu__item">Offers</li></a>
                <a href="/contact"><li class="menu__item">Contact</li></a>
            </ul>
            </div>
            
            <div class="header__icons">
            <a href="/login"><button class="button profile__button">
                <img src="/assets/Header/Mobile/profile.png" alt="Profile Icon" />
            </button></a>
            <!-- <button class="button search__button">
                <img src="/assets/Header/Mobile/search.png" alt="Search Icon" />
            </button> -->
            </div>
            
        </div>
        </header>
        @yield('content')
        <div class="footer">
        <div>
            <div class="logo logo__footer">
                
                <div class="logo__image__rectangle logo__background--golden">
                    <h2 class="logo__image__H footer__logo__icon__text text--white">H</h2>
                </div>
                
                <div class="logo__text__container">
                    <h3 class="logo__text footer__logo__text logo__text--bold">HOTEL</h3>
                    <h3 class="logo__text footer__logo__text">MIRANDA</h3>
                    </div>
            </div>
            <p class="text text--margin">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
            <div class="social__media__icons">
                <div class="social__media__icon__container">
                    <img class="social__media__icon" src="/assets/Footer/Social Media/facebook.svg" alt="Facebook"/>
                </div>
                <div class="social__media__icon__container">
                    <img class="social__media__icon" src="/assets/Footer/Social Media/twitter.svg" alt="Twitter"/>
                </div>
                <div class="social__media__icon__container">
                    <img class="social__media__icon" src="/assets/Footer/Social Media/be.svg" alt="Bé"/>
                </div>
                <div class="social__media__icon__container">
                    <img class="social__media__icon" src="/assets/Footer/Social Media/linkedin.svg" alt="LinkedIn"/>
                </div>
                <div class="social__media__icon__container">
                    <img class="social__media__icon" src="/assets/Footer/Social Media/yt.svg" alt="Youtube"/>
                </div>
            </div>
        </div>
        <div>
            <h4 class="section__title__text text--margin title__text--petit">Services.</h4>
        <div class="footer__services">
            
            <p class="text text--margin">+ Resturent & Bar</p>
            <p class="text text--margin">+ Gaming Zone</p>
            <p class="text text--margin">+ Swimming Pool</p>
            <p class="text text--margin">+ Marrige Party</p>
            <p class="text text--margin">+ Wellness & Spa</p>
            <p class="text text--margin">+ Party Planning</p>
            <p class="text text--margin">+ Restaurant</p>
            <p class="text text--margin">+ Tour Consultancy</p>
            <p class="text text--margin">+ Conference Room</p>
            <p class="text text--margin">+ Coctail Party House</p>
        </div>
        </div>
        <div>
            <h4 class="section__title__text text--margin title__text--petit">Contact Us.</h4>
        <div class="footer__contact__cards">
            <div class="contact__card">
                <img class="contact__card__img" src="/assets/Footer/phone.png" alt=""/>
                <div class="contact__card__text">
                    <h4 class="section__title__text contact__title__text ">Phone Number</h4>
                    <p class="text contact__subtitle__text">+34 622 523 493</p>
                </div>
                
            </div>
            <div class="contact__card">
                <img class="contact__card__img" src="/assets/Footer/mail.png" alt=""/>
                <div class="contact__card__text">
                    <h4 class="section__title__text contact__title__text ">Mail</h4>
                    <p class="text contact__subtitle__text">cesarfercerezuela@gmail.com</p>
                </div>
            </div>
            <div class="contact__card">
                <img class="contact__card__img" src="/assets/Footer/location.png" alt=""/>
                <div class="contact__card__text">
                    <h4 class="section__title__text contact__title__text">Location</h4>
                    <p class="text contact__subtitle__text">OXYGEN Workspace | Calle Princesa 31, planta 2 28008 Madrid</p>
                </div>
                
            </div>
        </div>
        </div>
        
        </div>
        <footer class="footer__ending__container">
            <div class="footer__ending">
                <h4 class="footer__ending__text">Copyright By@Jekk0 2023</h4>
                <h4 class="footer__ending__text">Terms of use | Privacy Environmental Policy</h4>
            </div>
        </footer>
        @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{$message}}",
                confirmButtonColor: '#BDAC8D'
                })
        </script>
        @endif
        @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Thank you!',
                    text: "{{$message}}",
                    confirmButtonColor: '#BDAC8D'
                    })
            </script>
        @endif
            <script src="scripts/header.js"></script>
            @yield('scripts')
   </body>
</html>