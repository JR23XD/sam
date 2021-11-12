<div class="card text-justify">
	<div class="card-header">
	  <ul class="nav nav-tabs card-header-tabs">
			<li class="nav-item">
				<a href="{{ route('clases.create') }}" class="nav-link {{ Request::is('clases/crear') ? 'active' : '' }}">
					<i class="fas fa-plus-square"></i> {{ __('Registrar Clase') }}
				</a>
			</li>
			{{--  <li class="nav-item">
				<a href="{{ route('horarios.create') }}" class="nav-link {{ Request::is('crear/horario') ? 'active' : '' }}">
					<i class="fas fa-plus-square"></i> {{ __('Registrar Horario') }}
				</a>
			</li>  --}} 	
		@canany(['clases.create', 'clases.show', 'clases.edit', 'clases.destroy'])
			<li class="nav-item">
				<a href="{{ route('clases.index') }}" class="nav-link {{ Request::is('clases') ? 'active' : '' }}">
					<i class="fas fa-list nav-icon"></i> {{ __('Lista de clases') }}
				</a>
			</li>
		@endcanany
	  </ul>
	</div>




