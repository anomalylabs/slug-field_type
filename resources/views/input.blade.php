{{ assets("scripts.js", "anomaly.field_type.slug::js/input.js") }}

<div class="{{ ($fieldType->config('prefix') || $fieldType->config('suffix')) ? 'input-group' : '' }}">

    @if ($fieldType->config('prefix'))
        <span class="input-group-addon">
            {{ $fieldType->config('prefix') }}
        </span>
    @endif

    <input {!! html_attributes($fieldType->attributes()) !!}>

    @if ($fieldType->config('suffix'))    
        <span class="input-group-addon">
            {{ $fieldType->config('suffix') }}
        </span>
    @endif

</div>
