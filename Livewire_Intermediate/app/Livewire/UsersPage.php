<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

// #[Layout('layout.app')]
// #[Title('Users Page')]
class UsersPage extends Component
{

    use WithPagination;

    public User $user;

    #[Url(as: 'search')]
    public $search = '';

    // public function mount(User $user){
    //     $this->user = $user;
    // }

    public function update(){
        $this->user;
    }

    public function render()
    {
        // return view('livewire.users-page');
        // return view('livewire.users-page')->layout('layout.app')->title('Users Page');

        if($this->search == ''){
            return view('livewire.users-page',['users' => User::latest()->paginate(5)])
            ->title('Users Page');
        }

        return view('livewire.users-page',['users' => User::latest()->where('name','like',"%".$this->search."%")->paginate(5) ])
        ->title('Users Page');
    }
}
