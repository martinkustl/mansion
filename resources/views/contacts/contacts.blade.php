@extends ('layouts.page')

@section('title')
    Kontakty
@endsection

@section('content')

@section('pageHeading')
    Kontakty
@endsection
<li class="card mb-3 c-contacts-card">
    <address class="col-12 card-body">
        Naváhejte nás kontaktovat na email: <a
            class="c-contacts-link"
            href="mailto:studentsky-projekt@email.com"><strong>studentsky-projekt@email.com</strong></a>
        <br/>
        Nebo volejte na číslo: <strong>894465</strong> <br/>
        <br/>
        Také nás můžete navštívit na adrese: <br/>
        <strong>
            Kamýcká 959 <br/>
            165 00 Praha-Suchdol
        </strong>
    </address>
    <div class="c-contacts-map" id="map"
    >
    </div>
</li>

<script>
    const map = L.map('map').setView([50.131057916040376, 14.373234719357779], 18);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([50.131057916040376, 14.373234719357779]).addTo(map)
</script>
@endsection
