(function (window, document) {

    const init = function () {

        const textareas = document.querySelectorAll('textarea[data-provides="anomaly.field_type.textarea"]');
        const fields = textareas.length > 0
            ? Array.from(textareas)
            : [];

        fields.forEach(function (field) {

            const wrapper = field.closest('div');
            const counter = wrapper.querySelector('.counter');
            const count = counter.querySelector('.count');
            const max = field.dataset.max;

            /**
             * Listen for keyup and update
             * the counter and contexts.
             */
            field.addEventListener('keyup', function () {

                if (max) {
                    count.innerText = max - field.value.length;
                } else {
                    count.innerText = field.value.length;
                }

                if (max && field.value.length > max) {
                    counter.classList.add('text-danger');
                } else {
                    counter.classList.remove('text-danger');
                }
            });

            /**
             * Fire the count event initially
             * to cause an initial count.
             */
            const event = document.createEvent('HTMLEvents');

            event.initEvent('keyup', false, true);
            field.dispatchEvent(event);
        });
    };

    
    document.addEventListener('DOMContentLoaded', init);
})(window, document);
