<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <?=$blog['content']?>
        </div>
    </div>
</div>
<?=$this->endSection()?>