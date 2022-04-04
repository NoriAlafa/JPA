<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<section class="terpopuler">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <h6 class="text-center">MATERI</h6>
            <?php foreach($blog as $blg):?>
                <div class="col-lg-5">
                    <div class="card h-100 p-3">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url(<?=base_url('img/32852.jpg');?>);">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2"><?=$blg['judul']?></h5>
                            <p class="text-white"><?=strtoupper($blg['pre-content'])?></p>
                            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                            Read More
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
            <?php endforeach?>
        </div>
    </div>
    
</section>
<?=$this->endSection()?>