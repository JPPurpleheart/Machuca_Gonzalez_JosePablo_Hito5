<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_usuario'), 'has-success': this.fields.id_usuario && this.fields.id_usuario.valid }">
    <label for="id_usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.folleto.columns.id_usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_usuario" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_usuario'), 'form-control-success': this.fields.id_usuario && this.fields.id_usuario.valid}" id="id_usuario" name="id_usuario" placeholder="{{ trans('admin.folleto.columns.id_usuario') }}">
        <div v-if="errors.has('id_usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_usuario') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': this.fields.fecha && this.fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.folleto.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': this.fields.fecha && this.fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cantidad_entregada'), 'has-success': this.fields.cantidad_entregada && this.fields.cantidad_entregada.valid }">
    <label for="cantidad_entregada" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.folleto.columns.cantidad_entregada') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cantidad_entregada" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cantidad_entregada'), 'form-control-success': this.fields.cantidad_entregada && this.fields.cantidad_entregada.valid}" id="cantidad_entregada" name="cantidad_entregada" placeholder="{{ trans('admin.folleto.columns.cantidad_entregada') }}">
        <div v-if="errors.has('cantidad_entregada')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cantidad_entregada') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipo_folleto'), 'has-success': this.fields.tipo_folleto && this.fields.tipo_folleto.valid }">
    <label for="tipo_folleto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.folleto.columns.tipo_folleto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipo_folleto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipo_folleto'), 'form-control-success': this.fields.tipo_folleto && this.fields.tipo_folleto.valid}" id="tipo_folleto" name="tipo_folleto" placeholder="{{ trans('admin.folleto.columns.tipo_folleto') }}">
        <div v-if="errors.has('tipo_folleto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipo_folleto') }}</div>
    </div>
</div>


