@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.talla.actions.edit', ['name' => $talla->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <talla-form
                :action="'{{ $talla->resource_url }}'"
                :data="{{ $talla->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.talla.actions.edit', ['name' => $talla->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.talla.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </talla-form>

        </div>
    
</div>

@endsection