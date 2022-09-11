<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data['costumer'] = User::count();
        $data['revenue'] = Transaction::sum('total_price');
        $data['transactions'] = Transaction::count();
        return view('pages.Admin.dashboard', $data);
    }
}
