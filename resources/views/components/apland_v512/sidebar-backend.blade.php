<div class="col-12 col-md-3  ">
    <div class="sidebar-area">  
        <div class="single-widget-area mb-50 wow fadeInUp">  
            <ul class="catagories-list">
                <li >
                    <a 
                        class="@if($active == 'Profiles') text-primary @endif"
                        href="{{ route('Profiles.index') }}">
                        Profile 
                    </a>
                </li> 
                <li >
                    <a 
                        class="@if($active == 'Orders') text-primary @endif"
                        href="{{ route('Orders.index') }}">
                        Orders 
                    </a>
                </li> 
            </ul>
        </div> 
    </div>			
</div>