import AppForm from '../app-components/Form/AppForm';

Vue.component('despensa-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                categoria:  '' ,
                nombre:  '' ,
                stock:  '' ,
                
            }
        }
    }

});