<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Assign Client') }}
            </h2>

        </div>
    </x-slot>

    <div class="row">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="font-size: x-small;">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Client Phone</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Pin Code</th>
                                        <th>Cars</th>
                                        <th>Plan</th>
                                        <th>Employee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $client->id }}</td>
                                            <td>{{ $client->client_name }}</td>
                                            <td>{{ $client->client_email }}</td>
                                            <td>{{ $client->client_phone }}</td>
                                            <td>{{ $client->door_no }}, {{ $client->address1 }}</td>
                                            <td>{{ $client->city }}</td>
                                            <td>{{ $client->state }}</td>
                                            <td>{{ $client->pin_code }}</td>
                                            <td>
                                                @foreach ($client->cars as $car)
                                                    <p>{{ $car->car_name }} ({{ $car->car_number }})</p>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($client->cars as $car)
                                                    <p>{{ $car->service_type_price }} ({{ $car->service_type_price }})
                                                    </p>
                                                @endforeach
                                            </td>
                                            <td>

                                                <select class="form-select employee-select"
                                                    data-client-id="{{ $client->id }}">
                                                    <option value="">-- Select Client --</option>
                                                    @foreach ($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p>Total Records: {{ $clients->total() }}</p>
                            </div>
                            <div>
                                {{ $clients->links() }} <!-- Pagination Links -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('change', '.employee-select', function() {
            var employeeId = $(this).val();
            var clientId = $(this).data('client-id');

            if (employeeId && clientId) {
                $.ajax({
                    url: "{{ route('employees.assignClientsForm') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        car_id: clientId,
                        employee_id: employeeId
                    },
                    success: function(response) {
                        alert('Employee assigned successfully!');
                    },
                    error: function(xhr) {
                        alert('Something went wrong. Please try again.');
                    }
                });
            }
        });
    </script>

</x-app-layout>
