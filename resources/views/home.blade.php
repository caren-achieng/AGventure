@extends('layouts.guest')
@section('content')

    <div id="home" class="container-fluid">
        <div class="row">
            <div class="col p-5">
                <div class="row">

                    @foreach($farmers  as $farmer)
                        <div class="col-3">
                            <div class="card mb-3 shadow">
                                @isset($farmer->image)
                                    <img src="{{ asset("images/profiles/$farmers->image") }}" class="card-img-top" alt="...">
                                @else
                                    <img src="{{ asset("images/default-user.png") }}" class="card-img-top" alt="...">
                                @endisset
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $farmer->name }}</h5>
                                    <a href="{{ route('farmer', ['id' => $farmer]) }}" class="btn btn-outline-primary card-text">View {{ $farmer->name }}</a>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        {{ $farmers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
