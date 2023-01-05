<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
{
    $permissions = Permission::latest()->paginate(5);
    return view('admin.permission.index',compact('permissions'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}
    public function create()
{
    return view('admin.permission.create');
}
}
