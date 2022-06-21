import AppForm from '../app-components/Form/AppForm';

Vue.component('editorial-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                nacionalidad:  '' ,
                
            }
        }
    }

});