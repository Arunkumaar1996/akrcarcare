<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compact Glassmorphic Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Styling */
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .parent-form {
            height: 100% !important;
            width: 100%;
            background: url('{{asset('assets/images/05.jpg')}}') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            
        }

        /* Glassmorphism Effect */
        .glass-form {
            backdrop-filter: blur(10px) saturate(150%);
            -webkit-backdrop-filter: blur(10px) saturate(150%);
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 15px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 0.8rem;
            margin-bottom: 0.2rem;
        }

        .form-control, .form-select {
            font-size: 0.8rem;
            padding: 0.3rem 0.5rem;
        }

        .form-heading {
            text-align: center;
            color: white;
            margin-bottom: 1rem;
        }

        button {
            font-size: 0.8rem;
            padding: 0.4rem 1rem;
        }
    </style>
</head>
<body>
    <div class="parent-form">
    <div class="glass-form pt-5">
        <h4 class="form-heading">Car Service Form</h4>
        <form action="{{route('serviceForm.store')}}" method="POST" id="serviceForm" class="needs-validation" novalidate>
            <!-- Service Type -->
            @csrf
            <div class="mb-2">
                <label for="serviceType" class="form-label">Service Type *</label>
                <select class="form-select" id="serviceType" name="serviceType" required disabled>
                    <option value="{{$getPlan->plan_name}}">{{$getPlan->plan_name}}</option>
                    <option value="Basic Wash">Basic Wash</option>
                    <option value="Deluxe Wash">Deluxe Wash</option>
                    <option value="Premium Wash">Premium Wash</option>
                </select>
                <div class="invalid-feedback">Select a service type.</div>
            </div>

            <!-- Service Price -->
            <div class="mb-2">
                <label for="servicePrice" class="form-label">Service Price *</label>
                <input type="number" class="form-control" value="{{$getPlan->price}}" id="servicePrice" name="servicePrice" placeholder="Enter price" required disabled>
                <input type="hidden" class="form-control" value="{{$getPlan->price}}" id="servicePrice" name="servicePrice">
                <input type="hidden" class="form-control" value="{{$getPlan->plan_name}}" id="serviceType" name="serviceType">
                <div class="invalid-feedback">Enter service price.</div>
            </div>

            <!-- Client Details -->
            <div class="mb-2">
                <label for="clientName" class="form-label">Client Name *</label>
                <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Enter name" required>
                <div class="invalid-feedback">Enter client's name.</div>
            </div>
            <div class="mb-2">
                <label for="clientEmail" class="form-label">Client Email *</label>
                <input type="email" class="form-control" id="clientEmail" name="clientEmail" placeholder="Enter email" required>
                <div class="invalid-feedback">Enter valid email.</div>
            </div>
            <div class="mb-2">
                <label for="clientPhone" class="form-label">Phone No *</label>
                <input type="tel" class="form-control" id="clientPhone" name="clientPhone" placeholder="Enter phone" pattern="[0-9]{10}" required>
                <div class="invalid-feedback">Enter valid phone number.</div>
            </div>

            <!-- Address -->
            <div class="mb-2">
                <label for="doorNo" class="form-label">Door/Flat No *</label>
                <input type="text" class="form-control" id="doorNo" name="doorNo" placeholder="Enter number" required>
                <div class="invalid-feedback">Enter door/flat no.</div>
            </div>
            <div class="mb-2">
                <label for="address1" class="form-label">Address Line 1 *</label>
                <input type="text" class="form-control" id="address1" name="address1" placeholder="Enter address" required>
                <div class="invalid-feedback">Enter address.</div>
            </div>
            <div class="mb-2">
                <label for="city" class="form-label">City *</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
                <div class="invalid-feedback">Enter city.</div>
            </div>

            <!-- Car Details -->
            <div class="mb-2">
                <label for="carNo" class="form-label">Car No (TN 00 AA 0000) *</label>
                <input type="text" class="form-control" id="carNo" name="carNo" placeholder="Enter car no" pattern="[A-Z]{2}[ ]?[0-9]{2}[ ]?[A-Z]{2}[ ]?[0-9]{4}" required>
                <div class="invalid-feedback">Enter valid car number.</div>
            </div>
            <div class="mb-2">
                <label for="carType" class="form-label">Car Type *</label>
                <select class="form-select" id="carType" name="carType" required>
                    <option value="">Choose</option>
                    <option value="SUV">SUV</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Foreign">Foreign</option>
                </select>
                <div class="invalid-feedback">Select car type.</div>
            </div>
            <div class="mb-2">
                <label for="carName" class="form-label">Car Name *</label>
                <input type="text" class="form-control" id="carName" name="carName" placeholder="Enter car name" required>
                <div class="invalid-feedback">Enter car name.</div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>
</div>
    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>
