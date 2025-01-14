<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Employees List') }}
            </h2>
            <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEmployeeForm">
                Add Employee
            </button>
        </div>
    </x-slot>
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="font-size: x-small;">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Address</th>
                                    <th>Aadhar Card No</th>
                                    <th>Salary</th>
                                    <th>Unique ID</th>
                                    <th>Joining Date</th>
                                    <th>Date of Birth</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->contact_no }}</td>
                                        <td>{{ $employee->address }}</td>
                                        <td>{{ $employee->aadhar_card_no }}</td>
                                        <td>{{ $employee->salary }}</td>
                                        <td>{{ $employee->unique_id }}</td>
                                        <td>{{ $employee->joining_date }}</td>
                                        <td>{{ $employee->date_of_birth }}</td>
                                        <td>
                                            <input type="checkbox" class="form-check-input toggle-status"
                                                data-id="{{ $employee->id }}"
                                                {{ $employee->is_active ? 'checked' : '' }}>
                                            <span class="status-text">
                                                {{ $employee->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p>Total Records: {{ $employees->total() }}</p>
                        </div>
                        <div>
                            {{ $employees->links() }} <!-- Pagination Links -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        {{-- Offcanvas create Employee --}}
        <div class="offcanvas offcanvas-end" id="offcanvasEmployeeForm" tabindex="-1">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Register Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <form method="POST" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contact_no" class="form-label">Contact No</label>
                        <input type="text" class="form-control @error('contact_no') is-invalid @enderror"
                            id="contact_no" name="contact_no" value="{{ old('contact_no') }}">
                        @error('contact_no')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="aadhar_card_no" class="form-label">Aadhar Card No</label>
                        <input type="text" class="form-control @error('aadhar_card_no') is-invalid @enderror"
                            id="aadhar_card_no" name="aadhar_card_no" value="{{ old('aadhar_card_no') }}">
                        @error('aadhar_card_no')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="number" class="form-control @error('salary') is-invalid @enderror" id="salary"
                            name="salary" value="{{ old('salary') }}">
                        @error('salary')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="unique_id" class="form-label">Unique ID</label>
                        <input type="text" class="form-control @error('unique_id') is-invalid @enderror"
                            id="unique_id" name="unique_id" value="{{ old('unique_id') }}">
                        @error('unique_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="joining_date" class="form-label">Joining Date</label>
                        <input type="date" class="form-control @error('joining_date') is-invalid @enderror"
                            id="joining_date" name="joining_date" value="{{ old('joining_date') }}">
                        @error('joining_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active"
                            {{ old('is_active', true) ? 'checked' : '' }}>
                        <label for="is_active" class="form-check-label">Is Active</label>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.toggle-status').change(function() {
                const employeeId = $(this).data('id');
                const isActive = $(this).is(':checked') ? 1 : 0;
                const statusText = $(this).siblings('.status-text');

                $.ajax({
                    url: `/employees/${employeeId}/toggle-status`,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        is_active: isActive
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update the UI to reflect the new status
                            statusText.text(isActive ? 'Active' : 'Inactive');
                        } else {
                            alert('Error updating status');
                        }
                    },
                    error: function() {
                        alert('An error occurred while updating status.');
                    }
                });
            });
        });
    </script>
</x-app-layout>
