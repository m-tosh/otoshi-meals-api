<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Material;
// use Illuminate\Routing\Controller as BaseController;

class MenusController extends Controller
{
    // authorization
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 一覧ページ
    public function list() {
        $menus = Menu::all();
        return view('menus.list', ['menus' => $menus]);
    }

    // Indexページの表示
    public function index() {
        return view('menus.index');
    }

    public function create(Request $request) {

        // バリデーション
        $validatedData = $request->validate([
            'menu' => 'required|unique:menu,menu'
        ]);

        // formの受け取って変数に入れる
        $menu = $request->input('menu');
        $materials = $request->input('material');
        $amounts = $request->input('amount');

        // まずメニューの登録
        $theMenu = new Menu;
        $theMenu->id = uniqid();
        $theMenu->menu = $menu;
        $theMenu->created_at = now();
        $theMenu->updated_at = now();
        $theMenu->save();

        // 材料を１つずつ登録
        for( $i = 0; $i < count($materials); $i++ ) {
            if(!empty($materials[$i])) self::regMenusMate($theMenu->id, $materials[$i], $amounts[$i]);
        }

        return redirect()->route('menu-list');
    }

    // ====================
    // material 登録function
    // ====================
    private function regMenusMate($menuId, $mateName, $mateAmount) {
        $mate = new Material;
        $mate->menu_id = $menuId;
        $mate->name = $mateName;
        $mate->mount = $mateAmount;
        $mate->save();
    }

}