var StepWizard = function () {

    return {

        initStepWizard: function () {
            var form = $(".shopping-cart");
                form.validate({
                    errorPlacement: function errorPlacement(error, element) { element.before(error); },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });
                form.children("div").steps({
                    headerTag: ".header-tags",
                    bodyTag: "section",
                    transitionEffect: "fade",
                    labels: {
                        cancel: "Отмена",
                        current: "текущий шаг:",
                        pagination: "Пагинация",
                        finish: "Отправить",
                        next: "дальше",
                        previous: "назад",
                        loading: "Загрузка ..."
                    },
                    onStepChanging: function (event, currentIndex, newIndex) {
                        // Allways allow previous action even if the current form is not valid!
                        if (currentIndex > newIndex)
                        {
                            if ($('#mCSB_1_container li').length < 1) {
                                return false;
                            } else {
                                return true;
                            }                            
                        }
                        form.validate().settings.ignore = ":disabled,:hidden";
                        if ($('#mCSB_1_container li').length < 1) {
                                toastr["error"]("В корзине нет товаров");
                                return false;
                            } else {
                                toastr["warning"]("Пожалуйста заполните форму");
                                return form.valid();
                            }  
                        
                    },
                    onFinishing: function (event, currentIndex) {
                        form.validate().settings.ignore = ":disabled";
                        return form.valid();
                    },
                    onFinished: function (event, currentIndex) {
                        alert("Submitted!");
                    }
                });
        }, 

    };
}();        