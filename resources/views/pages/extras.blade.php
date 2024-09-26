@extends('layouts.main')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
</head>
<body>

    @section('navbar')
    <div class="fixed z-10 w-full"> 
        <a href="{{ route('menu') }}" class="absolute top-8 left-8 bg-gray-400 bg-opacity-65 text-white py-2.5 px-3 border-none rounded-md w-12 text-base inline-block text-center"><i class="fa-solid fa-bars"></i></a>    
        {{-- <a class="absolute top-8 right-24 bg-gray-400 bg-opacity-65 text-white py-2.5 px-3 font-bold border-none inline-block text-center rounded w-12 tracking-wide text-base"> <i class="fa-solid fa-user"></i> </a>  --}}
        @if(Auth::check())
        <div class="hidden sm:flex sm:items-center sm:ms-6 absolute top-9 right-24">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-bold rounded-md bg-white bg-opacity-90 text-custom-vert focus:outline-none transition ease-in-out duration-150">
                        <div> {{ Auth::user()->prenom }} {{ Auth::user()->nom }} </div>
    
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
    
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Mon profil') }}
                    </x-dropdown-link>
    
                    <!-- Déconnexion -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Se déconnecter') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    @else
        <a href="{{ route('login') }}" class="absolute top-8 right-24 bg-gray-400 bg-opacity-65 text-white py-2.5 px-3 font-bold border-none inline-block text-center rounded w-12 tracking-wide text-base">
            <i class="fa-solid fa-user"></i>
        </a>
    @endif
       
       
        <a class="absolute top-8 right-8 bg-gray-400 bg-opacity-65 text-white py-2.5 px-3 font-bold border-none inline-block text-center rounded w-12 tracking-wide text-base"> EN </a> 
    </div>
@endsection


@section('main')

