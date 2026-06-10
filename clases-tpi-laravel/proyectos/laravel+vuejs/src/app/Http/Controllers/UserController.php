<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    //
    public function show()
    {
        // return Inertia::render('User/Show', [
        //     'user' => $user
        // ]);

        return Inertia::render('User/Show', [
            'user' => [
                'name' => 'Jeferson',
                'email' => 'jeferson@example.com',
            ]
        ]);

        //luego en Show.vue mediante define props
    }
}
