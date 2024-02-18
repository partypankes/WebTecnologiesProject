
    <div class="title">
        <h1>Sign Up</h1>
        <p>Join our community and start sharing!</p>
        <p id="errorMessage" style="color:red;"></p>
    </div>

    <div class="form-div">
        <form id="signupForm" method="post">

            <section id="section1">

                <div class="input-container">
                    <label for="name">Name:</label>
                    <input type="text" name="nome" id="name" class="input-field" placeholder="Name" autocomplete="off">
                </div>

                <div class="input-container">
                    <label for="surname">Surname:</label>
                    <input type="text" name="cognome" id="surname" class="input-field" placeholder="Surname" autocomplete="off">
                </div>

                <div class="input-container">
                    <label for="birthdate">Date of Birth:</label>
                    <input type="date" name="data_di_nascita" id="birthdate" class="input-field" placeholder="Date of Birth" autocomplete="off">
                </div>

                <div class="input-container">
                    <label for="Gender">Gender: </label>
                    <label for="Gender" > &emsp;Uomo</label>
                    <input type="radio" id="Gender" name="sesso" value="M">
                    <label for="Gender"> &emsp;Donna</label>
                    <input type="radio" id="Gender" name="sesso" value="F">
                    <label for="Gender"> &emsp;Altro</label>
                    <input type="radio" id="Gender" name="sesso" value="O">
                </div>

                <div class="colored-btn">
                    <button id="next-button" class="submit-button" type="button">Next</button>
                </div>

            </section>


            <section id="section2">

                <div class="input-container">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="input-field" placeholder="Username" maxlength="16" autocomplete="off">
                </div>

                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="input-field" placeholder="Email" autocomplete="off">
                </div>

                <div class="input-container" id="password-div">
                    <label for="password">Password:</label>
                    <div class="input-icon">
                        <input type="password" name="password" id="password" class="input-field" placeholder="Password" onfocus="showText('info-password')" onblur="hideText('info-password')" maxlength="20" autocomplete="off">
                        <i id="togglePassword" class="fas fa-eye-slash"></i>
                    </div>

                    <div class="info-password" id="info-password">
                        <label for="password" id="intro_requisiti">La password deve avere:</label>
                        <ul>
                            <li id="lunghezza">Una lunghezza compresa tra 8 e 20 caratteri</li>
                            <li id="maiuscola">Almeno una lettera maiuscola</li>
                            <li id="minuscola">Almeno una lettera minuscola</li>
                            <li id="numero">Almeno un numero</li>
                            <li id="carspeciale">Almeno un carattere speciale</li>
                        </ul>
                    </div>
                </div>

                <div class="input-container">
                    <label for="confirmpassword">Conferma Password:</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" class="input-field" placeholder="Confirm Password" autocomplete="off">
                </div>

            <!--
                <div class = "login">
                    <input type="submit" class="change-btn" form="signupForm" value="Register">
                </div>
            !-->

                <button type="button" id="back-button" class="change-btn">Back </button>



                <div class="colored-btn">
                    <button class="submit-button" type="submit">Registrati</button>
                </div>
            </section>

        </form>
    </div>

    <div class="sub-form">
        
        <hr class="divider" />

        <div class="no-account">
            <p> Sono già registrato. <button type="button" id="toSignUp-button" class="change-btn">Log in</button></p>
        </div>
    </div>
    