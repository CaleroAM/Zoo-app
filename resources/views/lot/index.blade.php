@extends('layouts.app')

@section('template_title')
    Lots
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lots') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lots.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Lot</th>
									<th >Date Cad</th>
									<th >Portion</th>
									<th >Date Start</th>
									<th >Fk Food</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lots as $lot)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $lot->id_lot }}</td>
										<td >{{ $lot->date_cad }}</td>
										<td >{{ $lot->portion }}</td>
										<td >{{ $lot->date_start }}</td>
										<td >{{ $lot->fk_food }}</td>

                                            <td>
                                                <form action="{{ route('lots.destroy', $lot->id_lot) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lots.show', $lot->id_lot) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lots.edit', $lot->id_lot) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
