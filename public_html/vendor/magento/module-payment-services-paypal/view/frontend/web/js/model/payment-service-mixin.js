/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/* eslint-disable no-undef */
define([
    'underscore',
    'mage/utils/wrapper'
], function (_, wrapper) {
    'use strict';

    /**
     * Free method filter
     * @param {Object} paymentMethod
     * @return {Boolean}
     */
    var paymentServicesMethods = ['payment_services_paypal_smart_buttons', 'payment_services_paypal_hosted_fields'],

        /**
         * Check if payment method is from payment services.
         *
         * @param {String} needleName
         * @param {String} paymentMethod
         * @returns {Boolean}
         */
        isPaymentServicesButtonsPaymentMethod = function (needleName, paymentMethod) {
            return paymentMethod.method === needleName;
        },
        extender = {
            /**
             * Filter hidden payment methods.
             *
             * @param {Function} originFn - Original method.
             * @param {Array} methods
             */
            setPaymentMethods: function (originFn, methods) {
                var paymentServicesButtonMethodIndex;

                _.each(paymentServicesMethods, function (paymentMethod) {
                    if (!window.checkoutConfig.payment[paymentMethod].isVisible) {
                        paymentServicesButtonMethodIndex = _.findIndex(
                            methods,
                            isPaymentServicesButtonsPaymentMethod.bind(null, paymentMethod)
                        );
                        paymentServicesButtonMethodIndex >= 0 && methods.splice(paymentServicesButtonMethodIndex, 1);
                    }
                });

                return originFn(methods);
            }
    };

    return function (target) {
        return wrapper.extend(target, extender);
    };
});
