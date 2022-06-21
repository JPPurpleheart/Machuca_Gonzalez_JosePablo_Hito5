<div class="form-group row align-items-center" :class="{'has-danger': errors.has('categoria'), 'has-success': this.fields.categoria && this.fields.categoria.valid }">
    <label for="categoria" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.despensa.columns.categoria') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.categoria" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('categoria'), 'form-control-success': this.fields.categoria && this.fields.categoria.valid}" id="categoria" name="categoria" placeholder="{{ trans('admin.despensa.columns.categoria') }}">
        <div v-if="errors.has('categoria')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('categoria') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': this.fields.nombre && this.fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.despensa.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': this.fields.nombre && this.fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.despensa.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('stock'), 'has-success': this.fields.stock && this.fields.stock.valid }">
    <label for="stock" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.despensa.columns.stock') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.stock" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('stock'), 'form-control-success': this.fields.stock && this.fields.stock.valid}" id="stock" name="stock" placeholder="{{ trans('admin.despensa.columns.stock') }}">
        <div v-if="errors.has('stock')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('stock') }}</div>
    </div>
</div>


