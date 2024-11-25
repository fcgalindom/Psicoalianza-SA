<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-0">

      <div class="row">

        
        <div class="col-md-8 p-0 d-none d-md-block">
            <img src="{{ asset('images/fondo2.png') }}" alt="Login Image" class="img-fluid" style="height: 100vh; object-fit: cover;">
        </div>
    
        <!-- Formulario de login, visible en todo momento -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center" style="height: 100vh;">
            <form >

                @csrf
                <div class="text-center  " style="margin-bottom: 6rem">
                    @include('icons.logologin')
                </div>
                <div class="form-group mt-5">
                    <label for="email">Usuario</label>
                    <input type="email" class="form-control" style="border-radius: 1rem" id="email" name="email" placeholder="Enter your user" required>
                </div>
                <div class="form-group mt-4">
                    <label for="password">Contraseña</label>
                    <div class="input-wrapper" style="position: relative; width: 330px;">
                        <input type="text" class="form-control" placeholder="Escribe aquí" style="border-radius: 1rem" type="password" id="password" >
                        <button type="button" class="btn " onclick="togglePassword()" style="position: absolute; left: 280px; top: 50%; transform: translateY(-50%); color: #aaa;">
                          @include('icons.eye')
                       </button>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-center mt-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Recordar cuenta</label>
                    </div>
                </div>
    
                <button type="submit" onclick="window.location.href='{{ route('home') }}'" class="btn btn-primary w-100 mt-4" style="background-color: rgb(76, 43, 226) ; border-radius: 1rem  ">Inciar Sesion</button>
                <div class="form-group d-flex justify-content-between mt-3">
                    <a  class="text-muted" style="color: #989898; font-size: 14px;">¿Olvidaste tu usuario?</a>
                    <a  class="text-muted" style="color: #989898; font-size: 14px;">¿Olvidaste tu contraseña?</a>
                </div>

            </form>
        </div>
     </div>
    </div>
</html>

<script>
    function togglePassword() {
        const passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
