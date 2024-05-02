<?php

namespace App\Livewire\Admin\GameType;

use App\Models\GameType;
use Livewire\Component;
use Livewire\WithPagination;

class GameTypeIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $gameType = GameType::where('id', $id)->first();
        $this->id = $gameType->id;
    }

    public function destroy() {
        $gameType = GameType::where('id', $this->id)->first();
        $gameType->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $gameTypes = GameType::when($this->search, function ($query) {
                return $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->when($this->sort, function ($query) {
                return $query->orderBy('name', $this->sort);
            })->orderBy('created_at', 'desc');

        return view('livewire.admin.game-type.game-type-index', [
            'gameTypes' => $gameTypes->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
