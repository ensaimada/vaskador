import { Ref } from 'vue';
import { IMarker, IPolyline, IPolygon, IRectangle, ICircle, IMarkerOptions, IPolylineOptions, IPolygonOptions, IRectangleOptions, ICircleOptions } from '../@types/index';
declare type IComponent = IMarker | IPolyline | IPolygon | IRectangle | ICircle;
declare type IComponentOptions = IMarkerOptions | IPolylineOptions | IPolygonOptions | IRectangleOptions | ICircleOptions;
export declare const useSetupMapComponent: (componentName: 'Marker' | 'Polyline' | 'Polygon' | 'Rectangle' | 'Circle', events: string[], options: Ref<IComponentOptions>, emit: (event: string, ...args: any[]) => void) => {
    component: Ref<IComponent | null>;
};
export {};
