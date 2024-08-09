@extends('../layout/master');

@section('page-title', 'Courses')

@section('content')

    <!--
            - #COURSE
        -->

    <section class="section course" id="courses" aria-label="course">
        <div class="container">

            <p class="section-subtitle">Popular Courses</p>

            <h2 class="h2 section-title">Pick A Course To Get Started</h2>

            <ul class="grid-list">

                <li>
                    <div class="course-card" onclick="showPaymentCard(this)">

                        <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                            <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                                alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                        </figure>

                        <div class="abs-badge">
                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                            <span class="span">3 Weeks</span>
                        </div>

                        <div class="card-content">

                            <span class="badge">Beginner</span>

                            <h3 class="h3">
                                <button class="card-title">Build Responsive Real- World Websites with HTML and
                                    CSS</button>
                            </h3>

                            <div class="wrapper">

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <p class="rating-text">(5.0/7 Rating)</p>

                            </div>

                            <data class="price" value="29">$29.00</data>

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">8 Lessons</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">20 Students</span>
                                </li>

                            </ul>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card" onclick="showPaymentCard(this)">

                        <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                            <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
                                alt="Java Programming Masterclass for Software Developers" class="img-cover">
                        </figure>

                        <div class="abs-badge">
                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                            <span class="span">8 Weeks</span>
                        </div>

                        <div class="card-content">

                            <span class="badge">Advanced</span>

                            <h3 class="h3">
                                <button class="card-title">Java Programming Masterclass for Software
                                    Developers</button>
                            </h3>

                            <div class="wrapper">

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <p class="rating-text">(4.5 /9 Rating)</p>

                            </div>

                            <data class="price" value="49">$49.00</data>

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">15 Lessons</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">35 Students</span>
                                </li>

                            </ul>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card" onclick="showPaymentCard(this)">

                        <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                            <img src="./assets/images/course-3.jpg" width="370" height="220" loading="lazy"
                                alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                        </figure>

                        <div class="abs-badge">
                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                            <span class="span">3 Weeks</span>
                        </div>

                        <div class="card-content">

                            <span class="badge">Intermediate</span>

                            <h3 class="h3">
                                <button class="card-title">The Complete Camtasia Course for Content
                                    Creators</button>
                            </h3>

                            <div class="wrapper">

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <p class="rating-text">(4.9 /7 Rating)</p>

                            </div>

                            <data class="price" value="35">$35.00</data>

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">13 Lessons</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">18 Students</span>
                                </li>

                            </ul>

                        </div>

                    </div>
                </li>

            </ul>

            <button class="btn has-before" id="more-courses-btn" onclick="showMoreCoursesSection()">
                <span class="span">Browse more courses</span>

                <ion-icon id="more-courses-arrow" name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>

        </div>
    </section>

    <section class=" lang-course" id="lang-course" aria-label="course">
        <ul class="cards">
            <li>
                <a href="" class="card">
                    <!-- course image -->
                    <img src="https://images.pexels.com/photos/459403/pexels-photo-459403.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <!-- teacher image -->
                            <img class="card__thumb"
                                src="https://images.pexels.com/photos/712513/pexels-photo-712513.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" />
                            <div class="card__header-text">
                                <h3 class="card__title">Jessica Parker</h3>
                                <span class="card__status">1 hour ago</span>
                            </div>
                        </div>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores, blanditiis?
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <!-- course image -->
                    <img src="https://images.pexels.com/photos/4195504/pexels-photo-4195504.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <!-- teacher image -->
                            <img class="card__thumb"
                                src="https://images.pexels.com/photos/712513/pexels-photo-712513.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" />
                            <div class="card__header-text">
                                <h3 class="card__title">kim Cattrall</h3>
                                <span class="card__status">3 hours ago</span>
                            </div>
                        </div>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores, blanditiis?
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <!-- course image -->
                    <img src="https://images.pexels.com/photos/5905709/pexels-photo-5905709.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <!-- teacher image -->
                            <img class="card__thumb"
                                src="https://images.pexels.com/photos/712513/pexels-photo-712513.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" />
                            <div class="card__header-text">
                                <h3 class="card__title">Jessica Parker</h3>
                                <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>
                                <span class="card__status">1 hour ago</span>
                            </div>
                        </div>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores, blanditiis?
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <!-- course image -->
                    <img src="https://images.pexels.com/photos/6238039/pexels-photo-6238039.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <!-- teacher image -->
                            <img class="card__thumb"
                                src="https://images.pexels.com/photos/712513/pexels-photo-712513.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" />
                            <div class="card__header-text">
                                <h3 class="card__title">kim Cattrall</h3>
                                <span class="card__status">3 hours ago</span>
                            </div>
                        </div>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores, blanditiis?
                        </p>
                    </div>
                </a>
            </li>
        </ul>
    </section>




    <!--
        - #VIDEO
    -->

    <section class="video has-bg-image" aria-label="video" style="background-image: url('./assets/images/video-bg.png')">
        <div class="container">

            <div class="video-card">

                <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
                    <img src="./assets/images/video-banner.jpg" width="970" height="550" loading="lazy"
                        alt="video banner" class="img-cover">

                    <button class="play-btn" aria-label="play video">
                        <ion-icon name="play" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <img src="./assets/images/video-shape-1.png" width="1089" height="605" loading="lazy"
                    alt="" class="shape video-shape-1">

                <img src="./assets/images/video-shape-2.png" width="158" height="174" loading="lazy"
                    alt="" class="shape video-shape-2">

            </div>

        </div>
    </section>



        <!--
        - #STATE
      -->

            <section class="section stats" aria-label="stats">
                <div class="container">

                    <ul class="grid-list">

                        <li>
                            <div class="stats-card" style="--color: 170, 75%, 41%">
                                <h3 class="card-title">29.3k</h3>

                                <p class="card-text">Student Enrolled</p>
                            </div>
                        </li>

                        <li>
                            <div class="stats-card" style="--color: 351, 83%, 61%">
                                <h3 class="card-title">32.4K</h3>

                                <p class="card-text">Class Completed</p>
                            </div>
                        </li>

                        <li>
                            <div class="stats-card" style="--color: 260, 100%, 67%">
                                <h3 class="card-title">100%</h3>

                                <p class="card-text">Satisfaction Rate</p>
                            </div>
                        </li>

                        <li>
                            <div class="stats-card" style="--color: 42, 94%, 55%">
                                <h3 class="card-title">354+</h3>

                                <p class="card-text">Top Instructors</p>
                            </div>
                        </li>

                    </ul>

                </div>
            </section>





@endsection
