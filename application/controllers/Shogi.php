<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shogi extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->model('shogi_model');
    }

	public function index()
	{
		$this->load->view('shogi_index');
	}

	public function show($key)
	{
    	$image = $this->shogi_model->get($key);
        if (!$image) {
            redirect('/');
        }
        $data['image'] = $image;
		$this->load->view('shogi_show', $data);
	}

    public function save()
    {
        if ($this->input->post()) {
    		$key = $this->shogi_model->save($this->input->post());
            if ($key) {
                redirect('/shogi/show/'.$key);
            }
		    $this->load->view('shogi_index');
        } else {
		    $this->load->view('shogi_index');
        }
    }

	public function garally()
	{
    	$images = $this->shogi_model->gets();
        $data['images'] = $images;
		$this->load->view('shogi_garally', $data);
	}

	public function about()
	{
		$this->load->view('shogi_about');
	}
}
