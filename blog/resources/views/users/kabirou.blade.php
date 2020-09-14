@extends('personne.layout')
@section('content')

    <div id="formgeneric" class="Card frame">
        <form id="login_form" class="Form FormCompteLogin" action="/cgi-bin/compte-login" autocomplete="off" method="post" onsubmit="return validate_form('login_form');">
            <div class="FormCompteLogin__content">
                <p class="fs-16 show-mobile-m">Vous avez déjà un compte ?</p>
                <p class="FormCompteLogin__title">Connectez-vous</p>
                <input id="old_user" type="hidden" name="user_type" value="old">
                <input id="back" type="hidden" name="back" value="">
                <input id="ret" type="hidden" name="ret" value="">
                <!-- Email -->
                <div class="Form__box mt-15 wd-100">
                    <input id="email" name="email" type="hidden" value="" data-form="login_form">
                    <input id="login_email" class="Form__input input-placeholder wd-100" name="email_front" tabindex="3" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" value="" placeholder="Email" onblur="mail_display_error('login_email');" onkeyup="keyup_email('login_email');" data-form="login_form">
                    <label class="Form__label" for="email_front">Email</label>
                    <p id="login_email_error" class="Form__result"><i class="i-notification"></i><span id="login_email_error_msg"></span></p>
                </div>
                <!-- Mot de passe -->
                <div class="Form__box wd-100">
                    <input id="password" name="password" type="hidden" value="" data-form="login_form">
                    <input id="login_password" class="Form__input input-placeholder wd-100" name="password_front" tabindex="4" type="password" autocomplete="off" value="" placeholder="Mot de passe" onblur="verif_empty_input('login_password');" onkeyup="keyup_input('login_password');" data-form="login_form">
                    <label class="Form__label" for="password_front">Mot de passe</label>
                    <p id="login_password_error" class="Form__result"><i class="i-notification"></i><span id="login_password_error_msg"></span></p>
                </div>
                <a class="LinkLevelFour float-left" onclick="open_popup('password_resend');" href="javascript:void(0)">Mot de passe oublié ?</a>
                <p class="wd-100 txt-right">
                    <button id="login_submit" class="Button levelOne" type="submit" form="login_form" value="submit">Connexion</button>
                </p>
            </div>
        </form>
        <script type="text/javascript">keypress_enter("login_form")</script>
    </div>
@endsection
