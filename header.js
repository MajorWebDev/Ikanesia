'use strict';

new Vue({
    el: '#search',
    data: {
        inputSearch: '',
        value: '',
        oldValue: '',
        ss: '',
    },
    watch: {
        inputSearch: function(val) {
            this.ss = val;
        }
    }
})