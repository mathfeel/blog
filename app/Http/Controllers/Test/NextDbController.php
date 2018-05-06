<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Base\IdMaker\IDMakerByDB;

class NextDbController extends Controller
{
    public function getId()
    {
        $id = IDMakerByDB::instance()->getNextId();
        var_dump($id);
    }
}