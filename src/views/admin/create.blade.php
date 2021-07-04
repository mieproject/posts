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

    <form class="invoice-edit-wrapper section form">
        <div class="row">
            <!-- invoice view page -->
            <div class="col xl9 m8 s12">
                <div class="card">
                    <div class="card-content px-36">
                        <!-- header section -->
{{--                        <div class="row mb-3">--}}
{{--                            <div class="col xl4 m12 display-flex align-items-center">--}}
{{--                                <h6 class="invoice-number mr-4 mb-5">Invoice#</h6>--}}
{{--                                <input type="text" placeholder="000">--}}
{{--                            </div>--}}
{{--                            <div class="col xl8 m12">--}}
{{--                                <div class="invoice-date-picker display-flex align-items-center">--}}
{{--                                    <div class="display-flex align-items-center">--}}
{{--                                        <small>Date Issue: </small>--}}
{{--                                        <div class="display-flex ml-4">--}}
{{--                                            <input type="text" class="datepicker mr-2 mb-1" placeholder="Select Date">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="display-flex align-items-center">--}}
{{--                                        <small>Date Due: </small>--}}
{{--                                        <div class="display-flex ml-4">--}}
{{--                                            <input type="text" class="datepicker mb-1" placeholder="Select Date">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="invoice-product-details mb-3">
                            <div class=" invoice-item-repeater">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="name" type="text" name="name" class="validate">
                                        <label for="name">{{ __('Post Name') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- todo: add editor -->
                                        <textarea id="content"  name="content" class="materialize-textarea editor validate"></textarea>
                                        <label for="content">{{ __('Content') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="select2 browser-default">
                                            {!! foreachOption(\MieProject\Posts\Models\Category::get()) !!}
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- todo: chose color -->

                                    <div class="input-field col s12">
                                        <input id="tags" type="text" name="tags" class="validate">
                                        <label for="tags">{{ __('Keywords') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- invoice action  -->
            <div class="col xl3 m4 s12">
                <div class="card invoice-action-wrapper mb-10">
                    <div class="card-content">
                        <div class="invoice-action-btn">
                            <a class="btn indigo waves-effect waves-light display-flex align-items-center justify-content-center">
                                <i class="material-icons mr-4">check</i>
                                <span class="responsive-text">Send Invoice</span>
                            </a>
                        </div>
                        <div class="invoice-action-btn">
                            <a class="btn btn-light-indigo btn-block waves-effect waves-light">
                                <span class="responsive-text">Download Invoice</span>
                            </a>
                        </div>
                        <div class="row invoice-action-btn">
                            <div class="col s6 preview">
                                <a class="btn btn-light-indigo btn-block waves-effect waves-light">
                                    <span class="responsive-text">Preview</span>
                                </a>
                            </div>
                            <div class="col s6 save">
                                <a class="btn btn-light-indigo btn-block waves-effect waves-light">
                                    <span class="responsive-text">Save</span>
                                </a>
                            </div>
                        </div>
                        <div class="invoice-action-btn">
                            <a class="btn waves-effect waves-light display-flex align-items-center justify-content-center">
                                <i class="material-icons mr-3">attach_money</i>
                                <span class="responsive-text">Add Payment</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="invoice-payment mb-3">
                    <div class="invoice-payment-option mb-3">
                        <p class="mb-0">{{ __('Status') }}</p>
                        <select name="status" id="post_status">
                            {!! foreachOption($post_statuses) !!}
                        </select>
                    </div>
                    <div class="invoice-payment-option mb-3">

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="post_password" type="text" name="password" class="validate" disabled>
                                <label for="post_password">{{ __('Password') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-terms display-flex flex-column">
                        <div class="display-flex justify-content-between pb-2">
                            <span>{{ __('Allow Comments') }}</span>
                            <div class="switch">
                                <label>
                                    <input name="allow_comment" type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection


{{-- vendor script --}}
@section('vendor-script')
{{--    <script src="{{asset('js/vendors.min.js')}}"></script>--}}
@endsection

{{-- page script --}}
@section('page-script')
    @include('mie-posts::tagsInput-js')
    <script>
        $(function() {
            $('[name="tags"]').tagsInput({
                'delimiter': [',', ';']
            });
            $('[for="tags"]').addClass('active');
        });
        $('#post_status').on('change',function () {
            if ($(this).val() == 'private'){
                $('#post_password').removeAttr('disabled')
            }else {
                $('#post_password').attr('disabled',true)
            }
        }).trigger('change');
        $('#post_password').on('focusin',function () {
            $(this).attr('type','text')
        });
        $('#post_password').on('focusout',function () {
            $(this).attr('type','password')
        });
    </script>
@endsection


{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection

@section('page-style') @endsection
