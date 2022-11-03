<?= $this->extend('layout/script') ?>

<?= $this->section('judul') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>

<?= $this->endSection('judul') ?>

<?= $this->section('isi') ?>

<a href="<?= base_url('auth/ikpp') ?>"> 
    <button type="button" class="btn btn-secondary mb-3"><i class=" fa fa-arrow-circle-left"></i> Kembali</button>
</a>

<table id="list" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th width="2%">#</th>
            <th width="15%">Nama Lembaga</th>
            <th width="15%">Waktu</th>
            <th width="15%">Hasil Survey</th>
        </tr>
    </thead>


    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $data['survey_layanan_nama'] ?></td>
                <td><?= $data['survey_dt'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" onclick="detail('<?= $data['survey_id'] ?>,<?= $data['survey_url'] ?>, <?= $data['survey_pnl'] ?>')">
                        <i class="fa fa-eye mr-1 mb-1"></i> Lihat
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<div class="viewmodal">
</div>

<script>
    $(document).ready(function() {
        $('#list').DataTable();
    });

    function detail(survey_id,survey_url, survey_pnl) {
        $.ajax({
            type: "post",
            url: "<?= site_url('ikpp/riwayat_detail') ?>",
            data: {
                survey_id : survey_id,
                survey_url : survey_url,
                survey_pnl : survey_pnl,
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modal').modal('show');
                }
            }
        });
    }

</script>

<?= $this->endSection('isi') ?>