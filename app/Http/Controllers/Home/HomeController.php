<?php namespace App\Http\Controllers\Home;// 命名空间
use App\Http\Controllers\Controller;
/**
* 
*/
class HomeController extends Controller//继承这个控制器
{
	function index()
	{
		return view('home.index');//用这个视图渲染数据
	}
}
 ?>