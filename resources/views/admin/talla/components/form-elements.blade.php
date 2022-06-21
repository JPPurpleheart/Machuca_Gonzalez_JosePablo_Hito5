<div class="form-group row align-items-center" :class="{'has-danger': errors.has('talla'), 'has-success': this.fields.talla && this.fields.talla.valid }">
    <label for="talla" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.talla.columns.talla') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.talla" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('talla'), 'form-control-success': this.fields.talla && this.fields.talla.valid}" id="talla" name="talla" placeholder="{{ trans('admin.talla.columns.talla') }}">
        <div v-if="errors.has('talla')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('talla') }}</div>
    </div>
</div>


