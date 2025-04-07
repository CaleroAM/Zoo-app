@extends('layouts.app')

@section('template_title')
    {{ $food->name ?? __('Show') . " " . __('Food') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Food</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('food.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Food:</strong>
                                    {{ $food->id_food }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $food->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Content:</strong>
                                    {{ $food->content }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total Amount:</strong>
                                    {{ $food->total_amount }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cost:</strong>
                                    {{ $food->cost }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fk Supplier:</strong>
                                    {{ $food->fk_supplier }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
