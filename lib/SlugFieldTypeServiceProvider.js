import {ServiceProvider} from '@anomaly/streams-platform';
import {SlugFieldTypeVuePlugin} from './SlugFieldTypeVuePlugin';


export class SlugFieldTypeServiceProvider extends ServiceProvider {
    async register() {
        this.vuePlugin(SlugFieldTypeVuePlugin);
    }
}