<a href="{{ route('disponibilite') }}"> Modifier ma réservation</a>


    <div class="flex flex-row p-6 mt-12">
        <div class="flex-grow">

            <div class="max-w-4xl mx-auto border border-2 border-custom-marron rounded-lg bg-white mb-6 p-8">
                <div class="uppercase font-bold text-custom-marron text-xl ml-4">Restauration</div>
                <hr class="w-12 h-0.5 bg-custom-marron ml-2 mb-4">
        
                <div class="flex ml-4 space-x-8 mb-6">
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/dejeuner.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-semibold">Déjeuner - Panier du Terroir</div>
        
                        <div class="flex flex-col space-y-1 mb-4">
                            <div class="text-white italic">~ Adultes ~</div>
                            <div class="flex space-x-4">
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addDejAdulte()"> 
                                    <span> + </span>
                                </button>
                                <span class="text-custom-marron font-black" id="dejeunerAdulte">0</span> 
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractDejAdulte()"> 
                                    <span> - </span>
                                </button>
                            </div>
                        </div>
        
                        <div class="flex flex-col space-y-1">
                            <div class="text-white italic">~ Enfants ~</div>
                            <div class="flex space-x-4">
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addDejEnfant()"> 
                                    <span> + </span>
                                </button>
                                <span class="text-custom-marron font-black" id="dejeunerEnfant">0</span> 
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractDejEnfant()"> 
                                    <span> - </span>
                                </button>
                            </div>
                        </div>
                    </div>
        
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/diner.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-semibold">Dîner - Panier Gourmand</div>
        
                        <div class="flex flex-col space-y-1 mb-4">
                            <div class="text-white italic">~ Adultes ~</div>
                            <div class="flex space-x-4">
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addDinAdulte()"> 
                                    <span> + </span>
                                </button>
                                <span class="text-custom-marron font-black" id="dinerAdulte">0</span> 
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractDinAdulte()"> 
                                    <span> - </span>
                                </button>
                            </div>
                        </div>
        
                        <div class="flex flex-col space-y-1">
                            <div class="text-white italic">~ Enfants ~</div>
                            <div class="flex space-x-4">
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addDinEnfant()"> 
                                    <span> + </span>
                                </button>
                                <span class="text-custom-marron font-black" id="dinerEnfant">0</span> 
                                <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractDinEnfant()"> 
                                    <span> - </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="uppercase font-bold text-custom-marron text-xl ml-4">Spa</div>
                <hr class="w-12 h-0.5 bg-custom-marron ml-2 mb-4">
        
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center">
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/resaspa.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-medium mb-4 flex flex-col text-center">Massage oriental 
                            <span>(45min - 60€)</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addSpa1()"> 
                                <span> + </span>
                            </button>
                            <span class="text-custom-marron font-black" id="spa1">0</span> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractSpa1()"> 
                                <span> - </span>
                            </button>
                        </div>
                    </div>
        
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/resaspa.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-medium mb-4 flex flex-col text-center">Le Shiatsu 
                            <span>(1H-80€)</span>
                        </div>
                        <div class="flex space-x-4"> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addSpa1()"> 
                                <span> + </span>
                            </button>
                            <span class="text-custom-marron font-black" id="spa1">0</span> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractSpa1()"> 
                                <span> - </span>
                            </button>
                        </div>
                    </div>
        
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/resaspa.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-semibold mb-2"></div>
                        <div class="text-white font-medium mb-4 flex flex-col text-center">Massage suédois
                            <span>(1H - 60€)</span>
                        </div>
                        <div class="flex space-x-4"> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addSpa1()"> 
                                <span> + </span>
                            </button>
                            <span class="text-custom-marron font-black" id="spa1">0</span> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractSpa1()"> 
                                <span> - </span>
                            </button>
                        </div>
                    </div>
        
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/resaspa.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-medium mb-4 flex flex-col text-center">Massage californien 
                            <span>(1H - 70€)</span>
                        </div>
                        <div class="flex space-x-4"> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addSpa1()"> 
                                <span> + </span>
                            </button>
                            <span class="text-custom-marron font-black" id="spa1">0</span> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractSpa1()"> 
                                <span> - </span>
                            </button>
                        </div>
                    </div>
        
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/resaspa.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-medium mb-4 flex flex-col text-center">Le massage cranio-facial 
                            <span>(30min-70€)</span>
                        </div>
                        <div class="flex space-x-4"> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addSpa1()"> 
                                <span> + </span>
                            </button>
                            <span class="text-custom-marron font-black" id="spa1">0</span> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractSpa1()"> 
                                <span> - </span>
                            </button>
                        </div>
                    </div>
        
                    <div class="w-60 bg-custom-beige rounded flex flex-col items-center p-4">
                        <div class="rounded-md">
                            <img class="mb-2 rounded-md" src="{{ Storage::url('images/resaspa.jpg') }}" alt="">
                        </div>
                        <div class="text-white font-medium mb-4 flex flex-col text-center">Massage prénatal
                            <span>(1H-100€)</span>
                        </div>
                        <div class="flex space-x-4"> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="addSpa1()"> 
                                <span> + </span>
                            </button>
                            <span class="text-custom-marron font-black" id="spa1">0</span> 
                            <button class="bg-white text-custom-marron font-black rounded flex justify-center items-center py-0 px-2" onclick="substractSpa1()"> 
                                <span> - </span>
                            </button>
                        </div>
                    </div>
        
                </div>

            <div class="flex justify-end mt-8">
                <button class="text-white font-bold px-4 py-2 rounded-md bg-custom-marron uppercase" > Valider </button>
            </div>

            </div>
        </div>
        

        <div>
            <div class="sticky top-24 border border-2 border-custom-marron rounded-lg p-6 ml-6" style="min-width: 300px;">
                <h2 class="font-bold mb-4 text-custom-marron uppercase italic">Récapitulatif de la réservation</h2>

                <div class="flex text-custom-marron font-bold space-x-2 uppercase justify-center">
                    @if(isset($cabane))
                        <div> {{ $cabane->nomCabane }} </div>
                        <div> - </div>
                        <div> {{ $cabane->capacite }} pers. </div>
                    @endif
                </div>

                <div class="flex text-custom-marron space-x-3 justify-center">
                    <i class="fa-solid fa-mug-saucer mt-1"></i>
                    <div class="text-sm">Petit-déjeuner inclus</div>
                </div>

                <div class="flex flex-col mt-8 space-y-4">
                    <div class="flex justify-between">
                        <label class="font-bold text-custom-marron">Date d'arrivée :</label>
                        <div class="font-semibold text-custom-marron"> {{ \Carbon\Carbon::parse($dateArrivee)->format('d/m/Y') }}</div>
                    </div>

                    <div class="flex justify-between">
                        <label class="font-bold text-custom-marron">Date de départ :</label>
                        <div class="font-semibold text-custom-marron"> {{ \Carbon\Carbon::parse($dateDepart)->format('d/m/Y') }}</div>
                    </div>

                    <div class="flex justify-between">
                        <label class="font-bold text-custom-marron">Durée :</label>
                        <div class="font-semibold text-custom-marron"> {{ $duration }} nuit(s) </div>
                    </div>

                    <div class="flex justify-between">
                        <label class="font-bold text-custom-marron">Nombre de pers. :</label>
                        <div class="flex flex-col">
                            <div class="flex space-x-2">
                                <label class="text-custom-marron text-sm mt-1">Adultes :</label>
                                <div class="font-semibold text-custom-marron mt-0.5"> {{ $nombreAdultes }} </div>
                            </div>

                            <div class="flex space-x-2">
                                <label class="text-custom-marron text-sm mt-1">Enfants :</label>
                                <div class="font-semibold text-custom-marron mt-0.5"> {{ $nombreEnfants }} </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <label class="font-bold text-custom-marron">Extras :</label>
                    <div class="font-semibold text-custom-marron">  </div>
                </div>

                <div class="flex flex-col mt-4 space-y-2">
                    <hr class="border-1 h-0.5 bg-custom-marron">

                    <div class="flex justify-between">
                        <label class="font-black text-custom-marron uppercase text-xl">Total :</label>
                        <div class="font-black text-custom-marron text-xl"> {{ $cabane->prixTotal ?? 0 }} € </div>
                    </div>
                </div>

                <p class="italic text-sm">Taxes de séjour non incluses</p>
            </div>
        </div>
    </div>


