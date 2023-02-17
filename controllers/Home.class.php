<?php class Home extends Controller {
	function index() {
		//Load model
		$homeModel = $this->loadModel('HomeModel');

		//Get data from the model
		$fromDatabase = $homeModel->getData();

		//Inject variable to view
		$data['fromDB'] = $fromDatabase;
		
		//Load the view
		$this->loadView('home', $data);
	}
}