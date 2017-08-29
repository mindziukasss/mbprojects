<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">Mindaugas Benotas</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span>Hello Admin</a></li>
                <li class="active"><a title="View Website" href="#"><span class="glyphicon glyphicon-globe"></span></a>
                </li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="col-md-3">

        <div id="sidebar">
            <ul id="menu" class="nav navbar-nav side-bar">
                <li class="side-bar tmargin">
                    <a href="{{ route('app.works.index') }}"><span><i class="fa fa-folder-open-o"></i></span> Projects</a>
                </li>
                <li class="side-bar">
                    <a href="{{ route('app.languages.index') }}"><span><i class="fa fa-language" aria-hidden="true"></i>&nbsp;</span> Languages</a>
                </li>
                <li class="side-bar">
                    <a href="{{ route('app.resources.index') }}"><span><i class="fa fa-file"></i>"&nbsp;</span>Resources</a>
                </li>
                <li class="side-bar">
                    <a href="#"><span class="glyphicon glyphicon-signal">&nbsp;</span>Statistics</a>
                </li>

            </ul>
        </div>
    </div>

</div>
