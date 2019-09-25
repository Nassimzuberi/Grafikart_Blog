<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 11/09/2019
 * Time: 20:03
 */

namespace App\Controller\Admin;
use \App;

class CategorieController extends AppController{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Categorie');
    }

    public function index(){
        $categorie = $this->Categorie->all();
        $this->render('admin.categorie.index', compact('categorie'));

    }
    public function add(){
        if(!empty($_POST)){
            $result = $this->Categorie->create([
                'titre' => $_POST['titre']
            ]);
            if($result){
                return $this->index();

            }

        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.categorie.add', compact('form'));



    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Categorie->update($_GET['id'], [
                'titre' => $_POST['titre']
            ]);
            if($result){
                return $this->index();
            }

        }
        $categorie = $this->Categorie->find($_GET['id']);
        $form = new \Core\HTML\BootstrapForm($categorie);
        $this->render('admin.categorie.edit', compact('form'));


    }

    public function delete(){
        if(!empty($_POST)){
            $this->Categorie->delete($_POST['id']);
            return $this->index();

        }

    }
}