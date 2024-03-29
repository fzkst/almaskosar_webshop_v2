# Almáskosár webshop


## Leírás

Ez egy webshop, aminek backend és frontend része is Laravellel készült.

## Telepítési lépések

Előfeltételek:

* NodeJS 18.0.2
* Telepített MySQL / MariaDB

Telepítés:


Repó klónozása:
```bash
    git clone https://github.com/fzkst/almaskosar_webshop_v2.git
```


Mappaváltás a repóra:
```bash
    cd almaskosar_webshop_v2
```


Függőségek telepítése composer-el:
```bash
    composer install
```


Az .env.example fájlról készítsünk egy másolatot .env néven, és szerkesszük át, ha szükséges:

```
cp .env.example .env

PORT=8000             # Az alkalmazás ezen a proton fog futni
DB_HOST=localhost     # Az adatbázis ezen a szerveren fut (hostnév v. IP-cím)
DB_PORT=              # Az adatbázis ezen a porton figyel (üresen hagyva az alapértelmezett 3306)
DB_USERNAME=root      # Az adatbázis-kapcsolathoz használt felh. név
DB_PASSWORD=          # Az adatbázis-kapcsolathoz használt jelszó
DB_DATABASE=database  # Az adatbázis neve
```


Új alkalmazás-kulcs generálása:
```bash
    php artisan key:generate
```


Adatbázis migrációk futtatása:
```bash
    php artisan migrate
```


Adatbázis feltöltése adatokkal: (Nem szükséges, de így átláthatóbb a webshop működése, és tesztelhető).
```bash
    php artisan db:seed
```


## Az alkalmazás futtatása

```bash
    php artisan serve
```
Ezután az alkalmazás a http://localhost:8000 linken elérhető.
Az admin felület megtekintéséhez módosítani kell az adatbázisban az egyik felhasználó admin oszlop értékét 0-ról 1-re. 
Ha ezzel a felhasználóval jelentkezünk be, az admin felület fog megjelenni: http://localhost:8000/dashboard


### REST API

A REST API dokumentációja az alkalmazás részeként érhető el.

Az alkalmazás elindítása után, a böngészőben navigáljunk a http://localhost:8000/documentation oldalra, ahol megtalálható minden API végpont és a paraméterek leírása.
