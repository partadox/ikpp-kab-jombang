<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

<div class="blog main-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="error-page text-center error-404 not-found">
                 <div class="error-header">
                    <h2><strong>404</strong></h2>
                 </div>
                 <div class="error-message">
                    <h3>Oops... Page Not Found!</h3>
                 </div>
                 
                 <div class="error-content">
                    Try using the button below to go to main page of the site<br>
                    <a href="<?= base_url('home') ?>" class="btn btn-main">Back to Home Page</a>
                 </div>
              </div>
           </div>
        </div>
    </div><!-- #main -->
</div><!-- #primary -->

<?= $this->endSection('isi') ?>