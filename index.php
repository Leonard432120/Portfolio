<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ponje Design | Ponje Design Resources</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* =============== RESET & GLOBAL STYLES =============== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    :root {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --secondary: #f43f5e;
      --dark: #0f172a;
      --darker: #070a13;
      --light: #f1f5f9;
      --gray: #94a3b8;
      --success: #22c55e;
    }

    body {
      background-color: var(--darker);
      color: var(--light);
      line-height: 1.6;
      overflow-x: hidden;
      background-image: 
        radial-gradient(at 80% 20%, rgba(99, 102, 241, 0.15) 0, transparent 60%),
        radial-gradient(at 20% 80%, rgba(244, 63, 94, 0.15) 0, transparent 60%);
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    section {
      padding: 80px 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 50px;
      font-size: 2.5rem;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      border-radius: 2px;
    }

    .btn {
      display: inline-block;
      padding: 14px 32px;
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-decoration: none;
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      background: linear-gradient(135deg, var(--primary-dark), var(--primary));
    }

    .btn-secondary {
      background: linear-gradient(135deg, var(--secondary), #e11d48);
    }

    .btn-secondary:hover {
      background: linear-gradient(135deg, #e11d48, var(--secondary));
    }

    /* =============== NAVIGATION BAR =============== */
    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(7, 10, 19, 0.9);
      padding: 15px 5%;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .nav .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nav .logo img {
      height: 40px;
    }

    .nav .logo span {
      font-weight: 700;
      font-size: 1.4rem;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .nav-link ul {
      display: flex;
      list-style: none;
      gap: 30px;
      align-items: center;
    }

    .nav-link a, 
    .nav-link label {
      color: var(--light);
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
      transition: color 0.3s;
      cursor: pointer;
    }

    .nav-link a:hover,
    .nav-link label:hover {
      color: var(--primary);
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background: var(--dark);
      min-width: 200px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      padding: 10px 0;
      top: 100%;
      left: 0;
      z-index: 1;
    }

    .dropdown-content a {
      display: block;
      padding: 10px 20px;
      color: var(--light);
      text-decoration: none;
      transition: background 0.3s;
    }

    .dropdown-content a:hover {
      background: rgba(99, 102, 241, 0.1);
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .login a {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      padding: 10px 20px;
      border-radius: 6px;
      transition: all 0.3s;
    }

    .login a:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(79, 70, 229, 0.3);
    }

    .mobile-menu-btn {
      display: none;
      font-size: 1.5rem;
      cursor: pointer;
    }

    /* =============== HERO SECTION =============== */
    .hero {
      padding: 160px 0 100px;
      text-align: center;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%236366f1" fill-opacity="0.1" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,224C672,235,768,181,864,160C960,139,1056,149,1152,165.3C1248,181,1344,203,1392,213.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>') no-repeat bottom;
      background-size: contain;
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 20px;
      line-height: 1.2;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero p {
      font-size: 1.2rem;
      color: var(--gray);
      margin-bottom: 40px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero-buttons {
      display: flex;
      gap: 20px;
      justify-content: center;
      margin-top: 30px;
    }

    /* =============== FEATURES SECTION =============== */
    .features {
      background-color: var(--dark);
      border-radius: 20px;
      margin: 0 20px;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .feature-card {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.7), rgba(7, 10, 19, 0.7));
      padding: 30px;
      border-radius: 16px;
      text-align: center;
      transition: transform 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .feature-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 1.8rem;
    }

    .feature-card h3 {
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    .feature-card p {
      color: var(--gray);
    }

    /* =============== FORM SECTION =============== */
    .form-section {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 50px;
      align-items: center;
    }

    .form-content h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
    }

    .form-content p {
      color: var(--gray);
      margin-bottom: 30px;
    }

    .benefits-list {
      list-style: none;
      margin-bottom: 30px;
    }

    .benefits-list li {
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .benefits-list li i {
      color: var(--success);
    }

    .form-card {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.7), rgba(7, 10, 19, 0.7));
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
    }

    .form-group input {
      width: 100%;
      padding: 15px;
      border-radius: 8px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      background: rgba(15, 23, 42, 0.5);
      color: var(--light);
      font-size: 1rem;
    }

    .form-group input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
    }

    .privacy-note {
      font-size: 0.9rem;
      color: var(--gray);
      margin-top: 20px;
      text-align: center;
    }

    .privacy-note i {
      color: var(--primary);
      margin-right: 5px;
    }

    /* =============== PROJECTS SECTION =============== */
    .projects {
      position: relative;
    }

    .project-main {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: center;
      margin-bottom: 60px;
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.7), rgba(7, 10, 19, 0.7));
      padding: 40px;
      border-radius: 16px;
    }

    .project-content h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
    }

    .project-stats {
      display: flex;
      gap: 30px;
      margin: 25px 0;
    }

    .stat-item {
      text-align: center;
    }

    .stat-value {
      font-size: 2rem;
      font-weight: 700;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .stat-label {
      font-size: 0.9rem;
      color: var(--gray);
    }

    .project-image {
      position: relative;
    }

    .project-image img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .project-badge {
      position: absolute;
      top: -15px;
      right: -15px;
      background: linear-gradient(135deg, var(--secondary), #e11d48);
      color: white;
      padding: 10px 20px;
      border-radius: 30px;
      font-weight: 600;
      box-shadow: 0 10px 20px rgba(244, 63, 94, 0.3);
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .project-card {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.7), rgba(7, 10, 19, 0.7));
      border-radius: 16px;
      overflow: hidden;
      transition: transform 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .project-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .project-card-content {
      padding: 20px;
    }

    .project-card h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
    }

    .project-card p {
      color: var(--gray);
      margin-bottom: 20px;
      font-size: 0.95rem;
    }

    .project-card .technologies {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 20px;
    }

    .project-card .tech-tag {
      background: rgba(99, 102, 241, 0.15);
      color: var(--primary);
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.8rem;
    }

    /* =============== TESTIMONIALS SECTION =============== */
    .testimonials {
      background-color: var(--dark);
      border-radius: 20px;
      margin: 0 20px;
      position: relative;
    }

    .testimonials::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 100%;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23f43f5e" fill-opacity="0.05" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,224C672,235,768,181,864,160C960,139,1056,149,1152,165.3C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
      background-size: contain;
      z-index: -1;
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .testimonial-card {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.7), rgba(7, 10, 19, 0.7));
      padding: 30px;
      border-radius: 16px;
      position: relative;
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .testimonial-card i {
      position: absolute;
      top: 20px;
      right: 20px;
      font-size: 3rem;
      opacity: 0.1;
      color: var(--primary);
    }

    .testimonial-content {
      margin-bottom: 20px;
      font-style: italic;
      color: var(--gray);
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .author-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .author-details h4 {
      font-size: 1.1rem;
      margin-bottom: 5px;
    }

    .author-details p {
      color: var(--gray);
      font-size: 0.9rem;
    }

    /* =============== FOOTER =============== */
    footer {
      background-color: var(--dark);
      padding: 80px 0 30px;
      border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .footer-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      margin-bottom: 40px;
    }

    .footer-col h3 {
      font-size: 1.2rem;
      margin-bottom: 20px;
      position: relative;
      padding-bottom: 10px;
    }

    .footer-col h3::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      border-radius: 2px;
    }

    .footer-col ul {
      list-style: none;
    }

    .footer-col ul li {
      margin-bottom: 12px;
    }

    .footer-col ul li a {
      color: var(--gray);
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-col ul li a:hover {
      color: var(--primary);
    }

    .footer-form {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
    }

    .footer-form input {
      flex: 1;
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      background: rgba(15, 23, 42, 0.5);
      color: var(--light);
    }

    .footer-form button {
      padding: 12px 20px;
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      border: none;
      border-radius: 8px;
      color: white;
      cursor: pointer;
      transition: all 0.3s;
    }

    .footer-form button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(79, 70, 229, 0.3);
    }

    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }

    .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      color: var(--light);
      transition: all 0.3s;
    }

    .social-links a:hover {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      transform: translateY(-3px);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.05);
      padding-top: 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .footer-bottom p {
      color: var(--gray);
    }

    .footer-bottom-links {
      display: flex;
      gap: 20px;
    }

    .footer-bottom-links a {
      color: var(--gray);
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-bottom-links a:hover {
      color: var(--primary);
    }

    /* =============== RESPONSIVE DESIGN =============== */
    @media (max-width: 1024px) {
      .hero h1 {
        font-size: 2.8rem;
      }
      
      .form-section,
      .project-main {
        grid-template-columns: 1fr;
        gap: 40px;
      }
    }

    @media (max-width: 768px) {
      .nav-link ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--dark);
        flex-direction: column;
        padding: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      }
      
      .nav-link.active ul {
        display: flex;
      }
      
      .mobile-menu-btn {
        display: block;
      }
      
      .hero h1 {
        font-size: 2.3rem;
      }
      
      .hero-buttons {
        flex-direction: column;
        align-items: center;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .project-stats {
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
      
      .footer-bottom-links {
        justify-content: center;
      }
    }

    @media (max-width: 480px) {
      .hero h1 {
        font-size: 2rem;
      }
      
      .hero p {
        font-size: 1rem;
      }
      
      .feature-card,
      .testimonial-card,
      .form-card {
        padding: 20px;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
    }

    /* Animation keyframes */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate {
      animation: fadeIn 1s ease-out forwards;
    }

    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <div class="nav">
    <div class="logo">
      <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect x='20' y='20' width='60' height='60' fill='%236366f1' rx='10'/><text x='50' y='65' font-family='Arial' font-size='30' fill='white' text-anchor='middle'>D</text></svg>" alt="Ponje Design Logo">
      <span>PonjeDesign</span>
    </div>

    <div class="nav-link" id="navLink">
      <ul>
        <li class="dropdown">
          <label for="course-select">Courses <i class="fa fa-chevron-down"></i></label>
          <div class="dropdown-content">
            <a href="#">Introduction To HTML/CSS</a>
            <a href="#">Introduction To Javascript</a>
            <a href="#">PHP/MYSQL</a>
            <a href="#">UX Research Fundamentals</a>
            <a href="#">Advanced Prototyping</a>
          </div>
        </li>
        <li><a href="student-stories.php">Student Stories</a></li>
        <li><a href="free-resources.php">Free Resources</a></li>
        <li><a href="About.php">About</a></li>
        <li class="login"><a href="login.php">Login</a></li>
      </ul>
    </div>
    
    <div class="mobile-menu-btn" id="mobileMenuBtn">
      <i class="fas fa-bars"></i>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="animate">Transform your business potential with Leonard Ponje Mlungu</h1>
      <p class="animate delay-1">Get access to professionally designed Figma templates, UI kits, and design systems that will accelerate your workflow and impress your clients.</p>
      <div class="hero-buttons animate delay-2">
        <a href="#form-section" class="btn">Get Started With Us</a>
        <a href="https://www.udemy.com/course/learn-html-and-css-in-7-days-web-developer-bootcamp/?couponCode=MT180825G1" class="btn btn-secondary">Explore Resources</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features" id="features">
    <div class="container">
      <h2 class="section-title">Why People Love My Resources</h2>
      <div class="features-grid">
        <div class="feature-card animate">
          <div class="feature-icon">
            <i class="fas fa-palette"></i>
          </div>
          <h3>Fully Customizable</h3>
          <p>Easily change colors, fonts, and layouts to match your brand identity and project requirements.</p>
        </div>
        
        <div class="feature-card animate delay-1">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3>Responsive Design</h3>
          <p>Perfectly adapted for all screen sizes from desktop to mobile with well-organized breakpoints.</p>
        </div>
        
        <div class="feature-card animate delay-2">
          <div class="feature-icon">
            <i class="fas fa-layer-group"></i>
          </div>
          <h3>Well-Organized</h3>
          <p>Clean layers, components, and styles that make editing a breeze even for everyone.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Form Section -->
  <section class="container form-section" id="form-section">
    <div class="form-content animate">
      <h2>Get Started With Leonard Ponje Mlungu To See The Change</h2>
  <p>Over 25,000 clients are already achieving more with my resources, now it's your turn! Enter your details below for instant access.</p>
      
      <ul class="benefits-list">
        <li><i class="fas fa-check-circle"></i> Save dozens of hours of design time</li>
        <li><i class="fas fa-check-circle"></i> Impress clients with professional layouts</li>
        <li><i class="fas fa-check-circle"></i> Fully customizable to match your brand</li>
        <li><i class="fas fa-check-circle"></i> Get free updates for 1 year</li>
      </ul>
      
      <div class="trust-badges">
        <p><i class="fas fa-lock"></i> We respect your privacy and never share your data</p>
      </div>
    </div>
    
    <div class="form-card animate delay-1">
      <h3>Download Now</h3>
      <form>
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" placeholder="Enter your full name" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" placeholder="Enter your best email" required>
        </div>
        
        <div class="form-group">
          <label for="goals">Your Main Goal</label>
          <input type="text" id="goals" placeholder="Education, agency work, etc.">
        </div>
        
        <button type="submit" class="btn" style="width: 100%">Let's Get Started</button>
      </form>
      
      <p class="privacy-note">
        <i class="fas fa-shield-alt"></i> We respect your privacy and follow GDPR guidelines. Unsubscribe at any time.
      </p>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="projects">
    <div class="container">
      <h2 class="section-title">Featured Projects</h2>
      
      <div class="project-main">
        <div class="project-content">
          <h2>All My Projects On Github</h2>
          <p>From dynamic websites to smart online solutions, we've built projects that turn ideas into reality. Explore all our projects on GitHub and connect with us there.</p>
          
          <div class="project-stats">
            <div class="stat-item">
              <div class="stat-value">30%</div>
              <div class="stat-label">Faster checkout</div>
            </div>
            <div class="stat-item">
              <div class="stat-value">45%</div>
              <div class="stat-label">Repeat customers</div>
            </div>
            <div class="stat-item">
              <div class="stat-value">4.8★</div>
              <div class="stat-label">User rating</div>
            </div>
          </div>
          
          <a href="#" class="btn">View Case Study</a>
        </div>
        
        <div class="project-image">
         <div class="project-badge">Client Project</div>
            <img src="fuel.jpg" alt="Smart Printing System Dashboard">
         </div>

      </div>
      
      <div class="projects-grid">
        <div class="project-card animate">
          <img src="ponje.jpg" alt="Smart Printing System Dashboard">
          <div class="project-card-content">
            <h3>Lesson Enrollment System</h3>
            <p>A platform for managing online courses, materials, and quizzes with progress tracking.</p>
            <div class="technologies">
              <span class="tech-tag">React</span>
              <span class="tech-tag">Javascript</span>
              <span class="tech-tag">Mysql</span>
            </div>
            <a href="#" class="btn" style="padding: 8px 20px;">View Project</a>
          </div>
        </div>
        
        <div class="project-card animate delay-1">
          <img src="pay.jpg" alt="Smart Printing System Dashboard">
          <div class="project-card-content">
            <h3>Payment Integration</h3>
            <p>Integrated PayChangu for mobile money payments in multiple projects with dashboard analytics.</p>
            <div class="technologies">
              <span class="tech-tag">JavaScript</span>
              <span class="tech-tag">PayChangu API</span>
              <span class="tech-tag">Chart.js</span>
            </div>
            <a href="#" class="btn" style="padding: 8px 20px;">View Project</a>
          </div>
        </div>
        
        <div class="project-card animate delay-2">
          <img src="admin.jpg" alt="Smart Printing System Dashboard">
          <div class="project-card-content">
            <h3>Admin Dashboard</h3>
            <p>A modern admin panel for managing users, lessons, services, and reports with role-based access.</p>
            <div class="technologies">
              <span class="tech-tag">React</span>
              <span class="tech-tag">PHP</span>
              <span class="tech-tag">MySQL</span>
            </div>
            <a href="#" class="btn" style="padding: 8px 20px;">View Project</a>
          </div>
        </div>

         <div class="project-card animate delay-2">
          <img src="tracker.jpg" alt="Smart Printing System Dashboard">
          <div class="project-card-content">
            <h3>FERTILITY TRACKER</h3>
            <p>A smart fertility tracker website that helps users monitor menstrual cycles, predict fertile windows, and manage reproductive health with ease and privacy.</p>
            <div class="technologies">
              <span class="tech-tag">JavaScript</span>
              <span class="tech-tag">PHP</span>
              <span class="tech-tag">MySQL</span>
            </div>
            <a href="#" class="btn" style="padding: 8px 20px;">View Project</a>
          </div>
        </div>

         <div class="project-card animate delay-2">
          <img src="print.jpg" alt="Smart Printing System Dashboard">
          <div class="project-card-content">
            <h3>Smart Printing System</h3>
            <p>An all-in-one online printing solution with file uploads, service ordering, mobile money payments, and real-time tracking.</p>
            <div class="technologies">
              <span class="tech-tag">JavaScript</span>
              <span class="tech-tag">PHP</span>
              <span class="tech-tag">MySQL</span>
            </div>
            <a href="#" class="btn" style="padding: 8px 20px;">View Project</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <div class="container">
      <h2 class="section-title">What My Clients Say</h2>
      
      <div class="testimonials-grid">
        <div class="testimonial-card animate">
          <i class="fas fa-quote-right"></i>
          <p class="testimonial-content">"Leonard Ponje Mlungu built my landing page quickly and professionally. It exceeded my expectations and impressed my clients!"</p>
          <div class="testimonial-author">
            <div class="author-avatar">SA</div>
            <div class="author-details">
              <h4>Moses Mughogho</h4>
              <p>Web Designer</p>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card animate delay-1">
          <i class="fas fa-quote-right"></i>
         <p class="testimonial-content">"Leonard Ponje Mlungu's designs are not only professional but also educational. They helped me upgrade my skills from graphic design to UI/UX and gave me a solid foundation to build on."</p>
          <div class="testimonial-author">
            <div class="author-avatar">DK</div>
            <div class="author-details">
              <h4>Lwitiko Mwalungira</h4>
              <p>Data analytics at TechHub</p>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card animate delay-2">
          <i class="fas fa-quote-right"></i>
          <p class="testimonial-content">"I've used many templates before, but Leonard Ponje Mlungu's work is on another level. His attention to detail and clear documentation made implementation effortless."</p>
          <div class="testimonial-author">
            <div class="author-avatar">MJ</div>
            <div class="author-details">
              <h4>Aaron Kanyimbo</h4>
              <p>Frontend Developer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-container">
        <div class="footer-col">
          <h3>PonjeDesign</h3>
         <p>Leonard Ponje Mlungu designs and develops websites that empower businesses to grow, scale, and succeed online.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-x-twitter"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
          </div>
        </div>
        
        <div class="footer-col">
          <h3>Resources</h3>
          <ul>
           <li><a href="#">Smart Printing System</a></li>
           <li><a href="#">Fertility Tracker Website</a></li>
           <li><a href="#">Learning Management System</a></li>
           <li><a href="#">Business Portfolio Websites</a></li>
           <li><a href="#">Custom Web Platforms</a></li>

          </ul>
        </div>
        
        <div class="footer-col">
          <h3>Company</h3>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h3>Stay Updated</h3>
          <p>Subscribe to our newsletter for new resources, updates, and design tips.</p>
          <div class="footer-form">
            <input type="email" placeholder="Your email address">
            <button><i class="fas fa-paper-plane"></i></button>
          </div>
          <p>Get the latest design insights delivered to your inbox.</p>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>© 2023 DesignMastery. All rights reserved.</p>
        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Cookie Policy</a>
          <a href="#">Contact</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
      document.getElementById('navLink').classList.toggle('active');
    });

    // Animation on scroll
    document.addEventListener('DOMContentLoaded', function() {
      const animatedElements = document.querySelectorAll('.animate');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, {
        threshold: 0.1
      });
      
      animatedElements.forEach(element => {
        element.style.opacity = 0;
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        observer.observe(element);
      });

      // Form submission
      const form = document.querySelector('.form-card form');
      if (form) {
        form.addEventListener('submit', function(e) {
          e.preventDefault();
          const submitBtn = this.querySelector('button[type="submit"]');
          const originalText = submitBtn.textContent;
          
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
          submitBtn.disabled = true;
          
          // Simulate form submission
          setTimeout(() => {
            alert('Thank you! Your template download link has been sent to your email.');
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            form.reset();
          }, 2000);
        });
      }
    });
  </script>
</body>
</html>