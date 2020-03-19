import Slug from '../components/Slug'
import {ServiceProvider} from '@anomaly/streams-platform';

export class SlugFieldTypeServiceProvider extends ServiceProvider {
    boot(){
        Vue.component('slug-field-type', Slug);
    }
}
