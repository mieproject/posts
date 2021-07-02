@extends('mie-ui::layouts.contentLayoutMaster')

@section('title', __('MIE Posts'))

@section('content')
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="card-alert card gradient-45deg-red-pink">
                <div class="card-content white-text">
                    <p>
                        <i class="material-icons">error</i> <div class="alert alert-danger">{{ $error }}</div></p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endforeach
    @endif
    @if (session('status'))
        <div class="card-alert card gradient-45deg-green-teal">
            <div class="card-content white-text">
                <p>
                    <i class="material-icons">check</i>  {!!  session('status') !!}</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <!--Basic Card-->

    <div class="card">
        <div class="card-content">
            <p class="caption">
                {{ __('messages.create').' '.__('Post') }}
            </p>
        </div>
    </div>
    <div class="divider mb-1"></div>
    <div class="card">
        <div class="card-content">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" class="validate">
                            <label for="name">{{ __('Post Name') }}</label>
                        </div>
{{--                        <div class="input-field col s6">--}}
{{--                            <input id="last_name" type="text" class="validate">--}}
{{--                            <label for="last_name">Last Name</label>--}}
{{--                        </div>--}}
                    </div>
                    <div class="row">
                        <div class="col s12 full-editor">
                            <!-- full Editor start -->
{{--                            <h>{{ __('messages.content') }}</h>--}}
                            <div id="full-wrapper">
                                <div id="full-container">
                                    <div class="editor">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- full Editor end -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            This is an inline input field:
                            <div class="input-field inline">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{asset('vendors/quill/katex.min.js')}}"></script>
    <script src="{{asset('vendors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('vendors/quill/quill.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/form-editor.js')}}"></script>
    <script>

    </script>
@endsection


{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/quill.bubble.css')}}">@endsection

@section('page-style') @endsection
