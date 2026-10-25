
<?php

ob_start();

?>

<!-- Welcome Banner -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1 fw-bold">Welcome to TorqX RC Racing</h2>
        <p class="text-muted mb-0">
            Discover the excitement of remote-controlled cars.
            Built for speed, performance, and adventure.
        </p>
    </div>
</div>

<!-- Hero Section -->
<div class="card border-0 shadow mb-4 overflow-hidden">
    <div class="card-body p-4 p-lg-5 text-white"
         style="background: linear-gradient(120deg, #111827, #1d4ed8, #0f172a);">

        <div class="row align-items-center">

            <div class="col-lg-7">
                <span class="badge bg-danger mb-3">READY, SET, RACE!</span>

                <h1 class="display-4 fw-bold">
                    UNLEASH<br>THE SPEED.
                </h1>

                <p class="lead mt-3">
                    Your next RC adventure starts here.
                    Explore high-performance RC cars designed for racing,
                    off-road adventures, and everyday fun.
                </p>

                <a href="products.php" class="btn btn-danger btn-lg mt-3">
                    <i class="bi bi-lightning-charge-fill me-2"></i>
                    Explore RC Cars
                </a>
            </div>

            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <i class="bi bi-car-front-fill"
                   style="font-size: 150px; color: #facc15;"></i>

                <h4 class="fw-bold mt-2">TORQX PERFORMANCE</h4>

                <p class="mb-0">Built for racers. Made for adventure.</p>
            </div>

        </div>
    </div>
</div>

<!-- Categories -->
<div class="mb-3">
    <h3 class="fw-bold">Explore Our RC World</h3>
    <p class="text-muted">
        Find the right RC car for your driving style.
    </p>
</div>

<div class="row g-4 mb-4">

    <!-- Racing Cars -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4 text-center">
                <i class="bi bi-speedometer2 text-danger"
                   style="font-size: 55px;"></i>

                <h5 class="fw-bold mt-3">RC Racing Cars</h5>

                <p class="text-muted">
                    Experience speed, precision, and competitive racing
                    with performance-focused RC cars.
                </p>

                <a href="products.php" class="btn btn-outline-danger">
                    Explore Products
                </a>
            </div>
        </div>
    </div>

    <!-- Off-Road Cars -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4 text-center">
                <i class="bi bi-truck-front-fill text-primary"
                   style="font-size: 55px;"></i>

                <h5 class="fw-bold mt-3">Off-Road RC Cars</h5>

                <p class="text-muted">
                    Take on rough terrain and outdoor adventures
                    with rugged RC vehicles.
                </p>

                <a href="products.php" class="btn btn-outline-primary">
                    Explore Products
                </a>
            </div>
        </div>
    </div>

    <!-- RC Collection -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4 text-center">
                <i class="bi bi-collection-fill text-warning"
                   style="font-size: 55px;"></i>

                <h5 class="fw-bold mt-3">RC Collection</h5>

                <p class="text-muted">
                    Discover different models, brands, and RC cars
                    for your personal collection.
                </p>

                <a href="products.php" class="btn btn-outline-warning">
                    View Collection
                </a>
            </div>
        </div>
    </div>

</div>

<!-- Featured Products -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Featured RC Cars</h3>
                <p class="text-muted mb-0">
                    Explore our sample RC car collection.
                </p>
            </div>

            <a href="products.php" class="btn btn-primary btn-sm">
                View All
            </a>
        </div>

        <hr>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 border">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-car-front-fill text-danger"
                           style="font-size: 65px;"></i>

                        <h5 class="fw-bold mt-3">Street Racer</h5>

                        <p class="text-muted">
                            A sleek RC car concept for speed enthusiasts.
                        </p>

                        <span class="badge bg-danger">RACING</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-truck-front-fill text-primary"
                           style="font-size: 65px;"></i>

                        <h5 class="fw-bold mt-3">Trail Explorer</h5>

                        <p class="text-muted">
                            An off-road RC car concept for outdoor adventures.
                        </p>

                        <span class="badge bg-primary">OFF-ROAD</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-lightning-charge-fill text-warning"
                           style="font-size: 65px;"></i>

                        <h5 class="fw-bold mt-3">Speed Machine</h5>

                        <p class="text-muted">
                            A performance-inspired RC car concept for racing fans.
                        </p>

                        <span class="badge bg-warning text-dark">PERFORMANCE</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Management Shortcuts -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">

        <h4 class="fw-bold">Store Management</h4>

        <p class="text-muted">
            Manage your RC car store using the links below.
        </p>

        <div class="d-flex flex-wrap gap-2">

            <a href="products.php" class="btn btn-dark">
                <i class="bi bi-box-seam me-2"></i>Products
            </a>

            <a href="customers.php" class="btn btn-primary">
                <i class="bi bi-people me-2"></i>Customers
            </a>

            <a href="staffs.php" class="btn btn-success">
                <i class="bi bi-person-badge me-2"></i>Staffs
            </a>

            <a href="orders.php" class="btn btn-danger">
                <i class="bi bi-cart me-2"></i>Orders
            </a>

        </div>

    </div>
</div>

<!-- Bottom Banner -->
<div class="text-center p-4 mb-3 rounded shadow-sm text-white"
     style="background-color: #212529;">

    <h4 class="fw-bold">YOUR RACE. YOUR RULES.</h4>

    <p class="mb-0">
        TorqX RC Cars — Fuel your passion for remote-controlled racing.
    </p>

</div>

<?php

$content = ob_get_clean();

require_once 'layout.php';

?>

