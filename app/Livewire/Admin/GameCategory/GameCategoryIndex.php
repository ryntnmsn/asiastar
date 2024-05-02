<?php

namespace App\Livewire\Admin\GameCategory;

use App\Models\GameCategory;
use Livewire\Component;
use Livewire\WithPagination;

class GameCategoryIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $gameCategory = GameCategory::where('id', $id)->first();
        $this->id = $gameCategory->id;
    }

    public function destroy() {
        $gameCategory = GameCategory::where('id', $this->id)->first();
        $gameCategory->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $gameCategories = GameCategory::when($this->search, function ($query) {
                return $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->when($this->sort, function ($query) {
                return $query->orderBy('name', $this->sort);
            })->orderBy('created_at', 'desc');

            return view('livewire.admin.game-category.game-category-index', [
            'gameCategories' => $gameCategories->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
