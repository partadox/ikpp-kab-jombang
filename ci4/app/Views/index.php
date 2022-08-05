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
                    <h6>Pilih Layanan</h6>
                </div>
                
            </div>
            <div class="right-side">
                <?= form_open('/home/save1st', ['class' => 'formtambah']) ?>
                <?= csrf_field(); ?>
                <div class="main active">
                    <div class="text text-center">
                        <h6>Lembar Penilaian Kinerja Unit Penyelenggara Pelayanan Publik (UPP) <br> Kabupaten Jombang</h6>
                        <hr>
                        <h6>Pilih Layanan</a>
                    </div>
                    <div class="input-text">
                        <div class="input-div mb-3">
                            <select class="form-select" id="survey_layanan" required>
                                <option Disabled=true Selected=true>PILIH...</option>
                                <?php foreach($ikm as $row): ?>
                                    <option value="<?= $row['id_lembaga']?>"><?= $row['nama_lembaga']?></option>
                                <?php endforeach?>
                            </select>
                            <div class="invalid-feedback error_survey_layanan">
                        </div>
                    </div>
                    <div class="buttons text-center">
                        <button type="submit" class="btnsimpan"> Submit</button>
                    </div>
                </div>
                <?= form_close() ?>
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