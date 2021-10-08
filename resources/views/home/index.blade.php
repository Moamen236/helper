@extends('home.layout')

@section('title')
Helper
@endsection

@section('main')

    <div class="container">

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light pt-4">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('home/images/logo.svg') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </nav>
        {{-- navbar --}}

        {{-- banner --}}
        <div class="banner">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-text">
                        <h1>What concerns you about your health today?</h1>
                        <p>Check your symptoms and find out what could be causing them. It's fast, free and anonymous.</p>
                        <a href="#" class="btn main-btn">Start Checkup</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="article mt-60 mb-60 bg-white">
            <div class="row">
                <div class="col-lg-6">
                    <div class="article-img"></div>
                </div>
                <div class="col-lg-6">
                    <div class="article-text">
                        <span class="gray">Article</span>
                        <h1 class="my-4">Diseases : What you need to know about diseases</h1>
                        <a href="#" class="blue"> Read more </a><i class="fas fa-arrow-right ms-2 blue"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- banner --}}

        {{-- steps --}}
        <div class="steps mt-60 mb-60 bg-white">
            <div class="row">
                <div class="col-lg-8">
                    <div class="steps-text">
                        <h1 class="mb-4">Symptomate provides you with a fast and accurate health assessment</h1>
                        <ol>
                            <li class="circle">Enter your symptoms</li>
                            <li class="circle">Answer some simple questions</li>
                            <li class="circle">Done! Your assessment will reveal :
                                <ul>
                                    <li class="mb-2 mt-2"><i class="fas fa-check me-2 green"></i> possible causes of your symptoms</li>
                                    <li class="mb-2"><i class="fas fa-check me-2 green"></i> options for next steps</li>
                                    <li class="mb-2"><i class="fas fa-check me-2 green"></i> suggested lab tests</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="steps-img"></div>
                </div>
            </div>
        </div>
        {{-- steps --}}

        {{-- testimonial --}}
        <div class="testimonial">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="testimonial-text">
                        <h1 class="mb-5">Over 4 million people have already used Symptomate</h1>
                        <a href="#" class="btn main-btn">Start Checkup</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-quote single-item">
                        <div class="item">
                            <div class="qoute">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <p>Accurate diagnosis. The app encouraged me to visit my doctor before it was too late. Thanks so much!</p>
                            @for ($i = 0; $i <= 4; $i++ )
                            <i class="fas fa-star yellow"></i>
                            @endfor
                        </div>
                        <div class="item">
                            <div class="qoute">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <p>Accurate diagnosis. The app encouraged me to visit my doctor before it was too late. Thanks so much!</p>
                            @for ($i = 0; $i <= 4; $i++ )
                            <i class="fas fa-star yellow"></i>
                            @endfor
                        </div>
                        <div class="item">
                            <div class="qoute">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <p>Accurate diagnosis. The app encouraged me to visit my doctor before it was too late. Thanks so much!</p>
                            @for ($i = 0; $i <= 4; $i++ )
                            <i class="fas fa-star yellow"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- testimonial --}}

        {{-- contact --}}
        <div class="contact mt-60 mb-60">
            <div class="container">
                <h2 class="mb-4">Let’s Talk</h2>
                <div class="row">
                    <div class="col-lg-5">
                        <form action="#">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" placeholder="Your Comment"></textarea>
                            </div>
                            <button type="submit" class="btn main-btn float-end">Send Message</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- contact --}}

        <footer>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="copy">
                        <p class="mb-0">Diagnostic technology is powered by Symptomate</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="d-flex mb-0">
                        <li><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>

@endsection

