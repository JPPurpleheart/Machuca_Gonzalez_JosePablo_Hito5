<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': this.fields.nombre && this.fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ropero.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': this.fields.nombre && this.fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.ropero.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('color'), 'has-success': this.fields.color && this.fields.color.valid }">
    <label for="color" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ropero.columns.color') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.color" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('color'), 'form-control-success': this.fields.color && this.fields.color.valid}" id="color" name="color" placeholder="{{ trans('admin.ropero.columns.color') }}">
        <div v-if="errors.has('color')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('color') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('estado'), 'has-success': this.fields.estado && this.fields.estado.valid }">
    <label for="estado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ropero.columns.estado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.estado" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('estado'), 'form-control-success': this.fields.estado && this.fields.estado.valid}" id="estado" name="estado" placeholder="{{ trans('admin.ropero.columns.estado') }}">
        <div v-if="errors.has('estado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('estado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('talla'), 'has-success': this.fields.talla && this.fields.talla.valid }">
    <label for="talla" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ropero.columns.talla') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.talla" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('talla'), 'form-control-success': this.fields.talla && this.fields.talla.valid}" id="talla" name="talla" placeholder="{{ trans('admin.ropero.columns.talla') }}">
        <div v-if="errors.has('talla')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('talla') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('categoria'), 'has-success': this.fields.categoria && this.fields.categoria.valid }">
    <label for="categoria" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ropero.columns.categoria') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.categoria" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('categoria'), 'form-control-success': this.fields.categoria && this.fields.categoria.valid}" id="categoria" name="categoria" placeholder="{{ trans('admin.ropero.columns.categoria') }}">
        <div v-if="errors.has('categoria')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('categoria') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_usuario'), 'has-success': this.fields.id_usuario && this.fields.id_usuario.valid }">
    <label for="id_usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ropero.columns.id_usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_usuario" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_usuario'), 'form-control-success': this.fields.id_usuario && this.fields.id_usuario.valid}" id="id_usuario" name="id_usuario" placeholder="{{ trans('admin.ropero.columns.id_usuario') }}">
        <div v-if="errors.has('id_usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_usuario') }}</div>
    </div>
</div>


