(function (window, document) {

    let fields = Array.prototype.slice.call(
        document.querySelectorAll('input[data-provides="anomaly.field_type.slug"]')
    );

    fields.forEach(function (field) {

        field.addEventListener('keyup', function (event) {

            //config.slugify = '[data-field="' + $(this).data('slugify') + '"]:visible:first';
            event.target.value = event.target.value.toLowerCase().replace(/ /g, event.target.dataset.type).replace(/[^\w-]+/g, '');
        });
    });

})(window, document);
