<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    public $username = "Al Sakib Ayon";

    public function createNewUser(){
        User::create([
            'name' => "Test User 2",
            "email" => "test2@test.com",
            "password" => "1131231323223"
        ]);
    }

    public function render()
    {
        $title = "Test";

        $users = User::all();

        return view('livewire.clicker',[
            'title' => $title,
            'users' => $users
        ]);
    }

}
