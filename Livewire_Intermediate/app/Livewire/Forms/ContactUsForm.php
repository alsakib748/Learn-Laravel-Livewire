<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class ContactUsForm extends Form
{

    #[Rule('required|email|unique:users,email')]
    public $email;

    #[Rule('required|min:3|max:255')]
    public $subject;

    #[Rule('required|min:5|max:255')]
    public $message;

    public function sendEmail(){
        sleep(3);
    }

}
