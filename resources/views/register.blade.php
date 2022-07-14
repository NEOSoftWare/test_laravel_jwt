@extends('layouts.default')

@section('title', 'Registration')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form method="POST" action="{{route('register')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <h3 class="mb-5">Registration</h3>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Login</label>
                                    <input type="text" name="login" id="typeEmailX-2" class="form-control form-control-lg" value="{{old('login')}}"/>
                                    @if($errors->has('login'))
                                        <p class="text-danger">
                                            {{join(',', $errors->get('login'))}}
                                        </p>
                                    @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg"/>
                                    @if($errors->has('password'))
                                        <p class="text-danger">
                                            {{join(',', $errors->get('password'))}}
                                        </p>
                                    @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Confirm password</label>
                                    <input type="password" name="password_confirmation" id="typePasswordX-2" class="form-control form-control-lg" />
                                    @if($errors->has('password_confirmation'))
                                        <p class="text-danger">
                                            {{join(',', $errors->get('password_confirmation'))}}
                                        </p>
                                    @endif
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Registration</button>

                                <hr class="my-4">

                                <a href="{{route('login.form')}}" class="btn btn-info btn-lg btn-block"
                                   type="submit">Login</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $(function (){
            let first_visit = $.cookie('first_visit');
            if (!first_visit) {
                $.cookie('first_visit', (new Date()).getTime(), { expires : 9999 });
            }
        });
    </script>
@endsection
