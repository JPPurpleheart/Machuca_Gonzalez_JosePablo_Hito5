<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_usuario'), 'has-success': this.fields.id_usuario && this.fields.id_usuario.valid }">
    <label for="id_usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recibe.columns.id_usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_usuario" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_usuario'), 'form-control-success': this.fields.id_usuario && this.fields.id_usuario.valid}" id="id_usuario" name="id_usuario" placeholder="{{ trans('admin.recibe.columns.id_usuario') }}">
        <div v-if="errors.has('id_usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_usuario') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_producto'), 'has-success': this.fields.id_producto && this.fields.id_producto.valid }">
    <label for="id_producto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recibe.columns.id_producto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_producto" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_producto'), 'form-control-success': this.fields.id_producto && this.fields.id_producto.valid}" id="id_producto" name="id_producto" placeholder="{{ trans('admin.recibe.columns.id_producto') }}">
        <div v-if="errors.has('id_producto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_producto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': this.fields.fecha && this.fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recibe.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': this.fields.fecha && this.fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('stock'), 'has-success': this.fields.stock && this.fields.stock.valid }">
    <label for="stock" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recibe.columns.stock') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.stock" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('stock'), 'form-control-success': this.fields.stock && this.fields.stock.valid}" id="stock" name="stock" placeholder="{{ trans('admin.recibe.columns.stock') }}">
        <div v-if="errors.has('stock')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('stock') }}</div>
    </div>
</div>


