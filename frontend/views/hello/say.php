<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/11
 * Time: 18:15
 */

?>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="gender" class="btn-group" data-toggle="buttons">
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                </label>
                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="gender" value="female"> Female
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>

<br>

<form class="form-horizontal form-label-left input_mask" action="" method="post">
    <div class="form-group has-success">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">姓名</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="请输入姓名">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            <ul class="parsley-errors-list filled" ><li class="parsley-required">This value is required.</li></ul>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">邮箱</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="请输入邮箱">
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">标题</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control" disabled placeholder="请输入标题">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">简介</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="textArea" class="form-control" cols="30" rows="3" placeholder="请输入简介"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属分类 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control">
                <option>请选择</option>
                <option selected>科学</option>
                <option>文学</option>
                <option>艺术</option>
                <option>美食</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12"> 推荐原因 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="select2_multiple form-control" name="select2" multiple="multiple">
                <option value="1">一见钟情</option>
                <option value="3">深思熟虑</option>
                <option value="4" selected>防不胜防</option>
                <option value="5">祸福相依</option>
                <option value="6">尘埃落定</option>
                <option value="7" selected>缘定三生</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">个性标签 <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="tags_1" type="text" class="tags tags_input form-control" value="活泼, 自信, 友善" />
            <!--<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;">请输入合适的标签</div>-->
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">兴趣爱好 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="flat" checked="checked"> 读书
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="flat"> 唱歌
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="flat" disabled="disabled"> 下棋
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">性别 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="radio">
                <label>
                    <input type="radio" class="flat" checked name="iCheck"> 男生
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" class="flat" name="iCheck"> 女生
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" class="flat" name="iCheck" disabled="disabled"> 保密
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">记住密码 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="">
                <label>
                    <input type="checkbox" name="remember" class="js-switch"  /> 记住密码
                </label>
            </div>
            <div class="">
                <label>
                    <input type="checkbox" class="js-switch" checked disabled /> 同意协议
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">生日 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="layer-datetime form-control col-md-7 col-xs-12" value="2018-12-20 00:00:00" required="required" type="text">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">闭关时间 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="layer-datetime form-control col-md-7 col-xs-12" data-type="datetime" data-range="~" required="required" type="text">
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <button type="button" class="btn btn-primary">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>

<?php $this->beginBlock('select2'); ?>
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
        })


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
                    range: range,   // 或 range: '~' 来自定义分割字符
                });
            });

          });


        // custom.js框架已经初始化
        //var a = Array.prototype.slice.call(document.querySelectorAll(".js-switch"));
        //a.forEach(function(a) {
        //    new Switchery(a, {
                color: "#26B99A"
        //    })
        //})

    })
<?php $this->endBlock(); ?>
<?php $this->registerJs($this->blocks['select2'], \yii\web\View::POS_END); ?>