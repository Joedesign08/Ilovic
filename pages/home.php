<?php include __DIR__."/header.php";?>
  <!-- Hero Section -->
  <header class="bg-dark text-white py-5 position-relative overflow-hidden" style="background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.85)), url('https://images.unsplash.com/photo-1486006920555-c77dce18193b?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center; min-height: 85vh; display: flex; align-items: center;">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Hero Text -->
        <div class="col-lg-6 reveal-left">
          <span class="badge bg-warning text-dark fw-bold mb-3 px-3 py-2 text-uppercase tracking-wider">Premium Toyota & Honda Parts</span>
          <h1 class="display-4 fw-black mb-3">Keep Your Ride Running Like New</h1>
          <p class="lead text-secondary mb-4">
            OEM-standard replacement parts and aggressive upgrade kits designed specifically for your **Toyota** and **Honda**. From high-intensity headlamps to durable bonnets and bumpers.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="#categories" class="btn btn-warning btn-lg fw-bold px-4">Browse Parts</a>
            <a href="#products" class="btn btn-outline-light btn-lg fw-bold px-4">View Upgrade Kits</a>
          </div>
        </div>
        
        <!-- Quick Part Finder Card -->
        <div class="col-lg-6 reveal-right">
          <div class="card border-0 bg-secondary bg-opacity-10 backdrop-blur p-4 rounded-4 shadow-lg border border-secondary border-opacity-25 text-white">
            <div class="card-body">
              <h3 class="card-title fw-bold mb-3 d-flex align-items-center gap-2">
                <i class="bi bi-search text-warning"></i> Quick Part Finder
              </h3>
              <p class="text-secondary small mb-4">Find guaranteed-fit components for your model in seconds.</p>
              
              <form>
                <div class="row g-3">
                  <!-- Select Make -->
                  <div class="col-md-6">
                    <label class="form-label small text-secondary fw-semibold">Select Make</label>
                    <select class="form-select bg-dark text-white border-secondary py-2" required>
                      <option value="" selected disabled>Choose Brand...</option>
                      <option value="toyota">Toyota</option>
                      <option value="honda">Honda</option>
                    </select>
                  </div>
                  <!-- Select Model Year -->
                  <div class="col-md-6">
                    <label class="form-label small text-secondary fw-semibold">Year</label>
                    <select class="form-select bg-dark text-white border-secondary py-2" required>
                      <option value="" selected disabled>Choose Year...</option>
                      <option>2018 - 2021</option>
                      <option>2022 - 2026</option>
                      <option>Earlier Models</option>
                    </select>
                  </div>
                  <!-- Part Category -->
                  <div class="col-12">
                    <label class="form-label small text-secondary fw-semibold">What component do you need?</label>
                    <select class="form-select bg-dark text-white border-secondary py-2" required>
                      <option value="" selected disabled>Choose Category...</option>
                      <option value="headlamps">Headlamps & Tail Lights</option>
                      <option value="bonnets">Bonnets / Hoods</option>
                      <option value="bumpers">Bumpers & Grilles</option>
                      <option value="upgrade-kits">Facelift / Performance Upgrade Kits</option>
                    </select>
                  </div>
                  <!-- Submit Button -->
                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-warning w-100 py-3 fw-bold text-uppercase d-flex align-items-center justify-content-center gap-2">
                      <i class="bi bi-tools"></i> Find Matching Parts
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Interactive Categories Section -->
<section id="categories" class="py-5 bg-white">
  <div class="container">
    
    <!-- Section Header -->
    <div class="row mb-5 align-items-end reveal-up">
      <div class="col-md-8">
        <span class="text-warning fw-bold text-uppercase small tracking-wider">Explore Collections</span>
        <h2 class="display-6 fw-bold mt-1 mb-0 text-dark">Premium Components & Kits</h2>
      </div>
      <div class="col-md-4 text-md-end mt-3 mt-md-0">
        <!-- Navigation Buttons for Swiper -->
        <div class="d-flex gap-2 justify-content-md-end">
          <button class="btn btn-outline-dark rounded-circle btn-prev p-2 d-inline-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button class="btn btn-warning rounded-circle btn-next p-2 d-inline-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Swiper Slider Container -->
    <div class="swiper categoriesSlider py-3 px-1 reveal-up">
      <div class="swiper-wrapper">
        
        <!-- Slide 1: Headlamps -->
        <div class="swiper-slide h-auto">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative group-hover bg-light">
            <div class="position-relative overflow-hidden" style="height: 220px;">
              <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=600&q=80" class="card-img-top h-100 w-100 object-fit-cover transition" alt="Headlamps">
              <span class="badge bg-warning text-dark fw-bold position-absolute top-0 start-0 m-3 z-3">Toyota / Honda</span>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <h5 class="card-title fw-bold d-flex align-items-center gap-2">
                <i class="bi bi-lightbulb-fill text-warning"></i> LED & Halogen Headlamps
              </h5>
              <p class="card-text text-muted small flex-grow-1">
                Aggressive sequential LED projector assemblies, DRLs (Daytime Running Lights), and crystal-clear OEM replacement housings.
              </p>
              <hr class="text-muted opacity-25">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-semibold text-dark small">From $149.00</span>
                <button class="btn btn-dark btn-sm rounded-3 px-3" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-name="Sequential LED Projector Headlamps" data-price="$249.00" data-original="$320.00" data-img="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=600&q=80" data-compatibility="Toyota Camry (2018-2021) / Honda Accord (2018+)" data-desc="Upgrade your standard factory yellow halogen beams with high-intensity sequential LED projectors. Includes Daytime Running Lights (DRL) bar, aggressive startup animation sequence, and pure white light dispersion." data-specs="Plug-and-play wiring harness; Durable UV-coated polycarbonate lens; SAE/DOT Compliant; 12-Month warranty">
                    Browse Detail
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: Bonnets -->
        <div class="swiper-slide h-auto">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative group-hover bg-light">
            <div class="position-relative overflow-hidden" style="height: 220px;">
              <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80" class="card-img-top h-100 w-100 object-fit-cover transition" alt="Bonnets">
              <span class="badge bg-warning text-dark fw-bold position-absolute top-0 start-0 m-3 z-3">Toyota / Honda</span>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <h5 class="card-title fw-bold d-flex align-items-center gap-2">
                <i class="bi bi-shield-shaded text-warning"></i> Steel & Carbon Bonnets
              </h5>
              <p class="card-text text-muted small flex-grow-1">
                Precision-molded metal hoods engineered for direct bolt-on fitment, alongside lightweight carbon fiber upgrade alternatives.
              </p>
              <hr class="text-muted opacity-25">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-semibold text-dark small">From $299.00</span>
                <button class="btn btn-dark btn-sm rounded-3 px-3" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-name="OEM-Style Steel Bonnet" data-price="$299.00" data-original="$380.00" data-img="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80" data-compatibility="Honda Civic FE (2022+) / Toyota Corolla (2019+)" data-desc="Heavy-duty replacement steel hood manufactured to exact factory specifications. Features pre-drilled holes for insulation hooks and matches perfectly with stock hinges and latch." data-specs="High-tensile steel construction; Primed and ready for paint; Factory latch compatibility; Secure crate packaging">
                    Browse Detail
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3: Bumpers -->
        <div class="swiper-slide h-auto">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative group-hover bg-light">
            <div class="position-relative overflow-hidden" style="height: 220px;">
              <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=600&q=80" class="card-img-top h-100 w-100 object-fit-cover transition" alt="Bumpers">
              <span class="badge bg-warning text-dark fw-bold position-absolute top-0 start-0 m-3 z-3">Toyota / Honda</span>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <h5 class="card-title fw-bold d-flex align-items-center gap-2">
                <i class="bi bi-boxes text-warning"></i> Bumpers & Grilles
              </h5>
              <p class="card-text text-muted small flex-grow-1">
                Impact-resistant ABS plastic front and rear bumper covers. High-strength structural reinforcement beams also stocked.
              </p>
              <hr class="text-muted opacity-25">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-semibold text-dark small">From $189.00</span>
                <button class="btn btn-dark btn-sm rounded-3 px-3" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-name="Front Bumper & Mesh Grille Assembly" data-price="$189.00" data-original="$240.00" data-img="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=600&q=80" data-compatibility="Toyota Camry (2018+) / Honda Civic FC (2016-2021)" data-desc="Impact-resistant ABS front bumper cover package. Includes sporty mesh grille panels, fog light bezel covers, and underbody splash guard mount brackets." data-specs="Ultra-flexible ABS plastic; Precision molded; Matte black paintable finish; OEM clip-in style install">
                    Browse Detail
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4: Facelift Upgrade Kits -->
        <div class="swiper-slide h-auto">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative group-hover bg-light">
            <div class="position-relative overflow-hidden" style="height: 220px;">
              <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=600&q=80" class="card-img-top h-100 w-100 object-fit-cover transition" alt="Facelift Upgrade Kits">
              <span class="badge bg-danger text-white fw-bold position-absolute top-0 start-0 m-3 z-3">Hot Upgrade</span>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <h5 class="card-title fw-bold d-flex align-items-center gap-2">
                <i class="bi bi-speedometer2 text-warning"></i> Complete Facelift Kits
              </h5>
              <p class="card-text text-muted small flex-grow-1">
                Transform older Camry, Civic, Accord, or Corolla models into the latest generation look. Includes lights, bumpers, grilles, and adaptors.
              </p>
              <hr class="text-muted opacity-25">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-semibold text-dark small">From $599.00</span>
                <button class="btn btn-warning text-dark btn-sm rounded-3 fw-bold px-3" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-name="Camry 2024 Facelift / Lexus-Style Kit" data-price="$599.00" data-original="$750.00" data-img="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=600&q=80" data-compatibility="Toyota Camry (2018-2021 Models)" data-desc="Transform your older Camry model with this comprehensive Lexus-style facelift kit. Complete conversion set includes bumper, massive spindle grill, trim pieces, and adaptive wire-matching adapters." data-specs="Full exterior conversion kit; LED wire adapter harnesses included; High strength premium polypropylene; Professional fitment highly recommended">
                    Explore Kit
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- Swiper Pagination -->
      <div class="swiper-pagination position-relative mt-4"></div>
    </div>

  </div>
