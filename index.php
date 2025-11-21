<?php
// App information
$appName = "TODA GO";
$version = "1.0.0";
$fileSize = '89.7 MB';

// Load feedbacks
$feedbackFile = 'feedbacks.json';
$feedbacks = file_exists($feedbackFile) ? json_decode(file_get_contents($feedbackFile), true) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name= "keywords" content="TODA GO, TODA, Tricycle App, Ride Booking, Transportation App, Naval, Mobile App, APK Download, TODA GO, todago">
    <meta name="description" content="TODA GO (TODAGO) is a tricycle ride booking app for drivers and passengers. Book rides, track drivers, and download the APK. Fast, easy, and free to use in Naval Biliran.">
    <meta name="google-site-verification" content="6ZLHakP2RaQlgZxIm_CASjBX_iEEswtxXZdraUJD9bo">
    <title><?php echo htmlspecialchars($appName); ?> - Download | TODA GO | Tricycle Ride App</title>
    <link rel="stylesheet" href="style.css?v=2.0">
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
                            <span>Size: <?php echo $fileSize; ?></span>
                        </div>
                    </div>
                    <a href="https://github.com/rexthernagiisangpogi/TODA-GO/releases/download/TODA_GO/TODAGO.apk" class="download-btn">
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

        <!-- Feedback Section -->
        <section id="feedback" class="feedback-section">
            <h2 class="section-title">User Feedback</h2>
            <p class="section-subtitle">See what our users are saying about TODA GO</p>
            
            <!-- Feedback Form -->
            <div class="feedback-form-container">
                <h3>Share Your Experience</h3>
                <form id="feedbackForm" class="feedback-form">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <div class="rating-input">
                        <label>Rating:</label>
                        <div class="stars">
                            <input type="radio" name="rating" value="5" id="star5" required>
                            <label for="star5"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" value="4" id="star4">
                            <label for="star4"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" value="3" id="star3">
                            <label for="star3"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" value="2" id="star2">
                            <label for="star2"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" value="1" id="star1">
                            <label for="star1"><i class="fas fa-star"></i></label>
                        </div>
                    </div>
                    <textarea name="comment" placeholder="Share your experience with TODA GO..." rows="4" required></textarea>
                    <button type="submit" class="submit-btn"><i class="fas fa-paper-plane"></i> Submit Feedback</button>
                </form>
            </div>

            <div class="feedback-grid">
                <?php if (empty($feedbacks)): ?>
                    <p style="text-align: center; color: #6b7280; grid-column: 1/-1;">No feedback yet. Be the first to share your experience!</p>
                <?php else: ?>
                    <?php foreach ($feedbacks as $index => $fb): 
                        $initials = implode('', array_map(fn($n) => strtoupper($n[0]), explode(' ', $fb['name'])));
                        $initials = substr($initials, 0, 2);
                        $hiddenClass = $index >= 2 ? ' hidden-feedback' : '';
                    ?>
                        <div class="feedback-card<?php echo $hiddenClass; ?>">
                            <div class="feedback-header">
                                <div class="user-avatar"><?php echo $initials; ?></div>
                                <div class="user-info">
                                    <h4><?php echo htmlspecialchars($fb['name']); ?></h4>
                                    <div class="rating">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i class="fa<?php echo $i <= $fb['rating'] ? 's' : 'r'; ?> fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <p class="feedback-text">"<?php echo htmlspecialchars($fb['comment']); ?>"</p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php if (count($feedbacks) > 2): ?>
                <div style="text-align: center; margin-top: 30px;">
                    <button id="seeMoreBtn" class="see-more-btn">
                        <i class="fas fa-chevron-down"></i> See More Comments
                    </button>
                </div>
            <?php endif; ?>
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
                    <li><a href="#feedback">Feedback</a></li>
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
                    <a href="https://github.com/rexthernagiisangpogi/TODA-GO/releases/download/TODA_GO/TODAGO.apk" class="footer-download-btn">
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
                <p class="footer-version">Version <?php echo htmlspecialchars($version); ?></p>
            </div>
        </div>
    </footer>

    <script>
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

        // Feedback form submission
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch('save_feedback.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Thank you for your feedback!');
                    location.reload();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                alert('Error submitting feedback. Please try again.');
            });
        });

        // See More Comments button
        const seeMoreBtn = document.getElementById('seeMoreBtn');
        if (seeMoreBtn) {
            seeMoreBtn.addEventListener('click', function() {
                const hiddenFeedbacks = document.querySelectorAll('.hidden-feedback');
                const isShowing = this.classList.contains('active');
                
                hiddenFeedbacks.forEach(feedback => {
                    feedback.style.display = isShowing ? 'none' : 'block';
                });
                
                this.classList.toggle('active');
                this.innerHTML = isShowing 
                    ? '<i class="fas fa-chevron-down"></i> See More Comments'
                    : '<i class="fas fa-chevron-up"></i> Show Less';
            });
        }
    </script>
</body>
</html>
