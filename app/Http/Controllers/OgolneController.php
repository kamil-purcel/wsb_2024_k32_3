<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OgolneController extends Controller
{
    public function start()
    {
        if (auth()->check()) {
            $role = auth()->user()->role->name;

            if ($role === 'admin') {
                return redirect()->route('users.index');
            }

            if ($role === 'librarian' || $role === 'user') {
                return redirect()->route('books.index');
            }
        }

        return view('ogolne.welcome');
    }
}
