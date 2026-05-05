<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php')?>
   
</head>

<body>

    <?php include('Navbar.php')?>



    <!-- hero-header section -->
    <section class="hero-header">
        <img src="assets/images/hero-header-img.jpg" alt="Centrifuges" />

        
        <div class="hero-content">
            <div class=""data-aos="fade-right" data-aos-duration="1400">
            <div class="d-flex gap-2 flex-wrap">
              <h2 class="title m-0" style="color: white;">Centrifuges</h2>
              <span class="subtitle-sub">Scientiquipp Lab Technology</span>
            </div>
            
            <p>
              <span class="subtitle d-block mb-2">
                Here is an overview of our laboratory centrifuges.
              </span>
              Sigma centrifuges are high performance, reliable and safe. Whether you
              are looking for a compact microlitre centrifuge, a high-performance
              benchtop centrifuge or a large-capacity self-standing centrifuge –
              refrigerated, unrefrigerated, heated, or especially quiet and energy
              efficient – we have the right solution for every requirement.
              <br /><br />
              Product options such as IVD, inert gas port and water cooling are also
              part of our portfolio.
            </p>
          </div>
          </div>
    </section>




    
    <!-- products-listing section -->
<!-- ── Top Bar ────────────────────────────────────────────── -->
<header class="topbar">
  <div style="display:flex;align-items:center;gap:14px;">
    <div class="hamburger" id="sidebar-hamburger" onclick="toggleSidebar()">
      <span></span><span></span><span></span>
    </div>
  </div>
</header>
 
<!-- ── Sidebar overlay (mobile) ──────────────────────────── -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

 
<!-- ── Page Layout ───────────────────────────────────────── -->
<div class="comman-x-spacing d-flex">
<div class="page-layout">
 
  <!-- ── SIDEBAR ─────────────────────────────────────────── -->
  <aside class="sidebar" id="sidebar">

  <div class="remove-sidebar">X</div>
  
 
    <!-- Brand -->
    <div class="sidebar-section sb-brand">
      <h6>LABORATORY<br/>EQUIPMENT</h6>
      <small>TECHNICAL CATALOG V4.2</small>
    </div>
 
    <!-- Nav -->
    <div class="sidebar-section">
      <ul class="sb-nav" style="padding-left: 6px;">
        <li class="active">
          <span class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="8" stroke-dasharray="4 2"/>
            </svg>
          </span>
          CENTRIFUGES
        </li>
        <li>
          <span class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>
            </svg>
          </span>
          INCUBATORS
        </li>
        <li>
          <span class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/>
            </svg>
          </span>
          SPECTROMETERS
        </li>
        <li>
          <span class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3M3 16v3a2 2 0 002 2h3m10 0h3a2 2 0 002-2v-3"/>
            </svg>
          </span>
          FREEZERS
        </li>
        <li>
          <span class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="4"/>
            </svg>
          </span>
          LIQUID HANDLING
        </li>
      </ul>
    </div>
 
    <!-- RPM Filter -->
    <div class="sidebar-section">
      <span class="filter-label">RPM / RCF RANGE</span>
      <div class="check-group" style="padding: left 0px;">
        <label class="check-item">
          <input type="checkbox" id="rpm1" />
          <label for="rpm1">Up to 15,000 RPM</label>
        </label>
        <label class="check-item">
          <input type="checkbox" id="rpm2" />
          <label for="rpm2">15,000 – 30,000 RPM</label>
        </label>
        <label class="check-item">
          <input type="checkbox" id="rpm3" />
          <label for="rpm3">Ultra (30,000+)</label>
        </label>
      </div>
    </div>
 
    <!-- Temperature Filter -->
    <div class="sidebar-section">
      <span class="filter-label">TEMPERATURE RANGE</span>
      <div class="range-row">
        <span>-30°C</span>
        <span class="hi">+45°C</span>
      </div>
      <input type="range" min="-30" max="45" value="20" />
    </div>
 
    <!-- Application -->
    <div class="sidebar-section mt-4">
      <span class="filter-label">APPLICATION</span>
      <div class="app-group">
        <button class="app-pill mb-2">CLINICAL</button>
        <button class="app-pill active">RESEARCH</button>
        <button class="app-pill mb-3">INDUSTRIAL</button>
      </div>
    </div>
  </div>
