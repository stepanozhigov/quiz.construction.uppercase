import Vue from 'vue'
import store from './store'
import './lang'
import Notifications from 'vue-notification'

import '../sass/app.scss'

Vue.component('App', require('./App.vue').default)

Vue.use(Notifications)

new Vue({
    store,
    el: '#app',
    props: ['lang']
})