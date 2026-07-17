<?php
  include __DIR__ . "/header.php";
?>

<!-- ================= CATEGORIES SECTION ================= -->
<section id="categories" class="py-5 bg-dark border-top border-secondary border-opacity-25">
  <div class="container py-5">
    
    <!-- Section Header -->
    <div class="row mb-5 align-items-end reveal-categories-header">
      <div class="col-md-8">
        <span class="text-warning fw-bold text-uppercase small tracking-wider">Product Categories</span>
        <h2 class="display-5 fw-bold text-white mt-1">Explore Parts by Category</h2>
        <p class="text-secondary mb-0">Select a specialized category to find precision-matched replacement parts and cosmetic upgrades tailored to your vehicle's exact make and year range.</p>
      </div>
      <div class="col-md-4 text-md-end mt-3 mt-md-0">
        <span class="badge bg-secondary bg-opacity-25 text-warning border border-secondary border-opacity-25 px-3 py-2 rounded-pill">
          <i class="bi bi-tag-fill me-1"></i> Toyota & Honda Specialized
        </span>
      </div>
    </div>

    <!-- Categories Grid -->
    <div class="row g-4">
      
      <!-- Category 1: Headlamps & Tail Lights -->
      <div class="col-md-4 reveal-category-card">
        <div class="card h-100 bg-secondary bg-opacity-10 border border-secondary border-opacity-25 text-white rounded-4 overflow-hidden position-relative group">
          <!-- Image Wrapper with standard hover scaling simulation -->
          <div class="position-relative overflow-hidden" style="height: 240px;">
            <img src="https://www.danscustomcarlights.com/cdn/shop/files/542060632_1076215724720162_1523380975967669244_n.jpg?v=1757386582&width=1100" class="w-100 h-100 object-fit-cover" alt="Headlamps & Tail Lights Category">
            <!-- Semi-transparent dark overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-40"></div>
          </div>
          
          <!-- Card Content -->
          <div class="card-body p-4 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center mb-3">
                <div class="bg-warning bg-opacity-10 text-warning px-2.5 py-1.5 rounded-3 me-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                  <i class="bi bi-lightbulb fs-4"></i>
                </div>
                <h3 class="h5 fw-bold text-white m-0">Lighting Assemblies</h3>
              </div>
              <p class="text-secondary small mb-4">Sequential LED projector headlamps, clean DRL setups, and OEM-spec crystal tail light housings designed for plug-and-play wiring.</p>
            </div>
            
            <a href="#partsGrid" onclick="filterByCategory('headlamps')" class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center gap-2 py-2 rounded-3">
              Browse Lighting <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Category 2: Bonnets & Hoods -->
      <div class="col-md-4 reveal-category-card">
        <div class="card h-100 bg-secondary bg-opacity-10 border border-secondary border-opacity-25 text-white rounded-4 overflow-hidden position-relative group">
          <!-- Image Wrapper -->
          <div class="position-relative overflow-hidden" style="height: 240px;">
            <img src="https://flat6motorsports.com/cdn/shop/files/WeChat-Image_202211101655237_x700.jpg?v=1748363305" class="w-100 h-100 object-fit-cover" alt="Bonnets & Hoods Category">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-40"></div>
          </div>
          
          <!-- Card Content -->
          <div class="card-body p-4 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center mb-3">
                <div class="bg-warning bg-opacity-10 text-warning px-2.5 py-1.5 rounded-3 me-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                  <i class="bi bi-aspect-ratio fs-4"></i>
                </div>
                <h3 class="h5 fw-bold text-white m-0">Bonnets & Hoods</h3>
              </div>
              <p class="text-secondary small mb-4">High-tensile steel factory replacements and lightweight carbon fiber hoods engineered with heat extraction vents for cooling efficiency.</p>
            </div>
            
            <a href="#partsGrid" onclick="filterByCategory('bonnets')" class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center gap-2 py-2 rounded-3">
              Browse Bonnets <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Category 3: Bumpers & Grilles -->
      <div class="col-md-4 reveal-category-card">
        <div class="card h-100 bg-secondary bg-opacity-10 border border-secondary border-opacity-25 text-white rounded-4 overflow-hidden position-relative group">
          <!-- Image Wrapper -->
          <div class="position-relative overflow-hidden" style="height: 240px;">
            <img src="https://amexautoparts.com/media/products/2026/01/E0005191.jpg" class="w-100 h-100 object-fit-cover" alt="Bumpers & Grilles Category">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-40"></div>
          </div>
          
          <!-- Card Content -->
          <div class="card-body p-4 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center mb-3">
                <div class="bg-warning bg-opacity-10 text-warning px-2.5 py-1.5 rounded-3 me-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                  <i class="bi bi-shield-shaded fs-4"></i>
                </div>
                <h3 class="h5 fw-bold text-white m-0">Bumpers & Grilles</h3>
              </div>
              <p class="text-secondary small mb-4">Molded ABS front and rear bumper facias, aggressive gloss black honeycomb grilles, and protective under-engine splash guards.</p>
            </div>
            
            <a href="#partsGrid" onclick="filterByCategory('bumpers')" class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center gap-2 py-2 rounded-3">
              Browse Bumpers <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>