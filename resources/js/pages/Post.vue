<template>
  <div class="container">
        <div class="row mt-5">
            <div class="col-4 mb-3" v-for="post in posts" :key="post.id">
                <div class="card" style="width: 18rem;" >
                <div class="card-body">
                    <h5 class="card-title">{{post.title}}</h5>
                    <p class="card-text">{{post.content}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
      </div>
  </div>
</template>

<script>
export default {
    name: "Main",
    data(){
        return{
            apiUrl: 'http://127.0.0.1:8000/api/posts',
            posts: []
        }
    },
    created(){
        this.getPost()
    },
    methods: {
        getPost(){
            
            axios.get(this.apiUrl)
            .then(resp =>{
                this.posts= resp.data.results;
            })
        }
    }
}
</script>

<style lang="scss" scoped>

</style>