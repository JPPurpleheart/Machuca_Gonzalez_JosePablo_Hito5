@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.editorial.actions.edit', ['name' => $editorial->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <editorial-form
                :action="'{{ $editorial->resource_url }}'"
                :data="{{ $editorial->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.editorial.actions.edit', ['name' => $editorial->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.editorial.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </editorial-form>

        </div>
    
</div>

@endsection