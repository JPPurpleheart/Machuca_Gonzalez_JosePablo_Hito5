import AppForm from '../app-components/Form/AppForm';

Vue.component('talla-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                talla:  '' ,
                
            }
        }
    }

});