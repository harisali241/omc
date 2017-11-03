<?php

use App\Models\Menu;


function callMenus(){

    $menus = Menu::where('hidden', 0)->where('active' , 1)->orderBy('sort_order','asc')->get();
    // dd($x);
    return $menus;
    
}


?>


<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
            	<li class="menu-title">Navigation</li>

                <li class="has_sub">
                                <a href="{{ url('/') }}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Website </span>
                                </a>
                                
                            </li>

                            @foreach(callMenus() as $menus)
                                @if($menus->parent_menu_id == '')
                                   
                                    <li class="has_sub">
                                        @if($menus->menu_slug == '')    
                                            <a href="javascript:void(0);" class="waves-effect">
                                        @else
                                            <a href="{{ url($menus->menu_slug) }}" class="waves-effect">
                                        @endif           
                                                <i class="{{ $menus->icon }}"></i>
                                                <span> {{ $menus->menu_name }} </span>
                                            </a>
                                            
                                        
                                    
                                        
                                        <ul class="list-unstyled">
                                            @foreach(callMenus() as $submenus)
                                                @if($submenus->parent_menu_id == $menus->id)
                                                    <li>
                                                        <a href="{{ url($submenus->menu_slug) }}">{{ $submenus->menu_name }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>    
                                @endif
                            @endforeach   

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

        

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->