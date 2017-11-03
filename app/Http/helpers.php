<?

use App\Models\Menu;


function callMenus(){

	$menus = Menu::where('hidden', 0)->where('active' , 1)->orderBy('sort_order','asc')->get();
	// dd($x);
	return $menus;
	
}