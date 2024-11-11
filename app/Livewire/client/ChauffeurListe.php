<?php

namespace App\Livewire\client;


use App\Models\Chauffeur;
use Livewire\Component;

class ChauffeurListe extends Component
{
    public $clients;
    public $headers;

    public function mount()
    {
        $this->headers = [
            'Nom',
            'eMail',
            'Numero',
            'Adresse',
            'no permit',
            'expiration permit',
            'Crée le ',
            'action'
        ];

        $this->clients = Chauffeur::all();
    }

    public function render()
    {
        return view('livewire.client.chauffeur-liste');
    }
}
