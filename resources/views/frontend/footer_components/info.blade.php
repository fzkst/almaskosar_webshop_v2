@extends('layouts.frontend')

@section('content')
    <div class="container tajekoztato py-4">
        <h2 class="text-center py-4">Vásárlási tájékoztató</h2>
        <div>
            <ol>
                <li>
                    A vásárlás megkezdése előtt Önnek el kell döntenie, hogy regisztrál-e az Almáskosár
                    webáruházában, vagy regisztráció nélkül kíván vásárolni. Amennyiben Ön előreláthatólag gyakran látogat
                    majd vissza a webáruházba, célszerű regisztrálnia, mert így nem kell minden egyes alkalommal megadnia
                    személyes adatait, szállítási címét. Amennyiben regisztrál első alkalommal történő vásárláshoz, úgy a
                    bejelentkezéshez előbb a REGISZTRÁCIÓ menüpontban megadottak szerint kell eljárnia. A későbbi
                    vásárláshoz a regisztráció során megadott felhasználónévvel és jelszóval kell bejelentkeznie a
                    BEJELENTKEZÉS menüpontban.
                </li><br>
                <li>
                    A webáruházban az egyes termékek termékcsoportokba rendezve találhatók.
                </li><br>
                <li>
                    Az Önt érdeklő termékcsoportot a megfelelő ikonra vagy linkre kattintva választhatja ki.
                </li><br>
                <li>
                    A termékcsoportból megrendelni kívánt terméket a termék ikonjára vagy linkjére kattintva választhatja
                    ki.
                </li><br>
                <li>
                    Egyes termékek esetében ezt követően lehetősége van a kiválasztott termék testre szabására.
                </li><br>
                <li>
                    A terméket a KOSÁRBA RAK gomb megnyomásával helyezheti vásárlói kosarába.
                </li><br>
                <li>
                    Vásárlói kosara tartalmát a KOSÁR MEGTEKINTÉSE gomb megnyomását követően tekintheti át. A kosár
                    feltünteti az Ön által kiválasztott termékeket a megrendelni kívánt termékek darabszámát valamint nettó
                    és bruttó vételárát. A kosár megtekintésekor a megfelelő gomb kattintásával lehetősége van arra, hogy:
                    <ul><br>
                        <li>
                            egyes termékeket eltávolítson a kosarából,
                        </li><br>
                        <li>
                            módosítsa a megrendelni kívánt termékek darabszámát, illetve hogy
                        </li><br>
                        <li>
                            kiürítse a kosár tartalmát.
                        </li>
                    </ul><br>
                    Természetesen Önnek arra is lehetősége van, hogy vásárlását folytassa.
                </li><br>
                <li>
                    Amennyiben kiválasztotta a megrendelni kívánt termékeket, kattintson a TOVÁBB A PÉNZTÁRHOZ gombra.
                    Amennyiben Ön a bejelentkezéskor nem regisztrált, úgy a megrendeléshez és a teljesítéshez szükséges
                    adatait ezt követően kell megadnia.
                </li><br>
                <li>
                    Kérjük válassza ki a kívánt fizetési módot és ellenőrizze szállítási címét, melyet az Ön által a
                    regisztráció során megadottak szerint tartunk nyilván.
                </li><br>
                <li>
                    Amennyiben megrendelésével kapcsolatban bármilyen megjegyzése van, írja meg nekünk.
                </li><br>
                <li>
                    Amennyiben a megrendelése elkészült, kattintson a TEKINTSD ÁT MEGRENDELÉSED gombra, ezt követően
                    megtekintheti az elküldésre kész megrendelést.
                </li><br>
                <li>
                    Ekkor Önnek még mindig lehetősége van arra, hogy a RENDELÉS MÓDOSÍTÁSA gombra kattintva módosítsa:
                    <ul><br>
                        <li>
                            az adatbeviteli hibákat (pl. a szállítási és számlázási címmel kapcsolatban)
                        </li><br>
                        <li>
                            a kívánt fizetési és szállítási módot, valamint
                        </li><br>
                        <li>
                            a megrendelés (vásárlói kosár) tartalmát.
                        </li>
                    </ul><br>
                    Amennyiben megrendelését véglegesíteni szeretné, úgy kattintson a RENDELÉS ELKÜLDÉSE gombra.
                </li><br>
                <li>
                    A megrendelés elküldése után a rendszer e-mailben automatikusan visszaigazolja az Ön megrendelését. Ha
                    48 órán belül nem érkezik meg a visszaigazolás az Ön által megadott email-címre, akkor Ön mentesül az
                    ajánlati kötöttség alól. A megrendelés leadását követően megkezdjük a megrendelésben megjelölt termékek
                    begyűjtését a központi raktárkészletből. Amennyiben a megrendelt termék a központi raktárkészletéből
                    hiányzik, erről a megrendelést követő 48 órán belül megküldött emailben tájékoztatjuk Önt, ebben az
                    esetben Önnek lehetősége van megrendelését módosítani.
                </li><br>
                <li>
                    Önnek lehetősége van az elküldött megrendelés módosítására illetve visszavonására akkor is, ha ez nem a
                    megrendelt termék hiányával függ össze. Ebben az esetben a megrendelés módosítására illetve
                    visszavonására legkésőbb a rendelés leadása után 24 órán belül van lehetőség. A megrendelés módosítása a
                    kiszállítás időpontját módosíthatja.
                </li>
            </ol><br><br><br><br>
        </div>
    </div>
@endsection
