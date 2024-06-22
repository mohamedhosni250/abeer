<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\University;
use App\Models\Degree;
use App\Models\Department;
use App\Models\Program;

class Universities extends Component
{
    use WithPagination;

    public $perPage = 6;
    public $degreeId;
    public $departmentId;
    public $searchResults;

    protected $listeners = ['load-more' => 'loadMore', 'search' => 'search'];

    public function mount()
    {
        $this->degreeId = null;
        $this->departmentId = null;
        $this->searchResults = null;
    }

    public function loadMore()
    {
        $this->perPage += 6;
    }

    public function search($degreeId, $departmentId)
    {
        $this->degreeId = $degreeId;
        $this->departmentId = $departmentId;

        $query = University::query();

        if ($this->degreeId) {
            $query->whereHas('programs', function ($query) {
                $query->where('degree_id', $this->degreeId);
            });
        }

        if ($this->departmentId) {
            $query->whereHas('programs', function ($query) {
                $query->where('department_id', $this->departmentId);
            });
        }

        $this->searchResults = $query->withCount('programs')->paginate($this->perPage);

        $this->resetPage();
    }

    public function render()
    {
        $universities = $this->searchResults ?? University::withCount('programs')->paginate($this->perPage);
        $degrees = Degree::all();
        $departments = Department::all();

        return view('livewire.universities', [
            'universities' => $universities,
            'degrees' => $degrees,
            'departments' => $departments
        ]);
    }
}