</section>

<!-- Features & Fitment Calculator Section -->
<section id="about" class="py-5 bg-light">
  <div class="container">
    
    <!-- Trust Features Cards -->
    <div class="row g-4 mb-5 reveal-up">
      <!-- Feature 1: Guaranteed Fitment -->
      <div class="col-md-4">
        <div class="card border-0 h-100 shadow-sm rounded-4 p-4 text-center bg-white transition">
          <div class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-warning rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
            <i class="bi bi-patch-check-fill fs-3"></i>
          </div>
          <h5 class="fw-bold text-dark">100% Fitment Guarantee</h5>
          <p class="text-muted small mb-0">Every replacement bumper, bonnet, or light housing is laser-scanned to match original Toyota or Honda chassis specifications perfectly.</p>
        </div>
      </div>

      <!-- Feature 2: Premium Upgrade Kits -->
      <div class="col-md-4">
        <div class="card border-0 h-100 shadow-sm rounded-4 p-4 text-center bg-white transition">
          <div class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-warning rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
            <i class="bi bi-shield-fire fs-3"></i>
          </div>
          <h5 class="fw-bold text-dark">OEM & Durable Quality</h5>
          <p class="text-muted small mb-0">Constructed from heavy-duty ABS plastics or high-tensile steel, ensuring optimal impact absorption and extreme weather resistance.</p>
        </div>
      </div>

      <!-- Feature 3: Doorstep Delivery -->
      <div class="col-md-4">
        <div class="card border-0 h-100 shadow-sm rounded-4 p-4 text-center bg-white transition">
          <div class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-warning rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
            <i class="bi bi-truck fs-3"></i>
          </div>
          <h5 class="fw-bold text-dark">Safe Rigid Packaging</h5>
          <p class="text-muted small mb-0">Bulky body parts like bonnets and bumpers are packed in custom multi-layer wood-reinforced crates to prevent any transport dings.</p>
        </div>
      </div>
    </div>

    <!-- Interactive Price Estimator -->
    <div class="row g-4 align-items-center bg-dark text-white rounded-4 overflow-hidden shadow-lg m-0 reveal-up">
      <!-- Calculator Column -->
      <div class="col-lg-7 p-4 p-md-5">
        <span class="text-warning fw-bold text-uppercase small tracking-wider">Estimate Instantly</span>
        <h2 class="fw-bold mb-3">Parts & Facelift Kit Estimator</h2>
        <p class="text-secondary small mb-4">Select your vehicle specifics and required components to calculate an estimated base cost for your upgrade project.</p>
        
        <div class="row g-3">
          <!-- Make Selector -->
          <div class="col-sm-6">
            <label class="form-label text-secondary small fw-semibold">Vehicle Make</label>
            <select id="calcMake" class="form-select bg-secondary bg-opacity-20 text-white border-secondary border-opacity-20 py-2" onchange="updateModels()">
              <option value="toyota">Toyota</option>
              <option value="honda">Honda</option>
            </select>
          </div>
          
          <!-- Model Selector -->
          <div class="col-sm-6">
            <label class="form-label text-secondary small fw-semibold">Select Model</label>
            <select id="calcModel" class="form-select bg-secondary bg-opacity-20 text-white border-secondary border-opacity-20 py-2">
              <!-- Dynamically populated -->
              <option value="camry">Camry (2018+)</option>
              <option value="hilux">Hilux (2015+)</option>
              <option value="corolla">Corolla (2019+)</option>
            </select>
          </div>

          <!-- Component Checklist -->
          <div class="col-12 mt-4">
            <label class="form-label text-secondary small fw-semibold d-block mb-3">Choose Required Components</label>
            <div class="row g-2">
              <div class="col-6">
                <div class="form-check bg-secondary bg-opacity-10 rounded-3 p-3 border border-secondary border-opacity-10">
                  <input class="form-check-input ms-0 me-2" type="checkbox" id="partHeadlamps" value="250" onchange="calculateTotal()">
                  <label class="form-check-label small" for="partHeadlamps">LED Headlamps ($250)</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check bg-secondary bg-opacity-10 rounded-3 p-3 border border-secondary border-opacity-10">
                  <input class="form-check-input ms-0 me-2" type="checkbox" id="partBumper" value="320" onchange="calculateTotal()">
                  <label class="form-check-label small" for="partBumper">Front Bumper ($320)</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check bg-secondary bg-opacity-10 rounded-3 p-3 border border-secondary border-opacity-10">
                  <input class="form-check-input ms-0 me-2" type="checkbox" id="partBonnet" value="450" onchange="calculateTotal()">
                  <label class="form-check-label small" for="partBonnet">Steel Bonnet ($450)</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check bg-secondary bg-opacity-10 rounded-3 p-3 border border-secondary border-opacity-10">
                  <input class="form-check-input ms-0 me-2" type="checkbox" id="partUpgrade" value="650" onchange="calculateTotal()">
                  <label class="form-check-label small" for="partUpgrade">Facelift Upgrade (+$650)</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pricing Summary Display Card -->
      <div class="col-lg-5 p-4 p-md-5 bg-secondary bg-opacity-10 d-flex flex-column justify-content-center h-100 border-start border-secondary border-opacity-25" style="min-height: 380px;">
        <div class="text-center py-4">
          <i class="bi bi-tag-fill text-warning display-4 mb-3 d-block"></i>
          <h4 class="fw-bold mb-1">Estimated Base Total</h4>
          <span class="text-muted small">Excluding shipping & local taxes</span>
          
          <div class="my-4">
            <span class="display-3 fw-bold text-warning" id="calculatedPrice">$0.00</span>
          </div>

          <p class="text-secondary small px-lg-4 mb-4">We stock premium aftermarket colors. Want to order exact paint-matching colors or get professional fitment help?</p>
          <a href="#" class="btn btn-warning fw-bold btn-lg w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-cart-check-fill"></i> Order Selected Parts
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Testimonials & Transformations Section -->
<section class="py-5 bg-white">
  <div class="container">
    
    <!-- Section Header -->
    <div class="row justify-content-center text-center mb-5 reveal-up">
      <div class="col-lg-6">
        <span class="text-warning fw-bold text-uppercase small tracking-wider">Before & After</span>
        <h2 class="display-6 fw-bold text-dark mt-1">Customer Transformations</h2>
        <p class="text-muted">See how fellow Toyota & Honda owners updated their vehicles using our OEM replacements and aggressive upgrade kits.</p>
      </div>
    </div>

    <!-- Testimonials Slider (Swiper) -->
    <div class="swiper testimonialSlider py-3 px-1 reveal-up">
      <div class="swiper-wrapper">
        
        <!-- Slide 1: Toyota Camry Facelift -->
        <div class="swiper-slide h-auto">
          <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-light">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 50px; height: 50px;">
                TA
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-0">Tariq A.</h6>
                <small class="text-muted">Toyota Camry 2019 Owner</small>
              </div>
            </div>
            <div class="mb-3 text-warning">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="card-text text-muted small flex-grow-1 italic">
              "Ordered the complete 2023 Facelift bumper and sequential LED headlamps upgrade kit for my 2019 Camry. The alignment was absolutely spot-on. Looks completely brand new!"
            </p>
            <span class="badge bg-dark text-warning align-self-start mt-2">Upgraded: Bumper & Headlamps</span>
          </div>
        </div>

        <!-- Slide 2: Honda Civic Upgrade -->
        <div class="swiper-slide h-auto">
          <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-light">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 50px; height: 50px;">
                KO
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-0">Kelechi O.</h6>
                <small class="text-muted">Honda Civic 2017 Owner</small>
              </div>
            </div>
            <div class="mb-3 text-warning">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="card-text text-muted small flex-grow-1">
              "My bonnet and front bumper were damaged in a highway minor collision. ApexAuto matched the exact replacement metal bonnet, and shipping took just 3 days in wood crating. Unbeatable service!"
            </p>
            <span class="badge bg-dark text-warning align-self-start mt-2">Upgraded: Steel Bonnet & Bumper</span>
          </div>
        </div>

        <!-- Slide 3: Toyota Hilux Facelift -->
        <div class="swiper-slide h-auto">
          <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-light">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 50px; height: 50px;">
                MD
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-0">Mark D.</h6>
                <small class="text-muted">Toyota Hilux 2016 Owner</small>
              </div>
            </div>
            <div class="mb-3 text-warning">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill-half"></i>
            </div>
            <p class="card-text text-muted small flex-grow-1">
              "The conversion of my 2016 Hilux to the modern Rocco style facelift kit is jaw-dropping. The quality of the ABS plastic materials feels tough enough to handle anything."
            </p>
            <span class="badge bg-dark text-warning align-self-start mt-2">Upgraded: Rocco Facelift Kit</span>
          </div>
        </div>

      </div>
      <!-- Swiper Pagination -->
      <div class="swiper-pagination position-relative mt-4"></div>
    </div>

  </div>
