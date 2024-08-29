@extends('layouts.app')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

@section('navbar')
<div class="fixed z-10 w-full"> 
    <a href="{{ route('menu') }}" class="absolute top-8 left-8 bg-custom-vert bg-opacity-90 text-white py-2.5 px-3 border-none rounded-md w-12 text-base inline-block text-center"><i class="fa-solid fa-bars"></i></a>    
    <a class="absolute top-8 right-52 bg-gray-400 bg-opacity-65 text-white py-2.5 px-3 font-bold border-none inline-block text-center rounded w-12 tracking-wide text-base"> <i class="fa-solid fa-user"></i> </a> 
    <a href="{{ route('lang.switch', ['lang' => App::getLocale() === 'en' ? 'fr' : 'en']) }}" 
        class="absolute top-8 right-36 bg-gray-400 bg-opacity-65 text-white py-2.5 px-3 font-bold border-none inline-block text-center rounded w-12 tracking-wide text-base">
         {{ App::getLocale() === 'en' ? 'FR' : 'EN' }}
     </a>
     
    <a href="{{ route('reserver') }}" class="absolute top-8 right-6 bg-custom-vert bg-opacity-90 tracking-widest text-white py-3 px-3 border-none rounded w-30 font-semibold text-sm uppercase"> {{ __('content.reserver') }}  </a>  
</div>
@endsection


@section('main')


<div class="w-full h-screen bg-black"> 
    <video autoplay muted loop class="w-full h-screen object-cover opacity-50">
        <source src="{{ Storage::url('videos/videoaccueil.mp4') }}" type="video/mp4"  alt="Vidéo drone Martinique">
    </video>

<div class="flex flex-col items-center justify-center">
    <div class=" absolute top-10"> 
        <img class="w-64 h-64" src="{{ Storage::url('images/logoaccueil.png') }}" alt="Logo Tout-là-haut"> 
    </div>

        <div class="absolute max-w-3xl top-72 text-white font-bold text-center text-2xl"> 
           <div> {{ __('content.titre') }} </div>              
        <div class="mt-2 text-white font-light text-center text-base tracking-widest"> 
            {{ __('content.sous-titre') }}  
        </div>
        </div>  
        
        <div class="absolute right-1/2 top-96 bottom-0 mx-4 flex items-center justify-center">
            <hr class="w-0 h-24 border-l-2 border-white" />
        </div>
</div>                      
</div>

<div style="background-color:#F9F4EE" class="w-full h-[500px] ">

    <div class="flex flex-col justify-center items-center">
        <span class="font-bold text-custom-marron text-[40px] mt-8 uppercase">{{ __('content.domaine') }} </span>
        <hr class="border-t-4 border-custom-beige w-32 relative top-2 left-2">
    </div>


    <div class="flex space-x-28 flex-row items-center justify-center space-y-16">
         <p class="w-96 text-justify text-left mb-6">  
            {{ __('content.presentation') }}
         </p> 
     
        <p class="w-96 text-justify text-right">  

        <span class="text-custom-vert font-bold text-lg ml-28"> {{ __('content.engagement') }}</span>

       <br/> {{ __('content.responsable') }}
        </p> 
    </div>

</div>
 
<div class=" w-full h-screen bg-fixed bg-center bg-cover" alt="Cabane en bois" style="background-image: url('{{ Storage::url('images/imageparallax.png') }}');"></div>



<div class="bg-custom-vert h-screen w-full"> 

    <div class="flex flex-col justify-center items-center">
        <span class="font-bold text-white text-[40px] mt-8 uppercase"> {{ __('content.decouvrir') }} </span>
        <hr class="border-t-4 border-custom-beige w-32 relative top-2 ">
    </div>

        <div class="justify-items-center grid grid-cols-2 gap-y-6 relative top-12">

            <a href="{{ route('cabane1')}}" class="relative group block overflow-visible ml-32">
        
                <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/nid.png') }}" alt="Cabane Nid douillet">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                    <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                        <h3 class="text-3xl font-bold"> {{ __('content.nid douillet') }} </h3>
                        <p class="text-lg font-normal">2 {{ __('content.pax') }} | 60m² | 8m {{ __('content.hauteur') }}</p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('cabane2') }}" class="relative group block overflow-visible mr-32">
                <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/osmose.png') }}" alt="Cabane Osmose">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                    <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                        <h3 class="text-3xl font-bold">{{ __('content.osmose') }} </h3>
                        <p class="text-lg font-normal">2 {{ __('content.pax') }}  | 60m² | 8m {{ __('content.hauteur') }}</p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('cabane3') }}" class="relative group block overflow-visible ml-32">
                <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/escapade.png') }}" alt="Cabane Escapade">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                    <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                        <h3 class="text-3xl font-bold">{{ __('content.escapade') }} </h3>
                        <p class="text-lg font-normal">4 {{ __('content.pax') }}  | 85m² + {{ __('content.ilot') }}  | 8m {{ __('content.hauteur') }} </p>
                    </div>
                </div>
            </a>

            <a href="{{ route('cabane4') }}" class="relative group block overflow-visible mr-32">
                <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/eden.png') }}" alt="Cabane Eden">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                    <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                        <h3 class="text-3xl font-bold">{{ __('content.eden') }} </h3>
                        <p class="text-lg font-normal">6 {{ __('content.pax') }}  | 110m² | 6m {{ __('content.hauteur') }} </p>
                    </div>
                </div>
            </a>
        
         </div>
      
</div>

<div style="background-color:#F9F4EE" class="w-full h-screen"> 

    <div class="flex flex-col items-center justify-center">
        <span class="font-bold text-custom-marron text-[40px] mt-8 uppercase"> {{ __('content.plan') }} </span>
        <hr class="border-t-4 border-custom-beige w-32 relative top-2 ">

    </div>

            <div class=" flex justify-center"> 
                <img class="h-[550px] w-[800px]" src="{{ Storage::url('images/plandomaine.png') }}" alt="Plan du domaine">
            </div>

    </div>

@endsection

  
     
</body>
</html>