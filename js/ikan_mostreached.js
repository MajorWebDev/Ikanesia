var root = new Vue({
    el: '#mostReachedIkan',
    data() {
        return {
            info: null,
            loading: true,
            errored: false
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