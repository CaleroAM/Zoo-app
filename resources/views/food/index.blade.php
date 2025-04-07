@extends('layouts.app')

@section('template_title')
    Food
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Food') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('food.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Id Food</th>
									<th >Name</th>
									<th >Content</th>
									<th >Total Amount</th>
									<th >Cost</th>
									<th >Fk Supplier</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($food as $food)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $food->id_food }}</td>
										<td >{{ $food->name }}</td>
										<td >{{ $food->content }}</td>
										<td >{{ $food->total_amount }}</td>
										<td >{{ $food->cost }}</td>
										<td >{{ $food->fk_supplier }}</td>

                                            <td>
                                                <form action="{{ route('food.destroy', $food->id_food) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('food.show', $food->id_food) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('food.edit', $food->id_food) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
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
@endsection
