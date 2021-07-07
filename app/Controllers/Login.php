<?php

namespace App\Controllers;
use App\Models\UsersModel;
class Login extends BaseController
{
	public function index()
	{
		$mensaje=session("mensaje");

		return view('login/login',["mensaje"=>$mensaje]);
	}


  public function auth(){

$name= $this->request->getPost('name');
$pass=  $this->request->getPost('password');
$usuario= new UsersModel();
$datosUsr=$usuario->find();

if (count($datosUsr)>0 &&  password_verify($pass, $datosUsr[0]['password'] )) {

$session = session();

$data=['name'=>$name];

$session->set($data);

 return redirect()->to(base_url("/dashboard"));
}else{
  return redirect()->to(base_url('/login'))->with("mensaje","usuario o clave incorrectas");
}

}

public function logOut(){
	$session=session();
	$session->destroy();
	  return redirect()->to(base_url('/'));
}
}
