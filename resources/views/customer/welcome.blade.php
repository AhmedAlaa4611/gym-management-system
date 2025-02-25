<x-layout>
    <x-slot:heading>Welcome to our Website</x-slot:heading>
    <div id="home" class="text-center py-5">
        <h2 class="fw-bold">Hi Coach !</h2>
        <h1>STEP UP YOUR</h1>
        <h6 class="text-uppercase fw-bold">Fitness with us</h6>
        <h3>Build Your Body And Fitness With Professional Touch</h3>
        <a href="#about" class="btn btuhome">Join Us</a>
    </div>

    <div id="about" class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('storage/images/offer.png') }}" alt="Description" class="img-fluid rounded">
            </div>

            <div class="col-md-6  text-center">
                <h2 class="mb-3">KNOW US</h2>
                <p class="text-light">
                    On our website you can find everything related to physical fitness, including clothing, equipment, dumbbells, gyms, and coaches, to learn more ...
                </p>

                <div class="d-flex gap-2 mt-3 justify-content-center align-items-center">
                    <button class="btn btn-outline-primary" onclick="window.location.hash = '#product'">Product</button>
                    <button class="btn btn-outline-secondary" onclick="window.location.hash = '#gym'">Gym</button>
                </div>

            </div>
        </div>
    </div>

    <div id="product" class="container py-5">
        <h1 class="mb-4 text-center" style="color: #f40b0b;">Available Product For Shopping</h1>

        <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="card mx-auto" style="max-width: 400px;">
                        <img src="{{ asset('storage/images/WhatsApp Image 2024-12-21 at 10.48.39 PM (1).jpeg') }}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Machine</h5>
                            <p class="card-text">Description for the first image.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mx-auto" style="max-width: 400px;">
                        <img src="{{ asset('storage/images/WhatsApp Image 2024-12-21 at 10.48.42 PM (1).jpeg') }}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Gym Clothes</h5>
                            <p class="card-text">Description for the second image.</p>
                            <a href="#" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mx-auto" style="max-width: 400px;">
                        <img src="{{ asset('storage/images/download.jpeg') }}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Gym Protein</h5>
                            <p class="card-text">Description for the third image.</p>
                            <a href="#" class="btn btn-success">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-danger " aria-hidden="true"></span>
                <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="feature" class="container" style="margin-top: 70px;">
        <p class="text-center" style="font-size: 45px; color:#f40b0b">FEATURES</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap mt-3">
            <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                <img src="{{ asset('storage/images/1.svg') }}" alt="Feature 1" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                <h3 class="mb-3">Feature 1</h3>
                <p>This is a description for Feature 1.</p>
            </div>

            <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                <img src="{{ asset('storage/images/2.svg') }}" alt="Feature 2" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                <h3 class="mb-3">Feature 2</h3>
                <p>This is a description for Feature 2.</p>
            </div>

            <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                <img src="{{ asset('storage/images/3.svg') }}" alt="Feature 3" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                <h3 class="mb-3">Feature 3</h3>
                <p>This is a description for Feature 3.</p>
            </div>

            <div class="p-3 text-center rounded shadow bg-black text-light" style="width: 300px;">
                <img src="{{ asset('storage/images/4.svg') }}" alt="Feature 3" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                <h3 class="mb-3">Feature 4</h3>
                <p>This is a description for Feature 4.</p>
            </div>
        </div>
    </div>

    <div id="gym" class="container mt-5">
        <h1 class="text-center py-3" style="font-size: 45px; color:#f40b0b">GYM</h1>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card m-3 bg-black border border-danger" style="width: 18rem;">
                <img src="{{ asset('storage/images/gym4.webp') }}" class="card-img-top" alt="Gym Image" style="height: 200px; object-fit: cover; cursor: pointer;">
                <div class="card-body text-center">
                    <h5 class="card-title"  style="color: #f40b0b;">Gym Name</h5>
                    <p class="card-text text-light">Gym description goes here. Providing the best equipment and trainers.</p>
                    <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                    <a href="#" class="btn btn-outline-danger">Gym Details</a>
                </div>
            </div>
            <div class="card m-3 bg-black border border-danger" style="width: 18rem;">
                <img src="{{ asset('storage/images/gym3.webp') }}" class="card-img-top" alt="Gym Image" style="height: 200px; object-fit: cover; cursor: pointer;">
                <div class="card-body text-center">
                    <h5 class="card-title"  style="color: #f40b0b;">Gym Name</h5>
                    <p class="card-text text-light">Gym description goes here. Providing the best equipment and trainers.</p>
                    <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                    <a href="#" class="btn btn-outline-danger">Gym Details</a>
                </div>
            </div>
            <div class="card m-3 bg-black border border-danger" style="width: 18rem;">
                <img src="{{ asset('storage/images/gym2.webp') }}" class="card-img-top" alt="Gym Image" style="height: 200px; object-fit: cover; cursor: pointer;">
                <div class="card-body text-center">
                    <h5 class="card-title"  style="color: #f40b0b;">Gym Name</h5>
                    <p class="card-text text-light">Gym description goes here. Providing the best equipment and trainers.</p>
                    <p class="card-text"><small class="text-muted">Location: City, Address</small></p>
                    <a href="#" class="btn btn-outline-danger">Gym Details</a>
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
</x-layout>