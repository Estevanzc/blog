<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{asset("images/icon2.svg")}}">
    <title>Unnity</title>
    @vite(["resources/css/login.css"])
    @vite(["resources/css/logon.css"])
</head>

<body>
    <div id="background">
        <div id="logo"><img src="{{asset("images/1.svg")}}" alt=""></div>
        <div id="logon_form">
            <form action="{{route("auth.logon")}}" method="post">
                @csrf
                <div>
                    <h1>Welcome !</h1>
                    <h2>Sign on for your first try</h2>
                </div>
                <div class="input_module">
                    <label for="name">
                        <i class="fa-solid fa-user"></i>
                    </label>
                    <input type="text" id="name" name="name" value="{{old("name")}}" placeholder="Your user name">
                </div>
                <div class="input_module">
                    <label for="email">
                        <i class="fa-solid fa-envelope"></i>
                    </label>
                    <input type="email" id="email" name="email" value="{{old("email")}}" placeholder="Your email">
                </div>
                <div class="input_module">
                    <label for="password">
                        <i class="fa-solid fa-lock"></i>
                    </label>
                    <input type="password" id="password" name="password" placeholder="Your password">
                    <label for="password" class="password_button">
                        <i class="fa-solid fa-eye-slash"></i>
                    </label>
                </div>
                <div class="input_module">
                    <label for="password_confirmation">
                        <i class="fa-solid fa-key"></i>
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm the password">
                    <label for="password_confirmation" class="password_button">
                        <i class="fa-solid fa-eye-slash"></i>
                    </label>
                </div>
                <div class="input_group">
                    <div class="input_module">
                        <label for="sex">
                            <i class="fa-solid fa-mars-and-venus"></i>
                        </label>
                        <select name="sex" value="{{old("sex")}}" id="sex">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2">Another</option>
                        </select>
                    </div>
                    <div class="input_module">
                        <label for="birth">
                            <i class="fa-solid fa-cake-candles"></i>
                        </label>
                        <input type="date" id="birth" name="birth" value="{{old("birth")}}">
                    </div>
                </div>
                <div id="login_options">
                    <div class="option">
                        <div class="checkbox">
                            <input type="hidden" name="remember" value="{{old("remember")}}">
                            <div class="box">
                                <div class="box_item"></div>
                            </div>
                            <p>Remember me</p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="form_button">Enter</button>
                <div class="section">
                    <div class="section_side"></div>
                    <div class="section_center">Or</div>
                    <div class="section_side"></div>
                </div>
                <a href="{{route("login")}}" class="form_button">Sign in</a>
            </form>
            <div id="profile">

            </div>
        </div>
        <footer>
            <p>© 2021-2025 blog.com, Inc. ou suas afiliadas</p>
        </footer>
    </div>
    @vite(["resources/js/form.js"])
</body>

</html>