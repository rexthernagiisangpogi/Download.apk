<?php
// App information
$appName = "TODA GO";
$version = "1.0.0";
$apkFile = 'app-release.apk';
$fileSize = file_exists($apkFile) ? round(filesize($apkFile) / (1024 * 1024), 1) . ' MB' : '89.5 MB';
$lastUpdated = file_exists($apkFile) ? date('F d, Y', filemtime($apkFile)) : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($appName); ?> - Download</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="static/img/WWWW.png" alt="TODA Go Logo" style="width: 48px; height: 48px; border-radius: 50%; background: #2d3748; padding: 6px;">
                <span><?php echo htmlspecialchars($appName); ?></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Download <?php echo htmlspecialchars($appName); ?></h1>
                <p class="hero-subtitle">The fastest way to get a ride. Track, book, and ride with trusted tricycle drivers — all in one tap.</p>
            </div>
        </div>
    </section>
    <!-- Main Content -->
    <main class="container">
        <!-- Download Section -->
        <section class="download-section">
            <?php if (isset($_GET['error']) && $_GET['error'] === 'file_not_found'): ?>
                <div style="background: #fee2e2; border-left: 4px solid #ef4444; color: #991b1b; padding: 1rem; margin-bottom: 2rem; border-radius: 8px;">
                    <p><i class="fas fa-exclamation-triangle"></i> Error: The APK file was not found. Please contact support.</p>
                </div>
            <?php endif; ?>
            
            <div class="download-card">
                <div class="app-icon">
                    <img src="static/img/WWWW.png" alt="TODA Go Logo" style="width: 120px; height: 120px; border-radius: 50%; background: #2d3748; padding: 15px;">
                </div>
                <div class="app-info">
                    <h2><?php echo htmlspecialchars($appName); ?></h2>
                    <p class="version">Version <?php echo htmlspecialchars($version); ?></p>
                    <div class="app-details">
                        <div class="detail">
                            <i class="fas fa-database"></i>
                            <span>Size:<?php echo $fileSize; ?></span>
                        </div>
                    </div>
                    <a href="https://github.com/rexthernagiisangpogi/TODA-GO/releases/download/TODA_GO/TODA.GO.apk" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download APK
                    </a>
                    <p class="download-note">Safe and secure download</p>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="features-section">
            <h2 class="section-title">App Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Real-Time Tracking</h3>
                    <p>Track your TODA ride in real-time with precise GPS location and estimated arrival time.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>TODA Network</h3>
                    <p>Connect with verified TODA drivers across Naval for authentic local transportation.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>In-App Communication</h3>
                    <p>Chat directly with your driver and rate your experience for better service quality.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Smart Matching</h3>
                    <p>Intelligent driver-passenger matching system optimized for TODA routes and availability.</p>
                </div>
            </div>
        </section>

       
    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="static/img/WWWW.png" alt="TODA Go Logo" style="width: 40px; height: 40px; border-radius: 50%; background: #2d3748; padding: 5px;">
                    <span><?php echo htmlspecialchars($appName); ?></span>
                </div>
                <p class="footer-description">
                    The ultimate mobile application that brings innovation to your fingertips. 
                    Download now and experience the future.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Support</h3>
                <ul class="footer-links">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Download</h3>
                <div class="download-links">
                    <a href="https://github.com/rexthernagiisangpogi/TODA-GO/releases/download/TODA_GO/TODA.GO.apk" class="download-btn" class="footer-download-btn">
                        <i class="fab fa-android"></i>
                        <div>
                            <small>Download for</small>
                            <span>Android</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($appName); ?>. All rights reserved.</p>
                <p class="footer-version">Version <?php echo htmlspecialchars($version); ?> | Last updated: <?php echo $lastUpdated; ?></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileMenu.addEventListener('click', () => {
            mobileMenu.classList.toggle('is-active');
            navMenu.classList.toggle('active');
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Active navigation link highlighting
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
