
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const basketModal = new Vue({
    el: '#modal_cart',

    data: {
        items: []
    },

    created: function() {
        this.items = JSON.parse(sessionStorage.getItem("basket")) || [];
    },

    computed: {
        total: function() {
            var result = 0;
            this.items.forEach(function(item) {
                result += item.price;
            });
            return result;
        }
    },

    methods: {
        addItem: function(id, name, price, imageUrl) {
            this.items.push({
                id: id,
                name: name,
                price: price,
                imageUrl: imageUrl,
                addons: 'Papas'
            });
            this.save();
            $('#modal_cart').modal('show');
        },

        removeItem: function(id) {
            var itemIndex = -1;
            this.items.forEach(function(item, index) {
                if (item.id === id) itemIndex = index;
            });
            if (itemIndex > -1) this.items.splice(itemIndex, 1);
            this.save();
        },

        save: function() {
            sessionStorage.setItem("basket", JSON.stringify(this.items));
        }
    }
});

const productModal = new Vue({
    el: '#modal_product',
    data: {
        selectedProduct: null
    },

    methods: {
        selected: function(index) {
            this.selectedProduct = $products[index];
        },

        add: function() {
            basketModal.addItem(this.selectedProduct.id, this.selectedProduct.name, 
                this.selectedProduct.price, this.selectedProduct.imageUrl);
            $('#modal_product').modal('hide');
        }
    }
});

const checkoutPage = new Vue({
    el: '#checkout_page',
    data: {
        items: []
    },
    
    created: function() {
        this.items = JSON.parse(sessionStorage.getItem("basket")) || [];
    }
});

const successPage = new Vue({
    el: '#success_page',
    data: {
        items: []
    },
    
    methods: {
        clearBasket: function() {
            sessionStorage.removeItem("basket");
        }
    }
});

window.productModal = productModal;
window.successPage = successPage;
