<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Component;
use Livewire\Attributes\Rule;

class ContactUs extends Component
{

    public ContactUsForm $form;

    public function submitForm(){
        $this->form->validate();

        $this->form->sendEmail();

        session()->flash("success","form submited!");

        $this->form->reset('subject','message');
    }

    public function render()
    {
        return view('livewire.contact-us')
        ->title("Contact Us");
    }


}
