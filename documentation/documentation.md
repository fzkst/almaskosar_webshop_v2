Az Almaskosar Webshop projekt alkalmazás

FŐOLDAL 

![Fooldal](documentation/screenshots/shop/mainpage.jpg)

A főoldalon a felső menüsávon lehet választani három kategória közül.
Az Almáskosár pedig a főoldalra irányító gomb, ami bármelyik aloldalról működik.
A főoldalon bejelentkezés nélkül látható jobb felső sarokban a Belépés és a Regisztráció gomb.
A főoldalon az alsó sávban láthatóak a webshop termékei. 
A középső sávban látható egy navigációs sáv, ami a weboldal nevét tartalmazza balra igazítva, alatta pedig a navigációs sáv alsó részén a főbb termékcsoportokhoz lehetséges eljutni, úgy mint Mobiltelefonok, Táblagépek és Laptopok.
Alatta pedig a webshop kiemelt termékeinek a adatlapjai váltakoznak. (a backend részen állítható be a kiemeltek köre).
Az egyes termékek részletei gombra történő rákattintással megnyílik a termék adatlapja, ez működik bejelentkezés nélkül is.
A képernyő legalsó részén látható egy információs sáv a termékek kategóriáivál, információk gombbal, ahol pl. az üzletek gombra kattintva térképes információs aloldal nyílik meg, jelenleg egy üzlet található itt.

![Tajekoztato](documentation/screenshots/shop/shop-05 tajekoztato.jpg)

Mindhárom aloldal jelenleg ugyanarra az üzlet aloldalra visz (szervíz és ügyfélszolgálat).

A Kapcsolat menüpont alatt pedig az ÁSZF van, amire rákattintva kiadja a teljes ÁSZF aloldalt görgethetően. 

![ASZF](documentation/screenshots/shop/shop-04 aszf.jpg)

Itt található egy Vásárlási tájékoztató aloldal és egy Szállítási és fizetési tájékoztató aloldal, ami kattintásra megnyílik. 
Jobb alsó sarokban lévő connect gombok jelenleg nem működnek, inaktívak, mivel nincs ilyen fiók. 

![Fooldal](documentation/screenshots/shop/shop-06 szallitas.jpg)

Bejelnetkezés nélkül bármelyik termékcsoport nevére rákattintva behozza az adott termékcsoport listáját kis kártyánként. 
Bal oldalt található egy szűrés panel, amivel több különböző paraméter beállításával tudjuk szűkíteni a termékek keresését, listázását.

![Fooldal](documentation/screenshots/shop/shop-07 termekek.jpg)

Amennyiben nem található egyetlen termék sem a keresési feltételekhez, akkor az aloldal "Nem található olyan termék ami megfeleln a keresés ifeltételeknek! feliratot ír ki, és "Vissza" gombra kattintva az előző találati oldalra állhatunk vissza.

![Fooldal](documentation/screenshots/shop/shop-09 szures.jpg)

Az egyes termékek kártyáin a részletek gomb aktív, és rákattintva az adott termék aloldalára navigálhatunk. 

![Fooldal](documentation/screenshots/shop/shop-13 termekkartya.jpg)

Amennyiben az adott termékből nincsne készleten egyetlen darab sem, akkor a termék adatkártyájának jobb alsó sarkában található bevásárlókosár ikon inaktív.
Bal alsó sarkában a terméknek található a kosárba helyezendő mennyiség plusz minusz gombokkal állítható, de manuálisan is átírható szám értékre a textbox.

A termékek egyes részletes adatlapján a termékről rendelkezésre álló fényképek adott időközönként váltakoznak,  csúszka a kép alján mutatja, hogy éppen melyik képet mutatja, ill. ha az egérmutatót a képre pozíciónáljak, akkor az adott megáll slideshow működése felfüggesztésre kerül, az adott képet mutatja.
Bal oldali egér gombkattintására a képek pedig váltakoznak.

Középen a navigigációs sávon megjelenik az adott aloldal termékek közti elérési útja, és ezekre a bővebb termékkategóriákra kattintva is el lehet jutni a termékek keresési oldalára. 

Amennyibne nem vagyunk bejelentkezve, akkor a kosárba helyezés gombját megnyitva felugró üzenetben tájékoztat minket az oldal, hogy bejelentés szükséges a vásárláshoz, tehát ilynekor nem helyeződik a kosárba a termék.


REGISZTRÁCIÓ

![Fooldal](documentation/screenshots/shop/shop-16 regisztralas.jpg)


