<?php
namespace App\Controller;

use App;

class UsersController extends AppController
{

    public function login()
    {
        $errors = false;
        if (!empty($_POST)) {
            $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
            if ($auth->login($_POST['username'], $_POST['password'])) {
                header('location: index.php?p=admin.posts.index');
            } else {
                $errors = true;

            }
        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('users.login', compact('form','errors'));
    }
}

?>

