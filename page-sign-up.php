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
</style>
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

    var signUpForm = document.getElementById("signUpForm");
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
                    console.log('Success:', data);
                    signUpForm.reset();
                })
                .catch((error) => {
                    console.error('Error:', error);
                    signUpForm.reset();
                });
        }
    });
</script>
<?php get_footer(); ?>