A regiszráció gombra kattinva a regiszrtációs aloldal jön be, ez reklámok nélkül, egy űrlap oldal, ahol a Név az Email a Jelszó és a jelszó újra történő begépéléshez szükséges űrlapok jelennek meg, mely felhasználóregisztrációt az Elküld gombbal tudjuk véglegesíteni.
Jelszó karatek pontokkal vannak titkosítva, helyettesítve. 

Nem engedi a form azt, hogy Név mező üresen maradjon, és úgy legyen elküldve. Email validáció is van beépítve, ami elvárja a @ karaktert, és ezt sem lehetséges elküldeni üresen. 

Amennyiben a két jelszó nem egyforma, akkor a jelszó ablak alatt egy angol üzenetben értesít (The password must be least 8 characters).
Legalább 8 karakteresnek kell lennie a jelszónak.

screenshot

Amennyiben sikeres az Elküld gomb, akkor visszairányít a főoldalra, és bejelentkezés is megtörténik. 

A vásárolandó mennyiség nem lehet több, mint amennyi éppen raktáron lévő mennyiségként mutat az adatlap. 

Felugró menübel jelző hogy az adott  termék SIkeresen hozzáadásra került a kosárhoz, amit az OK gombbal veheetünk tudomásul. Zöld pipa is jelzi.

screenshot

Az adatlap jobb alsó sarkán a Kosárba gomb felett jelzi a termék darab árát. 

A jobb felső sarokban tlaálható kosár gombra rákattintva bejön a kosár aloldal, mely kilistázza, hogy milyne termékből hány darabot kívánsz várásolni, ahol a mennyiséget is lehet változtatni, ill. törölni is lehet a termékeket. 
A vásárlandó termékek listájában látható a termék bélyegképet.

Amennyiben olyan termék adatlapján kattintunk ismét a kosár gombra, mint ameilyenből már van a kosarunkba helyezve, akkor felugró ablakban étresít minket az oldal, hogy ilyen termékból már van a kosaradban, és hogyha többet szeretnénk vásárolni ebből, akkor a megrendelsnél lehet módosítani a mennyiséget. 

screenshot

A kosár aloldalon a termékek törlés gombjára kattintva felugró ablak étrsít minket, hogy a törlés sikeres volt.
Kiíjra a bruttó vgösszeget, összesíti a rendelést. 

A pénztár gombra kattintva megjelenik a pénztár aloldal, ahol a számlázási adatokat lehet űrlapon megadni, úgy mint Vezetéknév Keresztnév, email iránytószám, város cím és telefonszám.
Amennyiben már korábban volt vásárlás, vagy a profilunkban már kitöltöttük az adatainkat, akkor ezek itt kitöldnek, és megjelennek, de módosíthatóak itt is.

Jobb oldalt látható ismét a terméklista, miből hány darab, és az összesen mennyi. 

A megrendelés leadásához a Számlázási adatok minden egyes űrlaprészének kitöltése kötelező, erről egy üzenetsáv értesít. 

screenshot

Megrendel gombra kattintva lehet leadni a megrendelést. 
Egy új aloldalban értesít minket az oldal, hogy Sikeresen leadva rendelésünk, Vásárlás folytatása gombra rákattintva főoldalra navigálhatunk.

A Felhasználó menüje a kosár mellett lenyílik, ahol Beállítások Rendeléseim és Kijelentkezés gomb található.

screenshot

Beállítások
Ezen az aloldalon a bejelentkezett felhasználó adatainak a formja látható, itt ha módosítunk valamelyik értéken, akkor a jobb felső sarokban léső módosítás gombra kattintva tudjuk az adatbázisba külden iaz adatokat. Egy új aloldalon mitatja, hogy az adatok módosítása sikeres, és a vásárlás folytatása gombbal ugyanúgy a főoldalra jutunk. 

A rendeléseim aloldalon látható az adott felhasználó összes rendelésének a kilistázása, Rendelés dátuma rendeléstzszám rendelés söszeget, és rendelés állapota. Megnéz gombra kattinva az egyes rendelések aloldalon  nyílink meg, részletesen mutatja, hogy milyen adatokkal és miket rendeltünk, emmyniért. Vissza gombra kattintva tudunk visszanavigálni a rendeléseink oldalra. 

A kijelentéekzés gombra kattintva pedig a főoldalra navigálunk, immáron kijelentkezve. 

Admin bejelentkezés:

