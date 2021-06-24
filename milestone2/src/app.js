const app = new Vue({
    el: '#app',
    data: {
        dischi: [],
        url: './api/dischi.php',
    },
    methods:{
        
    },
    mounted(){
        axios.get(this.url)
        .then ((response)=>{
            this.dischi = response.data;
            console.log(this.dischi);
        })
    }

})
