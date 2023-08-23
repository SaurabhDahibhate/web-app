<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div id="sidebar-menu">

            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="index">
                    <i class="fas fa-home" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Dashboard')</span>
                    </a>
                </li>



                @if(Auth::user() != null && Auth::user()->role == "admin")

                <li>
                    <a href="{{ route('boqs.index') }}">
                        <i class="fas fa-file" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.BOQ_Request')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-boxes" style="font-size: 1.02rem;"></i>
                        <span data-key="t-invoices">@lang('translation.Product_Master')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('products.index') }}" data-key="t-invoice-list">@lang('translation.Product_Master_list')</a></li>
                        <li><a href="{{ route('categories.index') }}" data-key="t-invoice-list">@lang('translation.add_category')</a></li>
                        <li><a href="{{ route('subcategories.index') }}" data-key="t-invoice-list">@lang('translation.add_sub_category')</a></li>
                        <li><a href="{{ route('manufactures.index') }}" data-key="t-invoice-detail">@lang('translation.add_manufacturing_name')</a></li>
                        <li><a href="{{ route('units.index') }}" data-key="t-invoice-detail">@lang('translation.add_unit')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-box" style="font-size: 1.02rem;"></i>
                        <span data-key="t-invoices">@lang('translation.master_data')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('master_datas.index') }}" data-key="t-invoice-list">HP Master Data</a></li>
                        <li><a href="{{ route('master_datas.currents.index') }}" data-key="t-invoice-list">Current Master Data</a></li>
                        <li><a href="{{ route('master_datas.hooters.index') }}" data-key="t-invoice-list">Hooter Master Data</a></li>
                        <li><a href="{{ route('paneltypes.index') }}" data-key="t-invoice-detail">@lang('translation.Panel_Type')</a></li>
                        <li><a href="{{ route('hps.index') }}" data-key="t-invoice-list">@lang('translation.HP')</a></li>
                        <li><a href="{{ route('currents.index') }}" data-key="t-invoice-list">Manage Current's</a></li>
                        {{-- <li><a href="{{ route('components.index') }}"--}}
                        {{-- data-key="t-invoice-list">@lang('translation.manage_components')</a></li>--}}
                    </ul>
                </li>

                <li>
                    <a href="/customers">
                        <i class="fas fa-users" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Customer_List')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-user" style="font-size: 1.02rem;"></i>
                        <span data-key="t-apps">@lang('translation.System_User')</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="admin.add-role">
                                <span data-key="t-chat">@lang('translation.Add_Role')</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin.add-user">
                                <span data-key="t-dashboard">@lang('translation.Add_User')</span>
                            </a>
                        </li>
                    </ul>

                </li>
                @endif

                <!-- user -->
                @if(Auth::user() != null && Auth::user()->role == "user")
                <li>
                    <a href="{{ route('user.quotations.index') }}">
                        <i class="fas fa-users" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Quotation_List')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.boqs.index') }}">
                        <i class="fas fa-users" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.BOQ_List')</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ route('user.quotations.index') }}">
                        <i class="fas fa-users" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Profile')</span>
                    </a>
                </li> -->

             

                <li>
                    <a href="user.order-history">
                        <i class="fas fa-history" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Order_History')</span>
                    </a>
                </li>

                @endif

            </ul>
        </div>
    </div>
</div>