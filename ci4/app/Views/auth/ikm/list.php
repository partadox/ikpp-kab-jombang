<h5>Nilai IKM didapatkan dari url API berikut : <?= $url ?></h5>
<hr>
<table id="listikm" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th width="5%">ID Lembaga</th>
            <th width="10%">Nama Lembaga</th>
            <th width="10%">Nilai IKM</th>
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
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#listikm').DataTable();
    });


</script>