<?php

namespace App\Livewire\Admin\Provider;

use App\Models\Provider;
use Livewire\Component;

class ProviderIndex extends Component
{
    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $provider = Provider::where('id', $id)->first();
        $this->id = $provider->id;
    }

    public function destroy() {
        $provider = Provider::where('id', $this->id)->first();
        $provider->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $providers = Provider::when($this->search, function ($query) {
                return $query->where('title', 'LIKE', '%' . $this->search . '%');
            })
            ->when($this->sort, function ($query) {
                return $query->orderBy('title', $this->sort);
            })->orderBy('created_at', 'desc');

        return view('livewire.admin.provider.provider-index', [
            'providers' => $providers->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
