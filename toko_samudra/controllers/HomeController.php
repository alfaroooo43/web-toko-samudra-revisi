<?php
class HomeController extends Controller {
    public function index() {
        $menuModel = $this->model('Menu');
        $data['products'] = $menuModel->getMenu();
        
        $this->view('header');
        $this->view('home', $data);
        $this->view('footer');
    }
}
