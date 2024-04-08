@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <x-button-link link="{{ route('patients.index') }}" label="Back to List" icon="ri-arrow-go-back-line" />
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __($patient ? "Edit $patient->full_name" : 'Add New Patient') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <form
                    method="POST"
                    class="px-4 py-3"
                    action="{{
                        $patient ? route('patients.update', $patient->id) : route('patients.store')
                    }}"
                >
                    @method($patient ? 'PUT' : 'POST')
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <x-input-text
                                type="text"
                                name="first_name"
                                value="{{ $patient?->first_name }}"
                                hasError="{{ $errors->has('first_name') }}"
                            />
                        </div>

                        <div class="col-md-6">
                            <x-input-text
                                type="text"
                                name="last_name"
                                value="{{ $patient?->last_name }}"
                                hasError="{{ $errors->has('last_name') }}"
                            />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <x-input-text
                                type="email"
                                name="email"
                                value="{{ $patient?->email }}"
                                hasError="{{ $errors->has('email') }}"
                            />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <x-input-text
                                type="text"
                                name="address"
                                value="{{ $patient?->address }}"
                                hasError="{{ $errors->has('address') }}"
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button
                                type="submit"
                                class="btn btn-success"
                                onclick="return confirm('Are you sure you want to save this patient?')"
                            >
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
