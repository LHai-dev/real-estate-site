<!--/ footer Star /-->
<section class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">EstateAgency</h3>
          </div>
          <div class="w-body-a">
            <p class="w-text-a color-text-a">
            For I will not allow anyone to practice any labor except as a few things come out of the comfort of the two, but now I will.
            </p>
          </div>
          <div class="w-footer-a">
            @if(count($contact))
            <ul class="list-unstyled">
              <li class="color-a">
                <span class="color-text-a">{{ __('Email') }} .</span> {{ $contact[0]->email }}</li>
              <li class="color-a">
                <span class="color-text-a">{{ __('Phone') }} .</span> {{ $contact[0]->phone }}</li>
            </ul>
            @endif
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">{{ __('The Company') }}</h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="/login">Admin</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i>
                  <a href="/{{ app()->currentLocale() }}/agents">
                    {{ __('Agents') }}
                  </a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="/{{ app()->getLocale() }}/about">{{ __('About') }}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">{{ __('Site Languages') }}</h3>
          </div>
          <div class="w-body-a">
            <ul class="list-unstyled">
              @foreach($languages as $language)
              <li class="item-list-a">
                <i class="fa fa-angle-right"></i> <a href="/{{ $language->iso }}">
                  {{ strtoupper($language->iso) }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="/{{ app()->currentLocale() }}/">
                {{ __('Home') }}
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/{{ app()->currentLocale() }}/about">
                {{ __('About') }}
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/{{ app()->currentLocale() }}/properties">{{ __('Property') }}</a>
            </li>
            <li class="list-inline-item">
              <a href="/{{ app()->currentLocale() }}/contact">
                {{ __('Contact') }}
              </a>
            </li>
          </ul>
        </nav>
        <div class="socials-a">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-dribbble" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="copyright-footer">
          <p class="copyright color-text-a">
            &copy; Copyright
            <span class="color-a">EstateAgency</span> All Rights Reserved.
          </p>
        </div>
        <div>
          Designed with Bootstrap
        </div>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery/jquery-migrate.min.js"></script>
<script src="/lib/popper/popper.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/scrollreveal/scrollreveal.min.js"></script>

<!-- Template Main Javascript File -->
<script src="/js/main.js"></script>
<script src="/js/app.js"></script>
