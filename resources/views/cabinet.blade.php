@extends('layouts.default')

@section('title', 'Cabinet')

@section('content')

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Cabinet</h3>
                            <div class="row">
                                <div class="col">Login</div>
                                <div class="col">{{$user->login}}</div>
                            </div>
                            <div class="row">
                                <div class="col">First visit</div>
                                <div class="col">{{$user->first_visit->format('Y-m-d H:i:s')}}</div>
                            </div>

                            <hr class="my-4">

                            <a href="{{route('logout')}}" class="btn btn-light btn-lg btn-block"
                               type="submit">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
