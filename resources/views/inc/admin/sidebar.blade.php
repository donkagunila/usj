 <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo">
        <a href="{{ route('admin.home')}}" class="simple-text logo-mini">
          PN
        </a>
        <a href="{{ route('admin.home')}}" class="simple-text logo-normal">
          Project Name
        </a>
      </div>
      <div class="sidebar-wrapper">
        
        <ul class="nav">
          <li class="nav-item {{ Request::is('*/dashboard*') ? 'active' : ' '}}">
            <a class="nav-link" href="{{ route('admin.home')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          
          <li class="nav-item {{ Request::is('*/user/*') ? 'active' : ''}}">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p> Users
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.list')}}">
                    <span class="sidebar-mini"> UL </span>
                    <span class="sidebar-normal"> User List </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.add')}}">
                    <span class="sidebar-mini"> AU </span>
                    <span class="sidebar-normal"> Add User</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
         
        </ul>
      </div>
    </div>