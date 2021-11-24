new Vue({
    el: '#formSearch',
    data: {
        inputSearch: '',
    },
    watch: {
        inputSearch: 'resultSearch'
    },
    methods: {
        resultSearch() {
            if (this.inputSearch != "") {
                document.getElementById("btn-search").style.backgroundPosition = "100% 0";
                document.getElementById("btn-search").style.backgroundColor = "var(--green)";
                document.getElementById("search-ico").style.fill = "var(--white)";
                document.getElementById("search-popup").style.display = "block";
                JavaScript: ReqData('php/search.php?search=' + this.inputSearch, 'result-search')
            } else {
                document.getElementById("btn-search").style.backgroundPosition = "0 0";
                document.getElementById("btn-search").style.backgroundColor = "#f9f9f9";
                document.getElementById("search-ico").style.fill = "var(--light-black)";
                document.getElementById("search-popup").style.display = "none";
            }

        }
    },
})