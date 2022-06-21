import AppForm from '../app-components/Form/AppForm';

Vue.component('libro-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                isbn:  '' ,
                titulo:  '' ,
                autor:  '' ,
                genero:  '' ,
                recomendacion_generacional:  '' ,
                id_editorial:  '' ,
                
            }
        }
    }

});