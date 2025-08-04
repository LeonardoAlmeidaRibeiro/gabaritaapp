<html lang="pt">

<head>
    <title>HFA - SGP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow">
    <meta NAME="robots" CONTENT="noarchive">
    <meta NAME="robots" CONTENT="index, nofollow, noarchive">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; font-src fonts.googleapis.com; img-src 'self'; child-src 'none'; style-src 'self'; script-src 'self'">
    <!--begin::Fonts-->
    <link href="/fonts/poppins.css" rel="stylesheet">
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
<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat" border='1px'>
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-center p-20">
        <!--begin::Wrapper-->
        <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
            <!--begin::Content-->
            <div class="w-md-400px">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="../../demo1/dist/authentication/layouts/overlay/sign-in.html" action="#">
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">Cadastrar</h1>
                        <!--end::Title-->
                        <!--begin::Subtitle-->
                        <div class="text-gray-500 fw-semibold fs-6">Cadastre-se para criar sua conta
                            e iniciar seus estudos!</div>
                        <!--end::Subtitle=-->
                    </div>
                    <!--begin::Heading-->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="E-mail" name="email" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Email-->
                    </div>
                    <!--begin::Input group-->
                    <div class="fv-row mb-8" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input class="form-control bg-transparent" type="password" placeholder="Senha" name="password" autocomplete="off" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z" />
                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z" />
                                    </svg>
                                </span>
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                        <!--begin::Hint-->
                        <div class="text-muted">Use 8 ou mais caracteres com uma mistura de letras, números e símbolos.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Input group=-->
                    <!--end::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::Repeat Password-->
                        <input placeholder="Repetir senha" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Repeat Password-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Accept-->
                    <div class="fv-row mb-8">
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="toc" value="1" />
                            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Ao cadastrar-se, você concorda com os nossos
                                <a href="#" class="ms-1 link-primary">Termos</a></span>
                        </label>
                    </div>
                    <!--end::Accept-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button type="button" id="kt_sign_up_submit" class="btn btn-primary" onclick="myFunction()">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Inscrever-se</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Submit button-->
                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">Já tem uma conta?
                        <a href="../../demo1/dist/authentication/layouts/overlay/sign-in.html" class="link-primary fw-semibold">Entrar</a></div>
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
    <script>
        function myFunction() {
            alert("Eu sou um alert!");
        }

    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <!--end::Root-->
    <!--begin::Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->
</html>
