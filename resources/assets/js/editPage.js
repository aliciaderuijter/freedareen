
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
            $('#storyText').text(text.event.target.innerHTML);
        },
        editAbout(text){
            $('#description').text(text.event.target.innerHTML);
        },
        editPoem(text){
            $('#poem').text(text.event.target.innerHTML);
        },
        editSupport(text){
            $('#support').text(text.event.target.innerHTML);
        },
        editTrial(text){
            $('#trialText').text(text.event.target.innerHTML);
        },
        editDetention(text){

            $('#detentionText').text(text.event.target.innerHTML);
        },
		editMedia(text){

			$('#mediaText').text(text.event.target.innerHTML);
		}

    },

    components: {
        'medium-editor': editor
    }
});
