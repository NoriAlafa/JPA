<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<div class="container mb-lg-8 mt-md-5">
    <style>
        .jumbotron{
            padding: 5px;
            background-color: #f4f5f1;
        }
    </style>               
    <div class="row jumbotron">
        <div class="col-md-8 sol-sm-8 col-lg-8">
            <h1 class="display-5 fw-bold " style="text-transform:uppercase;"><?=$blog['pre-content']?></h1>
                <p class="col-md-8 fs-4">
                <?=$blog['content']?>
                </p>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
            <p>
            <img src="<?=$blog['img']?>" height="350px" width="380">
            </p>
        </div>
    </div>
</div>
<?=$this->endSection()?>