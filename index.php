<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <title>Login Facebook</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>Email ou Telefone</p>
                    <input type="email"/>
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password"/>
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar"/>
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    <section class="main">
    <div class="capa-transparente">
        <div class="center">
            <div class="img-pessoas">
                <img src="img/img1.png"/>
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>
                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->  

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->  

                    <div class="w100">
                        <input placeholder="Email" type="email">
                    </div><!--w100-->  

                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div><!--w100-->  

                    <div class="w100">
                        <h3>Data de Nascimento</h3>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select><!--nascimento-->
                        <select name="nascimento-mes" class="nascimento">
                            <option value="0">Junho</option>
                        </select><!--nascimento-->
                        <select name="nascimento-ano" class="nascimento">
                        <?php
                                for($i = 1960; $i <= 2022; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select><!--nascimento-->
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    </div><!--w100-->
                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastar!">
                    </div><!--w100-->  
                </form><!--criar-conta-->
            </div><!--abrir-conta-->
            <div class="clear"></div>
        </div><!--center-->
    </div>
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
        </div><!--center-->

        <div style="border:0;padding-top:10px" class="center">
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>

        </div><!--center-->
    </section><!--linguas-->

</body>
</html>
