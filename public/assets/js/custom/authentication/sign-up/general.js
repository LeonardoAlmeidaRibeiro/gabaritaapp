"use strict";
var KTSignupGeneral = function () {
    var e, t, a, r;

    var s = function () {
        return 100 === r.getScore();
    };

    return {
        init: function () {
            e = document.querySelector("#kt_sign_up_form"),
            t = document.querySelector("#kt_sign_up_submit"),
            r = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]')),

            a = FormValidation.formValidation(e, {
                fields: {
                    "first-name": {
                        validators: {
                            notEmpty: {
                                message: "O primeiro nome é obrigatório"
                            }
                        }
                    },
                    "last-name": {
                        validators: {
                            notEmpty: {
                                message: "O sobrenome é obrigatório"
                            }
                        }
                    },
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "O valor inserido não é um e-mail válido"
                            },
                            notEmpty: {
                                message: "O endereço de e-mail é obrigatório"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "A senha é obrigatória"
                            },
                            callback: {
                                message: "Por favor, insira uma senha válida",
                                callback: function (e) {
                                    if (e.value.length > 0) return s();
                                }
                            }
                        }
                    },
                    "confirm-password": {
                        validators: {
                            notEmpty: {
                                message: "A confirmação da senha é obrigatória"
                            },
                            identical: {
                                compare: function () {
                                    return e.querySelector('[name="password"]').value;
                                },
                                message: "A senha e a confirmação não coincidem"
                            }
                        }
                    },
                    toc: {
                        validators: {
                            notEmpty: {
                                message: "Você deve aceitar os termos e condições"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger({
                        event: {
                            password: !1
                        }
                    }),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }),

            t.addEventListener("click", function (s) {
                s.preventDefault(),
                a.revalidateField("password"),
                a.validate().then(function (a) {
                    if ("Valid" == a) {
                        t.setAttribute("data-kt-indicator", "on"),
                        t.disabled = !0,
                        setTimeout(function () {
                            t.removeAttribute("data-kt-indicator"),
                            t.disabled = !1,
                            Swal.fire({
                                text: "Você se cadastrou com sucesso!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, entendi!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (t) {
                                if (t.isConfirmed) {
                                  if (a) e.submit();
                                }
                            })
                        }, 1500);
                    } else {
                        Swal.fire({
                            text: "Desculpe, parece que há erros no formulário. Por favor, tente novamente.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, entendi!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }
                })
            }),

            e.querySelector('input[name="password"]').addEventListener("input", function () {
                if (this.value.length > 0)
                    a.updateFieldStatus("password", "NotValidated");
            })
        }
    }
}();

// Executa quando o DOM estiver carregado
KTUtil.onDOMContentLoaded(function () {
    KTSignupGeneral.init();
});