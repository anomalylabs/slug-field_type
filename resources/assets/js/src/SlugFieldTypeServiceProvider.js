import Input from '../components/Input'
import {ServiceProvider} from '@anomaly/streams-platform';

export class SlugFieldTypeServiceProvider extends ServiceProvider {
    boot(){
        Vue.component('slug-field-type', Input);
    }
}
