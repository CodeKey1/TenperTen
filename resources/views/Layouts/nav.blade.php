<!--site-navigation -->
<div id="site-navigation" class="site-navigation">
    <div class="header-btn">
        @guest
            @if (Route::has('login'))
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor"
                    href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor""
                    href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor"
                href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
        @endguest
    </div>
    <!-- header-icins -->
    <div class="ttm-header-icons ">
        <span class="ttm-header-icon ttm-header-cart-link">
            <a href="#"><i class="fa fa-shopping-cart"></i>
                <span class="number-cart">0</span>
            </a>
        </span>
        <div class="ttm-header-icon ttm-header-search-link">
            <a href="#"><i class="ti ti-search"></i></a>
            <div class="ttm-search-overlay">
                <form method="get" class="ttm-site-searchform" action="#">
                    <div class="w-search-form-h">
                        <div class="w-search-form-row">
                            <div class="w-search-input">
                                <input type="search" class="field searchform-s" name="s"
                                    placeholder="Type Word Then Enter...">
                                <button type="submit">
                                    <i class="ti ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- header-icons end -->
    <div class="ttm-menu-toggle">
        <input type="checkbox" id="menu-toggle-form" />
        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
            <span class="toggle-block toggle-blocks-1"></span>
            <span class="toggle-block toggle-blocks-2"></span>
            <span class="toggle-block toggle-blocks-3"></span>
        </label>
    </div>
    @include('Layouts.menu')
</div><!-- site-navigation end-->
