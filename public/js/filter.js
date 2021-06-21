$(document).ready(function () {

    $('[data-type=filter]').change(function () {
        const className = this.className;
        let pool_type_val = this.value;
        if (this.checked) {
            $('[data-' + className + '=' + pool_type_val + ']').parent().show()
        } else {
            let Parent = $('[data-' + className + '=' + pool_type_val + ']').parent();
            Parent.hide();
            const pools = $('[data-name=pool_filter]');
            pools.filter(function () {
                let facility = $(this);
                const pool_feature = $(this).data("pool_feature")
                let inArray = pool_feature.indexOf(parseInt(pool_type_val)) == -1;
                let isShow;
                if (inArray) {
                    isShow = false;
                    pool_feature.forEach(function (feature) {
                        let checkbox = $('[value=' + feature + ']');
                        if (checkbox[0].checked) {
                            isShow=true;
                            return
                        }
                    })
                }
                return isShow;
            }).hide();
        }
        $(".owl-carousel").trigger('refresh.owl.carousel');

    })
})