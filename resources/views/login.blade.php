@extends('layouts.default')

@section('title', 'Login')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form method="POST" action="{{route('login')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <h3 class="mb-5">Sign in</h3>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Login</label>
                                    <input type="text" name="login" id="typeEmailX-2" class="form-control form-control-lg"/>
                                    @if($errors->has('login'))
                                        <p class="text-danger">
                                            {{join(',', $errors->get('login'))}}
                                        </p>
                                    @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password confirmation</label>
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg"/>
                                    @if($errors->has('password'))
                                        <p class="text-danger">
                                            {{join(',', $errors->get('password'))}}
                                        </p>
                                    @endif
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3"/>
                                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                                <hr class="my-4">

                                <a href="{{route('register.form')}}" class="btn btn-info btn-lg btn-block"
                                   type="submit">Registration</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
