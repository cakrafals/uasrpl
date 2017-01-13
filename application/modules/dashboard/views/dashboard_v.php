          <?php foreach ($sdata as $psd):?>
            <div align="center">
          <div class="row">
    <div class="col s12 m6 l3">
        <div class="card">
<a title="<?php echo $psd->name_products;?>" href="<?php echo base_url().'dashboard/'. $psd->name_products;?>" style="text-decoration: none;">
  <img src="<?php echo base_url();?><?php echo $psd->image1 ?>" style="width: 100%;" alt="">
</a>
  <div class="produk-title">
    <div class="tile-item" style="    height: 2.3em; overflow: hidden; line-height: 1.2;">
    <a href="<?php echo base_url().'p/'.$psd->kategori.'/'.$psd->slug;?>"><?php echo substr($psd->name_products,0,51);?></a>
    </div>
    <span>Rp <?php echo number_format($psd->price,0,".",".");?></span>

</div>
    <br>
        </div>
      </div>
    <div>
    </div>
    <?php endforeach;?>
