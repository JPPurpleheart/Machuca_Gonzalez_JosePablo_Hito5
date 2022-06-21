<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_libro'), 'has-success': this.fields.id_libro && this.fields.id_libro.valid }">
    <label for="id_libro" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.prestamo.columns.id_libro') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_libro" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_libro'), 'form-control-success': this.fields.id_libro && this.fields.id_libro.valid}" id="id_libro" name="id_libro" placeholder="{{ trans('admin.prestamo.columns.id_libro') }}">
        <div v-if="errors.has('id_libro')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_libro') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('usuario_prestamo'), 'has-success': this.fields.usuario_prestamo && this.fields.usuario_prestamo.valid }">
    <label for="usuario_prestamo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.prestamo.columns.usuario_prestamo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.usuario_prestamo" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('usuario_prestamo'), 'form-control-success': this.fields.usuario_prestamo && this.fields.usuario_prestamo.valid}" id="usuario_prestamo" name="usuario_prestamo" placeholder="{{ trans('admin.prestamo.columns.usuario_prestamo') }}">
        <div v-if="errors.has('usuario_prestamo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('usuario_prestamo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaInicio'), 'has-success': this.fields.fechaInicio && this.fields.fechaInicio.valid }">
    <label for="fechaInicio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.prestamo.columns.fechaInicio') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fechaInicio" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fechaInicio'), 'form-control-success': this.fields.fechaInicio && this.fields.fechaInicio.valid}" id="fechaInicio" name="fechaInicio" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fechaInicio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaInicio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaFin'), 'has-success': this.fields.fechaFin && this.fields.fechaFin.valid }">
    <label for="fechaFin" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.prestamo.columns.fechaFin') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fechaFin" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fechaFin'), 'form-control-success': this.fields.fechaFin && this.fields.fechaFin.valid}" id="fechaFin" name="fechaFin" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fechaFin')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaFin') }}</div>
    </div>
</div>


