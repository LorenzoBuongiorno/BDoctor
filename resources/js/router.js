import Vue from "vue";
import VueRouter from "vue-router";

import Home from './pages/Home.vue';
import DoctorShow from "./pages/doctors/DoctorShow.vue";


Vue.use(VueRouter);

const router = new VueRouter({
  mode: "history",
  routes: [
    {
        path: "/",
        component: Home,
        name: "homepage",
    },
    { path: "/doctors/:doctor", 
			component: DoctorShow, 
			name: "doctors.show",
			meta: { title: "Dettagli medico"},
		},
  ],
});

export default router;