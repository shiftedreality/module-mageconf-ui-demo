define([
    'Magento_Ui/js/form/element/abstract',
    'knockout'
], function (Abstract, ko) {
    'use strict';

    return Abstract.extend({
        defaults: {
            placeholder: 'This is demo component'
        }
    })
});
