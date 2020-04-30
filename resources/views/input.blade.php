@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/slug/js/index.js');
@endphp

<slug-field-type {!! html_attributes([
    'value' => $fieldType->value,
    'name' => $fieldType->getInputName,
    'placeholder' => $fieldType->placeholder,
    'slugify' => $fieldType->config('slugify'),
    'lowercase' => $fieldType->config('lowercase'),
    'replacement' => $fieldType->config('type'), // @todo rename to replacement
]) !!}></slug-field-type>
