<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src="js/login.js"></script>


<div style=""width: 300px; margin: 30px auto">
    <div  id="entrando" align='right' class="msg Carregando">&nbsp;</div>
    <div  id='errologin' class='erro'>&nbsp;</div>
    <form name='acessar' id='acessar' action="javascript: login();" method="post">
        <input type="hidden" name="btnAcao" value='enviar' />
        <div id="loginBox">
            <br>
            <div class="login_telecontrol">
                <label for='login'>Login:</label>
                <input type="text" name='login' id='login' value="" tabindex='10'   placeholder='Login ou e-mail' />
            </div>
            <div class="senha_telecontrol">
                <label for='senha' >Senha:</label>
                <input type="password" name='senha' id='senha' value="" tabindex='11'   placeholder='Digite sua senha' />
            </div>
            <div class="btn_logar_telecontrol">
                <input type="submit" class="input_gravar" name="acessar"   id="btnAcao" value="Acessar" style="width: 70px;">
            </div>
            <div class='acessar_telecontrol' id='popover'>
                <a href="login_unico.php" target="_parent">Login &Uacute;nico</a>&nbsp;|&nbsp;<a href="primeiro_acesso.php" target="_parent">Primeiro Acesso</a>
                <br><a href="esqueci_senha.php" target="_parent">Esqueceu sua senha?</a>
            </div>
        </div>
    </form>
    <div style='clear: both;'>&nbsp;</div>
