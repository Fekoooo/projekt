<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tripify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="img/icon-deal.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="{{ route('fooldal') }}" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Tripify</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('fooldal') }}" class="nav-item nav-link">Főoldal</a>
                        <a href="{{ route('trips.index') }}" class="nav-item nav-link active">Utazások</a>
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

                            .custom-login-button {
                                background-color: #00B98E;
                                color: #fff;
                                padding: 10px 20px;
                                border-radius: 5px;
                                text-decoration: none;
                                font-weight: bold;
                                display: inline-block;
                                transition: background-color 0.3s ease;
                            }

                            .custom-login-button:hover {
                                background-color: #00B98E;
                            }
                        </style>
                        @if (Auth::check())
                            <a href="{{ route('dashboard') }}" class="button">
                                <img src="img/avatar.png" alt="Profilkép" id="avatar">
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="custom-login-button">Bejelentkezés</a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>

        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Elérhető Utazások</h1>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2"></div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <div class="container">
            <div class="row g-4">
                @foreach($trips as $trip)
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#tripModal{{ $trip->id }}">
                                    <img class="img-fluid" src="{{ $trip->image_url }}" alt="{{ $trip->destination }}">
                                </a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $trip->transport }}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $trip->destination }}</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">{{ $trip->price }} Ft/2 Főre</h5>
                                <p><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $trip->departure_date }} - {{ $trip->arrival_date }}</p>
                                <p><i class="fa fa-clock text-primary me-2"></i>{{ $trip->duration }} nap</p>
                                <p>{{ $trip->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="tripModal{{ $trip->id }}" tabindex="-1" aria-labelledby="tripModalLabel{{ $trip->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tripModalLabel{{ $trip->id }}">Foglalás: {{ $trip->destination }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('trips.book') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                                        @if(Auth::check())
                                            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                        @else
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Név</label>
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                        @endif
                                        <div class="mb-3">
                                            <label for="start_date" class="form-label">Indulási dátum</label>
                                            <input type="date" class="form-control" name="start_date" value="{{ $trip->departure_date }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="end_date" class="form-label">Érkezési dátum</label>
                                            <input type="date" class="form-control" name="end_date" value="{{ $trip->arrival_date }}" readonly>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Foglalás</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5"></div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="{{ route('fooldal') }}">Tripify</a>, Minden jog fenntartva.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
