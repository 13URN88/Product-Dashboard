
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
    <div class="card-body p-3 p-lg-5 text-white"
        style="background-color: #212529;">

        <div class="row align-items-center position-relative">

            <div class="col-lg-7">
                <span class="badge bg-danger mb-3">READY, SET, RACE!</span>

                <h1 class="display-4 fw-bold">
                    UNLEASH<br>THE SPEED.
                </h1>

                <p class="lead mt-3">
                    Discover the latest RC cars from top brands and 
                    find the perfect model for your racing style.
                </p>

                
              <div class="col-lg-5 text-end">
                <a href="#"
                    class="btn btn-danger btn-lg position-absolute top-0 end-0 me-2 ">
                    <i class="bi bi-lightning-charge-fill me-2"></i>
                    Popular RC Cars
                </a>
              </div>

        </div>
    </div>
</div>


<!-- RC Car Types -->
<div class="mb-3 ms-4 mt-4">
    <h3 class="fw-bold">Explore RC Car Types</h3>
    <p class="text-muted">
        Choose an RC car based on your driving style.
    </p>
</div>

<div class="card mb-4 border-0 mx-4">
    <div class="card-body text-white text-center p-2"
         style="background-color: #212529; border-radius: 8px;">

        <div class="position-relative">

            <!-- Previous Arrow -->
            <button type="button"
                    class="btn text-white position-absolute top-50 start-0 translate-middle-y"
                    onclick="changeCarType(-1)"
                    aria-label="Previous car type">
                <i class="bi bi-chevron-left" style="font-size: 28px;"></i>
            </button>

            <!-- Car Type Content -->
            <div class="py-4 px-5" >

                <i id="carIcon" class="bi bi-car-front-fill"
                   style="font-size: 36px;"></i>

                <h5 id="carTitle" class="fw-bold mt-3">
                    On-Road Cars
                </h5>

                <p id="carDescription" class="mb-0">
                    Designed for smooth surfaces, high speed and circuit racing.
                </p>

            </div>

            <!-- Next Arrow -->
            <button type="button"
                    class="btn text-white position-absolute top-50 end-0 translate-middle-y"
                    onclick="changeCarType(1)"
                    aria-label="Next car type">
                <i class="bi bi-chevron-right" style="font-size: 28px;"></i>
            </button>

        </div>

        <!-- Indicators -->
        <div class="d-flex justify-content-center gap-2 mt-3">

            <button type="button" class="car-indicator active"
                    onclick="showCarType(0)" aria-label="On-Road Cars"></button>

            <button type="button" class="car-indicator"
                    onclick="showCarType(1)" aria-label="Monster Trucks"></button>

            <button type="button" class="car-indicator"
                    onclick="showCarType(2)" aria-label="Drift Cars"></button>

            <button type="button" class="car-indicator"
                    onclick="showCarType(3)" aria-label="Rock Crawlers"></button>

            <button type="button" class="car-indicator"
                    onclick="showCarType(4)" aria-label="Buggies"></button>

            <button type="button" class="car-indicator"
                    onclick="showCarType(5)" aria-label="Short Course Trucks"></button>

        </div>

    </div>
</div>

<style>
    .car-indicator {
        width: 30px;
        height: 4px;
        padding: 0;
        border: none;
        background-color: #777;
        cursor: pointer;
    }

    .car-indicator.active {
        background-color: white;
    }
</style>

<script>
    const carTypes = [
        {
            title: "On-Road Cars",
            description: "Designed for smooth surfaces, high speed and circuit racing.",
            icon: "bi-car-front-fill"
        },
        {
            title: "Monster Trucks",
            description: "Large tyres and high ground clearance for rough terrain.",
            icon: "bi-truck-front-fill"
        },
        {
            title: "Drift Cars",
            description: "Built for controlled slides, cornering and drift practice.",
            icon: "bi-speedometer2"
        },
        {
            title: "Rock Crawlers",
            description: "Designed for climbing rocks and navigating difficult trails.",
            icon: "bi-truck"
        },
        {
            title: "Buggies",
            description: "Lightweight RC cars suitable for dirt tracks and off-road racing.",
            icon: "bi-sign-turn-right-fill"
        },
        {
            title: "Short Course Trucks",
            description: "Truck-style RC vehicles made for dirt tracks and competitive racing.",
            icon: "bi-truck-front"
        }
    ];

    let currentCarType = 0;

    function showCarType(index) {
        currentCarType = index;

        document.getElementById("carTitle").textContent =
            carTypes[index].title;

        document.getElementById("carDescription").textContent =
            carTypes[index].description;

        document.getElementById("carIcon").className =
            "bi " + carTypes[index].icon;

        document.querySelectorAll(".car-indicator").forEach(function(indicator, i) {
            indicator.classList.toggle("active", i === index);
        });
    }

    function changeCarType(direction) {
        currentCarType =
            (currentCarType + direction + carTypes.length) % carTypes.length;

        showCarType(currentCarType);
    }
</script>



<!-- Popular Brands -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-3">

        <h3 class="fw-bold mb-1">Popular RC Car Brands</h3>

        <p class="text-muted">
            Explore manufacturers known for different RC vehicles and driving styles.
        </p>

        <hr>

        <div class="row g-3">

              <div class="col-md-6">
                <div class="border rounded p-3 h-100">
                    <h5 class="fw-bold">Tamiya</h5>
                    <p class="text-muted mb-0">
                        RC kits, touring cars, buggies and drift models.
                    </p>
                </div>
            </div>

           

            <div class="col-md-6">
                <div class="border rounded p-3 h-100">
                    <h5 class="fw-bold">Losi&Trax</h5>
                    <p class="text-muted mb-0">
                        Competition buggies, racing trucks and rock crawlers.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border rounded p-3 h-100">
                    <h5 class="fw-bold">Kyosho</h5>
                    <p class="text-muted mb-0">
                        Mini-Z cars, racing buggies and performance RC models.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border rounded p-3 h-100">
                    <h5 class="fw-bold">HPI Racing</h5>
                    <p class="text-muted mb-0">
                        On-road cars, drift cars and off-road vehicles.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border rounded p-3 h-100">
                    <h5 class="fw-bold">Axial</h5>
                    <p class="text-muted mb-0">
                        Rock crawlers and trail trucks for outdoor adventures.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border rounded p-3 h-100">
                    <h5 class="fw-bold">Mugen Seiki</h5>
                    <p class="text-muted mb-0">
                        Competition-focused RC buggies and racing vehicles.
                    </p>
                </div>
            </div>

        </div>

        <div class="mt-4">
            <a href="products.php" class="btn btn-primary">
                <i class="bi bi-box-seam me-2"></i>View Products
            </a>
        </div>

    </div>
</div>

<!-- Bottom Banner -->
<div class="text-center p-3 mb-3 rounded shadow-sm text-white"
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

