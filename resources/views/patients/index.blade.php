@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Patients') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-end">
                        <x-button-link link="{{ route('patients.create') }}" label="New" severity="success" icon="ri-user-add-line" />
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Date Created</th>
                                <th>Last Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id }}</td>
                                    <td>{{ $patient->full_name }}</td>
                                    <td>{{ $patient->created_at->format('F j, Y g:i A') }}</td>
                                    <td>{{ $patient->updated_at->diffForHumans() }}</td>
                                    <td class="d-flex">
                                        <x-button-link link="{{ route('patients.edit', $patient->id) }}" label="Edit" icon="ri-edit-line" />

                                        <form method="POST" action="{{ route('patients.destroy', $patient->id) }}">
                                            @method('DELETE')
                                            @csrf

                                            <button
                                                class="btn btn-danger"
                                                type="submit"
                                                onclick="return confirm('Are you sure you want to delete this patient?')"
                                            >
                                                <i class="ri-delete-bin-line"></i>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div>
                        {{ $patients->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
