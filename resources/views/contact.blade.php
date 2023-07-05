@extends('layout')
@section('title')
Contact
@endsection
@section('content')
    <section class="section sub-header sub-header__return contact__background">
        <h4 class="section__header__text sub-header__header text--white">THE ULTIMATE LUXURY</h4>
        <h1 class="section__title__text sub-header__title text--white">New Details</h1>
        <div class="return__home__container">
            <div class="return__home__buttons">
              <a href="/home"><h4 class="return__home__button"><span class="return__button__text text--dark">Home</span></h4></a>
                <h4><strong>|</strong></h4>
                <h4 class="return__home__button"><span class="return__button__text text--golden">Blog</span></h4>
            </div>
        </div>
    </section>

    <section class="contact__cards__section">
        <div class="contact__card contact__section__card">
            <img class="contact__card__img" src="/assets/Footer/mail.png" alt=""/>
            <div class="contact__card__text">
                <h4 class="section__title__text contact__title__text text--margin">Mail</h4>
                <p class="text">cesarfercerezuela@gmail.com</p>
                <p class="text">jekkproducer@gmail.com</p>
            </div>
            <div class="contact__card__background__img">
                <img src="/assets/Cards/contact-cards/background-01.png" alt="01"/>
            </div>
        </div>
        <div class="contact__card contact__section__card">
            <img class="contact__card__img" src="/assets/Footer/phone.png" alt=""/>
            <div class="contact__card__text">
                <h4 class="section__title__text contact__title__text text--margin">Phone Number</h4>
                <p class="text">622523493</p>
            </div>
            <div class="contact__card__background__img">
                <img src="/assets/Cards/contact-cards/background-02.png" alt="02"/>
            </div>
        </div>
        <div class="contact__card contact__section__card">
            <img class="contact__card__img" src="/assets/Footer/location.png" alt=""/>
            <div class="contact__card__text">
                <h4 class="section__title__text contact__title__text text--margin">Location</h4>
                <p class="text">OXYGEN Workspace | Calle Princesa 31, planta 2 28008 Madrid</p>
            </div>
            <div class="contact__card__background__img">
                <img src="/assets/Cards/contact-cards/background-03.png" alt="03"/>
            </div>
        </div>
        
    </section>
    <div class="contact__map">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.454649340065!2d-5.910605210702898!3d35.71503555741768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b89e2f365159d%3A0xa7d8fe9905943e8b!2sH%C3%B4tel%20Miranda!5e0!3m2!1ses!2ses!4v1684133844947!5m2!1ses!2ses" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <section class="section contact__form__section">
        <form action="{{url('/contact')}}" method="POST" class="contact__form">
            @csrf
            <div class="contact__form__first__column">
                <div class="contact__input__container">
                    <img src="/assets/Input/name-icon.png" alt="">
                    <input type="text" name="name" class="room-detail__input__field room-detail__input__text input__field--bright text--grey " placeholder="Your full name" required/>
                </div>
                <div class="contact__input__container">
                    <img src="/assets/Input/phone-contact.png" alt="">
                    <input type="text" name="contact" class="room-detail__input__field room-detail__input__text input__field--bright text--grey " placeholder="Add phone number" required/>
                </div>
            </div>
            <div class="contact__form__second__column">
                <div class="contact__input__container">
                    <img src="/assets/Input/mail-contact.png" alt="">
                    <input type="email" name="email" class="room-detail__input__field room-detail__input__text input__field--bright text--grey " placeholder="Enter email address" required/>
                </div>
                <div class="contact__input__container">
                    <img src="/assets/Input/agenda.png" alt="">
                    <input type="text" name="title" class="room-detail__input__field room-detail__input__text input__field--bright text--grey " placeholder="Enter subject" required/>
                </div>
            </div>
            <div class="contact__form__third__column">
                <div class="contact__input__container">
                    <img src="/assets/Input/pencil.png" alt="">
                    <textarea name="content" class="room-detail__input__field room-detail__input__text input__field--bright text--grey " placeholder="Tell us what you need" rows="20" required></textarea>
                </div>
    
                <div class="contact__form__button__container">
                    <button type="submit" class="button button--golden"><span class="button__text">SEND</span></button>
                </div>
            </div>
            
            
            
            
        </form>
    </section>
    
@endsection
@section('scripts')
    <script src="scripts/burgerMenu.js"></script>
@endsection