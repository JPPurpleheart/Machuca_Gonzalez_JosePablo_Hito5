<div class="form-group row align-items-center" :class="{'has-danger': errors.has('isbn'), 'has-success': this.fields.isbn && this.fields.isbn.valid }">
    <label for="isbn" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.libro.columns.isbn') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.isbn" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('isbn'), 'form-control-success': this.fields.isbn && this.fields.isbn.valid}" id="isbn" name="isbn" placeholder="{{ trans('admin.libro.columns.isbn') }}">
        <div v-if="errors.has('isbn')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('isbn') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('titulo'), 'has-success': this.fields.titulo && this.fields.titulo.valid }">
    <label for="titulo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.libro.columns.titulo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.titulo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('titulo'), 'form-control-success': this.fields.titulo && this.fields.titulo.valid}" id="titulo" name="titulo" placeholder="{{ trans('admin.libro.columns.titulo') }}">
        <div v-if="errors.has('titulo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('titulo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('autor'), 'has-success': this.fields.autor && this.fields.autor.valid }">
    <label for="autor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.libro.columns.autor') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.autor" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('autor'), 'form-control-success': this.fields.autor && this.fields.autor.valid}" id="autor" name="autor" placeholder="{{ trans('admin.libro.columns.autor') }}">
        <div v-if="errors.has('autor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('autor') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('genero'), 'has-success': this.fields.genero && this.fields.genero.valid }">
    <label for="genero" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.libro.columns.genero') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.genero" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('genero'), 'form-control-success': this.fields.genero && this.fields.genero.valid}" id="genero" name="genero" placeholder="{{ trans('admin.libro.columns.genero') }}">
        <div v-if="errors.has('genero')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('genero') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('recomendacion_generacional'), 'has-success': this.fields.recomendacion_generacional && this.fields.recomendacion_generacional.valid }">
    <label for="recomendacion_generacional" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.libro.columns.recomendacion_generacional') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.recomendacion_generacional" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('recomendacion_generacional'), 'form-control-success': this.fields.recomendacion_generacional && this.fields.recomendacion_generacional.valid}" id="recomendacion_generacional" name="recomendacion_generacional" placeholder="{{ trans('admin.libro.columns.recomendacion_generacional') }}">
        <div v-if="errors.has('recomendacion_generacional')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('recomendacion_generacional') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_editorial'), 'has-success': this.fields.id_editorial && this.fields.id_editorial.valid }">
    <label for="id_editorial" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.libro.columns.id_editorial') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_editorial" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_editorial'), 'form-control-success': this.fields.id_editorial && this.fields.id_editorial.valid}" id="id_editorial" name="id_editorial" placeholder="{{ trans('admin.libro.columns.id_editorial') }}">
        <div v-if="errors.has('id_editorial')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_editorial') }}</div>
    </div>
</div>


