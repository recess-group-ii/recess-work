@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Agents')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Agent Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('agents.create') }}" class="btn btn-sm btn-primary">{{ __('Add Agent') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">{{ __('fName') }}</th>
                                                <th scope="col">{{ __('lName') }}</th>
                                                <th scope="col">{{ __('Gender') }}</th>
                                                <th scope="col">{{ __('Password') }}</th>
                                                <th scope="col">{{ __('Signature') }}</th>
                                                <th scope="col">{{ __('District ID') }}</th>
                                                <th scope="col">{{ __('Agent Head ID') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($agents as $agent)
                                                <tr>
                                                    <td>{{ $agent->fName }}</td>
                                                    <td>{{ $agent->lName }}</td>
                                                    <td>{{ $agent->gender }}</td>
                                                    <td>{{ $agent->password }}</td>
                                                    <td>{{ $agent->signature }}</td>
                                                    <td>{{ $agent->districtID }}</td>
                                                    <td>{{ $agent->agentHeadID }}</td>
                                                    <!--<td class="text-right">
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                @if ($agents->id != auth()->id())
                                                                    <form action="{{ route('user.destroy', $user) }}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        
                                                                        <a class="dropdown-item" href="{{ route('agents.edit', $user) }}">{{ __('Edit') }}</a>
                                                                        <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                            {{ __('Delete') }}
                                                                        </button>
                                                                    </form>    
                                                                @else
                                                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>-->
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <br /> <br /> <br />
                                    
                                </div>
                    
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection