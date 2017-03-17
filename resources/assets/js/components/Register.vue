<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <input v-model="email" type="email" class="form-control" placeholder="Email" />
                        </div>
                        
                        <div class="form-group">
                            <input v-model="password" type="password" class="form-control" placeholder="Password" />
                        </div>
                        
                        <button @click="register" class="btn btn-success pull-right">Register</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: ''
            }    
        },
        
        methods: {
        
            register() {

            } 
        },
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
