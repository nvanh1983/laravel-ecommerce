<div class="sidebar" data-background-color="black" data-active-color="primary">

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
            <li class="active">
                <router-link to='/'>
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>    
                </router-link>
            </li>
            <li>
                <router-link to='/users'>
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                </router-link>
            </li>
            <li>
                <router-link to='/pages'>
                    <i class="ti-view-list-alt"></i>
                    <p>Pages</p>  
                </router-link>
            </li>
            <li>
                <router-link to='/posts'>
                    <i class="ti-pencil-alt2"></i>
                    <p>Posts</p>
                </router-link>
            </li>
            <li>
                <router-link to='/products'>
                    <i class="ti-map"></i>
                    <p>Products</p>
                </router-link>
            </li>
        </ul>
	</div>
</div>