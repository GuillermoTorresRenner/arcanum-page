<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
	public function index()
	{


		echo view('dashboard/main/cabecera');
		echo view('dashboard/main/main');
		echo view('dashboard/main/pie');
	}


	public function movimientos()
	{


		echo view('dashboard/main/cabecera');
		echo view('dashboard/control/movimientos');
		echo view('dashboard/main/pie');
	}

}
