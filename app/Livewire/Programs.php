<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Program;

class Programs extends Component
{
    use WithPagination;

    public $degreeName;
    public $universityId;
    public $perPage = 12;

    protected $listeners = ['load-more' => 'loadMore'];

    public function mount($degreeName, $universityId)
    {
        $this->degreeName = $degreeName;
        $this->universityId = $universityId;
    }

    public function loadMore()
    {
        $this->perPage += 6;
    }

    public function render()
    {
        $programs = Program::with('department')
            ->join('degrees', 'programs.degree_id', '=', 'degrees.id')
            ->where('degrees.name', $this->degreeName)
            ->where('programs.university_id', $this->universityId)
            ->select('programs.*')
            ->paginate($this->perPage);

        return view('livewire.programs', [
            'programs' => $programs
        ]);
    }
}
