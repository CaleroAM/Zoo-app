@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Aquí va tu menú central --}}
                    <div class="container text-center mt-4">
                        <h4 class="mb-4">Menú de Tablas</h4>
                        <div class="row justify-content-center">
                            @php
                                $buttons = [
                                    ['url' => 'zones', 'label' => 'Zones'],
                                    ['url' => 'species', 'label' => 'Species'],
                                    ['url' => 'animals', 'label' => 'Animal'],
                                    ['url' => 'suppliers', 'label' => 'Suppliers'],
                                    ['url' => 'food', 'label' => 'Food'],
                                    ['url' => 'lots', 'label' => 'Lots'],
                                    ['url' => 'employees', 'label' => 'Employees'],
                                    ['url' => 'shifts', 'label' => 'Shifts'],
                                    ['url' => 'empshifts', 'label' => 'EmpShifts'],
                                    ['url' => 'dates', 'label' => 'Dates'],
                                    ['url' => 'carefuls', 'label' => 'Carefuls'],
                                ];
                            @endphp

                            @foreach ($buttons as $btn)
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <a href="{{ url($btn['url']) }}" class="btn btn-primary w-100">{{ $btn['label'] }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- Fin menú central --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
