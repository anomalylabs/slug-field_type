$(document).ready(function () {

    var slugs = $('input.slug');

    // Slugify slug inputs.
    slugs.slugify({
        slug: 'input.slug'
    });

    // Watch for changes if applicable.
    slugs.each(function () {

        var slug = $(this);
        var form = $(this).closest('form');
        var watched = form.find('[data-field="' + slug.data('watch') + '"]').first().find('input');

        if (watched.length) {
            watched.on('keyup', function () {
                slug.val(watched.val()).trigger('keyup');
            });
        }
    });
});
