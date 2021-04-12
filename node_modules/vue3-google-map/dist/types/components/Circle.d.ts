/// <reference types="googlemaps" />
import { PropType } from 'vue';
declare const _default: import("vue").DefineComponent<{
    options: {
        type: PropType<google.maps.CircleOptions>;
        required: true;
    };
}, {
    circle: {
        component: import("vue").Ref<google.maps.Marker | google.maps.Polyline | google.maps.Polygon | google.maps.Rectangle | google.maps.Circle | null>;
    };
}, unknown, {}, {}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, string[], string, import("vue").VNodeProps & import("vue").AllowedComponentProps & import("vue").ComponentCustomProps, Readonly<{
    options: google.maps.CircleOptions;
} & {}>, {}>;
export default _default;
