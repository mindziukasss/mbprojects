<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Mindaugas Bernotas</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#about">{{trans('app.about')}}</a></li>
                <li><a href="#portfolio">{{trans('app.portfolio')}}</a></li>
                <li><a  href="#contact">{{trans('app.contact')}}</a></li>
                @foreach (getActiveLanguages() as $key => $value)
                    <li><a href="{{($key)}}">{{($key)}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>