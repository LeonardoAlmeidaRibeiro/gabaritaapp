<html lang="pt">

<head>
    <title>HFA - SGP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow">
    <meta NAME="robots" CONTENT="noarchive">
    <meta NAME="robots" CONTENT="index, nofollow, noarchive">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--begin::Fonts-->
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ url ('assets/media/logos/favicon.ico') }}" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ url ('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url ('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url ('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<style>
    #botmanWidgetRoot {
        display: none;
    }

</style>

<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat" style="background-color: #F5F8FA">
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-center p-20">
        <!--begin::Wrapper-->
        <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
            <!--begin::Content-->
            <div class="w-md-400px">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('site.processLogin') }}">
                      @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">Entrar</h1>
                        <!--end::Title-->
                        <!--begin::Subtitle-->
                        <div class="text-gray-500 fw-semibold fs-6">Entre na sua conta para continuar
                            seus estudos!
                        </div>
                        <!--end::Subtitle=-->
                    </div>
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="E-mail" name="email" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Email-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3">
                        <!--begin::Password-->
                        <input type="password" placeholder="Senha" name="password" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Password-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                        <div></div>
                        <!--begin::Link-->
                        {{-- <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="link-primary">Esqueceu a senha ?</a> --}}
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Entrar</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Aguarde...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Submit button-->
                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">Ainda não sou membro?
                        <a href="{{ route('site.registration') }}" class="link-primary">Cadastre-se</a></div>
                    <!--end::Sign up-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Authentication - Sign-up-->
    <!--end::Root-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->

    <script src="{{ url ('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ url ('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ url ('assets/js/custom/authentication/sign-in/general.js')}}"></script>
    <script src="{{ url ('assets/js/custom/authentication/sign-in/i18n.js')}}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <!--end::Root-->
    <!--begin::Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->
</html>
