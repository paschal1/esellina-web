 
 <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="form-group">
                         <label for="singin-email">{{ __('Email Address') }} *</label>


                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }} *</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-footer">
                        

                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="signin-remember">{{ __('Remember Me') }}</label>
                                            </div><!-- End .custom-checkbox -->
                        </div>
                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>{{ __('LOGIN') }}</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                        

                                @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
<div class="form-footer">
                                <a class="forgot-link" href="{{ route('register') }}">
                                        Don't have an Account  <span class="btn btn-outline-primary-2">
                                            {{ __('SIGN UP') }}
                                                <i class="icon-long-arrow-right"></i>
                                            </span>
                                    </a>

                                    </div>
                            </div><!-- End .form-footer -->
                    </form>