</section>

<!-- Contact Expert & Part Sourcing Form -->
<section id="contact" class="py-5 bg-light border-top border-secondary border-opacity-10">
  <div class="container">
    <div class="row g-5 align-items-center">
      
      <!-- Contact Copy -->
      <div class="col-lg-6 reveal-left">
        <span class="text-warning fw-bold text-uppercase small tracking-wider">Need Custom Sourcing?</span>
        <h2 class="display-6 fw-bold text-dark mt-1 mb-3">Can't Find Your Exact Toyota or Honda Component?</h2>
        <p class="text-muted mb-4">
          With thousands of unique model codes for Honda and Toyota platforms, we can order specialized parts directly from certified partner factories. Drop your part details below and our team will match it for you.
        </p>
        
        <div class="d-flex flex-column gap-3 mb-4">
          <div class="d-flex align-items-center gap-3">
            <div class="bg-warning bg-opacity-10 text-warning rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
              <i class="bi bi-telephone-outbound-fill"></i>
            </div>
            <div>
              <small class="text-muted d-block">Direct Sourcing Hotline</small>
              <strong class="text-dark">+1 (555) 019-9231</strong>
            </div>
          </div>
          <div class="d-flex align-items-center gap-3">
            <div class="bg-warning bg-opacity-10 text-warning rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
              <i class="bi bi-envelope-open-fill"></i>
            </div>
            <div>
              <small class="text-muted d-block">Wholesale & Order Desk</small>
              <strong class="text-dark">parts@apexauto.com</strong>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Contact Form -->
      <div class="col-lg-6 reveal-right">
        <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 bg-white">
          <h4 class="fw-bold text-dark mb-4"><i class="bi bi-send-fill text-warning me-2"></i> Request Sourcing Quote</h4>
          <form>
            <div class="row g-3">
              <div class="col-sm-6">
                <input type="text" class="form-control bg-light border-0 py-3 rounded-3" placeholder="Your Name" required>
              </div>
              <div class="col-sm-6">
                <input type="email" class="form-control bg-light border-0 py-3 rounded-3" placeholder="Email Address" required>
              </div>
              <div class="col-12">
                <input type="text" class="form-control bg-light border-0 py-3 rounded-3" placeholder="Chassis No. / VIN (Optional for 100% Fitment Match)">
              </div>
              <div class="col-12">
                <textarea class="form-control bg-light border-0 py-3 rounded-3" rows="4" placeholder="Describe the specific replacement bumper, bonnet, light, or upgrade kit you need..." required></textarea>
              </div>
              <div class="col-12 mt-4">
                <button type="submit" class="btn btn-dark w-100 py-3 fw-bold text-uppercase d-flex align-items-center justify-content-center gap-2">
                  Send Sourcing Inquiry <i class="bi bi-arrow-right-short"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-secondary pt-5 pb-4 border-top border-secondary border-opacity-10">
  <div class="container">
    <div class="row g-4 mb-5">
      <!-- Brand & Info -->
      <div class="col-lg-4">
        <a class="navbar-brand fw-bold text-white d-flex align-items-center mb-3" href="#">
          <i class="bi bi-wrench-adjustable-circle text-warning me-2 fs-3"></i>
          <span>APEX<span class="text-warning">AUTO</span></span>
        </a>
        <p class="small text-secondary">
          Premium replacement parts, performance upgrade kits, and aesthetic facelifts for domestic and import-spec Toyota and Honda passenger cars, SUVs, and trucks.
        </p>
        <div class="d-flex gap-2 mt-4">
          <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="bi bi-facebook"></i></a>
          <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="bi bi-instagram"></i></a>
          <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

      <!-- Quick Navigation -->
      <div class="col-sm-6 col-lg-4">
        <h6 class="text-white fw-bold mb-3 text-uppercase small tracking-wider">Top Components</h6>
        <ul class="list-unstyled d-flex flex-column gap-2 small">
          <li><a href="#categories" class="text-secondary text-decoration-none hover-link">LED Headlamp Assemblies</a></li>
          <li><a href="#categories" class="text-secondary text-decoration-none hover-link">Replacement Steel Bonnets</a></li>
          <li><a href="#categories" class="text-secondary text-decoration-none hover-link">OEM Fit Bumper Covers</a></li>
          <li><a href="#categories" class="text-secondary text-decoration-none hover-link">Honda Facelift Upgrade Kits</a></li>
          <li><a href="#categories" class="text-secondary text-decoration-none hover-link">Toyota TRD / Rocco Conversion Kits</a></li>
        </ul>
      </div>

      <!-- Trust Badging / Working Hours -->
      <div class="col-sm-6 col-lg-4">
        <h6 class="text-white fw-bold mb-3 text-uppercase small tracking-wider">Warehousing & Pickup</h6>
        <p class="small text-secondary mb-2"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Lagos Hub, Nigeria</p>
        <p class="small text-secondary mb-2"><i class="bi bi-clock-fill text-warning me-2"></i> Mon - Sat: 8:00 AM - 6:00 PM</p>
        <p class="small text-secondary"><i class="bi bi-calendar2-check-fill text-warning me-2"></i> Secure payments & wood-crated delivery nationwide.</p>
      </div>
    </div>

    <hr class="border-secondary border-opacity-25 my-4">

    <!-- Legal & Attribution -->
    <div class="row align-items-center text-center text-md-start">
      <div class="col-md-6 mb-3 mb-md-0">
        <p class="small mb-0 text-secondary">&copy; 2026 ApexAuto Ltd. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <p class="small mb-0 text-secondary">Toyota and Honda are registered trademarks of their respective owners. Parts sold are aftermarket/replacement components.</p>
      </div>
    </div>
  </div>
