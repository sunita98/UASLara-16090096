@extends('template')

@section('main')
<div class="w3-main" style="margin-left:250px">
	<div id="aboutfilm">
		<h2>Tentang Katalog Film</h2>
		<p>Sistem Informasi Katalog Film adalah aplikasi penyedia informasi film dari seluruh dunia. Informasi film yang berupa genre film, rating, tahun rilis, negara, dan aktor-aktor yang memerankan di dalam film tersebut.</p>
		<p>Login untuk admin klik dibawah ini</p>
		<li>
			<a href="{{ url('admin') }}">Admin Katalog Film</a>
		</li>
	</div>	
</div>
@stop

<!-- @section('footer')
<div id="footer">
	<p>&copy; 2019 | Katalog Film</p>
</div>
@stop -->