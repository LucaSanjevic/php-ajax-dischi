const app = new Vue({
    el: "#app",
    data: {
        dischi: [],
    },

    methods: {
        fetchData() {
            axios.get("http://localhost:81/boolean/php-ajax-dischi/server.php")
            .then((resp) => {
             this.dischi = resp.data;
                                });
                  },
             },

    mounted() {
        this.fetchData()
    }
})