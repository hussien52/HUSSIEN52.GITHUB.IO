<?php

class Dashboard extends Controller {

    function __construct() {
        Session::init();
        parent::__construct();
    }

    public function index() {

        $this->view->search = "true";
        $this->view->doc = "true";
        $attachment = $this->model->get_attachments();
        $this->view->attachment = $attachment;
        $document = $this->model->get_user_document();
        $this->view->document = $document;
        $this->view->render("dashboard/header", TRUE);

        $this->view->cat = $this->getCat();

//        if (Session::get("usertype") == "2") {

        $this->view->render("dashboard/documents", TRUE);
//            }
//        else {
//            $details = $this->model->get_user_document();
//            $this->view->document = $details;
//            $attachment = $this->model->attachments();
//            $this->view->attachment = $attachment;
//
//            $this->view->render("dashboard/documents", TRUE);
//        }
        $this->view->render("dashboard/footer", TRUE);
    }

    public function documents() {
        $this->index();
    }

    public function my_documents() {
        $this->view->doc = "false";
        $this->view->cat = $this->getCat();
        $details = $this->model->getUserDetails();
        $this->view->details = $details;
        $this->view->document = $details;
        $attachment = $this->model->attachments();
        $this->view->attachment = $attachment;
        $this->view->search = "true";
        $this->view->render("dashboard/header", TRUE);
        $this->view->render("dashboard/index", TRUE);
        $this->view->render("dashboard/footer", TRUE);
    }
    
    public function savedocuments() {
        $this->view->doc = "false";
        $this->view->cat = $this->getCat();
        $details = $this->model->getUserDetails("",2);
        $this->view->details = $details;
        $this->view->document = $details;
        $attachment = $this->model->attachments("",2);
        $this->view->attachment = $attachment;
        $this->view->search = "false";
        $this->view->render("dashboard/header", TRUE);
        $this->view->render("dashboard/savedocuments", TRUE);
        $this->view->render("dashboard/footer", TRUE);
    }

    public function users() {
        $user = $this->model->get_user();
        $this->view->user = $user;
        $this->view->render("dashboard/header", TRUE);
        $this->view->render("dashboard/users", TRUE);
        $this->view->render("dashboard/footer", TRUE);
    }

    public function save() {
        if (!empty($_POST)) {
            $this->model->save($_POST);
        }
        $this->view->render("dashboard/header", TRUE);
        $this->view->cat = $this->getCat();
        $this->view->render("dashboard/save", TRUE);
        $this->view->render("dashboard/footer", TRUE);
    }

    public function editsave($id,$type) {
        if (!empty($_POST)) {
            $this->model->save($_POST);
        }
        $this->view->doc = "false";
        $details = $this->model->getUserDetails($id,$type);
        $this->view->details = $details;
        $this->view->document = $details;
		 $this->view->type = $type;
        $attachment = $this->model->attachments($id);
        $this->view->attachment = $attachment;
        $this->view->render("dashboard/header", TRUE);
        $this->view->cat = $this->getCat();
        $this->view->render("dashboard/editsave", TRUE);
        $this->view->render("dashboard/footer", TRUE);
    }

    public function update() {
        if (!empty($_POST)) {
            $this->model->update($_POST);
        }
      
    }
    public function file() {
         $this->view->render("dashboard/file", TRUE);
    }

    public function delete($param1, $param2) {
        $this->model->delete("$param1", $param2);
    }

    function search() {
        $this->model->search($_POST);
    }

    function mysearch() {
        $this->model->mysearch($_POST);
    }

    function getCat() {
        return $this->model->getCat();
    }

}
