
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('edit', require('./components/editThreadComponent.vue'));

const app = new Vue({
	el: '#app',
});

// $("#clickEdit").click(function() {
// 	$("#overlay").css({ display: "block" });
// })

// $("#clickDelete").click(function() {
// 	console.log('World');
// })


