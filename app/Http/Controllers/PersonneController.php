<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function add()
    {
        return view('personne.add');
    }

    public function getALL()
    {
        return view('personne.list');
    }

    public function edit($id)
    {
        return view('personne.edit');
    }

    public function update($id)
    {
        return $this->getALL();
    }

    public function delete($id)
    {
        return $this->getALL();
    }
}
