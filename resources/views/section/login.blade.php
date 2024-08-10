<!-- ********** login card popup ********** -->

<div class="login-area" id="login-area">
    <div class="wrapper-login">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="{{ route('user-login') }}" method="POST">

                @csrf
                @method('POST')
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                    @error('email')
                        <div style="color: #ff0033 ;">{{ $message }}</div>
                    @enderror
                    
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                    @error('password')
                        <div style="color: #ff0033 ;">
                            should be ( 0-9, Zz, ! @ # $ % )</div>
                    @enderror
                </div>

                <div class="remember-forgot" style="justify-content: space-between;">

                    <label class="custom-checkbox">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Remember me
                    </label>

                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Log in</button>
                <div class="login-register">
                    <p>Don't Have an account ?
                        <a href="#" class="register-link">Register</a>
                    </p>
                    </p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="{{ route('user-register') }}" method="POST">

                @csrf
                {{-- @method("POST") --}}
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                    <input type="text" name="name" required>
                    <label>Username</label>
                    @error('name')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                    @error('email')
                        <div style="color: #ff0033 ;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                    @error('password')
                        <div style="color: #ff0033 ;">
                            should be ( 0-9, Zz, ! @ # $ % )</div>
                    @enderror
                </div>
                <div class="remember-forgot">


                    <label class="custom-checkbox">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        I agree to the terms & conditions
                    </label>

                </div>
                <button type="submit" class="login-btn">Sign Up</button>
                <div class="login-register">
                    <p>Already have an account ?
                        <a href="#" class="login-link">Login</a>
                    </p>
                    </p>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- ********** end login card popup **********-->
