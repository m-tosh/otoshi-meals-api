<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
// use Illuminate\Routing\Controller as BaseController;

class MenusController extends Controller
{
    // Indexページの表示
    public function index() {
        return view('menus.index');
    }

    public function create(Request $request) {

        // formの受け取って変数に入れる
        $menu = $request->input('menu');
        $mtrl_1 = $request->input('material_1');
        $amount_1 = $request->input('amount_1');

        // 登録
        $the_menu = new Menu;
        $the_menu->id = uniqid();
        $the_menu->menu = $menu;
        $the_menu->created_at = now();
        $the_menu->updated_at = now();
        $the_menu->save();

        // 変数をビューに渡す
        return view('menus.index')->with([
            "menu" => $menu,
            "mtrl_1"  => $mtrl_1,
            "amount_1"  => $amount_1,
        ]);
    }

}