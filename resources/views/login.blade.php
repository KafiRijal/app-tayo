@extends('template.main')

@section('content')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-10 mx-auto">
                    <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{ url('auth/_login') }}" method="POST"
                        role="form">
                        @csrf
                        <h2 class="text-center mb-4">Masuk ke TAyo</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger text-center">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="ticket-form-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <input type="email" name="email" id="contact-email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email" required value="{{ old('email') }}">
                                    @error('email')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-12">
                                    <input type="password" name="password" id="ticket-form-name" class="form-control"
                                        placeholder="Kata Sandi" required>
                                    @error('password')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-10 col-8 mx-auto">
                                    <button type="submit" class="form-control">Masuk</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
