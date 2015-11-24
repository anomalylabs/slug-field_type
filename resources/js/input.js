$(document).ready(function () {

    var slugs = $('.slug-field_type input');

    // Slugify slug inputs.
    slugs.slugify({
        slug: 'input.slug'
    });

    // Watch for changes if applicable.
    slugs.each(function () {

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
