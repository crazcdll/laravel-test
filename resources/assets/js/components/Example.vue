<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                        npm run watch
                        id
                    </div>
                    <div>
                        <button class="btn btn-primary" v-on:click="click">请求</button>
                        <button class="btn btn-primary" v-on:click="toast">toast</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            click(){
                console.log(123);
                axios.get('http://localhost:8899/about', {
//                axios.get('https://www.baidu.com/s', {
                    params:{
                        wd: 123
                    }
                }).then(response =>{
                    console.log(response.data);
                })
            },
            toast(){
                this.$toast('Hello world!');
            }
        }
    }
</script>
