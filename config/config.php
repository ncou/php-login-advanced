<?php
return array(
/**
 * Configuration for: Database Connection
 * This is the place where your database login constants are saved
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 *          by the way, it's bad style to use "root", but for development it will work.
 * DB_PASS: the password of the above user
 */
  "DB_HOST" => "localhost",
  "DB_NAME" => "database", 
  "DB_USER" => "user",
  "DB_PASS" => "password",
  'SITE_URL'=> 'php-login.austinkregel.com',

/**
 * Configuration for: Cookies
 * Please note: The COOKIE_DOMAIN needs the domain where your app is,
 * in a format like this: .mydomain.com
 * Note the . in front of the domain. No www, no http, no slash here!
 * For local development, use false because .127.0.0.1 or .localhost don't work inside Chrome 
 * but when deploying you should change this to your real domain, like '.mydomain.com' !
 * The leading dot makes the cookie available for sub-domains too.
 * @see http://stackoverflow.com/q/9618217/1114320
 * @see http://www.php.net/manual/en/function.setcookie.php
 * @see http://stackoverflow.com/questions/1134290/cookies-on-localhost-with-explicit-domain
 *
 * COOKIE_RUNTIME: How long should a cookie be valid ? 1209600 seconds = 2 weeks
 * COOKIE_DOMAIN: The domain where the cookie is valid for, like '.mydomain.com'
 * COOKIE_SECRET_KEY: Put a random value here to make your app more secure. When changed, all cookies are reset.
 */
  "COOKIE_RUNTIME" => 1209600,
  "COOKIE_DOMAIN" => false, // to be replaced by '.mydomain.com'
  "COOKIE_SECRET_KEY" => "1gp@TMPS{+$78sfpMJFe-92s",

/**
 * Configuration for: Email server credentials
 *
 * Here you can define how you want to send emails.
 * If you have successfully set up a mail server on your linux server and you know
 * what you do, then you can skip this section. Otherwise please set EMAIL_USE_SMTP to true
 * and fill in your SMTP provider account data.
 *
 * An example setup for using gmail.com [Google Mail] as email sending service,
 * works perfectly in August 2013. Change the "xxx" to your needs.
 * Please note that there are several issues with gmail, like gmail will block your server
 * for "spam" reasons or you'll have a daily sending limit. See the readme.md for more info.
 *
 * define("EMAIL_USE_SMTP", true);
 * define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
 * define("EMAIL_SMTP_AUTH", true);
 * define("EMAIL_SMTP_USERNAME", "xxxxxxxxxx@gmail.com");
 * define("EMAIL_SMTP_PASSWORD", "xxxxxxxxxxxxxxxxxxxx");
 * define("EMAIL_SMTP_PORT", 465);
 * define("EMAIL_SMTP_ENCRYPTION", "ssl");
 *
 * It's really recommended to use SMTP!
 *
 */
  "EMAIL_USE_SMTP" => false,
  "EMAIL_SMTP_HOST" => "https://xxxxxx.com",
  "EMAIL_SMTP_AUTH" => true,
  "EMAIL_SMTP_USERNAME" => "xxxx@xxxxxx.com",
  "EMAIL_SMTP_PASSWORD" => "xxxxxx",
  "EMAIL_SMTP_PORT" => 465,
  "EMAIL_SMTP_ENCRYPTION" => "ssl",

/**
 * Configuration for: password reset email data
 */
  "EMAIL_PASSWORDRESET_FROM" => "xxxx@xxxxxx.com",
  "EMAIL_PASSWORDRESET_FROM_NAME" => "PHP-Login From xxxxxxx.com",
  "EMAIL_PASSWORDRESET_SUBJECT" => "Password reset for PROJECT XY",
  "EMAIL_PASSWORDRESET_CONTENT" => "Please click on this link to reset your password:",
  
  /**
   * Configuration for: verification email data
   */
  "EMAIL_VERIFICATION_FROM" => "xxxx@xxxxxx.com",
  "EMAIL_VERIFICATION_FROM_NAME" => "PHP-Login From @xxxxxx.com",
  "EMAIL_VERIFICATION_SUBJECT" => "Account activation for PROJECT XY",
  "EMAIL_VERIFICATION_CONTENT" => "Please click on this link to activate your account:",
  
  /**
   * Configuration for: Hashing strength
   * This is the place where you define the strength of your password hashing/salting
   *
   * To make password encryption very safe and future-proof, the PHP 5.5 hashing/salting functions
   * come with a clever so called COST FACTOR. This number defines the base-2 logarithm of the rounds of hashing,
   * something like 2^12 if your cost factor is 12. By the way, 2^12 would be 4096 rounds of hashing, doubling the
   * round with each increase of the cost factor and therefore doubling the CPU power it needs.
   * Currently, in 2013, the developers of this functions have chosen a cost factor of 10, which fits most standard
   * server setups. When time goes by and server power becomes much more powerful, it might be useful to increase
   * the cost factor, to make the password hashing one step more secure. Have a look here
   * (@see https://github.com/panique/php-login/wiki/Which-hashing-&-salting-algorithm-should-be-used-%3F)
   * in the BLOWFISH benchmark table to get an idea how this factor behaves. For most people this is irrelevant,
   * but after some years this might be very very useful to keep the encryption of your database up to date.
   *
   * Remember: Every time a user registers or tries to log in (!) this calculation will be done.
   * Don't change this if you don't know what you do.
   *
   * To get more information about the best cost factor please have a look here
   * @see http://stackoverflow.com/q/4443476/1114320
   *
   * This constant will be used in the login and the registration class.
   */
  "HASH_COST_FACTOR" => "10",
  
  /**
   * Configuration for: Registration
   *
   * ALLOW_USER_REGISTRATION: If set to false, new users cannot registred and registration link is not displayed.
   * ALLOW_ADMIN_TO_REGISTER_NEW_USER: Administrator (user with an access level of 255) can create new users.
   */
  "ALLOW_USER_REGISTRATION" => true,
  "ALLOW_ADMIN_TO_REGISTER_NEW_USER" => true,
    
  /**
   * Configuration for: Google's ReCaptcha program
   * Link: https://www.google.com/recaptcha
   * This will allow for beter authenciation for registering users.
   * 
   * RECAPTCHA_SECRETKEY: On the admin page for your site keys, look for "step 1"
   *      Step 1: client-side integration 
   *   In this section you should see two sections of code, the first one is automatically included into 
   *   this script, the second one should be a bit of HTML. highlight the "data-sitekey" and paste it into
   *   The REPATCHA_SITEKEY area below where it says "Your site key"
   * 
   * RECAPTCHA_SITEKEY:  On the admin page for your site keys, look for "step 2"
   *      Step 2: Server side integration 
   *   In this section you should see a table containing 3 rows, look for the (first) row labeled "secret"
   *   Copy this "secret" code and paste it into "RECAPTCHA_SECRETKEY" where it says "Your secret key"
   * save the file and this is all set up
   */
  'RECAPTCHA_SITEKEY' => 'Your site key',
  'RECAPTCHA_SECRETKEY' => 'Your secret key'
);
