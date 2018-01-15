(function (window, document) {

    const fields = Array.from(
        document.querySelectorAll('textarea[data-provides="anomaly.field_type.textarea"]')
    );

    fields.forEach(function (field) {

        const wrapper = field.parentElement;
        const max = field.dataset.max;

        /**
         * Listen for keyup and update
         * the counter and contexts.
         */
        field.addEventListener('keyup', function () {

            const counter = wrapper.querySelector('.counter');
            const count = wrapper.querySelector('.count');

            if (count) {
                count.innerText = max
                    ? max - field.value.length
                    : field.value.length;
            }

            if (counter) {
                if (max && field.value.length > max) {
                    counter.classList.add('text-danger');
                } else {
                    counter.classList.remove('text-danger');
                }
            }
        });

        /**
         * Fire the count event initially
         * to cause an initial count.
         */
        field.dispatchEvent(new Event('keyup'));
    });
    
})(window, document);
