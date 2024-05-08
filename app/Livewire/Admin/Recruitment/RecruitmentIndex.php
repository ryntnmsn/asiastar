<?php

namespace App\Livewire\Admin\Recruitment;

use App\Models\Recruitment;
use Livewire\Component;
use Livewire\WithPagination;

class RecruitmentIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $id;
    public $sort = 'asc';
    public $search = '';

    public function delete($id) {
        $recruitments = Recruitment::where('id', $id)->first();
        $this->id = $recruitments->id;
    }

    public function destroy() {
        $recruitments = Recruitment::where('id', $this->id)->first();
        $recruitments->delete();

        $this->js('window.location.reload');
    }

    public function clone($id) {
        $recruitments = Recruitment::where('id', $id)->first();

        $clone = $recruitments->replicate();

        $clone->save();
    }

    public function render()
    {

        $recruitments = Recruitment::when($this->search, function ($query) {
            return $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('name', $this->sort);
        });

        return view('livewire.admin.recruitment.recruitment-index', [
            'recruitments' => $recruitments->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
