<div class="row">

    <div class="span8 offset2">
        <h3 class="register">
            Welcome!  
        </h3>
        <h4 class="register">Create a new account to get started.</h4>
        <div class="hero-unit">
            <p>

            </p>
            <form action="<?=\Idno\Core\site()->config()->url?>account/register" method="post" class="form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="inputUsername">Your name<br />
                    <!--<small>The name other people will see.</small>-->
                    </label>
                    <div class="controls">
                        <input type="text" id="inputName" placeholder="Henri Mattise" class="span4" name="name" value="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputUsername">Your username<br />
                        <!--<small>A one-word name that will be part of your profile URL.</small>-->
                    </label>
                    <div class="controls">
                        <input type="text" id="inputUsername" placeholder="username" class="span4" name="handle" value="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Your email address</label>
                    <div class="controls">
                        <input type="email" id="inputEmail" placeholder="you@email.com" class="span4" name="email" value="<?=htmlentities($vars['email'])?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Your password</label>
                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="secret-password" class="span4" name="password" >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Your password again</label>
                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="secret-password" class="span4" name="password2">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                        <input type="hidden" name="code" value="<?=htmlspecialchars($vars['code'])?>">
                    </div>
                </div>
                <?= \Idno\Core\site()->actions()->signForm('/account/register') ?>

            </form>
        </div>
    </div>

</div>