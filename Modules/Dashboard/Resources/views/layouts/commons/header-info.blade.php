<section class="content-header">
    <h1>
        {{ $pageTitle or trans('dashboard::dashboard.home') }}
        <small>{{ $subPageTitle or null }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('dashboard::dashboard.home') }}</a></li>
        <li class="active">{{ $pageTitle or trans('dashboard::dashboard.home') }}</li>
    </ol>
</section>
