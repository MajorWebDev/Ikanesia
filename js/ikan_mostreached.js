Vue.use(VueLazyload);

var root = new Vue({
    el: '#mostReachedIkan',
    data() {
        return {
            info: null,
            loading: true,
            errored: false
        }
    },
    methods: {
        rupiah(angka) {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for (var i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
        }
    },
    mounted() {
        axios
            .get('api/ikanesia_api.php?function=get_ikan')
            .then(response => {
                this.info = response.data.data
            })
            .catch(error => {
                console.log(error)
                this.errored = true
            })
            .finally(() => this.loading = false)
    }
})