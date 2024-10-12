<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitTrade - Crypto Trading Platform</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/images/logo.svg" alt="Logo" width="40" height="30" class="me-2">
                <span class="fs-4 fw-bold">BitTrade</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active px-3" href="#investment-process">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#pricing">Invest</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Partnership</a></li>
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/user/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-2" href="/user/register">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-white text-center d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column (Text Content) -->
                <div class="col-lg-6 text-start">
                    <h1 class="hero-title display-3 fw-bold mb-4" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">
                        Invest in Bitcoin with Confidence
                    </h1>
                    <p class="lead mb-4 fs-4" style="max-width: 500px;">
                        Secure your future with BitTrade, a platform offering profitable and secure Bitcoin investment plans. Choose from flexible options designed to fit your financial goals.
                    </p>
                    <a href="/user/register" class="btn btn-lg btn-gradient mb-4">Get Started</a>
                </div>

                <!-- Right Column (Image) -->
                <div class="col-lg-6 text-center">
                    <img src="/images/hero-banner.png" alt="Cryptocurrency Illustration" class="img-fluid" style="max-width: 80%;">
                </div>
            </div>
        </div>

        <!-- Gradient Overlay -->
        <div class="gradient-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.2));"></div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-5" style="background-color: var(--eerie-black);">
        <div class="container">
            <div class="row text-white">
                <!-- Feature 1: Real-Time Trading -->
                <div class="col-lg-4 mb-4 text-center">
                    <i class="bi bi-graph-up fa-3x mb-3 gradient-icon"></i> <!-- Bootstrap Icon -->
                    <h2 class="gradient-text display-6 mb-3">Real-Time Trading</h2>
                    <p>Trade cryptocurrencies in real-time with accurate and up-to-the-second price updates.</p>
                </div>

                <!-- Feature 2: Secure Transactions -->
                <div class="col-lg-4 mb-4 text-center">
                    <i class="bi bi-shield-lock fa-3x mb-3 gradient-icon"></i> <!-- Bootstrap Icon -->
                    <h2 class="gradient-text display-6 mb-3">Secure Transactions</h2>
                    <p>All transactions are encrypted and protected with advanced security measures.</p>
                </div>

                <!-- Feature 3: 24/7 Support -->
                <div class="col-lg-4 mb-4 text-center">
                    <i class="bi bi-headset fa-3x mb-3 gradient-icon"></i> <!-- Bootstrap Icon -->
                    <h2 class="gradient-text display-6 mb-3">24/7 Support</h2>
                    <p>Our team is available round the clock to assist you with any issues or questions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Process Section -->
    <section id="investment-process" class="pt-5 bg-light">
        <div class="container mt-5">
            <h2 class="text-center mb-4">How to Start Investing</h2>
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step">
                        <i class="bi bi-person-fill process-icon"></i>
                        <h3>1. Sign Up</h3>
                        <p>Create your account by filling in the required details.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step">
                        <i class="bi bi-check-square process-icon"></i>
                        <h3>2. Choose a Plan</h3>
                        <p>Select an investment plan that suits your needs.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step">
                        <i class="bi bi-wallet process-icon"></i>
                        <h3>3. Fund Your Account</h3>
                        <p>Add funds to your account securely to start investing.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step">
                        <i class="bi bi-graph-up process-icon"></i>
                        <h3>4. Track Your Investment</h3>
                        <p>Monitor your investments and track your progress.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing Section -->
    <section id="pricing" class="bg-dark py-5">
        <div class="container">
            <div class="text-center m-5">
                <p><strong>Pricing</strong></p>
                <h2>Our Pricing Plans</h2>
                <p>Choose the plan that suits your trading needs.</p>
                <div class="btn-group btn-group-sm" role="group" aria-label="Pricing Plan">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Monthly</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Annually</label>
                </div>
            </div>
            <div class="row">
                <!-- Basic Plan -->
                <div class="col-lg-4">
                    <div class="card p-3">
                        <div class="card-header">
                            <h3>Basic</h3>
                        </div>
                        <div class="card-body">
                            <h4>$99/month</h4>
                            <p>Ideal for investors who are new to cryptocurrency or prefer a low-risk, hands-off approach to growing their wealth.</p>
                            <h5>Key Features:</h5>
                            <ul class="list-unstyled small">
                                <li><i class="bi bi-check-lg text-success"></i> Bitcoin-only investment</li>
                                <li><i class="bi bi-check-lg text-success"></i> Monthly Bitcoin accumulation</li>
                                <li><i class="bi bi-check-lg text-success"></i> Minimal risk strategy</li>
                                <li><i class="bi bi-check-lg text-success"></i> Access to monthly reports</li>
                            </ul>
                            <h5 class="mt-5">Allocation Strategy:</h5>
                            <ul class="list-group list-group-flush gap-1 small">
                                <li class="list-group-item px-0">100% invested in Bitcoin</li>
                                <li class="list-group-item px-0">Regular purchases using dollar-cost averaging</li>
                                <li class="list-group-item px-0">Long-term holding for future growth</li>
                            </ul>
                        </div>
                        <div class="card-footer mt-4">
                            <a href="#" class="btn btn-primary">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <!-- Pro Plan -->
                <div class="col-lg-4">
                    <div class="card pro p-3">
                        <div class="card-header pro">
                            <h3>Pro</h3>
                        </div>
                        <div class="card-body">
                            <h4>$299/month</h4>
                            <p>Designed for intermediate investors looking to combine long-term growth with periodic Bitcoin trading.</p>
                            <h5>Key Features:</h5>
                            <ul class="list-unstyled small">
                                <li><i class="bi bi-check-lg text-success"></i> Active Bitcoin trading</li>
                                <li><i class="bi bi-check-lg text-success"></i> Monthly and quarterly market reports</li>
                                <li><i class="bi bi-check-lg text-success"></i> Customizable portfolio options</li>
                            </ul>
                            <h5 class="mt-5">Allocation Strategy:</h5>
                            <ul class="list-group list-group-flush gap-1 small">
                                <li class="list-group-item px-0">80% for long-term Bitcoin holding</li>
                                <li class="list-group-item px-0">20% for strategic Bitcoin trades during market dips</li>
                            </ul>
                        </div>
                        <div class="card-footer mt-4">
                            <a href="#" class="btn btn-primary">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <!-- Enterprise Plan -->
                <div class="col-lg-4">
                    <div class="card p-3">
                        <div class="card-header">
                            <h3>Enterprise</h3>
                        </div>
                        <div class="card-body">
                            <h4>$999/month</h4>
                            <p>Best for experienced investors seeking advanced Bitcoin trading strategies and dedicated account management.</p>
                            <h5>Key Features:</h5>
                            <ul class="list-unstyled small">
                                <li><i class="bi bi-check-lg text-success"></i> Advanced Bitcoin trading</li>
                                <li><i class="bi bi-check-lg text-success"></i> Real-time market insights and alerts</li>
                                <li><i class="bi bi-check-lg text-success"></i> Dedicated portfolio management</li>
                            </ul>
                            <h5 class="mt-5">Allocation Strategy:</h5>
                            <ul class="list-group list-group-flush gap-1 small">
                                <li class="list-group-item px-0">50% for long-term Bitcoin holding</li>
                                <li class="list-group-item px-0">50% for short-term trading and advanced strategies</li>
                            </ul>
                        </div>
                        <div class="card-footer mt-4">
                            <a href="#" class="btn btn-primary">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 BitTrade. All Rights Reserved.</p>
            <a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Service</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>