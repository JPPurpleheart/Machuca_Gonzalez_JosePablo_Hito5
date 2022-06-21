<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/registered-users') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.registered-user.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/despensas') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.despensa.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/recibes') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.recibe.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/editorials') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.editorial.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/libros') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.libro.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/prestamos') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.prestamo.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/tallas') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.talla.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/categorias') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.categoria.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/roperos') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.ropero.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/folletos') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.folleto.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
