<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Client Service List') }}
            </h2>
           
        </div>
    </x-slot>

    <div class="row">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="font-size: x-small;">
                        <div class="container">
                            <h2>Employee List</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Assigned Cars</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>
                                                @foreach ($employee->cars as $car)
                                                    <span class="badge bg-secondary">{{ $car->car_model ?? 'N/A' }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('employees.assignCarsForm', $employee->id) }}" class="btn btn-sm btn-primary">
                                                    Assign Cars
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>