</footer>

<!-- Initialize Swiper for Testimonials -->
<script>
  const testimonialSwiper = new Swiper('.testimonialSlider', {
    slidesPerView: 1,
    spaceBetween: 24,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      }
    }
  });

  // Re-run ScrollReveal
  ScrollReveal().reveal('.reveal-left', {
    origin: 'left',
    distance: '60px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out'
  });
  ScrollReveal().reveal('.reveal-right', {
    origin: 'right',
    distance: '60px',
    duration: 1000,
    delay: 400,
    easing: 'ease-in-out'
  });

</script>

<!-- Estimator Functionality JS -->
<script>
  // Simple vehicle select dependency mapping
  const modelData = {
    toyota: [
      { text: "Camry (2018+)", value: "camry" },
      { text: "Hilux (2015+)", value: "hilux" },
      { text: "Corolla (2019+)", value: "corolla" }
    ],
    honda: [
      { text: "Civic FC/FE (2016+)", value: "civic" },
      { text: "Accord (2018+)", value: "accord" },
      { text: "CR-V (2017+)", value: "crv" }
    ]
  };

  function updateModels() {
    const makeSelect = document.getElementById('calcMake').value;
    const modelSelect = document.getElementById('calcModel');
    
    // Clear dynamic options
    modelSelect.innerHTML = '';
    
    // Add new matching models
    modelData[makeSelect].forEach(model => {
      const option = document.createElement('option');
      option.value = model.value;
      option.textContent = model.text;
      modelSelect.appendChild(option);
    });
    
    calculateTotal();
  }

  function calculateTotal() {
    let total = 0;
    const checkboxes = [
      document.getElementById('partHeadlamps'),
      document.getElementById('partBumper'),
      document.getElementById('partBonnet'),
      document.getElementById('partUpgrade')
    ];
    
    checkboxes.forEach(box => {
      if (box.checked) {
        total += parseFloat(box.value);
      }
    });
    
    // Animate price change
    document.getElementById('calculatedPrice').textContent = '$' + total.toFixed(2);
  }

  // Double check initialization of ScrollReveal from previous setup
  ScrollReveal().reveal('.reveal-up', {
    origin: 'bottom',
    distance: '50px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out'
  });
