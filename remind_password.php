<?php
require_once("func.php");
if(isset($_COOKIE['user_session'])){
    header("Location: //localhost/pai_projekt/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
    build_head();
    ?>
</head>
<body>
<?php
build_header();
build_menu();
?>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="panel">
                <nav>
                    <ul>
                        <li class="home">
                            <a href="index.php" title="Strona główna"><img src="picture/icon/home.png"></a>
                        </li>
                        <li class="divider">
                            &gt;
                        </li>
                        <li class="panel_name">
                            <a href="remind_password.php">Przypomnij hasło</a>
                        </li>
                    </ul>
                    <div class="clear_div"></div>
                </nav>
            </div>
            <div class="page_name">
                <h1>Formularz przypomnienia hasła</h1>
            </div>
            <div class="pg_log_reg">
                <div class="pg_log_reg1">
                    <h2>Przypomnij hasło</h2>
                    <form>
                        <form>
                            <label class="form_log_reg">
                                Podaj login :
                                <br/>
                                <input type="text" name="login" class="input_form" placeholder="Wpisz login" autocomplete="off">
                            </label>
                            <label class="form_log_reg">
                                Podaj e-mail :
                                <br/>
                                <input type="email" name="email" class="input_form" placeholder="Wpisz e-mail" autocomplete="off">
                            </label>
                            <div class="clear_div"></div>
                            <label>
                                <input type="submit" class="button_log_reg" value="Wyślij" title="Wyślij">
                            </label>
                            <div class="clear_div"></div>
                        </form>
                    </form>
                </div>
                <div class="pg_log_reg2">
                    <h2>Nie masz konta?</h2>
                    <a href="registration.php">
                        <button class="button_log_reg" title="Zarejestruj się">
                            Zarejestruj się
                        </button>
                    </a>
                </div>
                <div class="clear_div"></div>
            </div>
        </div>
    </div>
</div>
<?php
build_footer();
?>
</body>
</html>