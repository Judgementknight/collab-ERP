<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalEarnings' => 78.00,
            'growthRate' => '+9.0%',
            'users' => [
                ['id' => 1, 'first_name' => 'Mark', 'last_name' => 'Otto', 'handle' => '@mdo'],
                ['id' => 2, 'first_name' => 'Jacob', 'last_name' => 'Thornton', 'handle' => '@fat'],
                ['id' => 3, 'first_name' => 'Larry', 'last_name' => 'Bird', 'handle' => '@twitter'],
            ]
            ];

        return view('admin.dashboard', $data);
    }
}
