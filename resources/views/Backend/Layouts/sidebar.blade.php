<div class="sidebar" data="green">
<div class="sidebar-wrapper">
   <div class="logo">
      <a href="" class="simple-text logo-mini">
      dC
      </a>
      <a href="" class="simple-text logo-normal">
      DyeCamp
      </a>
   </div>
   <ul class="nav">
      <li class="active ">
         <a href="">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Dashboard</p>
         </a>
      </li>

      @foreach($menus as $key=>$menu)
      <li>
         @if($menu['childs'] == null && $menu['parent_id'] == 0)
         <a class="nav-link" href="{{env('APP_URL')}}{{$menu['slug']}}">
            <i class="tim-icons icon-atom"></i>
            <p>{{$menu['name']}}</p>
         </a>
         @endif
         @if($menu['childs'] != null)
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapseTwo{{$key}}">
         <i class="fas fa-fw fa-cog"></i>
         <span>{{$menu['childs']['name']}}</span>
         </a>
         <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordionSidebar">
      <li class="bg-white py-2 collapse-inner rounded">
      @if($menu['childs'] != null)
      @foreach($menu['childs']['menu'] as $submenu)
      <span>   
      <a  class="collapse-item" href="{{env('APP_URL')}}{{$submenu['slug']}}">{{$submenu['name'] }}</a>
      </span>
      @endforeach
      @endif
      </li>    
      </div>
      @endif
      </li>
      @endforeach
   </ul>
</div>