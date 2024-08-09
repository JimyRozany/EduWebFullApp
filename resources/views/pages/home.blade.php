@extends('../layout/master');

@section('page-title',"Home")

@section('content')
           <!--
        - #HERO
      -->

            <section class="section hero has-bg-image" id="home" aria-label="home"
                style="background-image: url('./assets/images/hero-bg.svg')">
                <div class="container">
                    <div class="hero-content">

                        <h1 class="h1 section-title">
                            The Best Program to <span class="span">Enroll</span> for Exchange
                        </h1>

                        <p class="hero-text">
                            Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.
                        </p>

                        <a href="#" class="btn has-before">
                            <span class="span">Find courses</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>



                    <figure class="hero-banner">

                        <div class="img-holder one" style="--width: 270; --height: 300;">
                            <img src="./assets/images/hero-banner-1.jpg" width="270" height="300"
                                alt="hero banner" class="img-cover">
                        </div>

                        <div class="img-holder two" style="--width: 240; --height: 370;">
                            <img src="./assets/images/hero-banner-2.jpg" width="240" height="370"
                                alt="hero banner" class="img-cover">
                        </div>

                        <img src="./assets/images/hero-shape-1.svg" width="380" height="190" alt=""
                            class="shape hero-shape-1">

                        <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt=""
                            class="shape hero-shape-2">

                    </figure>

                </div>
            </section>



            <!--
        - #CATEGORY
      -->

            <section class="section category" aria-label="category">
                <div class="container">

                    <p class="section-subtitle">Categories</p>

                    <h2 class="h2 section-title">
                        Online <span class="span">Classes</span> For Remote Learning.
                    </h2>

                    <p class="section-text">
                        Consectetur adipiscing elit sed do eiusmod tempor.
                    </p>

                    <ul class="grid-list">

                        <li>
                            <div class="category-card" style="--color: 170, 75%, 41%">

                                <div class="card-icon">
                                    <img src="./assets/images/category-1.svg" width="40" height="40"
                                        loading="lazy" alt="Online Degree Programs" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#" class="card-title">Online Degree Programs</a>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                                </p>

                                <span class="card-badge">7 Courses</span>

                            </div>
                        </li>

                        <li>
                            <div class="category-card" style="--color: 351, 83%, 61%">

                                <div class="card-icon">
                                    <img src="./assets/images/category-2.svg" width="40" height="40"
                                        loading="lazy" alt="Non-Degree Programs" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#" class="card-title">Non-Degree Programs</a>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                                </p>

                                <span class="card-badge">4 Courses</span>

                            </div>
                        </li>

                        <li>
                            <div class="category-card" style="--color: 229, 75%, 58%">

                                <div class="card-icon">
                                    <img src="./assets/images/category-3.svg" width="40" height="40"
                                        loading="lazy" alt="Off-Campus Programs" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#" class="card-title">Off-Campus Programs</a>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                                </p>

                                <span class="card-badge">8 Courses</span>

                            </div>
                        </li>

                        <li>
                            <div class="category-card" style="--color: 42, 94%, 55%">

                                <div class="card-icon">
                                    <img src="./assets/images/category-4.svg" width="40" height="40"
                                        loading="lazy" alt="Hybrid Distance Programs" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#" class="card-title">Hybrid Distance Programs</a>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                                </p>

                                <span class="card-badge">8 Courses</span>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>


@endsection