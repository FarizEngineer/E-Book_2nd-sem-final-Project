<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Readsphere</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        :root {

            --bookim-navy: #08082D;

            --bookim-green: #7BB579;

            --bookim-green-dark: #68A768;

            --bookim-bg: #F7F8F6;

            --bookim-gray: #737373;

        }


        * {
            box-sizing: border-box;
        }


        body {

            margin: 0;

            min-height: 100vh;

            background: var(--bookim-bg);

            font-family: "Inter", sans-serif;

            color: var(--bookim-navy);

        }


        .auth-wrapper {

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 35px 20px;

        }


        .auth-card {

            width: 100%;

            max-width: 1050px;

            min-height: 600px;

            background: white;

            border-radius: 25px;

            overflow: hidden;

            display: flex;

            box-shadow:
                0 20px 50px rgba(8,8,45,0.09);

        }


        /* ======================================
           LEFT
        ====================================== */

        .auth-left {

            width: 42%;

            background: var(--bookim-navy);

            color: white;

            padding: 60px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            position: relative;

            overflow: hidden;

        }


        .auth-left::before {

            content: "";

            position: absolute;

            width: 350px;

            height: 350px;

            border-radius: 50%;

            background: rgba(123,181,121,0.10);

            right: -170px;

            bottom: -130px;

        }


        .auth-left::after {

            content: "";

            position: absolute;

            width: 150px;

            height: 150px;

            border-radius: 50%;

            background: rgba(123,181,121,0.07);

            right: 30px;

            top: -70px;

        }


        .book-logo {

            width: 72px;

            height: 72px;

            border-radius: 18px;

            background: var(--bookim-green);

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 30px;

            position: relative;

            z-index: 2;

        }


        .book-logo svg {

            width: 45px;

            height: 45px;

            fill: white;

        }


        .auth-left h1 {

            font-family: "Poppins", sans-serif;

            font-size: 38px;

            font-weight: 700;

            margin-bottom: 18px;

            position: relative;

            z-index: 2;

        }


        .auth-left h1 span {

            color: var(--bookim-green);

        }


        .auth-left p {

            max-width: 350px;

            color: rgba(255,255,255,0.72);

            font-size: 15px;

            line-height: 1.8;

            position: relative;

            z-index: 2;

        }


        .quote {

            margin-top: 35px;

            padding-left: 18px;

            border-left: 3px solid var(--bookim-green);

            color: rgba(255,255,255,0.72);

            font-size: 13px;

            line-height: 1.7;

            position: relative;

            z-index: 2;

        }


        /* ======================================
           RIGHT
        ====================================== */

        .auth-right {

            width: 58%;

            padding: 60px 70px;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .form-content {

            width: 100%;

            max-width: 420px;

        }


        .form-title {

            margin-bottom: 32px;

        }


        .form-title h2 {

            font-family: "Poppins", sans-serif;

            font-size: 33px;

            font-weight: 700;

            margin-bottom: 8px;

        }


        .form-title p {

            margin: 0;

            font-size: 14px;

            color: var(--bookim-gray);

        }


        /* ======================================
           INPUTS
        ====================================== */

        .form-label {

            display: block;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 7px;

        }


        .input-wrapper {

            position: relative;

            margin-bottom: 20px;

        }


        .input-wrapper svg {

            position: absolute;

            left: 16px;

            top: 50%;

            transform: translateY(-50%);

            width: 19px;

            height: 19px;

            fill: none;

            stroke: #929292;

            stroke-width: 1.8;

            stroke-linecap: round;

            stroke-linejoin: round;

            pointer-events: none;

        }


        .form-control {

            height: 53px;

            border-radius: 10px;

            border: 1px solid transparent;

            background: #F3F4F3;

            padding-left: 48px;

            font-size: 14px;

        }


        .form-control:focus {

            background: white;

            border-color: var(--bookim-green);

            box-shadow:
                0 0 0 3px rgba(123,181,121,0.12);

        }


        .form-control::placeholder {

            color: #A2A2A2;

        }


        /* ======================================
           OPTIONS
        ====================================== */

        .options {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-top: -4px;

            margin-bottom: 25px;

        }


        .remember {

            display: flex;

            align-items: center;

            gap: 7px;

            font-size: 12px;

            color: var(--bookim-gray);

        }


        .remember input {

            accent-color: var(--bookim-green);

        }


        .forgot {

            color: var(--bookim-green);

            font-size: 12px;

            font-weight: 600;

            text-decoration: none;

        }


        .forgot:hover {

            color: var(--bookim-green-dark);

        }


        /* ======================================
           LOGIN BUTTON
        ====================================== */

        .login-btn {

            width: 100%;

            height: 53px;

            border: none;

            border-radius: 28px;

            background: var(--bookim-green);

            color: white;

            font-size: 15px;

            font-weight: 700;

            transition: 0.2s;

        }


        .login-btn:hover {

            background: var(--bookim-green-dark);

            transform: translateY(-1px);

            box-shadow:
                0 8px 20px rgba(123,181,121,0.25);

        }


        /* ======================================
           ERROR
        ====================================== */

        .error-message {

            color: #d9534f;

            font-size: 12px;

            margin-top: -12px;

            margin-bottom: 12px;

        }


        /* ======================================
           BOTTOM
        ====================================== */

        .bottom-text {

            text-align: center;

            margin-top: 25px;

            font-size: 13px;

            color: var(--bookim-gray);

        }


        .bottom-text a {

            color: var(--bookim-green);

            font-weight: 700;

            text-decoration: none;

        }


        /* ======================================
           RESPONSIVE
        ====================================== */

        @media (max-width: 850px) {

            .auth-card {

                max-width: 550px;

            }

            .auth-left {

                display: none;

            }

            .auth-right {

                width: 100%;

                padding: 50px 45px;

            }

        }


        @media (max-width: 500px) {

            .auth-wrapper {

                padding: 15px;

            }

            .auth-card {

                border-radius: 18px;

            }

            .auth-right {

                padding: 35px 22px;

            }

            .form-title h2 {

                font-size: 28px;

            }

            .options {

                align-items: flex-start;

                gap: 10px;

            }

        }

    </style>

</head>


<body>


<div class="auth-wrapper">


    <div class="auth-card">


        <!-- =====================================
             LEFT Readsphere SECTION
        ====================================== -->

        <div class="auth-left">


            <div class="book-logo">

                <svg viewBox="0 0 64 64">

                    <rect x="9" y="10"
                          width="15"
                          height="45"
                          rx="2"/>

                    <rect x="26" y="7"
                          width="15"
                          height="48"
                          rx="2"/>

                    <rect x="43" y="13"
                          width="11"
                          height="42"
                          rx="2"/>

                </svg>

            </div>


            <h1>
                Welcome to <span>Readsphere</span>
            </h1>


            <p>

                Your gateway to stories, knowledge
                and endless reading possibilities.

            </p>


            <div class="quote">

                "A reader lives a thousand lives
                before he dies."

            </div>


        </div>



        <!-- =====================================
             RIGHT LOGIN
        ====================================== -->

        <div class="auth-right">


            <div class="form-content">


                <div class="form-title">

                    <h2>
                        Welcome Back
                    </h2>

                    <p>
                        Login to continue your Readsphere journey.
                    </p>

                </div>


                <!-- IMPORTANT:
                     ROUTE NAME UNCHANGED
                -->

                <form
                    action="{{route('login')}}"
                    method="post"
                >

                    @csrf


                    <!-- EMAIL -->

                    <label class="form-label">
                        Email Address
                    </label>


                    <div class="input-wrapper">

                        <svg viewBox="0 0 24 24">

                            <rect x="3"
                                  y="5"
                                  width="18"
                                  height="14"
                                  rx="2"/>

                            <polyline points="3,7 12,13 21,7"/>

                        </svg>


                        <input
                            type="text"
                            name="usermail"
                            class="form-control"
                            placeholder="Enter your email"
                            value="{{old('usermail')}}"
                            required
                        >

                    </div>


                    @error('usermail')

                        <p class="error-message">
                            {{$message}}
                        </p>

                    @enderror



                    <!-- PASSWORD -->

                    <label class="form-label">
                        Password
                    </label>


                    <div class="input-wrapper">

                        <svg viewBox="0 0 24 24">

                            <rect x="4"
                                  y="10"
                                  width="16"
                                  height="10"
                                  rx="2"/>

                            <path d="M8 10V7
                                     a4 4 0 0 1 8 0v3"/>

                        </svg>


                        <input
                            type="password"
                            name="userpass"
                            class="form-control"
                            placeholder="Enter your password"
                            required
                        >

                    </div>


                    @error('userpass')

                        <p class="error-message">
                            {{$message}}
                        </p>

                    @enderror



                    <!-- OPTIONS -->

                    <div class="options">


                        <label class="remember">

                            <input
                                type="checkbox"
                                name="remember"
                            >

                            Remember me

                        </label>


                        <a href="#" class="forgot">
                            Forgot Password?
                        </a>


                    </div>



                    <!-- LOGIN -->

                    <button
                        type="submit"
                        class="login-btn"
                    >

                        Login

                    </button>


                </form>


                <!-- REGISTER -->

                <div class="bottom-text">

                    Don't have an account?

                    <a href="{{route('userregister')}}">
                        Create Account
                    </a>

                </div>


            </div>

        </div>

    </div>

</div>


</body>

</html>