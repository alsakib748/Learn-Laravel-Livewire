<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SimpleForm extends Component
{
    use WithFileUploads;
    use withPagination;

    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min:5')]
    public $password = '';

    #[Rule('image|max:2048')]
    public $photo = '';

    // protected $rules = [
    //     'name' => 'required|min:2|max:50',
    //     'email' => 'required|email|unique:users',
    //     'password' => 'required|min:5',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
    // ];

    // public function createNewUser(){

    //     $this->validate([
    //         'name' => 'required|min:2|max:50',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:5'
    //     ]);

    //     User::create([
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'password' => $this->password
    //     ]);

    //     $this->reset(['name','email','password']);

    //     request()->session()->flash('success','User Created Successfully!');

    // }

    public function createNewUserWithImage(){

            sleep(2);

            $validated = $this->validate();

            // dd($this->photo);

            if ($this->photo) {
                $validated['photo'] = $this->photo->store('uploads', 'public');
            }

            // dd($validated['photo']);

            // User::create($validated);
            $user =  User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'image' => $validated['photo'],
            ]);

            $this->reset(['name','email','password','photo']);

            request()->session()->flash('success','User Created Successfully!');

            $this->dispatch('user-created', $user);

    }


    #[On('user-created')]
    public function updateList($user = null){
        // dd($user);
    }

    public function ReloadList(){
        $this->dispatch('user-created');
    }

    // #[On('user-created')]
    public function render()
    {
        $users = User::paginate(5);

        return view('livewire.simple-form',[
            'users' => $users
        ])->layout('components.layouts.app');
    }

}
