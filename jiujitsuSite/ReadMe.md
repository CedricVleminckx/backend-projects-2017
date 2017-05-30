# 1. Clonen van project
```
git clone https://cedric.vleminckx@git.ikdoeict.be/cedric.vleminckx/1617BDWD-Project.git
```
Hiermee krijg je het hele project gedownload op je systeem.
Wordt gedownload in folder waar je een git bash opent.


# 2. Installeer alles van composer
Ga in een command prompt naar de folder van de site(jiujitsuSite)
Run daarin volgend commando
```
composer install
```
Dit zal alle nodige extensies downloaden en installeren.

#3. Maak een database
Maak in de folder database een nieuwe database aan genaamd jiujitsu.sqlite .

#4. Migrate en seed de database
Ga terug in het mapje van de root van de site.
Open een command prompt en typ volgend commando
'''
php artisan migrate:refresh --seed
'''

# 3. Zet project op je locale server
Surf in je browser naar localhost/(path naar de folder op je lokale server).
Daar open je het mapje public.
