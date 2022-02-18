<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SHAYNA || LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="es" dir="ltr">

    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta charset="utf-8">
        {{-- <link rel="stylesheet" type="text/css" href="main.css"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
        <style>
            *,
            *::after,
            *::before {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                user-select: none;
            }

            /* Generic */
            body {
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 12px;
                background-color: #EDF2F0;
                color: #B4B4B4;
            }

            /**/
            .main {
                position: relative;
                width: 1000px;
                height: 600px;
                padding: 25px;
                background-color: #FDFDFD;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 0;
                width: 600px;
                height: 100%;
                padding: 25px;
                background-color: #FDFDFD;
                transition: 1.25s;
            }

            .form {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 100%;
                height: 100%;
            }

            .form__icon {
                object-fit: contain;
                width: 30px;
                margin: 0 5px;
                opacity: .5;
                transition: .15s;
            }

            .form__icon:hover {
                opacity: 1;
                transition: .15s;
                cursor: pointer;
            }

            .form__input {
                width: 350px;
                height: 40px;
                margin: 4px 0;
                padding-left: 25px;
                font-size: 13px;
                letter-spacing: .15px;
                border: none;
                outline: none;
                font-family: 'Montserrat', sans-serif;
                color: #B4B4B4;
                background-color: #F2F7F5;
            }

            .form__span {
                margin-top: 30px;
                margin-bottom: 12px;
            }

            .form__link {
                color: #2F2F2F;
                font-size: 15px;
                margin-top: 25px;
                border-bottom: 1px solid #B4B4B4;
                line-height: 2;
            }

            .title {
                font-size: 34px;
                font-weight: 700;
                line-height: 3;
                color: #34A89A;
            }

            .description {
                font-size: 14px;
                letter-spacing: .25px;
                text-align: center;
                line-height: 1.6;
            }

            .button {
                width: 200px;
                height: 55px;
                border-radius: 27.5px;
                margin-top: 50px;
                font-weight: 700;
                font-size: 14px;
                letter-spacing: 1.15px;
                background-color: #44b390;
                color: #FDFDFD;
                border: 2px solid #FDFDFD;
                outline: none;
            }

            /**/
            .a-container {
                z-index: 100;
                left: calc(100% - 600px);
            }

            .b-container {
                left: calc(100% - 600px);
                z-index: 0;
            }

            .switch {
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 400px;
                padding: 50px;
                z-index: 200;
                transition: 1.25s;
                background-image: linear-gradient(45deg, #44b390, #34A89A);
                overflow: hidden;
            }

            .switch__circle {
                position: absolute;
                width: 500px;
                height: 500px;
                border-radius: 50%;
                background-image: linear-gradient(-45deg, #3da181, #34A89A);
                bottom: -60%;
                left: -60%;
                transition: 1.25s;
            }

            .switch__circle--t {
                top: -30%;
                left: 60%;
                width: 300px;
                height: 300px;
            }

            .switch__container {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                position: absolute;
                width: 400px;
                padding: 50px 55px;
                transition: 1.25s;
            }

            .switch__title,
            .switch__description,
            .switch__button {
                color: #FDFDFD;
            }

            .switch__button {
                border: 2px solid #FDFDFD;
                cursor: pointer;
            }

            .switch__button:hover {
                transform: scale(1.015);
                transition: .15s;
            }

            .switch__button:active {
                transform: scale(0.9);
                transition: .15s;
            }

            /**/
            .is-txr {
                left: calc(100% - 400px);
                transition: 1.25s;
                transform-origin: left;
            }

            .is-txl {
                left: 0;
                transition: 1.25s;
                transform-origin: right;
            }

            .is-z200 {
                z-index: 200;
                transition: 1.25s;
            }

            .is-hidden {
                visibility: hidden;
                opacity: 0;
                position: absolute;
                transition: 1.25s;
            }

            .is-gx {
                animation: is-gx 1.25s;
            }

            @keyframes is-gx {

                0%,
                10%,
                100% {
                    width: 400px;
                }

                30%,
                50% {
                    width: 500px;
                }
            }

        </style>
    </head>

    <body>
        <div class="main">
            <div class="container b-container" id="b-container">
                <form class="form" id="b-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="form_title title">Login SHAYNA STORE</h2>
                    <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="form__input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- <button class="form__button button submit">SIGN IN</button> --}}
                    <button type="submit" class="form__button button">
                        {{ __('LOGIN') }}
                    </button>
                </form>
            </div>
            <div class="switch" id="switch-cnt">
                <div class="switch__circle"></div>
                <div class="switch__circle switch__circle--t"></div>
                <div class="switch__container" id="switch-c1">
                    <h2 class="switch__title title">Selamat Datang!</h2>
                    {{-- <p class="switch__description description">To keep connected with us please login with your personal
                        info</p> --}}
                </div>
                <div class="switch__container is-hidden" id="switch-c2">
                    <h2 class="switch__title title">Hello Friend !</h2>
                    <p class="switch__description description">Enter your personal details and start journey with us</p>
                    <button class="switch__button button switch-btn">SIGN UP</button>
                </div>
            </div>
        </div>
        <script>
            /*
                                                                                                                                                                                Designed by: SELECTO
                                                                                                                                                                                Original image: https://dribbble.com/shots/5311359-Diprella-Login
                                                                                                                                                                                */
            let switchCtn = document.querySelector("#switch-cnt");
            let switchC1 = document.querySelector("#switch-c1");
            let switchC2 = document.querySelector("#switch-c2");
            let switchCircle = document.querySelectorAll(".switch__circle");
            let switchBtn = document.querySelectorAll(".switch-btn");
            let aContainer = document.querySelector("#a-container");
            let bContainer = document.querySelector("#b-container");
            let allButtons = document.querySelectorAll(".submit");
            let getButtons = (e) => e.preventDefault()
            let changeForm = (e) => {
                switchCtn.classList.add("is-gx");
                setTimeout(function() {
                    switchCtn.classList.remove("is-gx");
                }, 1500)
                switchCtn.classList.toggle("is-txr");
                switchCircle[0].classList.toggle("is-txr");
                switchCircle[1].classList.toggle("is-txr");
                switchC1.classList.toggle("is-hidden");
                switchC2.classList.toggle("is-hidden");
                aContainer.classList.toggle("is-txl");
                bContainer.classList.toggle("is-txl");
                bContainer.classList.toggle("is-z200");
            }
            let mainF = (e) => {
                for (var i = 0; i < allButtons.length; i++)
                    allButtons[i].addEventListener("click", getButtons);
                for (var i = 0; i < switchBtn.length; i++)
                    switchBtn[i].addEventListener("click", changeForm)
            }
            window.addEventListener("load", mainF);
        </script>
    </body>

    </html>
    <!-- partial -->
</body>

</html>
