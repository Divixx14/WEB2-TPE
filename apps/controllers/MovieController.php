<?php

require_once "MainController.php";

class MovieController extends Controller{

    //Show
    function showHome(){
        $peliculas = $this->movieModel->getPeliculas();
        $this->movieView->showHome($peliculas);
    }
    function showPelibyId($id){
        $peli = $this->movieModel->getPeliculaId($id);
        $this->movieView->showMovieId($peli);
    }
    function showForm($peli = null){
        if ($this->isLogged()){
            $generos = $this->genModel->getGeneros();
            $this->movieView->showForm($generos, $peli);
        }else{
            header("Location: ".BASE_URL); 
        }
    }
    function showFormUpdate($id){
        if ($this->isLogged()){
            $peli = $this->movieModel->getPeliculaId($id);
            $this->showForm($peli);
        }else{
            header("Location: ".BASE_URL); 
        }
    }

    //ABM
    function createMovie(){
        if ($this->isLogged()){

            $title = $_POST["title"]; 
            $genero = $_POST["genero"];
            $fecha = $_POST["fecha"];

            if ($this->checkFields($title, $fecha, $genero)) {
                $this->movieModel->insertMovie($title, $fecha, $genero);
                header("Location: ".BASE_URL); 
            }else{ 
                $this->mainView->showError($this->formErrorMsg(), "showForm"); 
            }
        }else{ 
            header("Location: ".BASE_URL); 
        }
    }
    function updateMovie(){
        if ($this->isLogged()) {

            $title = $_POST["title"]; 
            $genero = $_POST["genero"]; 
            $id = $_POST["id"];
            $fecha = $_POST["fecha"];

            if ($this->checkFields($title, $fecha, $genero, $id)){
                $this->movieModel->updateMovie($title,$fecha,  $genero, $id);
                header("Location: ".BASE_URL); 
            }else{ 
                $this->mainView->showError($this->formErrorMsg(), "showForm/$id"); 
            }
        }else{ 
            header("Location: ".BASE_URL); 
        }
    }
    function deleteMovie($id){
        if ($this->isLogged()) {
            $this->movieModel->deleteMovie($id);
            header("Location: ".BASE_URL); 
        }else{
            header("Location: ".BASE_URL);  
        }
    }

    private function checkFields($title, $fecha, $genero, $id= null){
        if (!$id) {
            return (!empty($title) && !empty($fecha) && !empty($genero));
        }else{
            return (!empty($title) && !empty($fecha) && !empty($genero) && !empty($id));
        }
    }
}