Amennyiben admin jogú felhasználóval jelentkezünk be, úgy teljesen más dizájnú oldalt kapunk. Bal oldalt Dashboard kategóriák termékek fleaználók rendelések menüponokkal, és ezek alatt pedig a admin névvel. 
Rögtön a dashboard oldalra navigál az oldal. 
Itt látható az oldal felhaználóinak a száma, jelenleg hány különböző termék van feltöltve az oldalra. A felhasználók ki vannak listázva városonként. 

AMennyiben még nincs megadva a felhasználónak város, akkor ebben a listában nem szerepel.

Alacsony készletek listánál kilistázza azokat a termékeket, ahol 2 alatti a raktáron lévő rendelhető darabszám.
Itt látható a listában a termék id-ja Modellnév, a színe, és a jelnelegi készlet. 

screenshot

Kategóriák gombra kattintva az aloldalon új kategóriát tudunk hozzáadni.
Új kategória. űrlap jelenik meg, kategória megnevezése, táblanév, leírás, státusz kiemelt kategória checkboxok nem kötelezőek. Alul 1 db Kép feltöltése lehetséges. a Formok értékeinek megadása kötelező.
Hozzád gombra kattintva felugró menü értesít minket a sikeres hozzáadásról, amit OK gombbal nyugtázhatunk. 
A kateógriáknál a felvitt kategóriák listája látható, és azokról hashtag (id), név leírás kép, és két gomb, felső a szerkesztés aloldalra visz, míg a szemeteskuka pictogram pedig törli az adott kategóriát. Törlés esetén szintén felugró ablakban értesít a törlés siekrességéről, amelyet OK gombbal.
Kategória szerkesztésnél a képet újra be kell tallózni. 

screenshot

Termékek 
Kilistázza a termékeket, felül Új termék hozzáadása gombnál megjelenik. 
Az űrlap az minden kategóriánál ugyanaz, viszont amennyiben valamelyik tulajdonság nem értelmezhető az adott kategória esetében, úgy az az inputmező inaktívvá válik.

A termék listában is ugyanúgy kilistázza a tualjdonságokat, a készlet számot az árat, képet is mutatja bélyegképként, és ugyanúgy termékenként van szerkesztés s törlés gomb. 

A felhasználók:
A flehasználók gombra kattintva bejön a felhaználók aloldal, a felső Új felhasználó hozzáadása gombra kattintva megjelenik az űrlap aloldal, amit kitöltve a Hozzáad gombbal lehetséges a felhasználó hozzáadása. 
A Vevőkód mező is ebben az esetben kitölthető, megadható, ami alapesetben egy 5 jegyű szám. 
Ezen a felületen minden mező kitöltése kötelező a sikeres felhasználói hozzáadáshoz. 
Rendelések gomb is van a szerkesztés és törlés mellett, amire rákattintva megjelenik az adott felhasználó rendeléseinek aloldala, és a jobb oldalt a vissza gombra kattintva vissza lehet térni a felhasználói listához. 
AMennyiben nincsen még a felhaznáéónak rendelése, kiírja a listaelemek felett, hogy az ügyfél még ne madott le rendelést.

Az adott felhasználó rendeléseinél lehetséges szerkeszteni és törölni is lehet, valamint a részletek gombra kattintva meg lehet megnézni a rendelés részleteit.
A rendelés részletei oldal tetején a rendelés szekresztése gombra kattinva is el lehet jutni a rendelés szerkesztő aloldalra. 
Itt az űrlapon a felhasználó adott rendeléséhez tartozó adatok módosítása lehetséges.
Rendelés állapota felirat alatt a Teljesitve checkbox bepipálásával lehet teljesítetté módosítani az adott rendelést. 
Rendeléssel kapcsolatos üzeneteket itt lehet közölni a felhasználóval. Az ide beírt üzenet megjelenik a felhasználó rendelésének a részleteinél. 
A rendelt termékeket már nem lehet módosítani. 
A rendelés részleteinél a weboldal neve / négy jegyű azonosító a rendelés száma. 

A rendelések gombra kattintva pedig megjelenik a rendszerben regisztrált összes megrendelés egy listában. 
A rendelés részletei gombra ugyanazt arendelés részletezőt kapjuk, mint amit a flehasználó rendeléseiből érünk el. Innen is lehetséges szerkeszteni. 

Az admin nevére rákattintva pedig megjelenik egy navigációs lista, mely jelenelg egy elemből, a Kijelentkezés gombról áll. 
Arra rákattintva megjelenik a weboldal főoldala. 

admin felületen található ALmaskosár feliratra kattintva a weboldal főoldalát érhetjük el, és onnan újra a dashboardra pedig a böngésző dashboard elérési útjáról juthatunk el. 


