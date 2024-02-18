
    <div class="title">
        <h1>Log in</h1>
        <p> Enter your details to continue </p>
        <p id="errorMessage_login" style="color:red;"></p>
    </div>

    <div class="form-div">
        <form id="loginForm" action="core/login.php" method="post">
            <section>
                <div class="input-container">
                    <label for="username">Enter your username:</label>
                    <div class="input-icon">
                        <input type="text" id="username" class="input-field" name="username" placeholder="Your Username" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" autocomplete="off">
                        <i class="fas fa-user" ></i>
                    </div>
                </div>

                <div class="input-container">
                    <label for="password">Enter your Password:</label>
                    <div class="input-icon">
                        <input type="password" id="password" class="input-field" name="password" placeholder="Your Password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" autocomplete="off">
                        <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer; font-weight: normal;"></i>
                    </div>
                </div>

                <div class="remember-me-container">
                    <input type="checkbox" id="rememberMe" name="rememberMe" value="true" autocomplete="off">
                    <label for="rememberMe">Remember Me</label>
                </div>

                <div class="colored-btn">
                    <button class="submit-button" id="submit-btn_login" type="submit">Login</button>
                </div>

            </section>
        </form>
    </div>

    <div class="sub-form">

        <hr class="divider" />

        <div class="no-account">
            <p> I don't have an account. <button type="button" id="toSignUp-button" class="change-btn">Sign Up</button></p>
        </div>

    </div>

