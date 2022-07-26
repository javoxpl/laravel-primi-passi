Esercizio di oggi:
nome repo: laravel-primi-passi
Ciao ragazzi,
oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!
Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando:
composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi
(apriamo quindi la cartella creata con vscode)
oppure
creiamo prima la cartella laravel-primi-passi (che possiamo già aprire con vscode) e poi al suo interno lanciamo il comando:
composer create-project --prefer-dist laravel/laravel:^7.0 .
Al termine dell'installazione, entriamo nella cartella del progetto (se non ci troviamo già lì)
cd laravel-primi-passi
e avviamo l'artisan serve con uno di questi due comandi:
php artisan serve oppure php -S localhost:8000 -t public
A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World.
Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine.
