<?php get_header(); ?>
<style>
    .sign-up-section {
        background-color: white;
        display: flex;
        min-height: calc(100vh - var(--headerHeight));
    }

    .sign-up-one {
        background-color: black;
        position: relative;
        flex: 1;
        border-top-right-radius: 70px;
        border-bottom-right-radius: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .sign-up-one img.hands-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 1;
    }

    .sign-up-one img.mm-emblem {
        position: absolute;
        width: 50%;
        bottom: 0;
        right: 0;
        z-index: 3;
    }

    .sign-up-content {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 70px;
        padding: 50px;
        width: 80%;
        height: 80%;
        position: relative;
        z-index: 2;
    }

    .sign-up-content .mm-logo {
        margin-bottom: 50px;
    }

    .sign-up-content p {
        font-size: 23px;
    }

    .sign-up-content ul {
        padding: 0;
        list-style-type: none;
        margin-top: 25px;
    }

    .sign-up-content ul li {
        margin-bottom: 20px;
        display: flex;
        gap: 15px;
    }

    .sign-up-two {
        background-color: white;
        position: relative;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    .sign-up-two img.logo-pattern {
        position: absolute;
        top: 0;
        right: 0;
        width: 80%;
    }

    .sign-up-form-container {
        width: 80%;
    }

    .sign-up-form-container h2 {
        font-size: 38px;
    }

    .sign-up-form input[type="text"],
    .sign-up-form input[type="email"],
    .sign-up-form input[type="submit"] {
        width: 100%;
    }

    .two-columns {
        display: flex;
        gap: 15px;
    }

    .sign-up-form .input-wrapper {
        width: 100%;
        margin-bottom: 20px;
    }

    .sign-up-form .input-wrapper label {
        margin: 5px;
    }

    .sign-up-form .input-wrapper input {
        border: 2px solid #e1e1e1;
        border-radius: 50px;
        padding: 10px;
        font-size: 14px;
    }

    #signUpSubmit {
        background-color: var(--mmPink);
        color: white;
        border: none;
        border-radius: 50px;
        text-align: center;
        padding: 10px;
        font-size: 20px;
        line-height: normal;
        margin-top: 30px;
    }

    #signUpSubmit:hover {
        background-color: #b7b7b7;
    }

    .grey-text {
        color: #9e9e9e;
        font-size: 14px;
    }

    .error {
        color: red;
        font-size: 13px;
        margin: 5px 0 0 5px;
    }

    .input-wrapper input.error-border {
        border-color: red;
    }

    .sign-up-popup {
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 20;
        top: -100%;
        left: 0;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.2s linear;
    }

    .sign-up-popup.open {
        top: 0;
        opacity: 1;
    }

    .sign-up-popup .sign-up-popup-content {
        width: 30%;
        border-radius: 50px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 30px;
        text-align: center;
        position: relative;
    }

    .sign-up-popup .sign-up-popup-content h2 {
        font-weight: bold;
    }

    .sign-up-popup .sign-up-popup-content p {
        font-size: 14px;
    }

    .sign-up-popup .sign-up-popup-content svg {
        margin-bottom: 20px;
    }

    .sign-up-popup.p-error #resend-container,
    .sign-up-popup.p-error #success-icon {
        display: none;
    }

    .sign-up-popup.p-error.with-resend #resend-container {
        display: block;
    }

    #resend-clock {
        font-size: 24px;
    }

    #resend-button {
        color: black;
        font-weight: bold;
        font-size: 20px;
        display: inline;
    }

    #resend-button.active {
        color: var(--mmPink);
    }

    #resend-button.active:hover {
        color: #000000;
        cursor: pointer;
    }
