<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Styling */
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .parent-form {
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(95deg, rgba(255, 123, 0, 0.7), rgba(139, 145, 45, 0.7)),
                url('{{ asset('assets/images/01.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        /* Glassmorphism Effect */
        .glass-form {
            backdrop-filter: blur(15px) saturate(180%);
            -webkit-backdrop-filter: blur(15px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.25);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .form-heading {
            text-align: center;
            color: black;
            margin-bottom: 1.5rem;
            font-weight: bold;
        }

        label {
            font-size: 0.9rem;
            margin-bottom: 0.4rem;
        }

        .form-control,
        .form-select {
            font-size: 0.85rem;
            padding: 0.4rem 0.6rem;
        }

        button {
            font-size: 0.9rem;
            padding: 0.5rem;
        }

        .text-center button {
            background-color: rgb(253, 118, 7);
            border-color: rgb(230, 120, 30);
            color: white;
            transition: background-color 0.3s, transform 0.2s;
        }

        .text-center button:hover {
            background-color: rgb(241, 109, 1);
            transform: scale(1.02);
        }
    </style>
</head>

<body>
    @php
    $tnList = file_get_contents('resources/jsons/tamilnadu_districts.json');
         $states = json_decode($tnList, true);
    @endphp
    <div class="parent-form">
        <div class="glass-form mt-5">
            <h4 class="form-heading">Car Service Form</h4>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Display Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- {{dd($getPlan)}} --}}
            <form action="{{ route('serviceForm.store') }}" method="POST" id="serviceForm" class="needs-validation"
                novalidate>
                @csrf

                <!-- Service Type -->
                <div class="mb-3">
                    <label for="serviceType" class="form-label">Service Type *</label>
                    <select class="form-select" id="serviceType" name="service_type" required disabled>
                        <option value="{{ $getPlan->plan_name }}">{{ strtoupper($getPlan->plan_name) }}</option>
                            {{-- <option value="Basic Wash">Basic Wash</option>
                            <option value="Deluxe Wash">Deluxe Wash</option>
                            <option value="Premium Wash">Premium Wash</option> --}}
                    </select>
                    <div class="invalid-feedback">Select a service type.</div>
                </div>

                <!-- Service Price -->
                <div class="mb-3">
                    <label for="servicePrice" class="form-label">Service Price *</label>
                    <input type="number" class="form-control" value="{{ $getPlan->plan_price }}" id="servicePrice"
                        name="servicePrice" placeholder="Enter price" required disabled>
                    {{-- <input type="hidden" name="servicePrice" value="{{ $getPlan->plan_price }}">
                    <input type="hidden" name="serviceType" value="{{ $getPlan->plan_name }}"> --}}
                    <input type="hidden" name="service_type_id" value="{{ $getPlan->id }}">
                    <div class="invalid-feedback">Enter service price.</div>
                </div>

                <!-- Client Details -->
                <div class="mb-3">
                    <label for="clientName" class="form-label">Client Name *</label>
                    <input type="text" class="form-control" id="clientName" value="{{ old('clientName') }}"
                        name="client_name" placeholder="Enter name" required>
                    <div class="invalid-feedback">Enter client's name.</div>
                </div>
                <div class="mb-3">
                    <label for="clientEmail" class="form-label">Client Email *</label>
                    <input type="email" class="form-control" id="client_email" value="{{ old('clientEmail') }}"
                        name="client_email" placeholder="Enter email" required>
                    <div class="invalid-feedback">Enter valid email.</div>
                </div>
                <div class="mb-3">
                    <label for="clientPhone" class="form-label">Phone No *</label>
                    <input type="tel" class="form-control" id="client_phone" value="{{ old('clientPhone') }}"
                        name="client_phone" placeholder="Enter phone" pattern="[0-9]{10}" required>
                    <div class="invalid-feedback">Enter valid phone number.</div>
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="doorNo" class="form-label">Door/Flat No *</label>
                    <input type="text" class="form-control" id="doorNo" value="{{ old('doorNo') }}"
                        name="door_no" placeholder="Enter number" required>
                    <div class="invalid-feedback">Enter door/flat no.</div>
                </div>
                <div class="mb-3">
                    <label for="address1" class="form-label">Address Line 1 *</label>
                    <input type="text" class="form-control" id="address1" value="{{ old('address1') }}"
                        name="address1" placeholder="Enter address" required>
                    <div class="invalid-feedback">Enter address.</div>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City *</label>
                    <input type="text" class="form-control" id="city" value="{{ old('city') }}"
                        name="city" placeholder="Enter city" required>
                    <div class="invalid-feedback">Enter city.</div>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">State *</label>
                    <select class="form-control" id="state" name="state" required>
                        <option value="" disabled selected>Select a state</option>
                        @foreach ($states as $state)
                            <option value="{{ $state }}" {{ old('state') == $state ? 'selected' : '' }}>
                                {{ $state }}
                            </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Please select a state.</div>
                </div>
                
                <div class="mb-3">
                    <label for="pin_code" class="form-label">Pincode *</label>
                    <input type="text" class="form-control" id="pin_code" value="{{ old('pin_code') }}"
                        name="pin_code" placeholder="Enter pincode" required>
                    <div class="invalid-feedback">State</div>
                </div>

                <!-- Car Details -->
                <div class="mb-3">
                    <label for="carNo" class="form-label">Car No (TN 00 AA 0000) *</label>
                    <div class="d-flex gap-2">
                        <!-- State Code -->
                        <input type="text" class="form-control" value="{{ old('stateCode') }}" id="stateCode"
                            name="state_code" maxlength="2" pattern="[A-Za-z]{2}" placeholder="TN"
                            oninput="this.value = this.value.toUpperCase()" required>
                        <!-- District Code -->
                        <input type="text" class="form-control" value="{{ old('districtCode') }}"
                            id="district_code" name="district_code" maxlength="2" pattern="[0-9]{2}"
                            placeholder="00" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                        <!-- Series Code -->
                        <input type="text" class="form-control" value="{{ old('seriesCode') }}" id="seriesCode"
                            name="series_code" maxlength="2" pattern="[A-Za-z]{2}" placeholder="AA"
                            oninput="this.value = this.value.toUpperCase()" required>
                        <!-- Number Code -->
                        <input type="text" class="form-control" value="{{ old('numberCode') }}" id="numberCode"
                            name="number_code" maxlength="4" pattern="[0-9]{4}" placeholder="0000"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                    </div>
                    <div class="invalid-feedback">Enter a valid car number in the format TN 00 AA 0000.</div>
                </div>


                <div class="mb-3">
                    <label for="carType" class="form-label">Car Type *</label>
                    <select class="form-select" id="carType" name="car_type" required>
                        <option value="">Choose</option>
                        <option value="SUV" {{ old('carType') == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="Sedan" {{ old('carType') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                        <option value="Hatchback" {{ old('carType') == 'Hatchback' ? 'selected' : '' }}>Hatchback
                        </option>
                        <option value="Foreign" {{ old('carType') == 'Foreign' ? 'selected' : '' }}>Foreign</option>
                    </select>
                    <div class="invalid-feedback">Select car type.</div>
                </div>
                <div class="mb-3">
                    <label for="carName" class="form-label">Car Name *</label>
                    <input type="text" class="form-control" id="carName" value="{{ old('carName') }}"
                        name="car_name" placeholder="Enter car name" required>
                    <div class="invalid-feedback">Enter car name.</div>
                </div>

                <!-- Submit Button -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn w-100">Submit</button>
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
