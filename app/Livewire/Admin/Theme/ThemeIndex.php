<?php

namespace App\Livewire\Admin\Theme;

use App\Models\Theme;
use Livewire\Component;
use Livewire\WithPagination;

class ThemeIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $theme = Theme::where('id', $id)->first();
        $this->id = $theme->id;
    }

    public function destroy() {
        $theme = Theme::where('id', $this->id)->first();
        $theme->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $themes = Theme::when($this->search, function ($query) {
                return $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->when($this->sort, function ($query) {
                return $query->orderBy('name', $this->sort);
            })->orderBy('created_at', 'desc');

        return view('livewire.admin.theme.theme-index', [
            'themes' => $themes->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
