@extends('welcome')

@section('content')
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary text-white rounded-3 mb-3">
                    <i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    @if (session('success'))
                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="">
                        @csrf

                        <!-- Name -->
                        <div class="form-floating mb-3">
                            <input name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                type="text" placeholder="Your Name" value="{{ old('name') }}" required>
                            <label for="name">Full Name</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-floating mb-3">
                            <input name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                type="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="form-floating mb-3">
                            <input name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
                                type="tel" placeholder="08xxxx" value="{{ old('phone') }}" required>
                            <label for="phone">Phone number</label>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="form-floating mb-3">
                            <textarea name="message" id="message"
                                class="form-control @error('message') is-invalid @enderror"
                                placeholder="Enter your message..." style="height: 10rem"
                                required>{{ old('message') }}</textarea>
                            <label for="message">Message</label>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
