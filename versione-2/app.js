const app = new Vue({
    el: '#app',
    data:{
        albums: [],
    },
    methods:{
        fetchAlbums(){
            axios
            .get('http://localhost/php-ajax-dischi/versione-2/api.php')
            .then((res) =>{
                console.log(res)
                const{response} = res.data
                this.albums = response
            })
        }
    },
    created(){
        this.fetchAlbums()
    }
})