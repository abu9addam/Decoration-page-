<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Decoration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-img">
            <nav class="navbar navbar-expand-lg bg-dark " dir="ltr">
                <div class="container-fluid">
                    <a class="navbar-brand text-warning" href="#">DC Decoration</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#DecorationMenu" aria-controls="DecorationMenu" aria-expanded="false"
                        aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end d-flex" id="DecorationMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning " aria-current="page" href="#">الصفحة الرئيسية</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning" href="#">من نحن؟</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning" href="#">زبائننا المميزين</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning" href="#">أعمالنا الاخيره</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning" href="#">للتواصل</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item mx-3">
                                        <a href="{{ url('/Home') }}" class="nav-link text-warning">Home</a>
                                    </li>
                                @else
                                    <li class="nav-item mx-3">
                                        <a href="{{ Route('login') }}" class="nav-link text-warning">دخول</a>
                                    </li>
                                    @if (route::has('register'))
                                        <li class="nav-item mx-3">
                                            <a href="{{ Route('register') }}" class="nav-link text-warning">تسجيل</a>
                                        </li>
                                    @endif
                                @endauth
                            @else
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
    <div class="row my-3 justify-content-between mx-1 p-2">
        <div class="card py-2" style="width: 18rem;">
            <img src="{{ asset('DC_Img/chairs/ch_6.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chairs</h5>
                <p class="card-text">the wooden chairs is the most beatifull interior designs , with a creative shape u
                    will have a unieq items in ure home. </p>
                <a href="#" class="btn btn-warning">see more</a>
            </div>
        </div>
        <div class="card py-2" style="width: 18rem;">
            <img src="{{ asset('DC_Img/tables/ward_3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cabinet</h5>
                <p class="card-text">A cabinet is a piece of furniture that has doors and drawers and is often used for
                    storage.</p>
                <a href="#" class="btn btn-warning">see more</a>
            </div>
        </div>
        <div class="card py-2" style="width: 18rem;">
            <img src="{{ asset('DC_Img/chairs/ch_8.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sofa</h5>
                <p class="card-text">A sofa is a long, comfortable seat with a back and usually with arms, which two or
                    three people can sit on.</p>
                <a href="#" class="btn btn-warning">see more</a>
            </div>
        </div>
        <div class="card py-2" style="width: 18rem;">
            <img src="{{ asset('DC_Img/cladding/cladding_4.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cladding</h5>
                <p class="card-text">A Cladding is a room or part of a room get new wooden decore thats make it special
                    in creative designes
                </p>
                <a href="#" class="btn btn-warning">see more</a>
            </div>
        </div>
</body>

</html>
