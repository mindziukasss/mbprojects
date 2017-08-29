<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">MB</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="scrollable" href="#top">{{trans('app.about')}}</a></li>
                <li><a class="scrollable" href="#portfolio">Portfolio</a></li>
                <li><a class="scrollable" href="#contact">Contact</a></li>
                @foreach (getActiveLanguages() as $key => $value)
                    <li><a class="scrollable" href="{{($key)}}">{{($key)}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>