<?php

namespace App\Controllers;


// use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	// public function view($page = 'home')
	// {
	// 	if (!is_file(APPPATH . '/Views/inventarisasi/' . $page . '.php')) {
	// 		// Whoops, we don't have a page for that!
	// 		throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
	// 	}

	// 	$model = new ManipulasiDB();
	// 	$data['sekolah_terdekat'] = $model->getSekolahTerdekat();
	// 	// // var_dump($sekolah_terdekat);

	// 	// $data['title'] = ucfirst($page); // Capitalize the first letter
	// 	// $data = null;
	// 	// echo view('templates/header');
	// 	// // echo "hello world";
	// 	// echo view('inventarisasi/home', $data);
	// 	// echo view('templates/footer');
	// }

	public function frontPage()
	{
		return view('halaman_utama');
	}
}
