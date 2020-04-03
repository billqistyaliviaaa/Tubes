<div class="page-wrapper">
    <div class="container-fluid">
        <form action="<?php echo base_url('perusahaan/editPekerjaanAction') ?>" method="post">
            <input class="form-control" type="hidden" name="id_pekerjaan" value="<?php echo $pekerjaan_detail->id_pekerjaan; ?>" required="true">
            <div class="form-group">
                <label>Posisi Pekerjaan</label>
                <input class="form-control" type="text" name="posisi_pekerjaan" value="<?php echo $pekerjaan_detail->posisi_pekerjaan; ?>" required="true" placeholder="Manager">
            </div>
            <div class="form-group">
                <label>Jenis Pekerjaan</label>
                <input class="form-control" type="text" name="jenis_pekerjaan" value="<?php echo $pekerjaan_detail->jenis_pekerjaan; ?>" required="true" placeholder="Kontrak">
            </div>
            <div class="form-group">
                <label>Tingkat Jabatan</label>
                <input class="form-control" type="text" value="<?php echo $pekerjaan_detail->tingkat_jabatan; ?>" name="tingkat_jabatan" required="true" placeholder="Manager/Asisten Manajer">
            </div>
            <div class="form-group">
                <label>Spesifikasi Pekerjaan</label>
                <input class="form-control" type="text" value="<?php echo $pekerjaan_detail->spesifikasi_pekerjaan; ?>" name="spesifikasi_pekerjaan" required="true" placeholder="E-commerse">
            </div>
            <div class="form-group">
                <label>Tugas Pekerjaan</label>
                <input class="form-control" type="text" name="tugas_pekerjaan" value="<?php echo $pekerjaan_detail->tugas_pekerjaan; ?>" required="true" placeholder="Eksekutif Marketing">
            </div>
            <div class="form-group">
                <label>Lokasi Pekerjaan</label><br>
                <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="indonesia" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Indonesia</label>
                <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="india" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">India</label>
                <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="malaysia" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">Malaysia</label>
                <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="singapore" id="defaultCheck4">
                <label class="form-check-label" for="defaultCheck4">Singapore</label>
                <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="thailand" id="defaultCheck5">
                <label class="form-check-label" for="defaultCheck5">Thailand</label>
            </div>
            <div class="form-group">
                <label>Gaji Bulanan</label>
                <input class="form-control" type="number" value="<?php echo $pekerjaan_detail->gaji_bulanan; ?>" name="gaji_bulanan" required="true" placeholder="3000000">
            </div>
            <div class="form-group">
                <label>Tingkat Pendidikan</label>
                <input class="form-control" type="text" value="<?php echo $pekerjaan_detail->tingkat_pendidikan; ?>" name="tingkat_pendidikan" required="true" placeholder="Diploma">
            </div>
            <div class="form-group">
                <label>Lama Pengalaman</label>
                <input class="form-control" type="number" value="<?php echo $pekerjaan_detail->lama_pengalaman; ?>" name="lama_pengalaman" required="true" placeholder="Diploma">
            </div>
            <div class="form-group">
                <label>Keahlian</label>
                <input class="form-control" type="text" value="<?php echo $pekerjaan_detail->keahlian; ?>" name="keahlian" required="true" placeholder="Masukan Ketrampilan">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </form>
    </div>
</div>