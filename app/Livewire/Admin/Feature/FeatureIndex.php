<?php

namespace App\Livewire\Admin\Feature;

use App\Models\Feature;
use Livewire\Component;
use Livewire\WithPagination;

class FeatureIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $feature = Feature::where('id', $id)->first();
        $this->id = $feature->id;
    }

    public function destroy() {
        $feature = Feature::where('id', $this->id)->first();
        $feature->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $features = Feature::when($this->search, function ($query) {
                return $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->when($this->sort, function ($query) {
                return $query->orderBy('name', $this->sort);
            })->orderBy('created_at', 'desc');

        return view('livewire.admin.feature.feature-index', [
            'features' => $features->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
