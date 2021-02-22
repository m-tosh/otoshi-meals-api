<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    //
    public function getMaterial($menuId) {
        $materials = Material::where('menu_id', $menuId)->get();
        return $materials;
    }
}
