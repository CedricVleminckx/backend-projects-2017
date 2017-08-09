# 1. Clonen van project
Voor gebruiksgemak doe je dit direct ergens op je locale server.
```
git clone https://git.ikdoeict.be/cedric.vleminckx/1617BDWD-Project.git
```
Hiermee krijg je het hele project gedownload op je systeem.


# 2. Installeer alles van composer
Ga in een command prompt naar de folder van de site(webStore)
Run daarin volgend commando
```
composer install
```
Dit zal alle nodige extensies downloaden en installeren.

# 3. Maak een database
Maak in de folder database, een nieuwe database aan genaamd webstore.sqlite .

# 4. Migrate en seed de database
Ga terug in het mapje van de root van de site.
Open een command prompt en typ de volgende commandos
```
php artisan migrate:refresh --seed
```

# 5. Generate new key
Dit heb je nodig om het geheel te laten werken!
```
php artisan key:generate
```

# 6. Link storage folder
Hiermee link je de storage/app/public zodat je aan alle foto's kan.
```
php artisan storage:link
```

# 7. Surf naar de site
Surf in je browser naar localhost/path naar de site
