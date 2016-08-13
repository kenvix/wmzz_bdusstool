<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

if(SYSTEM_PAGE == 'baiduid') {
    function wmzz_bdusstool_do() {
        echo <<<SCRIPT
<script type="text/javascript">
var wmzz_bdusstool_in = $("#chrome_bduss").parent().parent();
var wmzz_bdusstool_data  = '<div class="panel panel-default">';
wmzz_bdusstool_data += '<div class="panel-heading" onclick="$(\'#wmzz_bdusstool_area\').fadeToggle();"><h3 class="panel-title"><span class="glyphicon glyphicon-chevron-down"></span> 点击查看在 Windows 下简单快捷的绑定方法</h3></div>';
wmzz_bdusstool_data += '<div class="panel-body" id="wmzz_bdusstool_area" style="display:none">';
wmzz_bdusstool_data += '1.<a href="plugins/wmzz_bdusstool/bdusstool.exe">点击此处下载 贴吧BDUSS获取器</a>';
wmzz_bdusstool_data += '<br/><br/>2.请运行此程序，按照要求登录百度，然后将获取到的 BDUSS 填入上面的表单即可';
wmzz_bdusstool_data += '<br/><br/>本软件由 @mokeyjay 制作；易语言程序，杀软可能会误报';
wmzz_bdusstool_data += '</div>';
wmzz_bdusstool_data += '</div>';
wmzz_bdusstool_in.html(wmzz_bdusstool_in.html() + wmzz_bdusstool_data);
</script>
SCRIPT;

    }
    addAction('footer','wmzz_bdusstool_do');
}