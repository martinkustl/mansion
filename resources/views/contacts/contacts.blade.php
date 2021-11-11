@extends ('layouts.page')

@section('title')
    Kontakty
@endsection

@section('content')

@section('pageHeading')
    Kontakty
@endsection

<address>
    <ul class="contacts-list">
        <li class="card mb-3 c-contacts-card">
            <div class="row g-0 p-2">
                <div class="col-2 col-md-1 d-flex justify-content-center align-items-center">
                    <i class="bi bi-telephone-fill" style="font-size: 2rem;"></i>
                </div>
                <div class="col-9 col-md-11 d-flex flex-column justify-content-center">
                    <div>
                        Naváhejte nás kontaktovat na email:
                    </div>
                    <a
                        class="c-contacts-link"
                        href="mailto:studentsky-projekt@email.com"><strong>studentsky-projekt@email.com</strong></a>
                    <div>
                        Nebo volejte na číslo:
                    </div>
                    <strong>894465</strong>
                </div>
            </div>
        </li>
        <li class="card mb-3 c-contacts-card">
            <div class="row g-0 p-2">
                <div class="col-2 col-md-1 d-flex justify-content-center align-items-center">
                    <i class="bi bi-house-door-fill" style="font-size: 2rem;"></i>
                </div>
                <div class="col-9 col-md-11 d-flex flex-column justify-content-center">
                    <div>
                        Také nás můžete navštívit na adrese:
                    </div>
                    <strong>
                        Kamýcká 959 <br/>
                        165 00 Praha-Suchdol
                    </strong>
                </div>
            </div>
        </li>

    </ul>
    <div class="c-contacts-map" id="map"></div>
</address>
<script>
    const map = L.map('map').setView([50.131057916040376, 14.373234719357779], 18);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([50.131057916040376, 14.373234719357779]).addTo(map)
</script>
@endsection
