<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class Table_Controller extends Controller
{
    public function index()
    {
        $tables = Table::All();
        return view('index', compact('tables'));
    }

}
