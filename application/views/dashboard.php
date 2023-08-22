<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($barang as $brg) : ?>
                
            <div class="card" style="width: 16rem;">
                <img src="<?php echo base_url(). '/uploads/' .$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5><br />
                    <small><?php echo $brg->keterangan?></small>
                    <span class="badge badge-success mb-3">Rp. <?php echo $brg->harga?></span>
                    <a href="#" class="btn btn-sm btn-primary">Tambah Keranjang</a>
                    <a href="#" class="btn btn-sm btn-success">Detail</a>

                </div>
            </div>

            
            <?php endforeach; ?>
    </div>
</div>