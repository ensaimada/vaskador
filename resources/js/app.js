require('./bootstrap');

// Import modules
import { createApp, h, defineComponent } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import LoadScript from "vue-plugin-load-script";
import { 
  GoogleMap, // core
  Marker,
  Polyline,
  Polygon,
  Rectangle,
  Circle,
  CustomControl,
} from 'vue3-google-map';



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
    .use(GoogleMap, Marker, Polyline, Polygon, Rectangle, Circle, CustomControl)
    .mount(el);

InertiaProgress.init({ color: '#4B5563' });
