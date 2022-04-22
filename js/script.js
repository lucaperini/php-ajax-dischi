const app = new Vue(
    {
        el: '#app',
        data: {
            posts : []
        },
        created(){
            axios.get('http://localhost:8888/php-ajax-dischi/php-ajax-dischi-/server/controller.php').then(
                (result) => {
                    this.posts = result.data.results;
                    console.log(result);
                }).catch((error) => {
                    console.warn(error);
                });
        }
    }
)