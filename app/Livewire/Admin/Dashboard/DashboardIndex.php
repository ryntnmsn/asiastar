<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;

class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard-index')
            ->extends('layouts.admin.app')->section('contents');
    }
}
