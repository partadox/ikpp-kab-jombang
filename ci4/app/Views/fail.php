<?= $this->extend('main') ?>

<?= $this->section('isi') ?>


<div class="container">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="left-heading text-center">
                    <h6>Lembar Penilaian Kinerja Unit Penyelenggara Pelayanan Publik (UPP)</h6>
                </div>
                <div class="steps-content">
                    <h6>Fail</h6>
                </div>
                
            </div>
            <div class="right-side">
                <div class="main active">
                    
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                         <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                     
                    <div class="text congrats">
                        <h2>Gagal!</h2>
                        <h6>Penilaian untuk <?= $layanan ?> disimpan karena terdapat pertanyaan yang belum terjawab.</h6>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary" href="<?= base_url() ?> ">Kembali</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('.formtambah').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: {
                    survey_layanan: $('select#survey_layanan').val(),
                },
                dataType: "json",
                beforeSend: function() {
                    $('.btnsimpan').attr('disable', 'disable');
                    $('.btnsimpan').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>');
                },
                complete: function() {
                    $('.btnsimpan').removeAttr('disable', 'disable');
                    $('.btnsimpan').html(' Submit');
                },
                success: function(response) {
                    if (response.error) {

                        if (response.error.survey_layanan) {
                            $('#survey_layanan').addClass('is-invalid');
                            $('.error_survey_layanan').html(response.error.survey_layanan);
                        } else {
                            $('#survey_layanan').removeClass('is-invalid');
                            $('.error_survey_layanan').html('');
                        }

                    } else {
                        window.location = response.sukses.link;
                    }
                }
            });
        })
    });
</script>


<?= $this->endSection('isi') ?>