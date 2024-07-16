<?php get_header(); ?>
<section class="d-inline-block w-100 pt-5 white-text">
    <div class="container">
        <div class="row">
            <div class="col-xxl-2"></div>
            <div class="col-xxl-8">
                <div class="page-wrapper mb-5 p-4">
                    <div class="page-content mt-3">

                    </div><!--post-content-->
                </div>
            </div><!--outer-column-->
            <div class="col-xxl-2"></div>
        </div>

    </div><!--container-->
</section>
<script>
    const apiUrl = 'https://mm-omni-software-vip-qa.montylocal.net/catalog/api/v1/Content/Term_Condition';
    const headers = {
        'Tenant': '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
        'LanguageCode': 'en'
    };

    fetch(apiUrl, {
            method: 'GET',
            headers: headers
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Assuming the content you want is in data.content or adjust based on the API response
            const content = data.data.items[0].contentDetails[0].description || 'No content available';
            document.querySelector('.page-content').innerHTML = content;
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
</script>
<?php get_footer(); ?>