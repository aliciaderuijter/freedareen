
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('donationsTable', require('./components/DonationsTable.vue'));
Vue.component('moneyInput', require('./components/MoneyInput.vue'));
import editor from 'vue2-medium-editor'

const app = new Vue({
    el: '#app',

    methods: {
        editStory(text){
            $('#storyText').text(text);
        },
        editAbout(text){
            $('#description').text(text);
        },
        editPoem(text){
            $('#poem').text(text);
        },
        editSupport(text){
            $('#support').text(text);
        }
    },

    components: {
        'medium-editor': editor
    }
});
