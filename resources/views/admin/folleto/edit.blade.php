@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.folleto.actions.edit', ['name' => $folleto->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <folleto-form
                :action="'{{ $folleto->resource_url }}'"
                :data="{{ $folleto->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.folleto.actions.edit', ['name' => $folleto->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.folleto.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </folleto-form>

        </div>
    
</div>

@endsection