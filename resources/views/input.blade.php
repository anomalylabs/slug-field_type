@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/slug/js/index.js');
@endphp

<slug-field-type {!! html_attributes([
    'value' => $fieldType->getValue(),
    'name' => $fieldType->getInputName(),
    'placeholder' => $fieldType->getPlaceholder(),
    'slugify' => $fieldType->config('slugify'),
    'lowercase' => $fieldType->config('lowercase'),
    'replacement' => $fieldType->config('type'), // @todo rename to replacement
]) !!}></slug-field-type>
