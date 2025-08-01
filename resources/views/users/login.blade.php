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
</head>

<body>
    <div id="background">
        <div id="logo"><img src="{{asset("images/1.svg")}}" alt=""></div>
        <form action="{{route("auth.login")}}" method="post">
            @csrf
            <div>
                <h1>Welcome again !</h1>
                <h2>Sign in to get started</h2>
            </div>
            <div class="input_module">
                <label for="email">
                    <i class="fa-solid fa-user"></i>
                </label>
                <input type="email" id="email" name="email" placeholder="Your email">
            </div>
            <div class="input_module">
                <label for="password">
                    <i class="fa-solid fa-lock"></i>
                </label>
                <input type="password" id="password" name="password" placeholder="Your password">
                <label for="password" id="password_button">
                    <i class="fa-solid fa-eye-slash"></i>
                </label>
            </div>
            <div id="login_options">
                <div class="option">
                    <div class="checkbox">
                        <input type="hidden" name="remember">
                        <div class="box">
                            <div class="box_item"></div>
                        </div>
                        <p>Remember me</p>
                    </div>
                </div>
                <div class="option">
                    <a href="">Forgot my password</a>
                </div>
            </div>
            <button type="submit" class="form_button">Enter</button>
            <div class="section">
                <div class="section_side"></div>
                <div class="section_center">Or</div>
                <div class="section_side"></div>
            </div>
            <a href="{{route("logon")}}" class="form_button">Create a account</a>
        </form>
        <footer>
            <p>© 2021-2025 blog.com, Inc. ou suas afiliadas</p>
        </footer>
    </div>
    @vite(["resources/js/form.js"])
</body>

</html>