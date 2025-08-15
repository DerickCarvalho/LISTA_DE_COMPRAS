<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaGo! - Login</title>

    <link rel="stylesheet" href="./assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <main class="d-flex justify-content-center align-items-center">
        <div class="text-center mb-3 d-none d-lg-block">
            <img class="logo" src="assets/media/logo_big_nobg.png" alt="">
        </div>

        <div class="login-card col-8 col-lg-6">
            <h4 class="m-0 text-center">Login</h4>
            <hr>
            <form>
                <div class="form-group">
                    <label for="login">Usuário ou E-mail</label>
                    <input type="text" class="form-control" name="login" id="login">
                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha">
                </div>

                <p style="margin-top: 20px;">Não possui conta? <a href="cadastro.php">Registrar-se</a></p>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Logar</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>