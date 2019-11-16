{{ assets("scripts.js", "anomaly.field_type.slug::js/input.js") }}

<div class="{{ ($fieldType->config('prefix') || $fieldType->config('suffix')) ? 'input-group' : '' }}">

    @if ($fieldType->config('prefix'))
        <span class="input-group-addon">
            {{ $fieldType->config('prefix') }}
        </span>
    @endif

    <input {!! html_attributes($fieldType->attributes([
        'type' => 'text',
        'data-type'=> $fieldType->config('type'),
        'data-slugify'=> $fieldType->config('slugify'),
        'data-lowercase'=> $fieldType->config('lowercase'),
        'data-always_slugify'=> $fieldType->config('always_slugify'),
    ])) !!}>

    @if ($fieldType->config('suffix'))    
        <span class="input-group-addon">
            {{ $fieldType->config('suffix') }}
        </span>
    @endif

</div>
