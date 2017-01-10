<?php
class Map extends CI_Controller {
    public function index() {
        $this->load->model('Mapdata_model');
        $data['mapdata'] = $this->Mapdata_model->getAll();
        $this->load->view('map', $data);
    }
}
?>