<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($siteIcon);

    $yourname = new Typecho_Widget_Helper_Form_Element_Text('yourname', NULL, NULL, _t('作者名字'), _t('在这里填入您的名字，不填将默认使用站点名称'));
    $form->addInput($yourname);

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('侧边头像地址'), _t('在这里填入一个图片 URL 地址'));
    $form->addInput($logoUrl);
    
    $effect = new Typecho_Widget_Helper_Form_Element_Checkbox('effect', 
    array('commentTyping' => _t('评论框跳动彩球'),
    'clicklove' => _t('点击出现小红心'),
    'animate' => _t('Animate.css效果'),
    ),
    array(), _t('主题效果'));
    
    $form->addInput($effect->multiMode());

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowSocialLink' => _t('显示社交链接'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowTags' => _t('显示标签云'),
    'ShowWeather' => _t('显示侧边天气'),),
    array('ShowSocialLink', 'ShowCategory', 'ShowArchive', 'ShowTags', 'ShowWeather'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());

    //Pjax加速
	$search_form = new Typecho_Widget_Helper_Form_Element_Checkbox('search_form',
	array('Pjax' => _t('PJAX加速站点'),
    'KaTeX' => _t('KaTeX数字公式'),
    ),array('ShowSearch'), _t('功能类'));
	$form->addInput($search_form->multiMode());

    // 侧边社交链接
    $sociallink = _t('Json格式 如 <pre class="description" style="font-family: Consolas; font-size: 12px;">
[
    {"name": "社交平台名字", "slug": "对应的FontAwesome图标", "url": "跳转地址"},
    {"name": "Github", "slug": "fa-brands fa-github", "url": "https://github.com/StarWEB890"},
    {"name": "Bilibili", "slug": "fa-brands fa-bilibili", "url": "https://space.bilibili.com/479627766"},
    {"name": "Email", "slug": "fa-solid fa-envelope", "url": "mailto:starinno@xsnetw.cf"}
] </pre>');
    $social233 = '[
        {"name": "Github", "slug": "fa-brands fa-github", "url": "https://github.com/StarWEB890"},
        {"name": "Bilibili", "slug": "fa-brands fa-bilibili", "url": "https://space.bilibili.com/479627766"},
        {"name": "Email", "slug": "fa-solid fa-envelope", "url": "mailto:starinno@xsnetw.cf"}
    ]';
    $social = new Typecho_Widget_Helper_Form_Element_Textarea('social', null, $social233, _t('侧边社交链接设置'), $sociallink);
    $form->addInput($social);

    $musicid = new Typecho_Widget_Helper_Form_Element_Text('musicid', NULL, NULL, _t('Aplayer播放器ID'), _t('在这里输入Aplayer音乐ID（请在下面选择ID类型）'));
	$form->addInput($musicid);

    $musicserver = new Typecho_Widget_Helper_Form_Element_Radio('musicserver',
    array('netease' => _t('网易云音乐'),
        'tencent' => _t('QQ音乐'),
        'kugou' => _t('酷狗音乐'),
        'baidu' => _t('百度'),
    ),
    'netease', _t('音乐ID类型 - 音乐平台'), _t('默认网易云音乐'));
    
    
    $form->addInput($musicserver);

    $musictype = new Typecho_Widget_Helper_Form_Element_Radio('musictype',
    array('song' => _t('歌曲ID'),
        'playlist' => _t('歌单ID'),
        'album' => _t('专辑ID'),
        'search' => _t('搜索ID'),
        'artist' => _t('歌手ID'),
    ),
    'playlist', _t('音乐ID类型'), _t('默认歌单ID'));
    
    
    $form->addInput($musictype);

    $moeicp = new Typecho_Widget_Helper_Form_Element_Text('moeicp', NULL, NULL, _t('萌号（萌ICP号码）'), _t('萌ICP备案（仅提供萌站长交流！不是真正的中国备案！）<br />
    申请请到<a href="https://icp.gov.moe/join.php"> https://icp.gov.moe/join.php </a>'));
	$form->addInput($moeicp);

    $visitstat = new Typecho_Widget_Helper_Form_Element_Text('visitstat', NULL, NULL, _t('Visit-Stat服务端地址'), _t('自建访问量统计<br />
    教程在<a href="https://blog.xsnetw.cf/posts/54175/"> https://blog.xsnetw.cf/posts/54175/ </a><br />
    直接把服务端地址复制在上面就行（后面不需要添加“/”）'));
	$form->addInput($visitstat);

    $chat = new Typecho_Widget_Helper_Form_Element_Radio('chat',
    array('none' => _t('不选'),
        'Chatra' => _t('Chatra'),
        'DaoVoice' => _t('DaoVoice'),
    ),
    'none', _t('在线聊天选择'), _t('选择在线聊天系统，并在下面填写appid'));
    $form->addInput($chat);
    $chatid = new Typecho_Widget_Helper_Form_Element_Text('chatid', NULL, NULL, _t('在线聊天appid'), _t('DaoVoice直接复制“安装到网站”里的“app_id”，Chatra直接复制“Preferences”下的“Public key”'));
	$form->addInput($chatid);
}

// 留言加@
function getPermalinkFromCoid($coid) {
	$db = Typecho_Db::get();
	$row = $db->fetchRow($db->select('author')->from('table.comments')->where('coid = ? AND status = ?', $coid, 'approved'));
	if (empty($row)) return '';
	return '<a href="#comment-'.$coid.'">@'.$row['author'].'</a>';
}
    
function themeInit($comment){
    $comment = spam_protection_pre($comment, $post, $result);
    }
    function spam_protection_math(){
        $num1=rand(1,49);  //更改计算范围
        $num2=rand(1,49);
        echo "<label for=\"math\"><code>$num1</code>+<code>$num2</code>=</label>\n";
        echo "<input type=\"text\" name=\"sum\" class=\"text layui-input\" value=\"\" size=\"25\" tabindex=\"4\" style=\"width:100px;display: inline;\" placeholder=\"计算结果：\">\n";
        echo "<input type=\"hidden\" name=\"num1\" value=\"$num1\">\n";
        echo "<input type=\"hidden\" name=\"num2\" value=\"$num2\">";
    }
    function spam_protection_pre($comment, $post, $result){
        $sum=$_POST['sum'];
        switch($sum){
            case $_POST['num1']+$_POST['num2']:
            break;
            case null:
            throw new Typecho_Widget_Exception(_t('对不起: 请输入验证码。<a href="javascript:history.back(-1)">返回上一页</a>','评论失败'));
            break;
            default:
            throw new Typecho_Widget_Exception(_t('对不起: 验证码错误，请<a href="javascript:history.back(-1)">返回</a>重试。','评论失败'));
        }
        return $comment;
    }

    
    /* 格式化 */
    function ParseReply($content)
    {
        $content = preg_replace_callback(
            '/\:\s*(1-1|1-2|1-3|1-4|1-5|1-6|1-7|1-8|1-9|1-10|1-11|1-12|1-13|1-14|1-15|1-16|1-17|1-18|1-19|1-20|1-21|1-22|1-23|1-24|1-25)\s*\:/is',
            'ParseQuYinBiaoqingCallback',
            $content
        );
        return $content;
    }
    function ParseQuYinBiaoqingCallback($match)
    {
    
        return '<img class="owo" style="width:66px;height:66px" src="https://cdn.staticaly.com/gh/StarWEB890/TuChuang@master/owo/images/' . urlencode($match[1]) . '.png">';
    }

/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

