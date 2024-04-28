<?php

namespace App\Livewire\Admin\Partner;

use App\Models\Partner;
use Livewire\Component;

class PartnerIndex extends Component
{

    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $partner = Partner::where('id', $id)->first();
        $this->id = $partner->id;
    }

    public function destroy() {
        $partner = Partner::where('id', $this->id)->first();
        $partner->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $partners = Partner::when($this->search, function ($query) {
            return $query->where('title', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('title', $this->sort);
        })->orderBy('created_at', 'desc');


        return view('livewire.admin.partner.partner-index', [
            'partners' => $partners->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
