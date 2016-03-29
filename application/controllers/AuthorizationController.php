<?php
class AuthorizationController
{
    function __construct()
    {

    }

    function loginAction() {
        $view = new Smarty("Вход");
        Post::toSession('exit', 'exit', 'exit');
        if(Post::issetVar('exit'))
            Auth::logOut();
        else
            $result = Auth::logIn();

        if(Auth::isAuthenticUser() or  $result)
        {
            Route::location(App::URL . 'check');
        }
        else
            $view->assign('errors', ErrorLog::getErrorMessages());

        $view->display('prt_login.tpl');
    }

    function checkAction() {
        Auth::checkUserData(App::URL . 'panel');
    }
}
?>