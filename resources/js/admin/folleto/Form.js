import AppForm from '../app-components/Form/AppForm';

Vue.component('folleto-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                id_usuario:  '' ,
                fecha:  '' ,
                cantidad_entregada:  '' ,
                tipo_folleto:  '' ,
                
            }
        }
    }

});