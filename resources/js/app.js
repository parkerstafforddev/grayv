import './bootstrap';

import MainPage from "./MainPage.vue";
import AdminLogin from "./AdminLogin.vue";
import ControlPanel from "./ControlPanel.vue"

import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'


import {createApp} from "vue/dist/vue.esm-bundler.js";


const app = createApp({
    components: {
        'main-page': MainPage,
        'admin-login': AdminLogin,
        'control-panel': ControlPanel


    }
}).mount("#app");
