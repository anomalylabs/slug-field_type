@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/slug/js/index.js');
@endphp

<slug-field-type :fieldType="{{ $fieldType->toJson() }}"/>
