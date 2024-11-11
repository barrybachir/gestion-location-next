<?php

namespace App\Livewire\client;

use App\Models\Chauffeur;
use App\Models\Vehicule;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Livewire\Component;

class ChauffeurAdd extends Component
{
    public $client;
    public $name;
    public $password;
    public $email;
    public $permitNo;
    public $contact;
    public $permitDate;
    public $permitPays;
    public $emissison;
    public function submit()
    {
        $this->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
                'password' => ['required', 'string', 'min:4'],
        ]);


        $client = Chauffeur::create([
            'name' => $this->name,
            'email' => $this->email,
            'contact' => $this->contact,
            'password' => $this->password,
            'permitNo' => $this->permitNo,
            'permitDate' => $this->permitDate,
            'permitPays' => $this->permitPays,

        ]);


        session()->flash('message', 'Client ajouté avec succès.');

        $this->reset(); // Réinitialiser le formulaire
    }

    public function render()
    {
        return view('livewire.client.chauffeur-add');
    }
}
