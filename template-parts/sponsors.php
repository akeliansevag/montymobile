<?php
$sponsors = [
    [
        'title' => 'BICS',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/bics.webp',
        'description' => '<p>As a communications platform company, BICS is at the heart of the communications ecosystem, ridging telecommunications services, and the needs of enterprises. Our solutions – from global voice services, seamless roaming, and IoT enablement, to global messaging – are essential for supporting today’s data-hungry consumers and digitally driven enterprises. Headquartered in Brussels, with a strong presence in Africa, the Americas, Asia, Europe, and the Middle East, we enable every person, application, and thing to connect simply and securely, wherever they are.</p>'
    ],
    [
        'title' => 'Comfone',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/comfone-e1710499897912.webp',
        'description' => "<p>Comfone remains unique as the only supplier in the market to offer ALL services required to establish roaming between two mobile operators and beyond for a multitude of players in the industry: MNO, MVNO, A2P, and NB-IoT<ul><li>Our roaming service portfolio encompasses:<li>IPX (GRX, IPX, SS7, Diameter Signaling)<li>Data and Financial Clearing as well as Phoenix, our service fulfilling BCE standards<li>Roaming Hub (Key2roam Hub, largest coverage worldwide)<li>Big Data Analysis (Data Management Service)<li>Sponsored Roaming<li>M2M End2End Monetization<li>3rd party VAS</ul><p>Each service is accessible through our Key2roam Platform, providing a simple, convenient, and transparent roaming solution for you.</p>"
    ],
    [
        'title' => 'GMS',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/gms.webp',
        'description' => "<p>GMS is the AI-driven communications solutions partner for Mobile Network Operators and enterprises globally. GMS’ deep understanding of MNO and enterprise messaging businesses, expertise in network protection, and global connectivity set the foundations for GMS to move into the future: AI communications solutions that enable great customer engagement and exceptional customer experiences. Through recent acquisitions, GMS has enhanced its product portfolio with Generative AI and Conversational AI, as well as improved the technical capabilities of GMS CPaaS. The new GMS product offering will help our clients grow their business, improve operational efficiency, and build trust between their brands and their customers.</p>"
    ],
    [
        'title' => 'iBASIS',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/ibasis.webp',
        'description' => "<p>iBASIS is the leading communications solutions provider enabling operators and digital players worldwide to perform and transform. Powered by Tofane Global, iBASIS is the first independent communications specialist and tier-one IPX vendor. iBASIS today serves 1,000+ customers across 28 locations worldwide. iBASIS optimizes global connectivity, quality, and security in voice, SMS A2P messaging, mobile data, 5G roaming, and IoT.</p><p>iBASIS supports Mobile Operators in preparation for launching commercial 5G SA roaming services and offers a complete SMS A2P Monetization solution including a comprehensive set of managed services for optimizing revenues and network protection.</p>"
    ],
    [
        'title' => 'SEGRON',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/segron.webp',
        'description' => "<p>SEGRON is an innovator in the active testing industry, offering automated solutions to test digital services and connectivity in any location, with any device, anytime.<p>SEGRON’s technically advanced test automation solutions enable operators to proactively ensure optimal Quality of Experience for end users while enabling faster go-to-market for next-generation 5G and IoT services.<p>With its strong product portfolio, SEGRON covers the following areas of automated testing: <ul><li>Operations & Live Networks<li>Testlabs <li>Roaming <li>Automotive</ul><p>The multinational SEGRON team consists of professionals with extensive international experience from a variety of industries.<p>SEGRON. The Next Generation of Active Testing.</p>"
    ],
    [
        'title' => 'Syniverse',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/syniverse-e1710499770167.webp',
        'description' => "<p>Syniverse is the world's most connected company. We seamlessly connect the world's networks, devices, and people so the world can unlock the full power of communications.</p><p>Our secure, global technology powers the world's leading carriers, top Forbes Global 2000 companies, and billions of people, devices, and transactions every day. Our engagement platform delivers better, smarter experiences that strengthen relationships between businesses, customers, and employees.</p><p>For over 30 years, we have accelerated important advances in communications technology. Today we are an essential driver of the world's adoption of intelligent connectivity, from 5G and CPaaS to IoT and beyond.</p>"
    ],
    [
        'title' => 'VOX',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/voxsolutions.webp',
        'description' => "<p>VOX Solutions stands at the crossroads of the Technology & Telecommunication space, present in the global market for over 11 years. At VOX, we aim to improve, simplify & optimize International Voice & Messaging, using the latest innovations in technology. Altogether, working alongside our MNO partners, leading aggregators, and other players in the industry, we specialize in innovative anti-fraud solutions (in P2P Voice, A2P Voice, and A2P SMS) to maximize the added value within the chain and mitigate fraudulent activity. Our mission is to develop a market where MNOs, Service Providers, and Enterprises can simply and easily optimize, accelerate, and secure their Voice and Messaging businesses.</p>"
    ],
    [
        'title' => 'WMS',
        'logo' => 'https://montymobile.com/wp-content/uploads/2024/03/wms.webp',
        'description' => "<p>WMS is a leading provider of maritime cellular networks supporting the cruise, ferry, and shipping industries worldwide. As an award-winning technology leader, WMS enables digital transformation shaping the future of maritime by connecting people, data, and things through an exceptional wireless network experience. The company is headquartered in Miramar, Florida, USA, with additional operations in Atlanta, Georgia.</p>"
    ],
];
?>
<style>
    .sponsor-img {
        height: 130px;
        border: 1px solid #000000;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: black;
        padding: 10px 15px;
    }

    .sponsor-read-more {
        cursor: pointer;
    }
</style>
<section class="bg-white py-5">
    <div class="container">
        <h2 class="fs-1">Sponsors</h2>
        <div class="mt-4">
            <div class="row">
                <?php foreach ($sponsors as $s) : ?>
                    <div class="col-6 col-md-2 mb-4">
                        <div class="sponsor-img">
                            <img class="w-100" src="<?= $s['logo'] ?>" alt="logo" />
                        </div>
                        <div class="text-center mt-2">
                            <a data-title="<?= $s['title'] ?>" data-bs-toggle="modal" data-bs-target="#sponsor-modal" class="sponsor-read-more text-center" data-description="<?= $s['description'] ?>">read more</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="sponsor-modal" tabindex="-1" aria-labelledby="sponsor-modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sponsor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var myModalEl = document.getElementById('sponsor-modal');
    myModalEl.addEventListener('hidden.bs.modal', function(event) {
        $("#sponsor-modal .modal-body").html("");
        $("#sponsor-modal .modal-title").html("");
    });

    myModalEl.addEventListener('show.bs.modal', function(event) {
        var clickedEl = event.relatedTarget;
        $("#sponsor-modal .modal-body").html(event.relatedTarget.attributes['data-description'].value);
        $("#sponsor-modal .modal-title").html(event.relatedTarget.attributes['data-title'].value);
    });
</script>