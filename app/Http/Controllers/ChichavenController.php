<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Expert;
use Illuminate\Http\Request;

class ChichavenController extends Controller
{
    public function index()
    {
        $clients =Client::all();
        return view('dashboard.clients.index',compact('clients'));
    }
    public function create()
    {
        $experts=Expert::all();
        return view('call_expert.formulaire',compact('experts'));
    }
    public function store(Request $request)
    {
        // Validation des données reçues du formulaire
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'first_name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'address' => 'required|string|max:255',
        //     'phone' => 'required|string|max:20',
        //     'cin' => 'required|string|max:20',
        //     'date' => 'required|date',
        //     // 'status' => 'required|string|max:50',
        //     'expert_id' => 'required|integer',
        // ]);

        // Vérifie si le client existe avec l'email fourni
        $client = Client::where('email', $request['email'])->first();
        // print_r($request['name']);
        // exit();
        if (!$client) {
            // Création d'un nouveau client
            $client = Client::create([
                'name' => $request['name'],
                'first_name' => $request['first_name'],
                'email' => $request['email'],
                'address' => $request['address'],
                'phone' => $request['phone'],
                'cin' => $request['cin'],
            ]);

            // Création du rendez-vous
            Appointment::create([
                'date' => $request['date'],
                // 'status' => $request['status'],
                'client_id' => $client->id,
                'expert_id' => $request['expert_id'],
            ]);

            $message = 'Rendez-vous effectué, bienvenue chez nous ' . $request['first_name'] . ' ' . $request['name'];
            return redirect('/')->with('success', $message);
        }

        // Création du rendez-vous pour un client existant
        Appointment::create([
            'date' => $request['date'],
            // 'status' => $request['status'],
            'client_id' => $client->id,
            'expert_id' => $request['expert_id'],
        ]);

        return redirect('/')->with('success', 'Rendez-vous effectué, merci pour votre réservation!');
    }
}
