$(()=>{
    $('.select2_multiple').SumoSelect({
        placeholder: '请选择选项',
        selectAll: true,
        search: true,
        okCancelInMulti: true,
        locale: ['确定','取消','全选'],
    });

    $('.tags_input').tagsInput({
        width:'auto',
        defaultText: '回车键确定'
    });

    $("input.flat").iCheck({
        checkboxClass: "icheckbox_flat-green",
        radioClass: "iradio_flat-green"
    });


    /**
     * data-type: 'time'/'date'/'datetime'   指定类型
     * data-range: 'true'/'~'   指定时间段分隔符
     */
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        $('.layer-datetime').each(function(index,el){
            var range = false,type='datetime';
            if ( el.dataset.range ) {
                range = el.dataset.range;
                if ( range == 'true' ) range='~';
            }
            if ( el.dataset.type ) {
                type = el.dataset.type;
            }
            laydate.render({
                elem: el,
                type: type,     //
                range: range   // 或 range: '~' 来自定义分割字符
            });
        });

    });

    // 图片上传预览
    $('.picture-preview-input').on('change',function(event){
        var windowURL = window.URL || window.webkitURL;
        var img = windowURL.createObjectURL($(this)[0].files[0]);
        $(this).siblings('.picture-preview').css({backgroundImage:'url('+img+')'})
    })

// custom.js框架已经初始化
//var a = Array.prototype.slice.call(document.querySelectorAll(".js-switch"));
//a.forEach(function(a) {
//    new Switchery(a, {
    //   color: "#26B99A"
//    })
//})

});