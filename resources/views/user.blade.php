@extends('layouts.main')

@section('title')PobytOK - Личный кабинет@endsection

@section('content')
    @if(Auth::user()->getRole() === "foreigner")
        @include('foreigner.index')
    @endif

    <div id="scrollToTop">
        <span class="scrollToTop__pic"></span>
    </div>
@endsection
@section('script')
    @parent
    <script src="/js/tabs-account.js"></script>
@endsection
