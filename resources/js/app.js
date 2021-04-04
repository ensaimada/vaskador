require('./bootstrap');

// Import modules
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import LoadScript from "vue-plugin-load-script";


const el = document.getElementById('app');

createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
        }),
})
    .use(InertiaPlugin)
    .use(LoadScript)
    .mount(el);

InertiaProgress.init({ color: '#4B5563' });
