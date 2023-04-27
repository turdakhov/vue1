import { createApp } from "vue/dist/vue.esm-bundler";
import Assignments from "./components/Assignments.vue";
import Panel from "./components/Panel.vue"

// import App from "./components/App.vue";
// import AppButton from "./components/AppButton.vue";
const app = createApp();
app.component('assignments', Assignments);
app.component('panel', Panel);
app.mount("#app");
