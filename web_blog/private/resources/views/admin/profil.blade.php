@extends('admin.dashboard')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Profile</h1>
        </div>
        <div class="col-xs-6 col-md-3">
            <input type="submit" value="Update" name="update" class="page-header btn btn-lg btn-primary">
            <input type="submit" value="Batal" name="batal" class="page-header btn btn-lg btn-danger">
        </div>
    </div>

    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-12">
				
                    <div class="form-group">
                        <label for="usernamaae">Useraname</label>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="name">Display Name</label>
                        <input type="text" class="form-control" placeholder="Display Name">
                    </div>
                    <div class="form-group">
                        <label for="poto">Profile Photo</label>
                        <input type="file" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Jenis Kelamin">
                    </div>
                    <div class="form-group">
                        <label for="tentang">Tentang</label>
                        <input type="text" class="form-control" placeholder="Tentang">
                    </div>

                    
                </div>
            </div>
        </div>
    </form>
</div>
@stop
@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop