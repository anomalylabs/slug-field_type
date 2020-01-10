var slug = require('slug');

slug.charmap[' '] = '-';

window.addEventListener('keydown', function (event) {

    if (!event.target.matches('input[data-provides="anomaly.field_type.slug"]')) {
        return;
    }

    let input = event.target;

    input.value = slug(input.value, {
        lower: true,
        replacement: input.dataset.type,
    });
});

window.addEventListener('keyup', function (event) {

    if (!event.target.dataset.field || event.target.matches('input[data-provides="anomaly.field_type.slug"]')) {
        return;
    }

    if (!(input = document.querySelector('input[data-provides="anomaly.field_type.slug"][data-slugify="' + event.target.dataset.field + '"]'))) {
        return;
    }

    let slugify = event.target;

    input.value = slug(slugify.value, {
        lower: true,
        replacement: input.dataset.type,
    });
});
