import AppForm from '../app-components/Form/AppForm';

Vue.component('registered-user-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                email:  '' ,
                name:  '' ,
                num_miembros:  '' ,
                phone:  '' ,
                surname:  '' ,
                
            }
        }
    }

});