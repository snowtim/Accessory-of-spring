@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Member information

                    <ul>
                         Name : <a>{{ Auth::user()->name }}</a></br>
                         E-mail : <a>{{ Auth::user()->email}}</a></br>
                         User ID : <a>{{ Auth::user()->user_id}}</a></br>
                         Sex : <a>
                                    @if((Auth::user()->sex) == 1)
                                        male
                                    @else
                                        female
                                    @endif
                                </a></br>
                         Birthday : <a>{{ Auth::user()->birthday}}</a></br>
                         Phone : <a>{{ Auth::user()->phone}}</a></br>
                         Address : <a>{{ Auth::user()->address}}</a></br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
