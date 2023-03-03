@extends('layouts.frontend')

@section('content')
    <div class="container py-5">
        <div class="mb-5">
            <h3 class="text-center">Választható szállítási módok</h3>
            <p class="text-center">Webáruházunkban a megrendelés leadása során az alábbi szállítási módok közül választhatsz:</p>
        </div>
        <div class="mb-5">
            <h4>Házhozszállítás futárszolgálattal</h4>
            <p>
                Az ország egész területére megrendelheted a kiválaszott termékeket házhoz szállítással. A kiszállítást a GLS
                futárszolgálat végzi, Magyarország területére a szállítási költséget 100 000 Ft vásárlási érték felett
                átvállaljuk. 100 000 Ft érték alatt a szállítás díja Magyarország területén belül 1290 Ft. Amennyiben a
                megrendelt termékek mindegyike nem érhető el egy üzletünkben (ezt a rendelés leadásakor láthatod), abban az
                esetben az boltok közti átszállítás 1 munkanappal hosszabbítja meg a kiszállítást. A csomagot a
                futárszolgálat a felvételtől számított 1-2 munkanapon belül szállítja ki a megadott címre, a felvételről a
                GLS futárszolgálat e-mailben küld értesítést.
            </p>
        </div>
        <div class="mb-5">
            <h4>Expressz kiszállítás Budapesten belül</h4>
            <p>
                Minden hétköznap 14:30-ig választható expressz kiszállításunk Budapest területére, budapesti üzletben
                készleten lévő termékek esetén. A szállítás költsége 1 990 Ft. Részletek
            </p>
        </div>
        <div class="mb-5">
            <h4>
                Személyes átvétel üzleteinkben</h4>
            <p>
                A megrendelt termékeket személyesen is átveheted budapesti, győri vagy debreceni üzletünk valamelyikében.
                Amennyiben a megrendeléskor az adott üzletben készleten volt a termék (ezt a rendelés leadásakor láthatod),
                azonnal átvehető. Egyéb esetekben át kell szállítanunk a terméket egy másik üzletünkből, illetve meg kell
                várnunk a beérkezését. Erről e-mailben értesítünk. Kérjük, ebben az esetben mindenképp várd meg az
                értesítésünket mielőtt elindulnál a kiválasztott üzletbe.
            </p>
        </div>
    </div>
@endsection
