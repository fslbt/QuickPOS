<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="#">QuickPOS</a>
            </div>
            <nav>
                <ul id="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#signup" class="btn">Sign Up</a></li>
                </ul>
                <div id="menu-toggle">&#9776;</div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <h1>The Last POS System You’ll Ever Need</h1>
            <p>Modern, simple, and efficient point-of-sale software for your business.</p>
            <a href="#signup" class="btn">Get Started for Free</a>
            <img src="mockup.png" alt="POS Mockup">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <h2>Key Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Inventory Management</h3>
                    <p>Track stock levels, orders, and suppliers efficiently.</p>
                </div>
                <div class="feature-card">
                    <h3>Sales Analytics</h3>
                    <p>Get real-time insights into your sales performance.</p>
                </div>
                <div class="feature-card">
                    <h3>Easy Integration</h3>
                    <p>Connect with other tools and software effortlessly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing">
        <div class="container">
            <h2>Pricing Plans</h2>
            <div class="pricing-cards">
                <div class="card">
                    <h3>Basic</h3>
                    <p>$10/month</p>
                    <ul>
                        <li>Inventory Management</li>
                        <li>Basic Reporting</li>
                        <li>Email Support</li>
                    </ul>
                    <a href="#signup" class="btn">Get Started</a>
                </div>
                <div class="card featured">
                    <h3>Pro</h3>
                    <p>$25/month</p>
                    <ul>
                        <li>Inventory + Sales Analytics</li>
                        <li>Priority Support</li>
                        <li>Multi-store Support</li>
                    </ul>
                    <a href="#signup" class="btn">Get Started</a>
                </div>
                <div class="card">
                    <h3>Enterprise</h3>
                    <p>Custom Pricing</p>
                    <ul>
                        <li>All Pro Features</li>
                        <li>Dedicated Account Manager</li>
                        <li>Custom Integrations</li>
                    </ul>
                    <a href="#signup" class="btn">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container footer-container">
            <p>© 2025 QuickPOS. All rights reserved.</p>
            <div class="social-links">
                <a href="#" target="_blank">Facebook</a>
                <a href="#" target="_blank">Twitter</a>
                <a href="#" target="_blank">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