</style>
<div id="sign-up-popup" class="sign-up-popup">
    <div class="sign-up-popup-content">
        <div id="close-popup">
            X
        </div>
        <svg id="success-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="83" height="80" viewBox="0 0 83 80">
            <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_516" data-name="Rectangle 516" width="83" height="80" fill="#ed204c" />
                </clipPath>
            </defs>
            <g id="Group_468" data-name="Group 468" transform="translate(0 0)">
                <g id="Group_470" data-name="Group 470" transform="translate(0 0)" clip-path="url(#clip-path)">
                    <path id="Path_436" data-name="Path 436" d="M83,39.06v1.956a8.452,8.452,0,0,1-3.623,5.117q-2.18,1.619-4.337,3.275c-1.479,1.131-1.387.8-.882,2.664a67.937,67.937,0,0,1,1.987,7.645,6.244,6.244,0,0,1-4.839,7.214,12.936,12.936,0,0,1-2.888.357c-2.024.015-4.052.041-6.076.011a1.148,1.148,0,0,0-1.3.932c-.19.648-.447,1.282-.681,1.916a53.563,53.563,0,0,1-2.478,6.285,5.974,5.974,0,0,1-6.98,3.054A22.179,22.179,0,0,1,48.032,78.4c-1.995-.954-3.576-2.527-5.446-3.666-1.259-.766-.948-.844-2.24.022-2.2,1.477-4.282,3.143-6.625,4.4a5.939,5.939,0,0,1-7.32-.943,9.1,9.1,0,0,1-2.064-3.378c-.8-2.1-1.588-4.218-2.321-6.348a1.318,1.318,0,0,0-1.471-1.039,59.489,59.489,0,0,1-6.877-.151,8.839,8.839,0,0,1-4.088-1.168c-2.262-1.485-3.151-3.946-2.536-7.022.523-2.616,1.409-5.132,2.116-7.7a1.124,1.124,0,0,0-.465-1.382c-2.1-1.617-4.271-3.146-6.233-4.941A6.577,6.577,0,0,1,0,39.811a6.152,6.152,0,0,1,1.768-4.086,55.069,55.069,0,0,1,6.771-5.552,1.362,1.362,0,0,0,.564-1.713,83.215,83.215,0,0,1-2.185-8.186,6.038,6.038,0,0,1,1.629-5.626,6.888,6.888,0,0,1,4.3-1.868c2.58-.309,5.179-.122,7.767-.284a1.413,1.413,0,0,0,1.515-1.113c.351-1.168.8-2.306,1.211-3.456a33.009,33.009,0,0,1,1.808-4.451A6.116,6.116,0,0,1,33.5.677a16.97,16.97,0,0,1,2.7,1.639c1.23.884,2.449,1.783,3.7,2.642,1.709,1.175,1.7,1.138,3.437-.044A57.025,57.025,0,0,1,49.712.751a5.769,5.769,0,0,1,6.266.589,7.559,7.559,0,0,1,2.463,3.272c.974,2.155,1.643,4.425,2.471,6.639.512,1.371.509,1.378,1.951,1.371a56.89,56.89,0,0,1,7.514.309c4.132.538,6.412,3.581,5.717,7.7a78.981,78.981,0,0,1-2.141,8.024,1.233,1.233,0,0,0,.516,1.522c1.731,1.3,3.437,2.634,5.135,3.979a8.337,8.337,0,0,1,3.4,4.9M63.877,30.674a3.249,3.249,0,0,0-1.98-3.1,3.39,3.39,0,0,0-3.81.748Q47.628,38.547,37.173,48.779c-1.131,1.105-.889,1.367-2.163-.085-2.178-2.487-4.345-4.981-6.537-7.457a3.416,3.416,0,1,0-5.186,4.443q5,5.676,10.054,11.292c1.574,1.743,3.561,1.743,5.252.085q3.772-3.7,7.529-7.409,8.274-8.157,16.555-16.31a3.526,3.526,0,0,0,1.2-2.664" transform="translate(-0.001 0.002)" fill="#ed204c" />
                </g>
            </g>
        </svg>
        <h2 id="sign-up-message"></h2>
        <p id="sign-up-email-message"></p>
        <div id="resend-container" class="resend-container">

            <div id="resend-clock">02:00</div>
            <div id="resend-button">Resend Email</div>
        </div>
    </div>
