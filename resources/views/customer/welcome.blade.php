<x-layout>
    <x-slot:heading>Welcome to our Website</x-slot:heading>

    <div id="home" class="position-relative vh-100 d-flex flex-column align-items-center justify-content-center text-white text-center py-5" style="background-image: url(/images/banner.png); background-size: cover; background-position: center; margin: 0;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(53, 27, 15, 0.374); z-index: -1;"></div>
        <h2 class="fw-bold mb-2 z-2">Hi Coach!</h2>
        <h1 class="mb-2 z-2">STEP UP YOUR</h1>
        <h6 class="text-uppercase fw-bold mb-2 z-2" style="font-size: 50px; color: #f40b0b;">Fitness with us</h6>
        <h3 class="mb-2 z-2">Build Your Body And Fitness With Professional Touch</h3>
        <a href="#about" class="btn btn-lg btn-danger mt-3 px-4 py-2 z-2 shadow-lg"
        style="background-color: #FF1414; border-radius: 8px; font-size: 1.4rem; box-shadow: 5px 10px 30px rgba(255, 2, 2, 0.336);">
            Join Us
        </a>
    </div>
    <div id="about" class="container py-5">
        <div class="col-md-12 text-center">
            <h2 class="mb-3" style="font-size: 45px; color:#f40b0b">ABOUT US</h2>
            <p class="text-light fs-5 fw-bold">
                On our website you can find everything related to physical fitness, including clothing, equipment, dumbbells, gyms, coaches and doctors,
                to learn more ...
            </p>
            <div id="feature" class="container">
                <div class="d-flex justify-content-center gap-3 flex-wrap ">
                    <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                        <img src="{{ asset('images/1.svg') }}" alt="Feature 1" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h3 class="mb-3">Feature 1</h3>
                        <p>This is a description for Feature 1.</p>
                    </div>

                    <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                        <img src="{{ asset('images/2.svg') }}" alt="Feature 2" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h3 class="mb-3">Feature 2</h3>
                        <p>This is a description for Feature 2.</p>
                    </div>

                    <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                        <img src="{{ asset('images/3.svg') }}" alt="Feature 3" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h3 class="mb-3">Feature 3</h3>
                        <p>This is a description for Feature 3.</p>
                    </div>

                    <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                        <img src="{{ asset('images/4.svg') }}" alt="Feature 3" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h3 class="mb-3">Feature 4</h3>
                        <p>This is a description for Feature 4.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-3 mt-3 justify-content-center">
                <a href="/product" class="btn btn-outline-danger text-light" style="border-radius: 5px; min-width: 100px;">
                    Product
                </a>
                <a href="/gym" class="btn btn-outline-danger text-light" style="border-radius: 5px; min-width: 100px;">
                    Gym
                </a>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="mb-4">
                        <span class="text-danger">Check Your Body</span>
                        <h2 class="text-white">BMI CALCULATOR CHART</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dark table-bordered text-center">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-danger">BMI</th>
                                    <th class="bg-dark text-danger">Weight Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td>18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td>25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td>30.0 and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="mb-4">
                        <span class="text-danger">Check Your Body</span>
                        <h2 class="text-white">Calculate Your BMI</h2>
                    </div>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="container mt-5">
                        <form id="bmiForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="number" id="height" class="form-control bg-dark text-light" placeholder="Height (cm)" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" id="weight" class="form-control bg-dark text-light" placeholder="Weight (kg)" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" id="age" class="form-control bg-dark text-light" placeholder="Age" required>
                                </div>
                                <div class="col-md-6">
                                    <p id="result" class="form-control text-center bg-black text-light rounded">No result</p>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger w-100">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid bg-black py-4">
        <div class="row g-2">
            <div class="col-md-6">
                <div class="position-relative">
                    <img src="{{ asset('images/gallery-1.jpg') }}" class="img-fluid w-100" alt="Gallery Image 1"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="{{ asset('images/gallery-1.jpg') }}">
                    <a class="position-absolute top-50 start-50 translate-middle text-warning fs-1">
                        <i class="fa fa-picture-o"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative">
                    <img src="{{ asset('images/gallery-2.jpg') }}" class="img-fluid w-100" alt="Gallery Image 2"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="{{ asset('images/gallery-2.jpg') }}">
                    <a class="position-absolute top-50 start-50 translate-middle text-warning fs-1">
                        <i class="fa fa-picture-o"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative">
                    <img src="{{ asset('images/gallery-3.jpg') }}" class="img-fluid w-100" alt="Gallery Image 3"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="{{ asset('images/gallery-3.jpg') }}">
                    <a class="position-absolute top-50 start-50 translate-middle text-warning fs-1">
                        <i class="fa fa-picture-o"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative">
                    <img src="{{ asset('images/gallery-4.jpg') }}" class="img-fluid w-100" alt="Gallery Image 4"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="{{ asset('images/gallery-4.jpg') }}">
                    <i class="fa fa-picture-o thumb-icon"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative">
                    <img src="{{ asset('images/gallery-5.jpg') }}" class="img-fluid w-100" alt="Gallery Image 5"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="{{ asset('images/gallery-5.jpg') }}">
                    <i class="fa fa-picture-o thumb-icon"></i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative">
                    <img src="{{ asset('images/gallery-6.jpg') }}" class="img-fluid w-100" alt="Gallery Image 6"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="{{ asset('images/gallery-6.jpg') }}">
                    <i class="fa fa-picture-o thumb-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <section class="services-section py-5 bg-black text-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase text-danger">What we do?</h2>
                    <p class="lead">PUSH YOUR LIMITS FORWARD</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-black h-100 border-0">
                        <img src="{{ asset('images/services-1.jpg')}}" class="card-img-top" alt="Personal training">
                        <div class="card-body">
                            <h5 class="card-title">Personal training</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-outline-danger">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-black h-100 border-0">
                        <img src="{{ asset('images/services-2.jpg')}}" class="card-img-top" alt="Group fitness classes">
                        <div class="card-body">
                            <h5 class="card-title">Group fitness classes</h5>
                            <p class="card-text">Quis ipsum suspendisse ultrices gravida.</p>
                            <a href="#" class="btn btn-outline-danger">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-black h-100 border-0">
                        <img src="{{ asset('images/services-3.jpg')}}" class="card-img-top" alt="Strength training">
                        <div class="card-body">
                            <h5 class="card-title">Strength training</h5>
                            <p class="card-text">Risus commodo viverra maecenas accumsan lacus.</p>
                            <a href="#" class="btn btn-outline-danger">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-black h-100 border-0">
                        <img src="{{ asset('images/services-4.jpg')}}" class="card-img-top" alt="Body building">
                        <div class="card-body">
                            <h5 class="card-title">Body building</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-outline-danger">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="product" class="container py-5">
        <h1 class="mb-4 text-center text-danger">Available Products For Shopping</h1>
        <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="card" style="max-width: 300px;">
                            <img src="{{ asset('images/WhatsApp Image 2024-12-21 at 10.48.39 PM (1).jpeg') }}" class="card-img-top" alt="Machine">
                            <div class="card-body bg-black">
                                <h5 class="card-title">Machine</h5>
                                <p class="card-text">Description for the first image.</p>
                                <a href="#" class="btn btn-outline-danger">Learn More</a>
                            </div>
                        </div>
                        <div class="card" style="max-width: 300px;">
                            <img src="{{ asset('images/WhatsApp Image 2024-12-21 at 10.48.42 PM (1).jpeg') }}" class="card-img-top" alt="Gym Clothes">
                            <div class="card-body bg-black">
                                <h5 class="card-title">Gym Clothes</h5>
                                <p class="card-text">Description for the second image.</p>
                                <a href="#" class="btn btn-outline-danger">Learn More</a>
                            </div>
                        </div>
                        <div class="card" style="max-width: 300px;">
                            <img src="{{ asset('images/kk.jpg') }}" class="card-img-top" alt="Gym Protein">
                            <div class="card-body bg-black">
                                <h5 class="card-title">Gym Protein</h5>
                                <p class="card-text">Description for the third image.</p>
                                <a href="#" class="btn btn-outline-danger">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="card" style="max-width: 300px;">
                            <img src="{{ asset('images/WhatsApp Image 2024-12-21 at 11.10.10 PM (2).jpeg') }}" class="card-img-top" alt="Feature 1">
                            <div class="card-body bg-black">
                                <h5 class="card-title">Feature 1</h5>
                                <p class="card-text">Description for Feature 1.</p>
                                <a href="#" class="btn btn-outline-danger">Learn More</a>
                            </div>
                        </div>
                        <div class="card" style="max-width: 300px;">
                            <img src="{{ asset('images/WhatsApp Image 2024-12-21 at 10.48.46 PM (1).jpeg') }}" class="card-img-top" alt="Feature 2">
                            <div class="card-body bg-black">
                                <h5 class="card-title">Feature 2</h5>
                                <p class="card-text">Description for Feature 2.</p>
                                <a href="#" class="btn btn-outline-danger">Learn More</a>
                            </div>
                        </div>
                        <div class="card" style="max-width: 300px;">
                            <img src="{{ asset('images/WhatsApp Image 2024-12-21 at 10.48.36 PM.jpeg') }}" class="card-img-top" alt="Feature 3">
                            <div class="card-body bg-black">
                                <h5 class="card-title">Feature 3</h5>
                                <p class="card-text">Description for Feature 3.</p>
                                <a href="#" class="btn btn-outline-danger">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="gym" class="container mt-5 text-center">
        <h1 class="text-center py-3" style="font-size: 45px; color:#f40b0b">Available GYM</h1>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card bg-black text-light h-100 ">
                    <img src="{{ asset('images/gym4.webp') }}" class="card-img-top rounded" alt="Gym Image" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-danger">Gym Name</h5>
                        <p class="card-text flex-grow-1">Gym description goes here. Providing the best equipment and trainers.</p>
                        <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                        <a href="#" class="btn btn-danger mt-3">Gym Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-black text-light h-100 ">
                    <img src="{{ asset('images/gym3.webp') }}" class="card-img-top rounded" alt="Gym Image" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-danger">Gym Name</h5>
                        <p class="card-text flex-grow-1">Gym description goes here. Providing the best equipment and trainers.</p>
                        <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                        <a href="#" class="btn btn-danger mt-3">Gym Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 " >
                <div class="card bg-black text-light h-100">
                    <img src="{{ asset('images/gym2.webp') }}" class="card-img-top rounded" alt="Gym Image" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-danger">Gym Name</h5>
                        <p class="card-text flex-grow-1">Gym description goes here. Providing the best equipment and trainers.</p>
                        <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                        <a href="#" class="btn btn-danger mt-3">Gym Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-black text-light h-100 ">
                    <img src="{{ asset('images/gym3.webp') }}" class="card-img-top rounded" alt="Gym Image" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-danger">Gym Name</h5>
                        <p class="card-text flex-grow-1">Gym description goes here. Providing the best equipment and trainers.</p>
                        <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                        <a href="#" class="btn btn-danger mt-3">Gym Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-black text-light h-100 ">
                    <img src="{{ asset('images/gym2.webp') }}" class="card-img-top rounded" alt="Gym Image" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-danger">Gym Name</h5>
                        <p class="card-text flex-grow-1">Gym description goes here. Providing the best equipment and trainers.</p>
                        <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                        <a href="#" class="btn btn-danger mt-3">Gym Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="contact" class="container border border-danger p-4 my-5 rounded">
        <h2 class="text-center mb-4" style="font-size: 45px; color: red;">
            Contact Us
        </h2>

        <form class="contact-form">
            <div class="mb-3">
            <label for="email" class="form-label text-danger">Email</label>
            <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter your email"
                required
            />
            </div>

            <div class="mb-3">
            <label for="message" class="form-label text-danger">Message</label>
            <textarea
                class="form-control"
                id="message"
                name="message"
                rows="4"
                placeholder="Your message"
                required
            ></textarea>
            </div>

            <button type="submit" class="btn btn-danger w-100">
            Send Message
            </button>
        </form>
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
</x-layout>