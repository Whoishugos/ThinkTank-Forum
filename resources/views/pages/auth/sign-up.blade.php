@extends('layouts.auth')

@section('body')
<section class="bg-gray vh-100">
    <div class="container">
        <div class="row pt-5 justify-conetnt-center">
            <div class="col-12 col-lg-6 mb-5 my-auto mb-lg-auto me-0">
            <div class="d-none d-lg-block">
                <h2>Join The ThinkTank Community</h2>
                <p>
                    <ul>
                        <li>Stuck? Ask in the Discussions</li>
                        <li>Get answers from experienced developers from around the world</li>
                        <li>Contribute by answering questions</li>
                    </ul>
                </p>
            </div>
            <div class="d-block d-lg-none fs-4 text-center">
                Create your account in a minute. It's Free
            </div>
        </div>

        <div class="col-12 col-lg-3 h-100">
            <a href="/" class="nav-link mb-5 text-center">
            <img src="{{ asset('images/thinktank-red.png') }}" alt="thinktank" class="h-32px">
            </a>
            <div class="card mb-5">
                <form action="/">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@email" autocomplete="off" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start"
                            id="password" name="password" placeholder="Password" autocomplete="off">
                            <span class="input-group-text bg-white border-start-0 pe-auto"><a href="javascript:;" id="password-toggle">
                                <img src="{{ asset('images/eye-slash.png') }}" alt="Password Toggle" id="password-toggle-img">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control" id="username" name="username" placeholder="username" autocomplete="off" autofocus>
                </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary rounded-2">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="text-center">
            Already Have An Account?
            <a href="" class="text-underline">
                <u>Log In</u>
            </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('after-script')
       <script>
           $(document).ready(function() {
               var isPasswordRevealed = false;
               $('#password-toggle').on('click', function() {
                   isPasswordRevealed = !isPasswordRevealed; // Toggle the boolean value
                   if (isPasswordRevealed) {
                       $('#password-toggle-img').attr('src', "{{ asset('images/eye.png') }}");
                       $('#password').attr('type', 'text');
                   } else {
                       $('#password-toggle-img').attr('src', "{{ asset('images/eye-slash.png') }}");
                       $('#password').attr('type', 'password');
                   }
               });
           });
       </script>
   @endsection
