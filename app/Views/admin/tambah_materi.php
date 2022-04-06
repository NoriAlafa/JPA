<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<div class="container">
    <div class="card">
        <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <form action="/post/materi" method="post" enctype="multipart/form-data">
                    <?=csrf_field();?>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Pre-Content</label>
                        <input type="text" class="form-control" name="pre-content">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="form-control btn btn-primary">Buat</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<?=$this->endSection()?>