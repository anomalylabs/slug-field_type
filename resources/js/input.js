$(document).ready(function () {

    var selector = 'input[data-provides="slug"]';

    // Slugify slug inputs.
    $(selector).slugify({
        slug: selector
    });

    // Watch for changes if applicable.
    $(selector).each(function () {

        var slug = $(this);
        var form = $(this).closest('form');
        var slugify = form.find('[data-field="' + slug.data('slugify') + '"]').first().find('input');

        if (!slug.is(':disabled') && slugify.length) {
            slugify.on('keyup', function () {
                slug.val(slugify.val().replace(/([^a-zA-Z0-9]+$)/g, '')).trigger('keyup');
            });
        }
    });
});
