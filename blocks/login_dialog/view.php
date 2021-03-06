<?php 
defined('C5_EXECUTE') or die("Access Denied."); 

    if ( !$user->isLoggedIn())
    {
        ?>  
        <div class="title-caps">
            <p><a style="cursor:pointer" class="open-login-dialog-button" id="<?php echo $bID?>_login_button"><b><?php echo t('Login') ?></b></a></p>

            <?php if( in_array( Config::get( 'concrete.user.registration.type' ), array( 'validate_email', 'enabled', 'manual_approve' ) ) ) 
            { ?>
                <p><a href="/index.php/register"><?php echo t('Register')?></a></p>
            <?php } ?>

        </div>
        <div class="login" id="<?php echo $bID?>_login">
            <h1><?php echo t( $DialogTitle ) ?></h1>
            <form method="post" action="<?php echo $loginAction; ?>">
                <p>
                    <input type="text" name="uName" value="" placeholder="<?php echo Config::get('concrete.user.registration.email_registration') ? t('Email Address') : t('Username')?>">
                </p>

                <p>        
                    <input name="uPassword" value="" type="password" placeholder="<?php echo t('Password')?>">
                </p>

                <p class="remember_me">
                    <input type="checkbox" name="uMaintainLogin" value="1" id="remember_me">
                    <label for="remember_me">                    
                        <?php echo t('Stay signed in for two weeks') ?>
                    </label>                    
                </p>
                <div style="clear:both"></div>

                <div class="form-group">
                    <button class="btn btn-primary" style="width: 100%"><?php echo t( $LoginButtonText ) ?></button>
                    <div><a href="<?php echo View::url('/login', 'concrete', 'forgot_password')?>" class="btn pull-right"><?php echo t('Forgot Password') ?></a></div>
                </div>

                <?php Loader::helper('validation/token')->output('login_concrete'); ?>
               
            </form>

            <?php
            
            if( in_array( Config::get( 'concrete.user.registration.type' ), array( 'validate_email', 'enabled', 'manual_approve' ) ) )
            {?> 
                <br />
                <hr />             
                <a href="/index.php/register" class="btn btn-block btn-success"><?php echo t( $RegisterButtonText ) ?></a>
            <?php } ?>             
            
        </div>

    


    <script>
    $('#<?php echo $bID?>_login_button').click(function() {
            $("#<?php echo $bID?>_login").dialog("open");
        }); 
        
    $('document').ready(function() {
        $("#<?php echo $bID?>_login").dialog(
        {
          autoOpen: false,          
          resizable: false,           
          modal: true,
          show: { effect: "fade" },

          open: function ( event, ui ) 
            {
                $('#<?php echo $bID?>_login').css('overflow', 'hidden'); 
            }           
        });    
    })
    </script>


    <?php }
    if ( $user->isLoggedIn() )
    {?> 
        <div class="title-caps">
	        <div><?php echo t("Welcome:")?></div>
	        <div><a href="/index.php/account"><?php echo $user->getUserName() ?></a></div>
	        <div>
	            <a href="<?php echo URL::to('/login', 'logout', Loader::helper('validation/token')->generate('logout'))?>"><?php echo t('Sign Out')?></a>
	        </div>
        </div>

    <?php } ?>
    