define([
    'uiComponent',
    'uiLayout',
    'uiRegistry',
    'ko'
], function (Component, layout, registry, ko) {

    return Component.extend({

        defaults: {
            template: "Trenzalore_Ofex/dashboard/index",
            title: ko.observable('Your offers coupons'),
            counters: ko.observable(0),
        },

        initialize() {
            this._super();

            this.addCounter();

            let couponsList = [];

            couponsList.push({
                parent: this.name,
                name: 'listOffers',
                displayArea: 'dashboardListOffers',
                component: 'Trenzalore_Ofex/js/dashboard/coupon/offer',
                config: {
                    title: 'shorts 20% off',
                    isActive: false,
                    comment: 'slaslasla sla sla sla sal sal',
                    expiration: {
                        day: 30,
                        month: 11,
                        year: 2022
                    },
                    discount: 20,
                    type: 'per',
                    product: null,
                    category: 3,
                    image: 'https://go.harborfreight.com/wp-content/uploads/2020/11/image-super-twenty-updated112002.png?w=640'
                }
            })
            
            layout(couponsList, this);
            
        },

        addCounter() {

            let newCounter = this.counters() + 1;

            this.counters = newCounter;

        },

    });
});
