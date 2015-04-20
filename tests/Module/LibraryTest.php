<?php
use \Login\PHPLogin;
class LibraryTest extends PHPUnit_Framework_TestCase
{
  public function testLibrary()
  {
    $example = new PHPLogin;

    $login = new Login\PHPLogin();
    
    $this->req('/views/_header.php');
    
    // show the registration form
    if (isset($_GET['register']) && ! $login->isRegistrationSuccessful() && 
       (ALLOW_USER_REGISTRATION || (ALLOW_ADMIN_TO_REGISTER_NEW_USER && $_SESSION['user_access_level'] == 255))) {
        $this->req('/views/register.php');
    
    // show the request-a-password-reset or type-your-new-password form
    } else if (isset($_GET['password_reset']) && ! $login->isPasswordResetSuccessful()) {
        if (isset($_REQUEST['user_name']) && isset($_REQUEST['verification_code']) && $login->isPasswordResetLinkValid()) {
            // reset link is correct: ask for the new password
            $this->req("/views/password_reset.php");
        } else {
            // no data from a password-reset-mail has been provided, 
            // we show the request-a-password-reset form
            $this->req('/views/password_reset_request.php');
        }
    
    // show the edit form to modify username, email or password
    } else if (isset($_GET['edit']) && $login->isUserLoggedIn()) {
        $this->req('/views/edit.php');
    
    // the user is logged in, we show informations about the current user
    } else if ($login->isUserLoggedIn()) {
        $this->req('/views/logged_in.php');
    
    // the user is not logged in, we show the login form
    } else {
        $this->req('/views/not_logged_in.php');
    }
    
    $this->req('/views/_footer.php');
  }
  private function req($s){
    $dir = 'vendor/austinkregel/php-login-advanced';

    include( $dir.$s);
  }
}
