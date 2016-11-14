$(document).ready(function () {

    // Watch for changes if applicable.

    $('input[data-provides="anomaly.field_type.slug"]').each(function () {
        if (!$(this).val() || $(this).data('always-slugify')) {

            var config = {
                slug: this,
                lowercase: $(this).data('lowercase'),
                slugify: '[data-field="' + $(this).data('slugify') + '"]:visible:first'
            };

            // Slugify slug inputs.
            $(this).slugify(config);
        }
    });
});
