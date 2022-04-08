<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<div class="container mb-lg-8 mt-md-5">
    <div class="card mb-md-3">
        <div class="card-body">
            <ul>
                <div class="list" style="list-style:none;font-size:25px;text-transform:uppercase;">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 d-flex ">
                            <li  ><i class="fas fa-solid fa-check" style="background-color:#45f7aa;color:white;border-radius: 30px 30px 30px 30px;margin-right:10px;"></i><a href="#bahas">Kegunaan</a></li>
                            <li class="ms-lg-6"><i class="fas fa-solid fa-check" style="background-color:#45f7aa;color:white;border-radius: 30px 30px 30px 30px;margin-right:10px;"></i><a href="#contoh-kata">Contoh Kata</a></li>
                            <li class="ms-lg-6"><i class="fas fa-solid fa-check" style="background-color:#45f7aa;color:white;border-radius: 30px 30px 30px 30px;margin-right:10px;"></i><a href="#contoh-soal">Contoh Soal</a></li>
                        </div>
                    </div>                    
                </div>
            </ul>
        </div>
    </div>
    <br/>
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-md-12 sol-sm-12 col-lg-12">
                        <div id="bahas">
                            <div class="text-center">
                                <h6 style="text-transform:uppercase;"><?=$blog['pre-content']?></h6>
                                <img src="<?=$blog['img']?>" class="img-fluid rounded-2 img-thumbnail" >
                            </div>
                            <br/>
                            <div class="content mt-md-3 col-md-9" id="contoh-kata" style="margin-left:10%;font-family: 'Source Code Pro', monospace;color:black;">
                                <h4 class="text-center">CONTOH KATA</h4>
                                <p><?= $blog['penjelasan'] ?></p>
                            </div>
                        </div>
                        <br/>
                        <div  class="text-center rounded-3 col-md-12" style="background-color:#dee2e6;color:black;">
                            <?=$blog['content']?>
                        </div>
                    </div>
            </div>
        </div>
    </div>              
</div>
<?=$this->endSection()?>