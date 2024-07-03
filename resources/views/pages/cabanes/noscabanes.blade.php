
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tout Là-Haut</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    
    <div class="bg-custom-vert h-screen w-full"> 

        <div class="flex flex-col justify-center items-center">
            <span class="font-bold text-white text-[40px] mt-8"> DÉCOUVREZ NOS CABANES </span>
            <hr class="border-t-4 border-custom-beige w-32 relative top-2 ">
        </div>
    
            <div class="justify-items-center grid grid-cols-2 gap-y-6 relative top-12">
    
                <a href="{{ route('cabane1') }}" class="relative group block overflow-visible ml-32">
            
                    <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/nid.png') }}" alt="Cabane Nid douillet">
                    <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                        <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                            <h3 class="text-3xl font-bold">Cabane Nid Douillet </h3>
                            <p class="text-lg font-normal">2 Pers. | 60m² | 8m de hauteur</p>
                        </div>
                    </div>
                </a>
                
                <a href="{{ route('cabane2') }}" class="relative group block overflow-visible mr-32">
                    <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/osmose.png') }}" alt="Cabane Osmose">
                    <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                        <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                            <h3 class="text-3xl font-bold">Cabane Osmose </h3>
                            <p class="text-lg font-normal">2 Pers. | 60m² | 8m de hauteur</p>
                        </div>
                    </div>
                </a>
                
                <a href="{{ route('cabane3') }}" class="relative group block overflow-visible ml-32">
                    <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/escapade.png') }}" alt="Cabane Escapade">
                    <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                        <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                            <h3 class="text-3xl font-bold">Cabane Escapade </h3>
                            <p class="text-lg font-normal">4 pers. | 85m² + îlot de 5m | 8m de hauteur</p>
                        </div>
                    </div>
                </a>
    
                <a href="{{ route('cabane4') }}" class="relative group block overflow-visible mr-32">
                    <img class="h-[200px] w-[250px] object-cover transition-opacity duration-300 ease-in-out group-hover:opacity-60" src="{{ Storage::url('images/eden.png') }}" alt="Cabane Eden">
                    <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out flex items-center justify-center">
                        <div class="absolute top-1/2 left-28 bg-opacity-70 p-4 rounded-md text-white whitespace-nowrap space-y-2 z-10 transform -translate-y-1/2">
                            <h3 class="text-3xl font-bold">Cabane Eden </h3>
                            <p class="text-lg font-normal">6 pers. | 110m² | 6m de hauteur</p>
                        </div>
                    </div>
                </a>
            
             </div>
          
    </div>







</body>
</html>