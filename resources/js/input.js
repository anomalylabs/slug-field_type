$(document).ready(function () {

    var selector = 'input[data-provides="anomaly.field_type.slug"]';

    // Watch for changes if applicable.
    $(selector).each(function () {

        var config = {
            slug: this,
            lowercase: $(this).data('lowercase')
        };

        if ($(this).data('slugify')) {
            config.slugify = '[data-field="' + $(this).data('slugify') + '"]:visible:first'
        }

        // Slugify slug inputs.
        $(this).slugify(config);
    });
});
