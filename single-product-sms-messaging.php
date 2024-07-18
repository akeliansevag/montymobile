<?php get_header(); ?>
<style>
    .boxed {
        background-color: #ffffff;
        box-shadow: 0px 0px 10px #00000029;
        border-radius: 30px;
        padding: 24px;
        text-align: center;
    }

    .boxed h4 {
        font-size: 20px;
        font-weight: 600;
    }

    .boxed h4.red {
        color: var(--mmPink);
    }

    .black-red {
        display: flex;
    }

    .black-red>div {
        flex: 1;
        padding-top: 100px;
        padding-bottom: 100px;
        color: white;
    }

    .black-red div:nth-child(1) {
        background-color: var(--mmBlack);
        padding-right: 5%;
    }

    .black-red div:nth-child(2) {
        background-color: var(--mmPink);
        padding-left: 5%;
    }

    ul.disc {
        list-style-type: none;
    }

    ul.disc li::before {
        content: " ";
        width: 18px;
        height: 18px;
        background-color: black;
        display: flex;
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    ul.disc li::before ::after {
        content: " ";
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background-color: white;
        position: absolute;
    }
</style>
<?php the_content(); ?>
<section class="bg-white py-5">
    <div class="container">
        <div class="boxed w-75 mx-auto">
            <h3>Global SMS Service Provider</h3>
            <p>Send programmable text messages worldwide Achieve the highest delivery rates globally with a single interface, and experience the benefits of a reliable, industry-leading platform.</p>
        </div>
    </div>
</section>
<section class="bg-white py-5">
    <div class="container">
        <div class="w-50">
            <h3>Beyond Basic Messaging</h3>
            <p>Explore how SMS can provide fast messaging, fraud protection, personalized communication, and more.</p>
        </div>
        <?php $items = [
            [
                'title' => 'Marketing Boost',
                'description' => 'Elevate your marketing campaigns with special promotions, targeted discounts, and more.'
            ],
            [
                'title' => 'Secure Authentication',
                'description' => 'Safeguard your customers with two-factor authentication via SMS, enhancing verification processes.'
            ],
            [
                'title' => 'Timely Transactions',
                'description' => 'Confirm customer actions with transactional messages, building trust and reliability.'
            ],
            [
                'title' => 'Reminder Alerts',
                'description' => 'Ensure your customers never miss important dates or appointments with timely SMS reminders.'
            ],
            [
                'title' => 'Instant Notifications',
                'description' => 'Improve customer service and marketing efficiency with real-time SMS alerts.'
            ]

        ];
        ?>
        <div class="d-flex gap-3 pb-5">
            <?php foreach ($items as $item) : ?>
                <div class="boxed w-100">
                    <h4 class="red"><?= $item['title']; ?></h4>
                    <p><?= $item['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<section class="bg-white">
    <div class="black-red">
        <div class="container-padding-left">
            <h3>Customized Messaging</h3>
            <ul class="disc red">
                <li>URLs and Message Lengths: Effortlessly include and automatically shorten URLs to save characters. Craft messages of any length, from short alerts to detailed announcements, without restrictions.</li>
                <li>Personalization: Enhance engagement with flexible variables, allowing personalized messages with user-specific data like names and account details.</li>
                <li>Templates: Save time and ensure consistency by choosing from a library of pre-designed templates.</li>
                <li>Automation: Simplify your workflow by setting up keywords as triggers for automatic replies, message analysis, or redirection to webhook URLs for seamless system integration.</li>
            </ul>

        </div>
        <div class="container-padding-right">
            <h3>From One Destination to a Million</h3>
            <ul class="disc">
                <li>SMS Campaigns: Reach customers worldwide reliably, ensuring your messages reach their destination promptly.</li>
                <li>Automated Messaging: Our programmable API seamlessly integrates into your existing business operations, enabling quick setup and integration.</li>
                <li>Precise Segmentation: Drive conversions with targeted offers, personalized discounts, and special promotions delivered via SMS.</li>
            </ul>
        </div>
    </div>
</section>
<?php get_template_part("template-parts/product/actions"); ?>
<?php get_footer(); ?>