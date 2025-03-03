<x-layout>
    <x-slot:heading>Welcome to our Website</x-slot:heading>
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active vh-100 bg-cover bg-center position-relative" style="background-image: url('/images/gym4.webp');">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </div>
            <div class="carousel-item vh-100 bg-cover bg-center position-relative" style="background-image: url('/images/gym3.webp');">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </div>
            <div class="carousel-item vh-100 bg-cover bg-center position-relative" style="background-image: url('/images/gym2.webp');">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-start">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 65px; height: 65px;">
                            <i class="fa fa-map-marker fs-3"></i>
                        </div>
                        <div class="ms-3">
                            <p class="mb-0">333 Middle Winchendon Rd, Rindge,</p>
                            <p class="mb-0">NH 03461</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-start">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 65px; height: 65px;">
                            <i class="fa fa-phone fs-3"></i>
                        </div>
                        <div class="ms-3">
                            <ul class="list-unstyled mb-0">
                                <li>125-711-811</li>
                                <li>125-668-886</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-start">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 65px; height: 65px;">
                            <i class="fa fa-envelope fs-3"></i>
                        </div>
                        <div class="ms-3">
                            <p class="mb-0 pt-2">Support.gymcenter@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="classes-section py-5 bg-black">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center">
                    <p class="text-danger fs-5">Our Classes</p>
                    <h2 class="text-white">WHAT WE CAN OFFER</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-black text-white">
                        <img src="{{ asset('images/class-1.jpg') }}" class="card-img-top" alt="Weightlifting">
                        <div class="card-body position-relative">
                            <h5 class="card-title text-danger">Weightlifting</h5>
                            <p class="card-text">STRENGTH</p>
                            <a href="#" class="btn btn-outline-light position-absolute bottom-0 end-0 m-3">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-black text-white">
                        <img src="{{ asset('images/class-2.jpg') }}" class="card-img-top" alt="Indoor cycling">
                        <div class="card-body position-relative">
                            <h5 class="card-title text-danger">Indoor cycling</h5>
                            <p class="card-text">Cardio</p>
                            <a href="#" class="btn btn-outline-light position-absolute bottom-0 end-0 m-3">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-black text-white">
                        <img src="{{ asset('images/class-3.jpg') }}" class="card-img-top" alt="Kettlebell power">
                        <div class="card-body position-relative">
                            <h5 class="card-title text-danger">Kettlebell power</h5>
                            <p class="card-text">STRENGTH</p>
                            <a href="#" class="btn btn-outline-light position-absolute bottom-0 end-0 m-3">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card bg-black text-white">
                        <img src="{{ asset('images/class-4.jpg') }}" class="card-img-top" alt="Indoor cycling">
                        <div class="card-body position-relative">
                            <h4 class="card-title text-danger">Indoor cycling</h4>
                            <p class="card-text">Cardio</p>
                            <a href="#" class="btn btn-outline-light position-absolute bottom-0 end-0 m-3">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-black text-white">
                        <img src="{{ asset('images/class-5.jpg') }}" class="card-img-top" alt="Boxing">
                        <div class="card-body position-relative">
                            <h4 class="card-title text-danger">Boxing</h4>
                            <p class="card-text">Training</p>
                            <a href="#" class="btn btn-outline-light position-absolute bottom-0 end-0 m-3">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="class-time text-warningtable-section py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span>Find Your Time</span>
                        <h2 class="text-light">Find Your Time</h2>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="table-controls-gym">
                        <ul class="list-unstyled">
                            <li class="active" data-tsfilter="all">All event</li>
                            <li>Fitness tips</li>
                            <li>Motivation</li>
                            <li>Workout</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-gym table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="bg-dark"></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="class-time text-warning">6.00am - 8.00am</td>
                            <td class="hover-bg">WEIGHT LOOSE<br><span class="text-muted">RLefew D. Loee</span></td>
                            <td class="hover-bg">Cardio<br><span class="text-muted">RLefew D. Loee</span></td>
                            <td class="hover-bg">Yoga<br><span class="text-muted">Keaf Shen</span></td>
                            <td class="hover-bg">Fitness<br><span class="text-muted">Kimberly Stone</span></td>
                            <td></td>
                            <td class="hover-bg">Boxing<br><span class="text-muted">Rachel Adam</span></td>
                            <td class="hover-bg">Body Building<br><span class="text-muted">Robert Cage</span></td>
                        </tr>
                        <tr>
                            <td class="class-time text-warning">10.00am - 12.00pm</td>
                            <td></td>
                            <td class="hover-bg">Fitness<br><span class="text-muted">Kimberly Stone</span></td>
                            <td class="hover-bg">WEIGHT LOOSE<br><span class="text-muted">RLefew D. Loee</span></td>
                            <td class="hover-bg">Cardio<br><span class="text-muted">RLefew D. Loee</span></td>
                            <td class="hover-bg">Body Building<br><span class="text-muted">Robert Cage</span></td>
                            <td class="hover-bg">Karate<br><span class="text-muted">Donald Grey</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="class-time text-warning">5.00pm - 7.00pm</td>
                            <td class="hover-bg">Boxing<br><span class="text-muted">Rachel Adam</span></td>
                            <td class="hover-bg">Karate<br><span class="text-muted">Donald Grey</span></td>
                            <td class="hover-bg">Body Building<br><span class="text-muted">Robert Cage</span></td>
                            <td></td>
                            <td class="hover-bg">Yoga<br><span class="text-muted">Keaf Shen</span></td>
                            <td class="hover-bg">Cardio<br><span class="text-muted">RLefew D. Loee</span></td>
                            <td class="hover-bg">Fitness<br><span class="text-muted">Kimberly Stone</span></td>
                        </tr>
                        <tr>
                            <td class="class-time text-warning">7.00pm - 9.00pm</td>
                            <td class="hover-bg">Cardio<br><span class="text-muted">RLefew D. Loee</span></td>
                            <td></td>
                            <td class="hover-bg">Boxing<br><span class="text-muted">Rachel Adam</span></td>
                            <td class="hover-bg">Yoga<br><span class="text-muted">Keaf Shen</span></td>
                            <td class="hover-bg">Karate<br><span class="text-muted">Donald Grey</span></td>
                            <td class="hover-bg">Boxing<br><span class="text-muted">Rachel Adam</span></td>
                            <td class="hover-bg">WEIGHT LOOSE<br><span class="text-muted">RLefew D. Loee</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="vh-100 d-flex justify-content-center align-items-center text-center text-white position-relative"
            style="background-image: url(/images/banner-bg.jpg); background-size: cover; background-position: center;">

        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>

        <div class="container position-relative">
            <h2 class="display-4 fw-bold mb-4 text-uppercase">Registration now to get more deals</h2>
            <p class="fs-4 mb-4 text-light">Where health, beauty and fitness meet.</p>
            <a href="#" class="btn btn-outline-warning btn-lg">Appointment</a>
        </div>
    </section>
    <section class="py-5 bg-black text-white text-center">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-uppercase text-danger">Our Plan</span>
                <h2 class="fw-bold">Choose your pricing plan</h2>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6 mb-4 ">
                    <div class="card text-center h-100  border border-warning shadow" style="border-radius:250px 0 250px 0;">
                        <div class="card-body bg-black text-white">
                            <h3 class="card-title fs-2 mb-3">Class drop-in</h3>
                            <h2 class="text-warning fw-bold  display-4 mb-2">$39.0</h2>
                            <p class="text-warning fs-5">SINGLE CLASS</p>
                            <ul class="list-unstyled mb-4">
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="#" class="btn btn-outline-warning btn-lg mb-3">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center h-100  border border-warning shadow" style="border-radius:0 250px 0 250px  ; ">
                        <div class="card-body bg-black text-white">
                            <h3 class="card-title fs-2 mb-3">12 Month unlimited</h3>
                            <h2 class="text-warning fw-bold display-4 mb-2">$99.0</h2>
                            <p class="text-warning fs-5">SINGLE CLASS</p>
                            <ul class="list-unstyled mb-4">
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="#" class="btn btn-outline-warning btn-lg mb-3">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center h-100  border border-warning shadow" style="border-radius:250px 0 250px 0 ; ">
                        <div class="card-body bg-black text-white">
                            <h3 class="card-title fs-2 mb-3">6 Month unlimited</h3>
                            <h2 class="text-warning fw-bold display-4 mb-2">$59.0</h2>
                            <p class="text-warning fs-5">SINGLE CLASS</p>
                            <ul class="list-unstyled mb-4">
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="#" class="btn btn-outline-warning btn-lg mb-3">Enroll now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="team-section bg-black py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <p class="text-danger">Our Team</p>
                    <h2 class="text-white">TRAIN WITH EXPERTS</h2>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-lg-end">
                    <a href="#" class="btn btn-outline-danger">Appointment</a>
                </div>
            </div>
            <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-dark text-white border-0">
                                    <img src="{{ asset('images/team-1.jpg')}}" class="card-img" alt="Athart Rachel">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3"
