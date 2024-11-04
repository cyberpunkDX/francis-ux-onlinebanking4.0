<aside style="background: #072939;" class="left-sidebar text-light">
    <!-- Sidebar scroll-->


    <!-- Sidebar scroll-->
    <div style="background: #072939;" class="text-light">
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/" class="text-nowrap logo-img">
                <img src="{{ asset('dashboard/resources/images/logo-dark.png') }}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="fa fa-exit fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar text-light" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="fa fa-grid nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-primary">Home</span>
                </li>
                <li class="sidebar-item text-light">
                    <x-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">
                        <span>
                            <i class="fa fa-crown text-light"></i>
                        </span>
                        <span class="hide-menu text-light">Dashboard</span>
                    </x-nav-link>
                </li>
                <li class="sidebar-item">
                    <x-nav-link :href="route('user.deposit.index')" :active="request()->routeIs('user.deposit.index')">
                        <span>
                            <i class="fa fa-plus text-light"></i>
                        </span>
                        <span class="hide-menu text-light">Deposit</span>
                    </x-nav-link>
                    </a>
                </li>
                <li class="sidebar-item">
                    <x-nav-link :href="route('user.card.index')" :active="request()->routeIs('user.card.index')">
                        <span>
                            <i class="fa fa-credit-card text-light"></i>
                        </span>
                        <span class="hide-menu text-light">Cards</span>
                    </x-nav-link>
                    </a>
                </li>

                <li class="sidebar-item">
                    <x-nav-link :href="route('user.transaction.index')" :active="request()->routeIs('user.transaction.index')">
                        <span>
                            <i class="fa fa-rocket text-light"></i>
                        </span>
                        <span class="hide-menu text-light">Transactions</span>
                    </x-nav-link>
                </li>

                <li class="sidebar-item">
                    <x-nav-link :href="route('user.profile.index')" :active="request()->routeIs('user.profile.index')">
                        <span>
                            <i class="fa fa-user text-light"></i>
                        </span>
                        <span class="hide-menu text-light">Me</span>
                    </x-nav-link>
                </li>

                <li class="sidebar-item">
                    <x-nav-link :href="route('user.transfer.fund')" :active="request()->routeIs('user.transfer.fund')">
                        <span>
                            <i class="fa fa-share text-light"></i>
                        </span>
                        <span class="hide-menu text-light">Transfer</span>
                    </x-nav-link>
                </li>
                <li class="sidebar-item">
                    <div class="sidebar-link" aria-current="page" href="#">
                        <form action="{{ route('logout') }}" class="item-name" method="post">
                            @csrf
                            <button class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to end your session?')" type="submit"><i
                                    class="bx bx-exit"></i> Logout</button>
                        </form>
                    </div>
                </li>

            </ul>

        </nav>
    </div>
    <!-- End Sidebar scroll-->
</aside>
