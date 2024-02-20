
    <div class="title">
        <h1>Log in</h1>
        <p> Inserisci i tuoi dati per continuare </p>
        <p class="errorMessage" id="errorMessage_login" ></p>
    </div>

    <div class="form-div">
        <form id="loginForm" action="../core/login.php" method="post">
            <section>
                <div class="input-container">
                    <label for="username">Inserisci username:</label>
                    <div class="input-icon">
                        <input type="text" id="username" class="input-field" name="username" placeholder="Il tuo username" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" autocomplete="off">
                        <i class="fas fa-user" ></i>
                    </div>
                </div>

                <div class="input-container">
                    <label for="password">Inserisci Password:</label>
                    <div class="input-icon">
                        <input type="password" id="password" class="input-field" name="password" placeholder="La tua password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" autocomplete="off">
                        <i id="togglePassword" class="fas fa-eye-slash"></i>
                    </div>
                </div>

                <div class="remember-me-container">
                    <input type="checkbox" id="rememberMe" name="rememberMe" value="true" autocomplete="off">
                    <label for="rememberMe">Ricordami</label>
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
            <p>Non hai un account?<button type="button" id="toSignUp-button" class="change-btn">Sign Up</button></p>
        </div>

    </div>

