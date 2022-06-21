import AppForm from '../app-components/Form/AppForm';

Vue.component('prestamo-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                id_libro:  '' ,
                usuario_prestamo:  '' ,
                fechaInicio:  '' ,
                fechaFin:  '' ,
                
            }
        }
    }

});