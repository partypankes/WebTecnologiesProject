
    <div class="title">
        <h1>Sign Up</h1>
        <p>Join our community and start sharing!</p>
        <p class= "errorMessage" id="errorMessage_signup"></p>
    </div>

    <div class="form-div">
        <form id="signupForm" method="post">

            <section id="section1">

                <div class="input-container">
                    <label for="name">Nome:</label>
                    <input type="text" name="nome" id="name" class="input-field" placeholder="Nome" autocomplete="off" maxlength="30"> <!-- il pattern inserito permette oltre all'inserimento di lettere, anche l'inserimento di letere accentate, spazi e trattini. L'apostorfo è stato rimosso perchè può essere usato per attacchi di injection!-->
                </div>

                <div class="input-container">
                    <label for="surname">Cognome:</label>
                    <input type="text" name="cognome" id="surname" class="input-field" placeholder="Cognome" autocomplete="off" maxlength="30" >
                </div>

                <div class="input-container">
                    <label for="birthdate">Data di Nascita:</label>
                    <input type="date" name="data_di_nascita" id="birthdate" class="input-field" placeholder="Data Di Nascita" autocomplete="off">
                </div>

                <div class="input-container">
                    <label for="Gender">Sesso: </label>
                    <label for="Gender" > &emsp;Uomo</label>
                    <input type="radio" id="Gender1" name="sesso" value="M">
                    <label for="Gender"> &emsp;Donna</label>
                    <input type="radio" id="Gender2" name="sesso" value="F">
                    <label for="Gender"> &emsp;Altro</label>
                    <input type="radio" id="Gender3" name="sesso" value="O">
                </div>

                <div class="colored-btn">
                    <button id="next-button" class="submit-button" type="button" onclick="">Avanti</button>
                </div>

            </section>


            <section id="section2">

                <div class="input-container">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username_signup" class="input-field" placeholder="Username" maxlength="16" autocomplete="off">
                </div>

                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="input-field" placeholder="Email" autocomplete="off">
                </div>

                <div class="input-container" id="password-div">
                    <label for="password">Password:</label>
                    <div class="input-icon">
                        <input type="password" name="password" id="password_signup" class="input-field" placeholder="Password" onfocus="showText('info_password')" onblur="hideText('info_password')" maxlength="20" autocomplete="off">
                        <i id="togglePassword_signup" class="fas fa-eye-slash"></i>
                    </div>

                    <div class="info_password" id="info_password">
                        <label for="password_signup" id="intro_requisiti">La password deve avere:</label>
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


                <div class="colored-btn">
                    <button class="submit-button" id="submit-btn_signup" type="submit">Registrati</button>
                </div>

                <div class="bck-btn"> <!-- cambio in class="bck-btn" !-->
                    <p><button type="button" id="back-button" class="change-btn" onclick="backbutton()"><i class="fa-solid fa-arrow-left-long"></i></button></p>
                </div>

            </section>

        </form>
    </div>

    <div class="sub-form">
        
        <hr class="divider" />

        <div class="no-account">
            <p> Sei giá registrato? <button type="button" id="toLogin-button" class="change-btn">Log in</button></p>
        </div>
    </div>
    