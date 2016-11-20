
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/class.vue'));

const app = new Vue({
    el: '#app',
    data: function() {
        return {
            classes: {}
        }
    },
    created: function() {
        this.getApiData();
    },
    methods: {
        getApiData: function() {
            this.$http.get('api/stats').then((response) => {


                let result = JSON.parse(response.body.stats);

                $(result).each(function(index, data) {
                    console.log(data.stats.as_class);
                });
            }, (response) => {
                console.log(response.statusText);
            });
        },
        filterApiData: function(arr) {

        }
    }
});