</script>

<!-- SwiperJS Bundle JS and ScrollReveal configuration -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  // Initialize Swiper Categories Slider
  const swiper = new Swiper('.categoriesSlider', {
    slidesPerView: 1,
    spaceBetween: 24,
    grabCursor: true,
    navigation: {
      nextEl: '.btn-next',
      prevEl: '.btn-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      }
    }
  });

  // Reveal Animations
  ScrollReveal().reveal('.reveal-up', {
    origin: 'bottom',
    distance: '50px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out'
  });
</script>

  <!-- ScrollReveal JS -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Simple ScrollReveal Initialization
    ScrollReveal().reveal('.reveal-left', {
      origin: 'left',
      distance: '60px',
      duration: 1000,
      delay: 200,
      easing: 'ease-in-out'
    });
    ScrollReveal().reveal('.reveal-right', {
      origin: 'right',
      distance: '60px',
      duration: 1000,
      delay: 400,
      easing: 'ease-in-out'
    });
  </script>

  <script>
    // Dynamic Modal Populator
const quickViewModal = document.getElementById('quickViewModal');
if (quickViewModal) {
  quickViewModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget;
    
    // Extract info from data-* attributes
    const name = button.getAttribute('data-name');
    const price = button.getAttribute('data-price');
    const originalPrice = button.getAttribute('data-original');
    const img = button.getAttribute('data-img');
    const compatibility = button.getAttribute('data-compatibility');
    const desc = button.getAttribute('data-desc');
    const specsArray = button.getAttribute('data-specs').split(';');

    // Update the modal's DOM elements
    document.getElementById('modalPartName').textContent = name;
    document.getElementById('modalPartPrice').textContent = price;
    document.getElementById('modalPartImg').src = img;
    document.getElementById('modalPartCompatibility').innerHTML = `<i class="bi bi-car-front-fill me-1"></i> Fits: ${compatibility}`;
    document.getElementById('modalPartDesc').textContent = desc;

    // Handle optional Original Strike-through Price
    const originalPriceEl = document.getElementById('modalOriginalPrice');
    if (originalPrice) {
      originalPriceEl.textContent = originalPrice;
      originalPriceEl.classList.remove('d-none');
    } else {
      originalPriceEl.classList.add('d-none');
    }

    // Build specs list checklist dynamically
    const specsList = document.getElementById('modalPartSpecs');
    specsList.innerHTML = ''; // clear old list items
    
    specsArray.forEach(spec => {
      if (spec.trim() !== '') {
        const li = document.createElement('li');
        li.className = 'list-group-item bg-transparent border-0 px-0 py-1 text-muted small d-flex align-items-start gap-2';
        li.innerHTML = `<i class="bi bi-check2-circle text-warning mt-1"></i> <span>${spec.trim()}</span>`;
        specsList.appendChild(li);
      }
    });
  });
}
  </script>

  <!-- Reusable Quick View Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 overflow-hidden bg-white">
      
      <!-- Modal Header -->
      <div class="modal-header border-0 pb-0 position-absolute top-0 end-0 z-3">
        <button type="button" class="btn-close bg-white rounded-circle p-2 shadow-sm" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body p-0">
        <div class="row g-0">
          
          <!-- Column 1: Dynamic Product Image -->
          <div class="col-md-6 bg-light d-flex align-items-center justify-content-center" style="min-height: 300px;">
            <img id="modalPartImg" src="" class="img-fluid w-100 h-100 object-fit-cover" alt="Product Image">
          </div>

          <!-- Column 2: Dynamic Product Details -->
          <div class="col-md-6 p-4 p-md-5 d-flex flex-column justify-content-center">
            
            <!-- Badges -->
            <div class="d-flex gap-2 mb-3">
              <span class="badge bg-success bg-opacity-10 text-success fw-bold d-flex align-items-center gap-1">
                <i class="bi bi-check-circle-fill"></i> In Stock
              </span>
              <span id="modalPartCompatibility" class="badge bg-dark text-warning fw-bold">
                Toyota / Honda Match
              </span>
            </div>

            <!-- Title & Pricing -->
            <h3 id="modalPartName" class="fw-bold text-dark mb-1">Part Name Placeholder</h3>
            <div class="d-flex align-items-center gap-2 mb-3">
              <span id="modalPartPrice" class="fs-4 fw-black text-warning">$0.00</span>
              <span class="text-muted small text-decoration-line-through" id="modalOriginalPrice"></span>
            </div>

            <hr class="my-3 opacity-25">

            <!-- Description -->
            <p id="modalPartDesc" class="text-muted small mb-4">
              Detailed description will load dynamically here based on what component was clicked.
            </p>

            <!-- Fitment Specs Checklist -->
            <h6 class="fw-bold text-dark mb-2 small text-uppercase tracking-wider">Specifications</h6>
            <ul id="modalPartSpecs" class="list-group list-group-flush mb-4">
              <!-- Dynamically populated via JS -->
            </ul>

            <!-- Actions -->
            <div class="row g-2">
              <div class="col-sm-6">
                <button type="button" class="btn btn-warning w-100 py-3 fw-bold text-dark d-flex align-items-center justify-content-center gap-2 rounded-3">
                  <i class="bi bi-cart-plus-fill"></i> Add to Cart
                </button>
              </div>
              <div class="col-sm-6">
                <a href="https://wa.me/#" target="_blank" class="btn btn-outline-dark w-100 py-3 fw-semibold d-flex align-items-center justify-content-center gap-2 rounded-3">
                  <i class="bi bi-whatsapp"></i> Chat Fitment
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</body>
</html>