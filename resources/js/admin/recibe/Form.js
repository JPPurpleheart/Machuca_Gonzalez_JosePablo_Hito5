import AppForm from '../app-components/Form/AppForm';

Vue.component('recibe-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                id_usuario:  '' ,
                id_producto:  '' ,
                fecha:  '' ,
                stock:  '' ,
                
            }
        }
    }

});