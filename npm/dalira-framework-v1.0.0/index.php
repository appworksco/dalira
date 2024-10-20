<?php include realpath(__DIR__ . '/app/layout/header.php') ?>

<style>
    body {
        opacity: 1;
        background-image: radial-gradient(#cdd9e7 1.05px, #e5e5f7 1.05px);
        background-size: 21px 21px;
    }

    .container {
        display: flex;
        align-items: center;
        height: 100vh;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="display-4">Congratulations!</h1>
            <p class="lead">Your Dalira Framework project has been created successfully. <br class="d-none d-sm-block"> If you're new to Dalira Framework, it's advisable to read the <a href="https://appworksco.github.io/dalira/" class="text-decoration-none">documentation</a>.</p>
        </div>
    </div>
</div>

<?php include realpath(__DIR__ . '/app/layout/footer.php') ?>