@endsection

</body>
</html>


<script>
    var dejeunerAdulte = 0;
    var dejeunerEnfant = 0;
    var dinerAdulte = 0;
    var dinerEnfant = 0;

    function addDejAdulte(){
        dejeunerAdulte++;
       document.getElementById("dejeunerAdulte").innerHTML = dejeunerAdulte;
    }

    function addDejEnfant(){
           dejeunerEnfant++;
      
       document.getElementById("dejeunerEnfant").innerHTML = dejeunerEnfant;
       
    }

    function addDinAdulte(){
        dinerAdulte++;
       document.getElementById("dinerAdulte").innerHTML = dinerAdulte;
    }

    function addDinEnfant(){
           dinerEnfant++;
      
       document.getElementById("dinerEnfant").innerHTML = dinerEnfant;
       
    }

    function substractDejAdulte(){
        if (dejeunerAdulte > 0) {
            dejeunerAdulte--;
    }
       document.getElementById("dejeunerAdulte").innerHTML = dejeunerAdulte;
    }

    function substractDejEnfant(){
        if (dejeunerEnfant > 0) {
            dejeunerEnfant--;
    }
      document.getElementById("dejeunerEnfant").innerHTML = dejeunerEnfant;
    }

    function substractDinAdulte(){
        if (dinerAdulte > 0) {
        dinerAdulte--;
    }
       document.getElementById("dinerAdulte").innerHTML = dinerAdulte;
    }

    function substractDinEnfant() {
    if (dinerEnfant > 0) {
        dinerEnfant--;
    }
    document.getElementById("dinerEnfant").innerHTML = dinerEnfant;
}

    </script>