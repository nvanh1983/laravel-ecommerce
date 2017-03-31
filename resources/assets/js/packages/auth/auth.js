function plugin (Vue, options) {
    
    if (plugin.installed) {
        return;
    }

    options = options || {};

    Vue.auth = {

        setToken (token, expiration) {
            localStorage.setItem('token', token);
            localStorage.setItem('expiration', expiration);
        },
        
        getToken () {
            var token = localStorage.getItem('token');
            var expiration = localStorage.getItem('expiration');
            
            if (!token || !expiration) {
                return null;
            }
            
            if (Date.now() > parseInt(expiration)) {
                this.destroyToken();
                return null;
            } else {
                return token;
            }
        },
        
        destroyToken () {
            localStorage.removeItem('token');
            localStorage.removeItem('expiration');
        },
        
        isAuthenticated() {
            return this.getToken() ? true : false;
        }
        
    }
    
    Object.defineProperties(Vue.prototype, {
        $auth: {
            get: () => {
                return Vue.auth
            }
        }
    })
}

if (typeof window !== 'undefined' && window.Vue) {
    window.Vue.use(plugin);
}

export default plugin;