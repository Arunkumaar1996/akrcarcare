<div class="container" style="">
    <h2>Our Services</h2>
    <div class="row gy-4">
        <div class="col-sm-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center"
                            style="border-radius: 50%;
background: #fafafa; width:200px; height:200px">
                            <img width="150px" height="150px"
                                src="{{ asset('assets/bootstrap5/img/icons/clean1.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                    <h5 class="card-title">Daily Routine Car Cleaning</h5>
                    <p class="card-text">Maintaining a clean car is essential for both its appearance and longevity.
                        Our daily routine car cleaning service is designed to keep your car spotless from the
                        outside. We take care of all the essential exterior cleaning tasks, ensuring your car shines
                        every day.</p>
                    <h6 class="card-subtitle mb-2 text-muted">Service Features:</h6>
                    <ul>
                        <li class="text-bold">Exterior washing and wiping</li>
                        <li class="text-bold">Removal of dust and grime</li>
                        <li class="text-bold">Wheel and tire cleaning</li>
                        <li class="text-bold">Mirror and glass cleaning</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center"
                            style="border-radius: 50%;
background: #fafafa; width:200px; height:200px">
                            <img width="150px" height="150px"
                                src="{{ asset('assets/bootstrap5/img/icons/car-wash2.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                    <h5 class="card-title">Monthly Interior Deep Cleaning</h5>
                    <p class="card-text">Beyond the exterior, it's important to keep your car's interior clean and
                        hygienic. Our monthly interior cleaning service is tailored to give your car’s interior the
                        attention it deserves. We ensure that your car's upholstery, dashboard, and other interior
                        components are thoroughly cleaned, providing a comfortable and fresh driving experience.</p>
                    <h6 class="card-subtitle mb-2 text-muted">Service Features:</h6>
                    <ul>
                        <li class="text-bold">Vacuuming of seats, mats, and carpets</li>
                        <li class="text-bold">Dashboard and panel cleaning</li>
                        <li class="text-bold">Upholstery stain removal</li>
                        <li class="text-bold">Interior deodorizing for a fresh ambiance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card');

        let maxHeight = 0;
        cards.forEach(card => {
            card.style.height = 'auto';
            const cardHeight = card.offsetHeight;
            if (cardHeight > maxHeight) {
                maxHeight = cardHeight;
            }
        });
        cards.forEach(card => {
            card.style.height = `${maxHeight}px`;
        });
    });
</script>
