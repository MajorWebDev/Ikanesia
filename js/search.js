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
                document.getElementById("result-search").innerHTML = `
                <div class="load-search-item">
                    <img src="img/ico/loading-green.svg">
                    Mohon Tunggu, yay!
                </div>
                
                `;
                let d = this.inputSearch;
                setTimeout(function() {
                    JavaScript: ReqData('php/search.php?search=' + d, 'result-search')
                    return false
                }, 1000)


            } else {
                document.getElementById("btn-search").style.backgroundPosition = "0 0";
                document.getElementById("btn-search").style.backgroundColor = "#f9f9f9";
                document.getElementById("search-ico").style.fill = "var(--light-black)";
                document.getElementById("search-popup").style.display = "none";
            }

        }
    },
})