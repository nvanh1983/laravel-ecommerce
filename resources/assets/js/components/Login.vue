<template>
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
                    
                    <button @click="login" class="btn btn-success pull-right">Login</button>
                    
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
        
            login() {
                
                var data = {
                	"client_id": 2,
                	"client_secret": "dOnx5Um6zp5B0A5BcWYVQ04NIdhVcNT1d70RYjuX",
                    "grant_type": "password",
                	"username": "ravuthz@gmail.com",
                	"password": "123123",
                	"scope": ""
                };
                
                // Using VueResource
                this.$http.post('oauth/token', data).then(function (res) {
                    console.log('res :', res);
                    this.$auth.setToken(res.body.access_token, res.body.expires_in + Date.now());
                    this.$router.push('/');
                });
                
            
                // Using AxIOS
                // axios.post('oauth/token', data).then(function (res) {
                //     console.log(res);
                //     this.$auth.setToken(res.data.access_token, res.data.expires_in + Date.now());
                //     this.$router.push('/');
                // }).catch(function (err) {
                //     console.log(err);
                // });
                  
            } 
        },
        
        mounted() {
            console.log('Init Login component.')
        }
    }
</script>
