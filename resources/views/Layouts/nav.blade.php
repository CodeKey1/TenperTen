<!--site-navigation -->
<div id="site-navigation" class="site-navigation">
    
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
