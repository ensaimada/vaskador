import { watch, ref, inject } from 'vue';
import { ApiSymbol, MapSymbol } from '../shared/index';
export const useSetupMapComponent = (componentName, events, options, emit) => {
    let _component = null;
    const component = ref(null);
    const map = inject(MapSymbol, ref(null));
    const api = inject(ApiSymbol, ref(null));
    watch([map, options], (_, __, onInvalidate) => {
        if (map.value && api.value) {
            component.value = _component = new api.value[componentName](Object.assign(Object.assign({}, options.value), { map: map.value }));
            events.forEach(event => {
                _component === null || _component === void 0 ? void 0 : _component.addListener(event, (e) => emit(event, e));
            });
        }
        onInvalidate(() => {
            var _a;
            if (_component) {
                (_a = api.value) === null || _a === void 0 ? void 0 : _a.event.clearInstanceListeners(_component);
                _component.setMap(null);
            }
        });
    }, {
        immediate: true,
    });
    return { component };
};
