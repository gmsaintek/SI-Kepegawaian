<?php
$title = 'Data Cuti';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Data Cuti</h3>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">
                    <i class="fas fa-plus mr-1"></i>Ajukan Cuti
                </button>
            </div>
            <div class="card-body">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
            <tr><th>ID</th><th>Nama</th><th>Tanggal Awal</th><th>Tanggal Akhir</th><th>Jenis</th><th>Status</th><th>Aksi</th></tr>
            </thead>
            <tbody>
            <?php foreach($cuti as $row): ?>
                <tr>
                    <td><?= esc($row['id']) ?></td>
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['tanggal_awal']) ?></td>
                    <td><?= esc($row['tanggal_akhir']) ?></td>
                    <td><?= esc($row['jenis']) ?></td>
                    <td><?= esc($row['status']) ?></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#editModal<?= $row['id'] ?>"><i class="fas fa-edit mr-1"></i>Edit</button>
                        <a href="<?= site_url('cuti/delete/'.$row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus permohonan?')"><i class="fas fa-trash mr-1"></i>Delete</a>
                        <a href="<?= site_url('cuti/timeline/'.$row['id']) ?>" class="btn btn-sm btn-info"><i class="fas fa-clock mr-1"></i>Timeline</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Ajukan Cuti</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        $params = ['action' => site_url('cuti/save')];
                        if (isset($pegawai)) {
                            $params['pegawai'] = $pegawai;
                        }
                        if (isset($selected)) {
                            $params['selected'] = $selected;
                        }
                        echo view('cuti/_form', $params);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php foreach($cuti as $c): ?>
    <div class="modal fade" id="editModal<?= $c['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $c['id'] ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel<?= $c['id'] ?>">Edit Cuti</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        $params = ['action' => site_url('cuti/update/'.$c['id']), 'cuti' => $c, 'submit' => 'Update'];
                        if (isset($pegawai)) {
                            $params['pegawai'] = $pegawai;
                        }
                        if (isset($selected)) {
                            $params['selected'] = $selected;
                        }
                        echo view('cuti/_form', $params);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
<?php $this->endSection(); ?>
