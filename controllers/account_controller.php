<?php
class AccountController
{
    public function index()
    {
        require_once('views/main/login.php');
    }

    public function login()
    {
        $baseUsername = $_GET['username'];
        $basePassword = $_GET['password'];

         $account = Account::signIn($baseUsername, $basePassword);
         $token = $account->token;
         if ($token == 1) {
             $_SESSION['firstname'] = $account->firstname;
             $_SESSION['token'] = "1";
           $_SESSION['accountId'] = $account->id;
         }
        // // require_once('./index.php');
        // // header("Location: index.php");
        header("Location: index.php");
    }

    public function logout()
    {
        session_destroy();
        header("Location: index.php");
    }
}
