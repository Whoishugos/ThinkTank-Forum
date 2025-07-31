@extends('layouts.auth')

@section('body')
<section class="bg-gray vh-100">
    <div class="container h-100 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-3">
                <a class="nav-link mb-5 text-center" href="">
                    <img class="h-32px" src="{{ asset('images/thinktank-red.png') }}" alt="think-tank">
                </a>
                <div class="card mb-5">
                    <form action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" autofocus>
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
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary rounded-2">Log In</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">
                    Don't Have An Account <a href="" class="text-underline"> Sign Up</a>
                </div>
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
