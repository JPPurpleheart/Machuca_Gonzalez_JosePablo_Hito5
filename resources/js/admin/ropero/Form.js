import AppForm from '../app-components/Form/AppForm';

Vue.component('ropero-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                color:  '' ,
                estado:  '' ,
                talla:  '' ,
                categoria:  '' ,
                id_usuario:  '' ,
                
            }
        }
    }

});