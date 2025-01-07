<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class MultipleFileUpload extends Component
{

    use WithFileUploads;

    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required|min:5|max:20')]
    public $password = '';

    #[Rule('required')]
    #[Rule(['photos.*' => 'image|max:3096'])]
    public $photos = [];

    public function createNewUserWithImage(){

        $this->validate();

        if(is_array($this->photos)){
            foreach ($this->photos as $photo) {
                // dd($photo);
                $photo->storeAs('images',$photo->getClientOriginalName(),'public');
            }
        }

        // User::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'password' => Hash::make($this->password),
        // ]);

        session()->flash('success','User created successfully');

        $this->reset();

    }

    public function render()
    {
        return view('livewire.multiple-file-upload');
    }
}
