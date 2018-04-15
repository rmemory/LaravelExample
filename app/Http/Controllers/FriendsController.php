<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function show($id, $name = null) {
        if (!$name) {
            $name = 'default name';
        }
        return view ('friends.show', ['id' => $id, 'name' => $name]);
    }
}
