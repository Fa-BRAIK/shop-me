@section('system-bar')
<div
class="uk-navbar-container uk-light uk-visible@m tm-toolbar-container"
>
    <div class="uk-container" uk-navbar>
        <div class="uk-navbar-left">
            <nav>
            <ul class="uk-navbar-nav">
                <li>
                <a href="#"
                    ><span
                    class="uk-margin-xsmall-right"
                    uk-icon="icon: receiver; ratio: .75;"
                    ></span
                    ><span class="tm-pseudo">8 800 799 99 99</span></a
                >
                </li>
                <li>
                <a href="contacts.html" onclick="return false"
                    ><span
                    class="uk-margin-xsmall-right"
                    uk-icon="icon: location; ratio: .75;"
                    ></span
                    ><span class="tm-pseudo">Store in St. Petersburg</span
                    ><span uk-icon="icon: triangle-down; ratio: .75;"></span
                ></a>
                <div
                    class="uk-margin-remove"
                    uk-drop="mode: click; pos: bottom-center;"
                >
                    <div
                    class="uk-card uk-card-default uk-card-small uk-box-shadow-xlarge uk-overflow-hidden uk-padding-small uk-padding-remove-horizontal uk-padding-remove-bottom"
                    >
                    <figure
                        class="uk-card-media-top uk-height-small js-map"
                        data-latitude="59.9356728"
                        data-longitude="30.3258604"
                        data-zoom="14"
                    ></figure>
                    <div class="uk-card-body">
                        <div class="uk-text-small">
                        <div class="uk-text-bolder">Store Name</div>
                        <div>
                            St.&nbsp;Petersburg, Nevsky&nbsp;Prospect&nbsp;28
                        </div>
                        <div>Daily 10:00–22:00</div>
                        </div>
                        <div class="uk-margin-small">
                        <a
                            class="uk-link-muted uk-text-uppercase tm-link-to-all uk-link-reset"
                            href="contacts.html"
                            ><span>contacts</span
                            ><span
                            uk-icon="icon: chevron-right; ratio: .75;"
                            ></span
                        ></a>
                        </div>
                    </div>
                    </div>
                </div>
                </li>
                <li>
                <div class="uk-navbar-item">
                    <span
                    class="uk-margin-xsmall-right"
                    uk-icon="icon: clock; ratio: .75;"
                    ></span
                    >Daily 10:00–22:00
                </div>
                </li>
            </ul>
            </nav>
        </div>
        <div class="uk-navbar-right">
            <nav>
            <ul class="uk-navbar-nav">
                <li><a href="news.html">News</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="#">Payment</a></li>
            </ul>
            </nav>
        </div>
    </div>
</div>
@show
