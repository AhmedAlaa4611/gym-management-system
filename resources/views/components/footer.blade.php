@if (Auth::check() && Auth::user()->type === 'customer')
    <footer class="bg-body-tertiary border-top mt-4">
        <div class="footer bg-dark text-light py-4">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-danger">About Us</h5>
                        <p>
                        We are a professional gym dedicated to helping you achieve your fitness goals.
                        Whether you're into strength training or cardio, we have all the equipment you need.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-danger">Working Hours</h5>
                        <ul class="list-unstyled">
                        <li>Monday - Friday: 6 AM - 10 PM</li>
                        <li>Saturday: 8 AM - 8 PM</li>
                        <li>Sunday: Closed</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-danger">Follow Us</h5>
                        <div>
                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="text-light mx-2">
                                <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                            </a>
                            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="text-light mx-2">
                                <i class="bi bi-facebook" style="font-size: 1.5rem;"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="text-light mx-2">
                                <i class="bi bi-twitter" style="font-size: 1.5rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p class="text-danger mb-0">&copy; 2025 GymFit - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@else
    <footer class="bg-body-tertiary border-top mt-4">
        <div class="container py-3">
            &copy;{{ now()->year }}, Created by <a href="https://www.linkedin.com/in/ahmed-alaa-075b81281" target="_blank">Ahmed Alaa</a>
        </div>
    </footer>
@endif