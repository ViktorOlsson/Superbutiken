#Superbutiken

Detta projektet använder sig av Lumen för att demonstrera kunskaper inom CRUD till kursen Molnbaserade webbapplikationer.

###Starta projektet
För att starta projektet så måste man klona ner eller ladda ner en zip av projektet. Navigera sedan till root mappen i projektet och skriv därefter: php -S localhost:8000 -t public för att starta en php server lokalt.
Det är även en bra idé att göra en composer install för att ladda ner alla paket/bibliotek som behövs för att köra programmet.

###Data till databasen
Om du vill ha färdig data i applikationen så finns det både seeding och migrations tillgängliga. Kör kommandot: php artisan migrate:refresh --seed för att göra nya migrations och återställ alla data som finns.

###Frontend
Applikationen behöver en frontend detta skapas själv eller så använder man det som finns tillgänglig via kursen.

###Köra appen med server och frontend
För att köra de båda delarna så behöver man starta den lokala php serverna och sedan öppna den html fil som finns i frontend mappen. Man behöver även ha den databas klar förslagsvis genom XAMPP. När alla dessa är igång så har du en fungerande Superbutik applikation.
