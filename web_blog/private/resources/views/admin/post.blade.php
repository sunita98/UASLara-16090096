@extends('admin.dashboard')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
{!! Form::open(array('action' => 'BlogController@store', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')) !!}
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Posting</h1>
        </div>
        <div class="col-xs-6 col-md-3">
        {!! Form::submit('Post', ['class' => 'page-header btn btn-lg btn-primary']) !!}
        {!! Form::submit('Batal', ['class' => 'page-header btn btn-lg btn-danger']) !!}
        </div>
    </div>
    
  <!-- <form action="" method="post"> -->
	
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-container">
                {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Tulis Judul Film!']) !!}
                </div>
                <div class="panel panel-container">
				{!! Form::textarea('sinopsis_film', '', ['class' => 'form-control' . ( $errors->has('sinopsis_film') ? ' is-invalid' : '' ),
                   'placeholder' => 'Sinopsis Film', 'required']) !!}
                </div>
            </div>

            <div class="col-xs-6 col-md-3">
                <div class="panel panel-container">
				{{Form::select("genre",['aksi' => 'Aksi', 'komedi' => 'Komedi', 'petualangan' => 'Petualangan', 'horor' => 'Horor'], null,
                                ["class" => "form-control", "placeholder" => "--- Pilih Genre ---"])}}

                    <!--<input type='file' name="foto" onchange="readURL(this);" /> -->
					{!! Form::file('image', ['class' => '', 'onchange'=>'readURL(this);']) !!}
                    <img id="blah" src='http://placehold.it/180' alt="your image" /> 
                    
                </div>
            </div>
        </div>
		{!! Form::close() !!}
 <!--</form> -->
</div>
@stop

@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop

