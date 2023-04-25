<div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
  <div class="container">
    <div class="ttm-topbar-content">
      <ul class="top-contact ttm-highlight-left text-left">
        <li><i class="fa fa-phone"></i><strong>Client Services:</strong> <span class="tel-no"> 0 (143) 456 7897</span></li>
      </ul>
      <div class="topbar-right text-right">
        <ul class="top-contact">
          <li><i class="fa fa-envelope-o"></i><strong>Email: </strong><a href="mailto:info@example.com.com">info@example.com</a></li>
        </ul>

        <div class="ttm-social-links-wrapper list-inline">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-flickr"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="ttm-social-links-wrapper list-inline">
            @guest
                @if (Route::has('login'))
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor"
                        href="{{ route('login') }}" style="border-color: #18233300 !important;border-radius: 50px;    padding: 5px 30px 5px 30px;">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor""
                        href="{{ route('register') }}" style="border-color: #18233300 !important;border-radius: 50px;    padding: 5px 30px 5px 30px;">{{ __('Register') }}</a>
                @endif
            @else
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor"
                    href="#" style="border-color: #18233300 !important;border-radius: 50px;    padding: 5px 30px 5px 30px;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor"
                    href="{{ route('logout') }}" style="border-color: #fda12b !important;border-radius: 50px;    padding: 5px 30px 5px 30px;"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                </form>
            @endguest
        </div>
      </div>
    </div>
  </div>
</div>
