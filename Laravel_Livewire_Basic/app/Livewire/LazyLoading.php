<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class LazyLoading extends Component
{

    use WithFileUploads;
    use WithPagination;

    #[Rule('required|min:6')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min: 5')]
    public $password = '';

    #[Rule('image|max:2048')]
    public $photo = '';

    public $search;

    public $activeUsers;

    public function placeholder(){
        return view('placeholder');
    }

    // public function update(){

    // }

    public function mount($search = ''){
        $this->search = $search;
        // $this->activeUsers = User::latest()->get();
        unset($this->users);
    }

    // #[Computed(persist:true, seconds:3600, cache: true)]
    #[Computed()]
    public function users(){
        return User::latest()
        ->where('name', 'like', '%'.$this->search.'%')
        ->paginate(5);
    }

    public function update(){
        $this->users;
    }

    public function render()
    {

        // $users = User::paginate(5);

        // if($this->search){
        //     $users = User::latest()->where('name', 'like', '%'.$this->search.'%')->paginate(5);
        // }

//         return view('livewire.lazy-loading',
// [
//             'users' => $users,
//             'count' => User::count(),
//         ],
//         )->layout('components.layouts.app');

        return view('livewire.lazy-loading',[])
        ->layout('components.layouts.app');

    }
}