</div>
<section class="sign-up-section">
    <div class="sign-up-one">
        <img class="hands-background" src="https://montymobile.com/wp-content/uploads/2024/07/signup-bg.webp" alt="Hands Background">
        <img class="mm-emblem" src="https://montymobile.com/wp-content/uploads/2024/07/monty-emblem.webp" alt="Monty Mobile Emblem">
        <div class="sign-up-content">
            <img class="mm-logo" src="https://montymobile.com/wp-content/uploads/2024/07/monty-mobile-logo.webp" alt="Monty Mobile Logo">
            <p>
                Your Connections, Your Conversations, Our Solution. <br>
                <strong> Monty Mobile for Seamsless Communication. <br>
                    Join us today. </strong>
            </p>
            <ul>
                <li>
                    <span>
                        <svg id="checked" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path id="Path_420" data-name="Path 420" d="M.214,13.248A15.8,15.8,0,0,1,7.136,2.674,15.716,15.716,0,0,1,15.976,0a1.181,1.181,0,0,1,1.2,1.114,1.159,1.159,0,0,1-1.065,1.27c-.673.073-1.354.077-2.024.167A13.1,13.1,0,0,0,7.346,5.517a13.055,13.055,0,0,0-4.509,7.036,13.222,13.222,0,0,0,3.04,12.511,12.91,12.91,0,0,0,7.949,4.354A13.236,13.236,0,0,0,24.9,26.244a12.947,12.947,0,0,0,4.224-6.787,28.717,28.717,0,0,0,.446-2.988c.024-.175.009-.355.029-.53a1.181,1.181,0,0,1,1.282-1.129A1.2,1.2,0,0,1,32,16.073a14.365,14.365,0,0,1-.575,4.164,15.825,15.825,0,0,1-11.586,11.29,24.337,24.337,0,0,1-2.647.433,18.958,18.958,0,0,1-2.392,0,15.474,15.474,0,0,1-6.99-2.2,15.807,15.807,0,0,1-7.6-11A18.937,18.937,0,0,1,.214,13.248Z" transform="translate(-0.004 0)" />
                            <path id="Path_421" data-name="Path 421" d="M104.206,66.671a2.293,2.293,0,0,1,.243-.38q7.212-7.2,14.427-14.4a1.369,1.369,0,0,1,1.281-.5,1.229,1.229,0,0,1,.755,1.951,2.988,2.988,0,0,1-.283.307q-7.726,7.709-15.455,15.417a1.287,1.287,0,0,1-2.122-.041q-3-3.251-5.988-6.5A1.267,1.267,0,0,1,97,60.706a1.235,1.235,0,0,1,1.827.073c.714.756,1.412,1.526,2.116,2.291q1.535,1.667,3.069,3.336c.043.048.076.1.192.266Z" transform="translate(-89.743 -47.229)" fill="#ed204c" />
                        </svg>
                    </span>
                    <span>Unlock Free Messaging on SMS Today! Effortlessly Connect with Your Customers Across Preferred Channels with Just a Few Clicks.</span>

                </li>
                <li>
                    <span>
                        <svg id="checked" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path id="Path_420" data-name="Path 420" d="M.214,13.248A15.8,15.8,0,0,1,7.136,2.674,15.716,15.716,0,0,1,15.976,0a1.181,1.181,0,0,1,1.2,1.114,1.159,1.159,0,0,1-1.065,1.27c-.673.073-1.354.077-2.024.167A13.1,13.1,0,0,0,7.346,5.517a13.055,13.055,0,0,0-4.509,7.036,13.222,13.222,0,0,0,3.04,12.511,12.91,12.91,0,0,0,7.949,4.354A13.236,13.236,0,0,0,24.9,26.244a12.947,12.947,0,0,0,4.224-6.787,28.717,28.717,0,0,0,.446-2.988c.024-.175.009-.355.029-.53a1.181,1.181,0,0,1,1.282-1.129A1.2,1.2,0,0,1,32,16.073a14.365,14.365,0,0,1-.575,4.164,15.825,15.825,0,0,1-11.586,11.29,24.337,24.337,0,0,1-2.647.433,18.958,18.958,0,0,1-2.392,0,15.474,15.474,0,0,1-6.99-2.2,15.807,15.807,0,0,1-7.6-11A18.937,18.937,0,0,1,.214,13.248Z" transform="translate(-0.004 0)" />
                            <path id="Path_421" data-name="Path 421" d="M104.206,66.671a2.293,2.293,0,0,1,.243-.38q7.212-7.2,14.427-14.4a1.369,1.369,0,0,1,1.281-.5,1.229,1.229,0,0,1,.755,1.951,2.988,2.988,0,0,1-.283.307q-7.726,7.709-15.455,15.417a1.287,1.287,0,0,1-2.122-.041q-3-3.251-5.988-6.5A1.267,1.267,0,0,1,97,60.706a1.235,1.235,0,0,1,1.827.073c.714.756,1.412,1.526,2.116,2.291q1.535,1.667,3.069,3.336c.043.048.076.1.192.266Z" transform="translate(-89.743 -47.229)" fill="#ed204c" />
                        </svg>
                    </span>
                    <span>Discover Monty Mobile APIs or Embrace Effortless Integration with Our User-Friendly No-Code Interface. Customize and Manage Communication Channels Your Way.</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="sign-up-two">
        <img class="logo-pattern" src="https://montymobile.com/wp-content/uploads/2024/07/logo-pattern.webp" alt="logo Pattern">
        <div class="sign-up-form-container">
            <h2><strong>Welcome to <br>
                    Monty Mobile's Portal</strong>
            </h2>

            <div class="sign-up-form">
                <form id="signUpForm" action="">
                    <div class="input-wrapper">
                        <label for="companyEmail">Company Email</label>
                        <input type="text" name="companyEmail" placeholder="Company Email" />
                        <div class="error" id="companyEmailError"></div>
                    </div>
                    <div class="two-columns">
                        <div class="input-wrapper">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" placeholder="First Name" />
                            <div class="error" id="firstNameError"></div>
                        </div>
                        <div class="input-wrapper">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lastName" placeholder="Last Name" />
                            <div class="error" id="lastNameError"></div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <input type="checkbox" name="newsletter" />
                        <span class="grey-text">I want to receive MontyMobile news, trends, or blogs by email.</span>
                    </div>
                    <div class="grey-text">
                        By signing up, you confirm that you've read and accepted our <a href="">Terms and Conditions</a> and our <a href="">Privacy Notice</a>.
                    </div>
                    <input type="submit" id="signUpSubmit" value="SIGN UP" />
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    var signUpForm = document.getElementById("signUpForm");
    var closePopupButton = document.getElementById("close-popup");

    var popup = document.getElementById("sign-up-popup");
    var successIcon = document.getElementById("success-icon");
    var signUpMessage = document.getElementById("sign-up-message");
    var signUpEmailMessage = document.getElementById("sign-up-email-message");
    var resendContainer = document.getElementById("resend-container");
    var resendClock = document.getElementById("resend-clock");
    var resendButton = document.getElementById("resend-button");

    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    function showError(inputElement, errorElement, message) {
        errorElement.textContent = message;
        inputElement.classList.add('error-border');
    }

    function clearError(inputElement, errorElement) {
        errorElement.textContent = '';
        inputElement.classList.remove('error-border');
    }

    function openPopup(data, email, error) {
        resetPopup();
        //console.log(data);
        if (error) {
            popup.classList.add("p-error");
            signUpMessage.innerHTML = "Sign Up Not Successful";
            signUpEmailMessage.innerHTML = "Please Try Again Later";
            popup.classList.add('open');
            return;
        }
        if (data && !data.success) {
            popup.classList.add("p-error");
            popup.classList.add("with-resend");
            signUpMessage.innerHTML = "Sign Up Not Successful";
            signUpEmailMessage.innerHTML = data.message;
            popup.classList.add('open');
            return;
        }

        if (data && data.success) {

            signUpMessage.innerHTML = "Sign Up Successful";
            signUpEmailMessage.innerHTML = "We Sent A Confirmation Email to ";
            signUpEmailMessage.innerHTML += email;
            signUpEmailMessage.innerHTML += "<br>";
            signUpEmailMessage.innerHTML += "Check Your Email And Click On The Link to Continue";
            popup.classList.add('open');
            return;
        }
        return;
    }

    function closePopup() {
        popup.classList.remove("open");
        popup.classList.remove("p-error");
        popup.classList.remove("with-resend");
        resetPopup();
    }

    function resetPopup() {
        signUpMessage.innerHTML = "";
        signUpEmailMessage.innerHTML = "";
    }

    function startResendTimer(email) {
        resendButton.classList.remove("active");
        resendButton.removeEventListener('click', function(e) {});
        let timer = 5,
            minutes, seconds;
        const interval = setInterval(() => {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            resendClock.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                clearInterval(interval);
                onCountdownComplete(email);
            }
        }, 1000);
    }

    function onCountdownComplete(email) {
        // Event to fire when countdown reaches 0
        resendButton.classList.add("active");
        resendButton.addEventListener('click', function(e) {
            var data = {
                UserName: email,
            };
            fetch('https://mm-omni-api-software-dev.montylocal.net/member/api/client/v1/client/resend-email', {
                    method: 'POST',
                    headers: {
                        'LanguageCode': 'en',
                        'Tenant': '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success email:', data);

                })
                .catch((error) => {
                    console.log('Error emails:', error);
                });
        });
    }



    closePopupButton.addEventListener('click', function(e) {
        closePopup();
    });

    signUpForm.addEventListener('submit', function(e) {
        e.preventDefault();
        var companyEmail = document.querySelector('input[name="companyEmail"]');
        var firstName = document.querySelector('input[name="firstName"]');
        var lastName = document.querySelector('input[name="lastName"]');

        var companyEmailError = document.getElementById('companyEmailError');
        var firstNameError = document.getElementById('firstNameError');
        var lastNameError = document.getElementById('lastNameError');

        var isValid = true;

        if (!companyEmail.value) {
            showError(companyEmail, companyEmailError, 'Company Email is required.');
            isValid = false;
        } else if (!isValidEmail(companyEmail.value)) {
            showError(companyEmail, companyEmailError, 'Please enter a valid email address.');
            isValid = false;
        } else {
            clearError(companyEmail, companyEmailError);
        }

        if (!firstName.value) {
            showError(firstName, firstNameError, 'First Name is required.');
            isValid = false;
        } else {
            clearError(firstName, firstNameError);
        }

        if (!lastName.value) {
            showError(lastName, lastNameError, 'Last Name is required.');
            isValid = false;
        } else {
            clearError(lastName, lastNameError);
        }

        if (isValid) {
            var data = {
                CompanyEmail: companyEmail.value,
                FirstName: firstName.value,
                LastName: lastName.value,
                TermsAndConditionsGuid: "3bb342bc-7657-4911-bbbb-eacdfcc2a105",
                PrivacyPolicyGuid: "ba0fe322-8628-4ece-abcf-a63012f5d018",
                Section: "ONE_WAY_SMS",
                ParentId: "91072e04-04cb-49d5-ba71-d70996d3b55c"
            };

            fetch('https://mm-omni-api-software-dev.montylocal.net/member/api/client/v1/client/register-external', {
                    method: 'POST',
                    headers: {
                        'LanguageCode': 'en',
                        'Tenant': '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    //console.log('Success:', data);
                    startResendTimer(companyEmail.value);
                    openPopup(data, companyEmail.value, false);
                    signUpForm.reset();

                })
                .catch((error) => {
                    //alert("ama");
                    //console.log('Error:', error);
                    openPopup(error, companyEmail.value, true);
                    signUpForm.reset();
                });
        }
    });
</script>
<?php get_footer(); ?>