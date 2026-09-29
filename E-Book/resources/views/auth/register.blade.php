<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Readsphere</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        :root {
            --bookim-navy: #08082D;
            --bookim-green: #7BB579;
            --bookim-green-dark: #68A768;
            --bookim-light-green: #EAF4E8;
            --bookim-bg: #F7F8F6;
            --bookim-gray: #737373;
            --bookim-border: #E1E4E1;
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


        /* =========================================
           MAIN
        ========================================= */

        .auth-wrapper {

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 35px 20px;

        }


        /* =========================================
           CARD
        ========================================= */

        .auth-card {

            width: 100%;

            max-width: 1050px;

            min-height: 650px;

            background: white;

            border-radius: 25px;

            overflow: hidden;

            display: flex;

            box-shadow:
                0 20px 50px rgba(8, 8, 45, 0.09);

        }


        /* =========================================
           LEFT SIDE
        ========================================= */

        .auth-left {

            width: 42%;

            background: var(--bookim-navy);

            color: white;

            padding: 55px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            position: relative;

            overflow: hidden;

        }


        .auth-left::before {

            content: "";

            position: absolute;

            width: 330px;

            height: 330px;

            border-radius: 50%;

            background: rgba(123, 181, 121, 0.10);

            right: -160px;

            bottom: -120px;

        }


        .auth-left::after {

            content: "";

            position: absolute;

            width: 140px;

            height: 140px;

            border-radius: 50%;

            background: rgba(123, 181, 121, 0.07);

            right: 40px;

            top: -60px;

        }


        /* =========================================
           LOGO
        ========================================= */

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


        /* =========================================
           LEFT TEXT
        ========================================= */

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

            color: rgba(255,255,255,0.72);

            font-size: 15px;

            line-height: 1.8;

            max-width: 350px;

            position: relative;

            z-index: 2;

        }


        /* =========================================
           FEATURES
        ========================================= */

        .features {

            margin-top: 30px;

            position: relative;

            z-index: 2;

        }


        .feature {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 15px;

            font-size: 14px;

            color: rgba(255,255,255,0.82);

        }


        .feature-icon {

            width: 25px;

            height: 25px;

            border-radius: 50%;

            background: rgba(123,181,121,0.17);

            color: var(--bookim-green);

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 700;

        }


        /* =========================================
           RIGHT SIDE
        ========================================= */

        .auth-right {

            width: 58%;

            padding: 55px 65px;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .form-content {

            width: 100%;

            max-width: 430px;

        }


        /* =========================================
           HEADING
        ========================================= */

        .form-title {

            margin-bottom: 28px;

        }


        .form-title h2 {

            font-family: "Poppins", sans-serif;

            font-size: 32px;

            font-weight: 700;

            color: var(--bookim-navy);

            margin-bottom: 7px;

        }


        .form-title p {

            color: var(--bookim-gray);

            font-size: 14px;

            margin: 0;

        }


        /* =========================================
           INPUT
        ========================================= */

        .form-label {

            font-size: 13px;

            font-weight: 600;

            color: var(--bookim-navy);

            margin-bottom: 7px;

        }


        .input-wrapper {

            position: relative;

            margin-bottom: 17px;

        }


        .input-wrapper svg {

            position: absolute;

            width: 19px;

            height: 19px;

            left: 16px;

            top: 50%;

            transform: translateY(-50%);

            fill: none;

            stroke: #929292;

            stroke-width: 1.8;

            stroke-linecap: round;

            stroke-linejoin: round;

            pointer-events: none;

        }


        .form-control {

            height: 51px;

            border-radius: 10px;

            border: 1px solid transparent;

            background: #F3F4F3;

            padding-left: 48px;

            font-size: 14px;

            color: var(--bookim-navy);

            transition: 0.2s;

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


        /* =========================================
           SELECT
        ========================================= */

        select.form-control {

            padding-left: 16px;

            cursor: pointer;

        }


        /* =========================================
           ERROR
        ========================================= */

        .error-message {

            font-size: 12px;

            color: #d9534f;

            margin-top: -10px;

            margin-bottom: 10px;

        }


        /* =========================================
           TERMS
        ========================================= */

        .terms {

            display: flex;

            align-items: center;

            gap: 8px;

            font-size: 12px;

            color: var(--bookim-gray);

            margin: 5px 0 20px;

        }


        .terms input {

            accent-color: var(--bookim-green);

        }


        .terms a {

            color: var(--bookim-green);

            font-weight: 600;

            text-decoration: none;

        }


        /* =========================================
           BUTTON
        ========================================= */

        .register-btn {

            width: 100%;

            height: 52px;

            border: none;

            border-radius: 28px;

            background: var(--bookim-green);

            color: white;

            font-size: 15px;

            font-weight: 700;

            transition: 0.2s;

            box-shadow: none;

        }


        .register-btn:hover {

            background: var(--bookim-green-dark);

            transform: translateY(-1px);

            box-shadow:
                0 8px 20px rgba(123,181,121,0.25);

        }


        /* =========================================
           LOGIN LINK
        ========================================= */

        .bottom-text {

            text-align: center;

            margin-top: 22px;

            font-size: 13px;

            color: var(--bookim-gray);

        }


        .bottom-text a {

            color: var(--bookim-green);

            font-weight: 700;

            text-decoration: none;

        }


        /* =========================================
           RESPONSIVE
        ========================================= */

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

        }

    </style>

</head>


<body>


<div class="auth-wrapper">


    <div class="auth-card">


        <!-- =========================================
             LEFT BRAND SECTION
        ========================================== -->

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
                Join <span>Readsphere</span>
            </h1>


            <p>

                Create your account and discover
                a world of books, stories and knowledge.

            </p>


            <div class="features">

                <div class="feature">

                    <span class="feature-icon">
                        ✓
                    </span>

                    Discover amazing books

                </div>


                <div class="feature">

                    <span class="feature-icon">
                        ✓
                    </span>

                    Build your personal collection

                </div>


                <div class="feature">

                    <span class="feature-icon">
                        ✓
                    </span>

                    Share and explore new stories

                </div>

            </div>


        </div>



        <!-- =========================================
             RIGHT REGISTER FORM
        ========================================== -->

        <div class="auth-right">


            <div class="form-content">


                <div class="form-title">

                    <h2>
                        Create Account
                    </h2>

                    <p>
                        Register to start your Readsphere journey.
                    </p>

                </div>


                <!-- IMPORTANT:
                     ROUTE NAME UNCHANGED
                -->

                <form
                    action="{{route('userregister')}}"
                    method="post"
                >

                    @csrf


                    <!-- NAME -->

                    <label class="form-label">
                        Full Name
                    </label>

                    <div class="input-wrapper">

                        <svg viewBox="0 0 24 24">

                            <circle cx="12" cy="8" r="4"/>

                            <path d="M4 21
                                     c0-4
                                     4-6
                                     8-6
                                     s8 2
                                     8 6"/>

                        </svg>


                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            placeholder="Enter your name"
                            value="{{old('username')}}"
                            required
                        >

                    </div>


                    @error('username')

                        <p class="error-message">
                            {{$message}}
                        </p>

                    @enderror



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
                            type="email"
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
                            placeholder="Create a password"
                            required
                        >

                    </div>


                    @error('userpass')

                        <p class="error-message">
                            {{$message}}
                        </p>

                    @enderror



                    <!-- ROLE -->

                    <label class="form-label">
                        Account Type
                    </label>

                    <div class="input-wrapper">

                        <select
                            name="role"
                            class="form-control"
                            required
                        >

                            <option value="">
                                Select account type
                            </option>

                            <option value="user">
                                User
                            </option>

                            <option value="author">
                                Author
                            </option>

                        </select>

                    </div>



                    <!-- TERMS -->

                    <label class="terms">

                        <input
                            type="checkbox"
                            required
                        >

                        <span>
                            I agree to the
                            <a href="#">
                                Terms & Conditions
                            </a>
                        </span>

                    </label>



                    <!-- REGISTER -->

                    <button
                        type="submit"
                        class="register-btn"
                    >

                        Create Account

                    </button>


                </form>


                <!-- LOGIN -->

                <div class="bottom-text">

                    Already have an account?

                    <a href="{{route('login')}}">
                        Login
                    </a>

                </div>


            </div>

        </div>

    </div>

</div>


</body>

</html>