<template>
    <div class="sidebar" data-background-color="black" data-active-color="danger">
        <!--
    		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
    		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    	-->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
            
                <li>
                    <router-link to="/">
                        <i class="ti-panel"></i>
                        Dashboard
                    </router-link>
                </li>
                
                <li>
                    <router-link to="/users">
                        <i class="ti-user"></i>
                        Users
                    </router-link>
                </li>
                
                <li>
                    <router-link to="/pages">
                        <i class="ti-view-list-alt"></i>
                        Pages
                    </router-link>
                </li>
                
                <li>
                    <router-link to="/posts">
                        <i class="ti-pencil-alt2"></i>
                        Posts
                    </router-link>
                </li>
                
                <li>
                    <router-link to="/products">
                        <i class="ti-gift"></i>
                        Products
                    </router-link>
                </li>
                
            </ul>
    	</div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Navbar Component mounted.')
        }
    }
</script>
