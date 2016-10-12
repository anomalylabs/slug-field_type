$(document).ready(function () {

    var selector = 'input[data-provides="anomaly.field_type.slug"]';

    // Slugify slug inputs.
    $(selector).slugify({
        slug: selector
    });

    // Watch for changes if applicable.
    $(selector).each(function () {

        var slug = $(this);
        var form = $(this).closest('form');
        var slugify = form.find('[data-field="' + slug.data('slugify') + '"]:visible').first();

        if (!slug.is(':disabled') && slugify.length) {
            // Slugify on keyup
            slugify.on('keyup', function () {

                var from = "àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ";
                var to   = "aaaaaaaaaaaaaaaaaeeeeeeeeeeeeiiiiiooooooooooooooooouuuuuuuuuuuyyyyyd";
                var str = slugify.val();
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.toString().toLowerCase().replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }

                slug.val(str.replace(/([^a-zA-Z0-9]+$)/g, '')).trigger('keyup');
            });

            // And slugify on blur
            slugify.on('blur', function () {

                var from = "àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ";
                var to   = "aaaaaaaaaaaaaaaaaeeeeeeeeeeeeiiiiiooooooooooooooooouuuuuuuuuuuyyyyyd";
                var str = slugify.val();
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.toString().toLowerCase().replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }

                slug.val(str.replace(/([^a-zA-Z0-9]+$)/g, '')).trigger('keyup');
            });
        }
    });
});
