@include('frontend.components.footer_top')
<div class="shadow footer fixed-bottom mt-5">
    <div class="container-fluid">
        <div class="row my-2">
            <div class="col-9">
                <div>
                    <table>
                        <tr>
                            <th>Termékeink</th>
                            <th>Információk</th>
                            <th>Kapcsolat</th>
                        </tr>
                        <tr>
                            <td><a href="{{ asset('/frontend/iphones') }}">iPhone</a></td>
                            <td><a href="{{ asset('/frontend/footer_components/shops')}}">Üzletek</a></td>
                            <td><a href="{{ asset('/frontend/footer_components/aszf')}}">Általános Szerződési Feltételek</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ asset('/frontend/ipads') }}">iPad</a></td>
                            <td><a href="{{ asset('/frontend/footer_components/shops')}}">Szervíz</a></td>
                            <td><a href="{{ asset('/frontend/footer_components/info')}}">Vásárlási tájékoztató</a></td>

                        </tr>
                        <tr>
                            <td><a href="{{ asset('/frontend/macbooks') }}">MacBook</a></td>
                            <td><a href="{{ asset('/frontend/footer_components/shops')}}">Ügyfélszolgálat</a></td>
                            <td><a href="{{ asset('/frontend/footer_components/shipping')}}">Szállítási és fizetési tájékoztató</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-3 float-end justify-content-end d-flex align-items-center">
                <span class="me-2 fa-2x"><i class="bi bi-twitter"></i></span>
                <span class="me-2 fa-2x"><i class="bi bi-facebook"></i></span>
                <span class="fa-2x"><i class="bi bi-messenger"></i></span>
            </div>
        </div>
    </div>
</div>
