<nav class="navabr navba-expand-lg navbar-light bg-primary">
	<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		aria-expend="false"
		aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul Class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('beranda')}}">
						Beranda <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('tentang')}}">
						Tentang <span class="sr-only">(current)</span></a>
				</li>
				<li class= "nav-item active">
					<a class="nav-link" href="#">Login</a>
				</li>

			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control = mr-sm-2" type="search"
				placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0"
				type="submit">Search</button>
			</form>
		</div>
</nav>