>
                                        <h4 class="card-title">Athart Rachel</h4>
                                        <span class="text-danger">Gym Trainer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-dark text-white border-0">
                                    <img src="{{ asset('images/team-2.jpg')}}" class="card-img" alt="Athart Rachel">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                                        <h4 class="card-title">Athart Rachel</h4>
                                        <span class="text-danger">Gym Trainer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-dark text-white border-0">
                                    <img src="{{ asset('images/team-3.jpg')}}" class="card-img" alt="Athart Rachel">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                                        <h4 class="card-title">Athart Rachel</h4>
                                        <span class="text-danger">Gym Trainer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-dark text-white border-0">
                                    <img src="{{ asset('images/team-4.jpg')}}" class="card-img" alt="Athart Rachel">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                                        <h4 class="card-title">Athart Rachel</h4>
                                        <span class="text-danger">Gym Trainer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-dark text-white border-0">
                                    <img src="{{ asset('images/team-5.jpg')}}" class="card-img" alt="Athart Rachel">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                                        <h4 class="card-title">Athart Rachel</h4>
                                        <span class="text-danger">Gym Trainer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-dark text-white border-0">
                                    <img src="{{ asset('images/team-6.jpg')}}" class="card-img" alt="Athart Rachel">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                                        <h4 class="card-title">Athart Rachel</h4>
                                        <span class="text-danger">Gym Trainer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="testimonial-section py-5 bg-black">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h2 class="text-danger">Doctors</h2>
                    <p class="text-white">Our clients say</p>
                </div>
            </div>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('images/testimonial-1.jpg')}}" class="rounded-circle mb-3" alt="" style="width: 200px; height: 200px;">
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h5 class="text-white">Marshmello Gomez</h5>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('images/testimonial-2.jpg')}}" class="rounded-circle mb-3" alt="" style="width: 200px; height: 200px;">
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h5 class="text-white">John Doe</h5>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


</x-layout>