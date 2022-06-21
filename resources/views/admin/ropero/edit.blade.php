@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.ropero.actions.edit', ['name' => $ropero->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <ropero-form
                :action="'{{ $ropero->resource_url }}'"
                :data="{{ $ropero->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.ropero.actions.edit', ['name' => $ropero->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.ropero.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </ropero-form>

        </div>
    
</div>

@endsection