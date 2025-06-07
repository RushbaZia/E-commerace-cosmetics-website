  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/admin/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      @if (Auth::user()->hasRole('Admin'))

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#expert-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-paintbrush"></i><span>Experts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="expert-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('about.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-heading">Shop</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('products.index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('products.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-list"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('category.index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('category.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#shipping-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-truck-fast"></i><span>Shipping</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="shipping-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('shipping.index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{ route('admin.reviews') }}" class="nav-link collapsed">
          <i class="fa-solid fa-star-half-stroke"></i><span>Reviews</span>
        </a>
      </li>
      <li class="nav-heading">Price Packages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#price-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-hand-holding-dollar"></i><span>Price</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="price-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('price.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Blog Posts</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="posts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('posts.index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('posts.create')}}">
              <i class="bi bi-circle"></i><span>Add posts</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tag-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-hashtag"></i><span>Tags</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tag-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('tags.index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('tags.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{route('comment.index')}}" class="nav-link collapsed"> <i class="fa-solid fa-pen"></i><span>Comments</span></a>
      </li>

      <li class="nav-heading">Roles/Permissions</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#roles-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-users-viewfinder"></i><span>Roles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="roles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('roles.index')}}">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>
          <li>
            <a href="{{route('roles.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#permission-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-user-shield"></i><span>Permissions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="permission-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('permissions.index')}}">
              <i class="bi bi-circle"></i><span>Permissions</span>
            </a>
          </li>
          <li>
            <a href="{{route('permissions.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-users"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('users.index')}}">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
          <li>
            <a href="{{route('users.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/profile')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('contact.index')}}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      @elseif(Auth::user()->hasRole('Manager'))
      <li class="nav-heading">Shop</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('products.index')}}">
              <i class="bi bi-circle"></i><span>Products</span>
            </a>
          </li>
          <li>
            <a href="{{route('products.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-list"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('category.index')}}">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('category.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-heading">Roles/Permissions</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#roles-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-users-viewfinder"></i><span>Roles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="roles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('roles.index')}}">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#permission-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-user-shield"></i><span>Permissions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="permission-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('permissions.index')}}">
              <i class="bi bi-circle"></i><span>Permissions</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-users"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('users.index')}}">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-heading">Blog Posts</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="posts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('posts.index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('posts.create')}}">
              <i class="bi bi-circle"></i><span>Add posts</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tag-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-hashtag"></i><span>Tags</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tag-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('tags.index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('tags.create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li>
      @elseif(Auth::user()->hasRole('User'))
      <li class="nav-heading">Shop</li>
      <li class="nav-item">
        <a href="{{ route('user.orders') }}" class="nav-link collapsed">
          <i class="fa-solid fa-box-open"></i><span>Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('user.reviews') }}" class="nav-link collapsed">
          <i class="fa-solid fa-star-half-stroke"></i><span>Reviews</span>
        </a>
      </li>
      <li class="nav-heading">Blog Post</li>
      <li class="nav-item">
        <a href="{{route('comment.index')}}" class="nav-link collapsed"> <i class="fa-solid fa-pen"></i><span>Comments</span></a>
      </li>
      @endif
    </ul>

  </aside>
  <!-- End Sidebar-->