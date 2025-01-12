<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Service Type') }}
            </h2>
            @if (count($getPlans) < 4)
                <x-comman-button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight" x-data=""
                    class="btn btn-explore">{{ __('Create') }}</x-comman-button>
            @endif
            <x-comman-button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPlanPrice"
                aria-controls="offcanvasPlanPrice" x-data=""
                class="btn btn-explore">{{ __('Car Type') }}</x-comman-button>
        </div>
    </x-slot>
    <div class="row">
        <div class="py-12 col-md-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <P class=" h3"> Service Type List</P>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Plan Name</th>
                                        <th scope="col">Price (Rs.)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getPlans as $getPlan)
                                        <tr>
                                            <th scope="row">{{ $getPlan->id }}</th>
                                            <td>{{ ucfirst($getPlan->plan_name) }}</td>
                                            <td>{{ $getPlan->plan_price }}</td>
                                            <td>
                                                <x-edit-button class="btn edit-btn" data-bs-toggle="offcanvas"
                                                    data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit"
                                                    data-plan-id="{{ $getPlan->id }}"
                                                    data-plan-name="{{ $getPlan->plan_name }}"
                                                    data-plan-price="{{ $getPlan->plan_price }}">
                                                    {{ __('Edit') }}
                                                </x-edit-button>
                                                {{-- <x-danger-button class="btn ">
                                            {{ __('Delete') }}
                                        </x-danger-button> --}}

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p>Total Records: {{ $getPlans->total() }}</p>
                            </div>
                            <div>
                                {{ $getPlans->links() }} <!-- Pagination Links -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="py-12 col-md-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <P class=" h3">Car type Wise Price List</P>
                        {{-- car price --}}
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Plan Name</th>
                                        <th scope="col">Price (Rs.)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carPrices as $carPrice)
                                        <tr>
                                            <th scope="row">{{ $carPrice->id }}</th>
                                            <td>{{ ucfirst($carPrice->car_type) }}</td>
                                            <td>{{ $carPrice->price }}</td>
                                            <td>
                                                <x-edit-button class="btn edit-btn" data-bs-toggle="offcanvas"
                                                    data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit"
                                                    data-carPrice-id="{{ $carPrice->id }}"
                                                    data-carPrice-name="{{ $carPrice->car_type }}"
                                                    data-carPrice-price="{{ $carPrice->price }}">
                                                    {{ __('Edit') }}
                                                </x-edit-button>
                                                {{-- <x-danger-button class="btn ">
                        {{ __('Delete') }}
                    </x-danger-button> --}}

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div>
                                <p>Total Records: {{ $carPrices->total() }}</p>
                            </div>
                            <div>
                                {{ $carPrices->links() }} <!-- Pagination Links -->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- Service Type create offcanvas --}}

    <div class="offcanvas offcanvas-end offcanvas-mobile w-100" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Create Service Type</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('service-plan.store') }}" id="serviceForm" method="POST" class="needs-validation"
                novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="planType" class="form-label">Select Plan *</label>
                            <select class="form-select" id="planType" name="plan_name" required>
                                <option value="" selected disabled>Select Plan</option>
                                <option value="basic plan">Basic Plan</option>
                                <option value="standard plan">Standard Plan</option>
                                <option value="premium plan">Premium Plan</option>
                            </select>
                            <div class="invalid-feedback">Please select a plan.</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="planPrice" class="form-label">Price *</label>
                            <input type="text" maxlength="4" pattern="[0-9]{1,4}" class="form-control"
                                id="planPrice" name="plan_price"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                            <div class="invalid-feedback">Please enter a valid price (up to 4 digits).</div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>


    {{-- Service Type Edit offcanvas --}}
    <div class="offcanvas offcanvas-end offcanvas-mobile w-100" tabindex="-1" id="offcanvasEdit"
        aria-labelledby="offcanvasEditLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasEditLabel">Edit Service Plan</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('service-plan.update') }}" id="serviceFormEdit" method="POST"
                class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="planType" class="form-label">Select Plan *</label>
                            <select class="form-select" id="plan_type" name="plan_name" required>
                                <option value="" selected disabled>Select Plan</option>
                                <option value="basic plan">Basic Plan</option>
                                <option value="standard plan">Standard Plan</option>
                                <option value="premium plan">Premium Plan</option>
                            </select>
                            <div class="invalid-feedback">Please select a plan.</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="planPrice" class="form-label">Price *</label>
                            <input type="text" class="form-control" id="plan_price" name="plan_price" required />
                            <div class="invalid-feedback">Please enter a valid price (up to 4 digits).</div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id='plan_id_edit' name="plan_id_edit" value =''>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>

    {{-- Service Type Edit offcanvas --}}
    <div class="offcanvas offcanvas-end offcanvas-mobile w-100" tabindex="-1" id="offcanvasPlanPrice"
        aria-labelledby="offcanvasPlanPriceLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasEditLabel">Create Car type Wise Price</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container mt-5">
                <form id="carPriceForm" action="{{ route('car-price.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Car Type Input Field -->
                        <div class="col-md-6 mb-3">
                            <label for="carType" class="form-label">Car Type</label>
                            <input type="text" class="form-control" id="carType" name="car_type"
                                placeholder="Enter car type (SUV, Sedan, etc.)" required>
                            <div class="invalid-feedback">Please enter a valid car type.</div>
                        </div>

                        <!-- Price Input Field -->
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                placeholder="Price will appear here" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('serviceFormEdit');

            form.addEventListener('submit', (e) => {
                if (!form.checkValidity()) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    </script>
    <style>
        @media (min-width: 576px) {
            .offcanvas-mobile {
                width: 400px !important;
            }
        }
    </style>
    <script>
        // JavaScript code to populate form fields when the edit button is clicked
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {

                    // Get the data attributes from the clicked button
                    const planId = button.getAttribute('data-plan-id');
                    const planName = button.getAttribute('data-plan-name');
                    const planPrice = button.getAttribute('data-plan-price');

                    // Set the form values
                    document.getElementById('plan_type').value = planName;
                    document.getElementById('plan_price').value = planPrice;

                    // Optionally, set the hidden input for the plan ID if you are updating it
                    document.getElementById('plan_id_edit').value = planId;
                });
            });
        });
    </script>
</x-app-layout>
