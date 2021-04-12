import { defineComponent, toRef } from 'vue';
import { useSetupMapComponent } from '../composables/index';
import { polylineEvents } from '../shared/index';
export default defineComponent({
    props: {
        options: {
            type: Object,
            required: true,
        },
    },
    emits: polylineEvents,
    setup(props, { emit }) {
        const options = toRef(props, 'options');
        const polyline = useSetupMapComponent('Polyline', polylineEvents, options, emit);
        return { polyline };
    },
    render: () => null,
});
