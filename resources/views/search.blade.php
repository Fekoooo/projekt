<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tripify - Keresési eredmények</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="{{ asset('img/icon-deal.png') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="{{ route('fooldal') }}" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="{{ asset('img/icon-deal.png') }}" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Tripify</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"></button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('fooldal') }}" class="nav-item nav-link">Főoldal</a>
                        <a href="{{ route('trips.index') }}" class="nav-item nav-link">Utazások</a>
                        <a href="{{ route('ingatlanok') }}" class="nav-item nav-link">Szállások</a>
                        <a href="{{ route('kontakt') }}" class="nav-item nav-link">Kapcsolat</a>
                    </div>
                    <div>
                        <style>
                            #avatar {
                                width: 50px;
                                height: 50px;
                                border-radius: 50%;
                            }
                        </style>
                        @if (Auth::check())
                            <a href="{{ route('dashboard') }}" class="button">
                                <img src="{{ asset('img/avatar.png') }}" alt="Profilkép" id="avatar">
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="button">Bejelentkezés</a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>

        <div class="container mt-4">
            <h1 class="display-5 mb-4">Keresési eredmények</h1>
            @if(isset($query))
                <h5 class="mb-4">Keresési eredmények: "{{ $query }}"</h5>
            @endif

            <div class="row g-4">
                @forelse($properties as $property)
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden shadow">
                            <div class="position-relative overflow-hidden">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal{{ $property->id }}">
                                    <img class="img-fluid" src="{{ asset($property->image_url) }}" alt="{{ $property->name }}">
                                </a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $property->type }}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $property->name }}</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">{{ $property->price }} Ft/éj</h5>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $property->location }}</p>
                                @if($property->bookings->isNotEmpty())
                                    <p class="text-danger">Foglaltság:</p>
                                    <ul>
                                        @foreach($property->bookings as $booking)
                                            <li>{{ $booking->start_date }} - {{ $booking->end_date }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p class="text-success">Szabad</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-danger">Nincs találat a keresésre.</p>
                @endforelse
            </div>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
