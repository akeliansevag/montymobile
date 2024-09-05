<?php get_header(); ?>
<section class="py-5 bg-white">
    <div class="container">
        <div class="map-bg">
            <img class="map-img" src="<?= get_template_directory_uri() ?>/assets/img/esim/map.svg" alt="Map">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="esim-mobile-img" src="<?= get_template_directory_uri() ?>/assets/img/esim/mobile.svg" alt="Mobile">
                </div>
                <div class="col-lg-6">
                    <h2>Connect Instantly, Manage Effortlessly with our Instant-Connectivity Platform.</h2>
                    <div class="d-flex gap-3">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/esim/esim-simcard.svg" alt="eSIM Simcard">
                        <p>Consumer eSIM places subscribers at the heart of convenience. By eliminating the need for physical SIM cards, users can activate or modify mobile plans without manual SIM swaps. This not only reduces delays but also empowers subscribers to easily switch between service providers or packages, promoting a seamless, global mobile experience.</p>
                    </div>

                    <div class="d-flex gap-3">
                        <p>Our RSP (Remote Sim Provisioning) portal provides mobile operators with a multitude of benefits, streamlining operations and enhancing customer satisfaction. By leveraging the portal, operators can efficiently manage eSIM profile inventory, ensuring timely distribution and activation without the logistical challenges of physical SIM cards.</p>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/esim/remote-sim.svg" alt="Remote SIM">
                    </div>

                    <div class="border-box mt-4">
                        <p>
                            The portal’s comprehensive logs and reports offer valuable insights into transaction patterns and potential issues, enabling proactive troubleshooting and continuous service improvement.
                        </p>
                        <p>
                            Additionally, the portal’s robust security features ensure data protection and compliance with regulatory standards. Overall, the RSP customer portal is an indispensable tool for operators, driving operational efficiency, reducing costs, and delivering a superior, hassle-free experience to subscribers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black color-white position-relative overflow-hidden">
    <img class="z-0 position-absolute start-0 bottom-0 mw-100" src="<?= get_template_directory_uri() ?>/assets/img/emblem-bg.webp" alt="">
    <div class="container">
        <div class="blurred-boxes mx-auto py-5 position-relative z-1">
            <div class="blurred-box">
                <h3>Create Exceptional Experiences</h3>
                <p>From booking to touch down and beyond, create exceptional experiences for your customers. Send immediate booking confirmations, provide conversational customer support on digital channels, keep travelers informed with pre-flight information, and send check-in and security reminders. Offer flight status updates and notifications, and send targeted upgrade and cross-sell promotions. </p>

                <div class="d-lg-flex justify-content-between">
                    <ul class="disc">
                        <li>Immediate booking confirmations.</li>
                        <li>Conversational customer support on digital channels.</li>
                        <li>Pre-flight information updates.</li>

                    </ul>
                    <ul class="disc">
                        <li>Check-in and security reminders.</li>
                        <li>Flight status updates and notifications.</li>
                        <li>Targeted upgrade and cross-sell promotions.</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="bg-white py-5">
    <div class="container my-4">
        <div class="row align-items-center pt-4">
            <div class="col-lg-6">
                <img class="mw-100" src="<?= get_template_directory_uri() ?>/assets/img/white-emblem.webp" alt="">
            </div>
            <div class="col-lg-6">
                <h3 class="mb-3 mt-4 mt-lg-0">
                    Personalized and Timely Communication
                </h3>
                <p>Support your business with secure, timely, and personalized communication for every use case. Privacy and security through number masking.</p>
                <ul class="disc">
                    <li><strong>Fast and reliable authentication with OTPs.</strong></li>
                    <li><strong>Real-time notifications and reminders.</strong></li>
                    <li><strong>Cost-effective digital channels for transactional messages.</strong></li>
                    <li><strong>Promotion and management of loyalty programs.</strong></li>
                    <li><strong>Collection of customer feedback and reviews.</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black color-white position-relative overflow-hidden">
    <img class="w-100 h-100 z-0 mw-100 position-absolute top-0 object-fit-cover" src="<?= get_template_directory_uri() ?>/assets/img/redpattern.webp" alt="">
    <div class="container">
        <div class="blurred-boxes mx-auto py-5 position-relative z-1">
            <div class="blurred-box">
                <h3>Prioritize Security and Compliance</h3>
                <p>Our platform complies with global privacy regulations, allowing you to deploy secure authentication across various touchpoints throughout the customer journey. This ensures your customers’ data is always protected.</p>

            </div>

        </div>
    </div>
</section>

<style>
    .map-bg {
        width: 100%;
        position: relative;
    }

    .map-img {
        width: 100%;
        position: absolute;
        height: 100%;
        object-fit: contain;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .map-bg>.row {
        position: relative;
        z-index: 1;
    }

    .esim-mobile-img {
        width: 100%;
        max-width: 350px;
        margin: 0 auto;
        display: block;
    }

    .border-box {
        border: 1px solid var(--mmPink);
        padding: 30px;
        border-radius: 50px;
    }
</style>
<?php get_footer(); ?>