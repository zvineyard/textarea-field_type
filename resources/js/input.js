(function (window, document) {

    let fields = Array.from(
        document.querySelectorAll('textarea[data-provides="anomaly.field_type.textarea"]')
    );

    fields.forEach(function (field) {

        let wrapper = field.closest('div');
        let counter = wrapper.querySelector('.counter');
        let count = counter.querySelector('.count');

        let max = field.dataset.max;

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
        let event = document.createEvent('HTMLEvents');

        event.initEvent('keyup', false, true);

        field.dispatchEvent(event);
    });
})(window, document);
