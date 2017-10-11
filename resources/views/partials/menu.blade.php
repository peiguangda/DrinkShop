<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Admin management</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href=" {{route('admin.index')}} ">Home</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> Category <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('category.index')}}">List Category</a></li>
          <li><a href="{{route('category.create')}}">Add Category</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> Product <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href=" {{route('product.index')}} ">List Product</a></li>
          <li><a href=" {{route('product.create')}} ">Add Product</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> User <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('user.index')}}">List User</a></li>
          <li><a href="{{route('user.create')}}">Add User</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- /sidebar menu -->