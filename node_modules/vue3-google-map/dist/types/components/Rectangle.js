import { defineComponent, toRef } from 'vue';
import { useSetupMapComponent } from '../composables/index';
import { rectangleEvents } from '../shared/index';
export default defineComponent({
    props: {
        options: {
            type: Object,
            required: true,
        },
    },
    emits: rectangleEvents,
    setup(props, { emit }) {
        const options = toRef(props, 'options');
        const rectangle = useSetupMapComponent('Rectangle', rectangleEvents, options, emit);
        return { rectangle };
    },
    render: () => null,
});
