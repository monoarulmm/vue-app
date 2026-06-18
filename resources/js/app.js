import { createApp } from "vue";
import router from "./router.js";
import App from "./App.vue";

import HeaderComponent from './components/HeaderComponent.vue';
import FooterComponent from './components/FooterComponent.vue';
import LoginComponent from './components/Auth/LoginComponent.vue';
import RegisterComponent from './components/Auth/RegisterComponent.vue';
import AboutComponent from "./components/AboutComponent.vue";
import ContactComponent from "./components/ContactComponent.vue";
import PortfolioComponent from "./components/PortfolioComponent.vue";
import EducationComponent from "./components/EducationComponent.vue";
import SettingComponent from "./components/Admin/SettingComponent.vue";
import DashboardComponent from "./components/Admin/DashboardComponent.vue";
import NoticeComponent from "./components/Admin/NoticeComponent.vue";

const app = createApp(App);

app.component('header-component', HeaderComponent);
app.component('footer-component', FooterComponent);
app.component('login-component', LoginComponent);
app.component('register-component', RegisterComponent);
app.component('about-component',AboutComponent);
app.component('education-component',EducationComponent);
app.component('contact-component',ContactComponent);
app.component('portfolio-component',PortfolioComponent);
app.component('setting-component',SettingComponent);
app.component('dashboard-component',DashboardComponent);
app.component('notice-component',NoticeComponent);


app.use(router).mount("#app");
