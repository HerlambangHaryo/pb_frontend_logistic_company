<x-bootstrap_v513.dropdown-class-default/>
	<div class="btn-group  btn-group-sm  pull-right" role="group" aria-label="Basic example">
		<a type="button" 
			href="{{ route($route.'.show', $id) }}" 
			class="btn btn-outline-primary">
			Lihat
		</a>
		<a type="button" 
			href="{{ route($route.'.edit', $id) }}" 
			class="btn btn-outline-primary">
			Ubah
		</a>
		<a type="button" 
			href="{{ route($route.'.deletedata', $id) }}" 
			class="btn btn-danger">
			Hapus
		</a>
	</div>
</div>