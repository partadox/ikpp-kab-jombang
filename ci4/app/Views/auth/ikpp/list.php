<table id="listikpp" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th width="5%">ID Lembaga</th>
            <th width="15%">Nama Lembaga</th>
            <th width="8%">Nilai IKM</th>
            <th width="8%">Nilai IPP</th>
            <th width="8%">Mutu IPP</th>
            <th width="8%">Kat. IPP</th>
            <th width="8%">Nilai IKPP</th>
            <th width="8%">Mutu IKPP</th>
            <th width="8%">Kat. IKPP</th>
            <th width="8%">Waktu</th>
            <th width="8%">Laporan</th>
        </tr>
    </thead>


    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $data['id_lembaga'] ?></td>
                <td><?= $data['nama_lembaga'] ?></td>
                <td><?= $data['nilai_ikm'] ?></td>
                <td><?= $data['nilai_ipp'] ?></td>
                <td><?= $data['ipp'] ?></td>
                <td><?= $data['ipp_mutu'] ?></td>
                <td><?= $data['nilai_ikpp'] ?></td>
                <td><?= $data['ikpp'] ?></td>
                <td><?= $data['ikpp_mutu'] ?></td>
                <td><?= $data['dt'] ?></td>
                <td>
                    <a href="ikpp/laporan/<?= $data['id_ikpp'] ?>" class="btn btn-primary mb-2">
                            <i class=" fa fa-file-excel mr-1"></i>Excel
                     </a>
                     <a href="ikpp/riwayat/<?= $data['id_lembaga'] ?>" class="btn btn-secondary">
                            <i class=" fa fa-file-archive mr-1"></i>Survey
                     </a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#listikpp').DataTable();

    });

</script>