</aside>


  <!-- ── MAIN CONTENT ─────────────────────────────────────── -->
  <main class="main-content">
      <!-- Product Grid -->
      <div class="product-grid">
 
      <!-- Card 1 -->
      <div class="product-card" data-aos="fade-up" data-aos-duration="1400">
        <div class="product-img">
          <img src="assets/images/product-img1.png" alt="">
          <span class="product-badge badge-refrigerated">REFRIGERATED</span>
        </div>
        <div class="product-body">
          <h5>ROTINA 420 R</h5>
          <p class="product-subtitle">HIGH CAPACITY BENCHTOP</p>
          <div class="stats-row">
            <div class="stat-cell">
              <span class="stat-label">MAX RPM</span>
              <span class="stat-value">15,000</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">MAX RCF</span>
              <span class="stat-value">24,400</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">CAPACITY</span>
              <span class="stat-value">4×600ml</span>
            </div>
          </div>
          <div class="card-actions">
            <a href="ProductDetails.php" class="btn-specs">VIEW SPECS</a>
            <button class="btn-quote">ADD TO QUOTE</button>
          </div>
        </div>
      </div>
 
      <!-- Card 2 -->
      <div class="product-card" data-aos="fade-up" data-aos-duration="1400">
        <div class="product-img">
          <img src="assets/images/product-img2.png" alt="">
        </div>
        <div class="product-body">
          <h5>MIKRO 200</h5>
          <p class="product-subtitle">MICROCENTRIFUGE</p>
          <div class="stats-row">
            <div class="stat-cell">
              <span class="stat-label">MAX RPM</span>
              <span class="stat-value">15,000</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">MAX RCF</span>
              <span class="stat-value">21,382</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">CAPACITY</span>
              <span class="stat-value">24×2.0ml</span>
            </div>
          </div>
          <div class="card-actions">
            <a href="ProductDetails.php" class="btn-specs">VIEW SPECS</a>
            <button class="btn-quote">ADD TO QUOTE</button>
          </div>
        </div>
      </div>
 
      <!-- Card 3 -->
      <div class="product-card" data-aos="fade-up" data-aos-duration="1400">
        <div class="product-img">
                    <img src="../assets/images/product-img2.png" alt="">
          <span class="product-badge badge-clinical">CLINICAL CHOICE</span>
        </div>
        <div class="product-body">
          <h5>EBA 270</h5>
          <p class="product-subtitle">SMALL CENTRIFUGE</p>
          <div class="stats-row">
            <div class="stat-cell">
              <span class="stat-label">MAX RPM</span>
              <span class="stat-value">4,000</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">MAX RCF</span>
              <span class="stat-value">2,254</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">CAPACITY</span>
              <span class="stat-value">6×15ml</span>
            </div>
          </div>
          <div class="card-actions">
            <a href="ProductDetails.php" class="btn-specs">VIEW SPECS</a>
            <button class="btn-quote">ADD TO QUOTE</button>
          </div>
        </div>
      </div>
 
      <!-- Card 4 -->
      <div class="product-card" data-aos="fade-up" data-aos-duration="1400">
        <div class="product-img">
                  

        </div>
        <div class="product-body">
          <h5>UNIVERSAL 320</h5>
          <p class="product-subtitle">UNIVERSAL CENTRIFUGE</p>
          <div class="stats-row">
            <div class="stat-cell">
              <span class="stat-label">MAX RPM</span>
              <span class="stat-value">16,000</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">MAX RCF</span>
              <span class="stat-value">24,900</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">CAPACITY</span>
              <span class="stat-value">4×200ml</span>
            </div>
          </div>
          <div class="card-actions">
            <a href="ProductDetails.php" class="btn-specs">VIEW SPECS</a>
            <button class="btn-quote">ADD TO QUOTE</button>
          </div>
        </div>
      </div>
 
      <!-- Card 5 -->
      <div class="product-card" data-aos="fade-up" data-aos-duration="1400">
        <div class="product-img">
          <div class="img-placeholder">MEGA 40 R</div>
          <span class="product-badge badge-high-volume">HIGH VOLUME</span>
        </div>
        <div class="product-body">
          <h5>MEGA 40 R</h5>
          <p class="product-subtitle">FLOOR STANDING</p>
          <div class="stats-row">
            <div class="stat-cell">
              <span class="stat-label">MAX RPM</span>
              <span class="stat-value">6,000</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">MAX RCF</span>
              <span class="stat-value">6,045</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">CAPACITY</span>
              <span class="stat-value">6×1000ml</span>
            </div>
          </div>
          <div class="card-actions">
            <a href="ProductDetails.php" class="btn-specs">VIEW SPECS</a>
            <button class="btn-quote">ADD TO QUOTE</button>
          </div>
        </div>
      </div>
 
      <!-- Card 6 -->
      <div class="product-card" data-aos="fade-up" data-aos-duration="1400">
        <div class="product-img">
          <div class="img-placeholder">MULTIFUGE X3 R</div>
          <span class="product-badge badge-new">NEW</span>
        </div>
        <div class="product-body">
          <h5>MULTIFUGE X3 R</h5>
          <p class="product-subtitle">HIGH-PERFORMANCE BENCHTOP</p>
          <div class="stats-row">
            <div class="stat-cell">
              <span class="stat-label">MAX RPM</span>
              <span class="stat-value">12,000</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">MAX RCF</span>
              <span class="stat-value">18,600</span>
            </div>
            <div class="stat-cell">
              <span class="stat-label">CAPACITY</span>
              <span class="stat-value">4×750ml</span>
            </div>
          </div>
          <div class="card-actions">
            <a href="#" class="btn-specs">VIEW SPECS</a>
            <button class="btn-quote">ADD TO QUOTE</button>
          </div>
        </div>
      </div>
 
      </div>
    </main>
  </div>
</div>


<!-- genration section -->
<<<<<<< HEAD
<div class="">
=======
<div class="comman-x-spacing">
>>>>>>> 98df71cb0c7ecf9f692c284c4fdf88012f3e8990
  <div class="gen-wrapper mt-3">
                        <!-- LEFT -->
                        <div class="first-gen" data-aos="fade-right" data-aos-duration="1400">
                            <span>NEW TECHNOLOGY RELEASE</span>
                            <h2>Next Generation
                                Magnetic Locking</h3>
                                <p class="gen-para">Introducing a friction-less, zero-maintenance magnetic
                                    lid locking system across the 2024 Scientiquipp Pro line.</p>
                                <button class="gen-btn">EXPLORE INNOVATION</button>
                        </div>

                        <!-- RIGHT -->
                        <div class="second-gen" data-aos="fade-left" data-aos-duration="1400">
                            <div class="content">

                                <div class="">icon</div>


                                <h3>Direct Technical
                                    Integration</h2>

                                    <div class="gen-para">
                                        Our engineers provide direct
                                        consultation for specialized laboratory
                                        integration and automation protocols.
                                    </div>
                                    <span class="gen-support">CONTACT SUPPORT</span>
                            </div>
                        </div>
                    </div>
  </div>
</div>

    <?php include('Footer.php')?>

    <?php include('script.php')?>

</body>

</html>