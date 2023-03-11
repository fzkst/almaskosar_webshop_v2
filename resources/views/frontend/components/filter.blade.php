<div class="row filter p-2">
    <form action="{{ url('filter')}} " method="GET" enctype="multipart/form-data">
        @csrf
        <div class="card p-3 w-100">
            <div>
                <h6 class="fw-bold ms-4">Modell</h6>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" name="iPhone14promax" value="iPhone 14 Pro Max" id="iphone14promax">
                <label class="form-check-label ms-1" for="iphone14promax">iPhone 14 Pro Max</label>
            </div>
            <div class="mb-1">
                <input class="form-check-control" type="checkbox" name="iPhone14pro" value="iPhone 14 Pro" id="iphone14pro">
                <label class="form-check-label ms-1" for="iphone14pro">iPhone 14 Pro</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" name="iPhone14plus" value="iPhone 14 Plus" id="iphone14plus">
                <label class="form-check-label ms-1" for="iphone14plus">iPhone 14 Plus</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" name="iPhone14" value="iPhone 14" id="iphone14">
                <label class="form-check-label ms-1" for="iphone14">iPhone 14</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" name="iPhone13" value="iPhone 13" id="iphone13">
                <label class="form-check-label ms-1" for="iphone13">iPhone 13</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" name="iPhone13mini" value="iPhone 13 Mini" id="iphone13mini">
                <label class="form-check-label ms-1" for="iphone13mini">iPhone 13 Mini</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" name="iPhone12" value="iPhone 12" id="iphone12">
                <label class="form-check-label ms-1" for="iphone12">iPhone 12</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" name="iPhonese" value="iPhone SE" id="iphoneSE">
                <label class="form-check-label ms-1" for="iphoneSE">iPhone SE</label>
            </div>
        </div>

        <div class="card p-3 w-100 mt-3">
            <div>
                <h6 class="fw-bold ms-4">Tárhely</h6>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="64gb">
                <label class="form-check-label ms-1" for="64gb">64 GB</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="128gb">
                <label class="form-check-label ms-1" for="128gb">128 GB</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="256gb">
                <label class="form-check-label ms-1" for="256gb">256 GB</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="512gb">
                <label class="form-check-label ms-1" for="512gb">512 GB</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="1tb">
                <label class="form-check-label ms-1" for="1tb">1 TB</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="2tb">
                <label class="form-check-label ms-1" for="2tb">2 TB</label>
            </div>
        </div>

        <div class="card p-3 w-100 mt-3">
            <div>
                <h6 class="fw-bold ms-4">Színek</h6>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="melylila">
                <label class="form-check-label ms-1" for="melylila">Mélylila</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="arany">
                <label class="form-check-label ms-1" for="arany">Arany</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="ezust">
                <label class="form-check-label ms-1" for="ezust">Ezüst</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="asztrofekete">
                <label class="form-check-label ms-1" for="asztrofekete">Asztrofekete</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="kek">
                <label class="form-check-label ms-1" for="kek">Kék</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="lila">
                <label class="form-check-label ms-1" for="lila">Lila</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="ejfekete">
                <label class="form-check-label ms-1" for="ejfekete">Éjfekete</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="csillagfeny">
                <label class="form-check-label ms-1" for="csillagfeny">Csillagfény</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="productred">
                <label class="form-check-label ms-1" for="productred">(PRODUCT)RED</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="rozsaszin">
                <label class="form-check-label ms-1" for="rozsaszin">Rózsaszín</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="zold">
                <label class="form-check-label ms-1" for="zold">Zöld</label>
            </div>
            <div class="mb-1">
                <input class="form-check-input" type="checkbox" id="feher">
                <label class="form-check-label ms-1" for="feher">Fehér</label>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Szűrés</button>
        </div>
    </form>


</div>
