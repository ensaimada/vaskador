import { defineComponent, toRef } from 'vue';
import { useSetupMapComponent } from '../composables/index';
import { markerEvents } from '../shared/index';
export default defineComponent({
    props: {
        options: {
            type: Object,
            required: true,
        },
    },
    emits: markerEvents,
    setup(props, { emit }) {
        const options = toRef(props, 'options');
        const marker = useSetupMapComponent('Marker', markerEvents, options, emit);
        return { marker };
    },
    render: () => null,
});
