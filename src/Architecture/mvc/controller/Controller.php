<?php
require_once './model/Model.php';

/**
 * Class Controller
 */
class Controller {
    /**
     *
     */
	public function index() {
		$model = new Model();
		$message = $model->getMessage();

		require_once './view/View.php';
	}
}
