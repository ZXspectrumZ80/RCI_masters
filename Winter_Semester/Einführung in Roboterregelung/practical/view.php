<!DOCTYPE html>
<html  dir="ltr" lang="de" xml:lang="de">
<head>
		<title>Praktikum Robot 950177075 (W14/15): Assignment 4</title>
		<link rel="shortcut icon" href="https://www.moodle.tum.de/theme/image.php/tum/theme/1432900619/favicon-tum" type="image/png" />

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0">
		<meta name="design" content="Tassilo Weidner | ITSZ-Medienzentrum, TU München">
		<meta name="umsetzung" content="Tassilo Weidner | ITSZ-Medienzentrum, TU München">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Praktikum Robot 950177075 (W14/15): Assignment 4" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/www.moodle.tum.de","sesskey":"BFqB8FOBRs","loadingicon":"https:\/\/www.moodle.tum.de\/theme\/image.php\/tum\/core\/1432900619\/i\/loading_small","themerev":"1432900619","slasharguments":1,"theme":"tum","jsrev":"1432900619","svgicons":true};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''};if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else me.path=component+'/'+component+'.'+me.type};
YUI_config = {"debug":false,"base":"https:\/\/www.moodle.tum.de\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/www.moodle.tum.de\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/www.moodle.tum.de\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/www.moodle.tum.de\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/www.moodle.tum.de\/theme\/yui_combo.php?m\/1432900619\/","combine":true,"comboBase":"https:\/\/www.moodle.tum.de\/theme\/yui_combo.php?","ext":false,"root":"m\/1432900619\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-formautosubmit":{"requires":["base","event-key"]},"moodle-core-formchangechecker":{"requires":["base","event-focus"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core_availability-form":{"requires":["base","node","event","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-calendar-eventmanager":{"requires":["base","node","event-mouseenter","overlay","moodle-calendar-eventmanager-skin"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-toolboxes":{"requires":["node","base","event-key","node","io","moodle-course-coursebase","moodle-course-util"]},"moodle-form-passwordunmask":{"requires":["node","base"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-quizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_quiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-util":{"requires":["node"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_culactivity_stream-scroll":{"requires":["base","node","io","json-parse","dom-core","querystring","event-custom","moodle-core-dock"]},"moodle-block_navigation-navigation":{"requires":["base","io-base","node","event-synthetic","event-delegate","json-parse"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-theme_bootstrapbase-bootstrap":{"requires":["node","selector-css3"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_chemistry-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_computing-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_count-button":{"requires":["io","json-parse","moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_hr-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_htmlplus-beautify":{},"moodle-atto_htmlplus-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_htmlplus-beautify","moodle-atto_htmlplus-codemirror","event-valuechange"]},"moodle-atto_htmlplus-codemirror":{"requires":["moodle-atto_htmlplus-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_imagedragdrop-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/www.moodle.tum.de\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/www.moodle.tum.de\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1432900619\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/www.moodle.tum.de\/lib\/javascript.php\/1432900619\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.mathjax.org\/mathjax\/2.3-latest\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>
<link rel="stylesheet" type="text/css" href="https://www.moodle.tum.de/theme/yui_combo.php?3.17.2/cssreset/cssreset-min.css&amp;3.17.2/cssfonts/cssfonts-min.css&amp;3.17.2/cssgrids/cssgrids-min.css&amp;3.17.2/cssbase/cssbase-min.css" /><link rel="stylesheet" type="text/css" href="https://www.moodle.tum.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script type="text/javascript" src="https://www.moodle.tum.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js&amp;rollup/1432900619/mcore-min.js"></script><script type="text/javascript" src="https://www.moodle.tum.de/theme/jquery.php/core/jquery-1.11.1.min.js"></script>
<script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://www.moodle.tum.de/theme/styles.php/tum/1432900619/all" />
<script type="text/javascript" src="https://www.moodle.tum.de/lib/javascript.php/1432900619/lib/javascript-static.js"></script>
<script type="text/javascript" src="https://www.moodle.tum.de/theme/javascript.php/tum/1432900619/head"></script>
</head>
<body id="page-mod-folder-view" class="format-weeks  path-mod path-mod-folder gecko dir-ltr lang-de yui-skin-sam yui3-skin-sam www-moodle-tum-de pagelayout-incourse course-17255 context-477187 cmid-267863 category-291 side-pre-only">
<div class="skiplinks"><a class="skip" href="#maincontent">Zum Hauptinhalt</a></div>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<div id="page">
	<div id="page-header" class="clearfix">
		<div class="container">
			<div id="logo">
				<a href="http://www.tum.de"><img src="https://www.moodle.tum.de/theme/image.php/tum/theme/1432900619/logo" alt="TUM-Logo"></a>
			</div>
			<img src="https://www.moodle.tum.de/theme/image.php/tum/theme/1432900619/btn-nav" class="btn-nav">
		<div class="clearfix"></div>
		</div>
	</div>
    <nav id="top-nav">
      <div class="container">
        <ul>
          <li><a href="/?redirect=0" class="active">Moodle Startseite</a></li>
          <li class='nav-moodlenews'><span>Moodle News </span>
<ul class='ddn'>
<li><a href='https://www.moodle.tum.de/mod/forum/discuss.php?d=48720''>Moodle News: neues Erscheinungsbild</a></li>
<li><a href='https://www.moodle.tum.de/mod/forum/discuss.php?d=48726''>PIWIK: das neue Web-Analyse-Werkzeug</a></li>
<li><a href='https://www.moodle.tum.de/mod/forum/discuss.php?d=25339''>SoSe 2015 in Moodle jetzt an oberster Stelle</a></li>
<li><a href='https://www.moodle.tum.de/mod/forum/view.php?f=1&amp;showall=1'>Ältere Beiträge...</a></li>
</ul>
</li>
          </li>
          <li><span>Hilfe & Support</span>
            <ul class="ddn">
              <li><a href="https://www.moodle.tum.de/mod/page/view.php?id=26417">Häufig gestellte Fragen</a></li>
              <li><a href="https://www.moodle.tum.de/mod/book/view.php?id=72833&chapterid=8">Anleitung Studierende</a></li>
              <li><a href="https://www.moodle.tum.de/mod/book/view.php?id=72833&chapterid=3">Anleitung Dozierende</a></li>
              <li><a href="https://www.moodle.tum.de/mod/page/view.php?id=131">Kurs beantragen</a></li>
              <li><a href="mailto:lms-support@tum.de">E-Mail an den Support</a></li>
            </ul>
          </li>
          <li><span>Angebote</span>
            <ul class="ddn">
              <li><a href="http://www.mz.itsz.tum.de/elearning/infos-fuer-lehrende/beratung/">Beratung</a></li>
              <li><a href="http://www.mz.itsz.tum.de/kurse-veranstaltungen/">Schulungen & Veranstaltungen</a></li>
            </ul>
          </li>
          <li><span>Medienzentrum</span>
            <ul class="ddn">
              <li><a target="_blank" href="http://www.mz.itsz.tum.de/elearning/">eLearning</a></li>
              <li><a target="_blank" href="http://www.mz.itsz.tum.de/design/">Design</a></li>
              <li><a target="_blank" href="http://www.mz.itsz.tum.de/multimedia/">Multimedia</a></li>
            </ul>
          </li>
                    <li><span>Neeraj Sujan</span>
            <ul class="ddn">
              <li><a href="/user/profile.php?id=60018">Mein Profil</a></li>
              <li><a href="/login/logout.php?sesskey=BFqB8FOBRs">Abmelden</a></li>
            </ul>
          </li>
                </ul>
        <div class="clearfix"></div>
      </div>
    </nav>
    
<!-- END OF HEADER -->

    <div id="page-content">
        <div class="container">
        <div class="breadcrumb clearfix"><span class="accesshide">Seitenpfad</span><nav><ul><li><a href="https://www.moodle.tum.de/my/">Meine Startseite</a></li><li> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep"></span> <a href="https://www.moodle.tum.de/my/">Meine Kurse</a></li><li> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep"></span> <a href="https://www.moodle.tum.de/course/index.php?categoryid=48">Andere Semester</a></li><li> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep"></span> <a href="https://www.moodle.tum.de/course/index.php?categoryid=259">WiSe 2014-15</a></li><li> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep"></span> <a href="https://www.moodle.tum.de/course/index.php?categoryid=291">Elektrotechnik und Informationstechnik</a></li><li> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep"></span> <a title="Praktikum Roboterregelung" href="https://www.moodle.tum.de/course/view.php?id=17255">Praktikum Robot 950177075 (W14/15)</a></li><li> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep"></span> <span tabindex="0">9. Dezember - 15. Dezember</span></li><li> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep"></span> <a title="Verzeichnis" href="https://www.moodle.tum.de/mod/folder/view.php?id=267863">Assignment 4</a></li></ul></nav></div>
                                        <div id="region-pre" class="block-region">
                        <div class="region-content">
                                <a href="#sb-1" class="skip-block">Navigation überspringen</a><div id="inst4" class="block_navigation  block" role="navigation" data-block="navigation" data-instanceid="4" aria-labelledby="instance-4-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-4-header">Navigation</h2></div></div><div class="content"><ul class="block_tree list"><li class="type_unknown depth_1 contains_branch" aria-expanded="true"><p class="tree_item branch canexpand navigation_node"><a href="https://www.moodle.tum.de/my/">Meine Startseite</a></p><ul><li class="type_setting depth_2 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/?redirect=0"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Kursübersicht</a></p></li>
<li class="type_user depth_2 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Mein Profil</span></p><ul><li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/user/profile.php?id=60018"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Profil anzeigen</a></p></li>
<li class="type_custom depth_3 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Forumsbeiträge</span></p><ul><li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/mod/forum/user.php?id=60018"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Beiträge</a></p></li>
<li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/mod/forum/user.php?id=60018&amp;mode=discussions"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Themen</a></p></li></ul></li>
<li class="type_unknown depth_3 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Blogs</span></p><ul><li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/blog/index.php?userid=60018"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Meine Beiträge</a></p></li>
<li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/blog/edit.php?action=add"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Neuer Beitrag</a></p></li>
<li class="type_setting depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/rss/file.php/1/0853705f616f7a35f6bd61498ccb9ae1/blog/user/60018/rss.xml"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/rss" />RSS Feed für diesen Blog</a></p></li></ul></li>
<li class="type_setting depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/message/index.php?user1=60018"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Mitteilungen</a></p></li>
<li class="type_setting depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/user/files.php"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Meine Dateien</a></p></li></ul></li>
<li class="type_system depth_2 contains_branch" aria-expanded="true"><p class="tree_item branch"><span tabindex="0">Dieser Kurs</span></p><ul><li class="type_course depth_3 contains_branch" aria-expanded="true"><p class="tree_item branch"><a title="Praktikum Roboterregelung" href="https://www.moodle.tum.de/course/view.php?id=17255">Praktikum Robot 950177075 (W14/15)</a></p><ul><li class="type_unknown depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><a href="https://www.moodle.tum.de/user/index.php?id=17255">Teilnehmer/innen</a></p><ul><li class="type_custom depth_5 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/blog/index.php?courseid=17255"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Kursblogs</a></p></li>
<li class="type_user depth_5 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><a href="https://www.moodle.tum.de/user/view.php?id=60018&amp;course=17255">Sujan Neeraj</a></p><ul><li class="type_custom depth_6 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/user/view.php?id=60018&amp;course=17255"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Profil anzeigen</a></p></li>
<li class="type_custom depth_6 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Forumsbeiträge</span></p><ul><li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/mod/forum/user.php?id=60018&amp;course=17255"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Beiträge</a></p></li>
<li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/mod/forum/user.php?id=60018&amp;course=17255&amp;mode=discussions"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Themen</a></p></li></ul></li>
<li class="type_unknown depth_6 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Blogs</span></p><ul><li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/blog/index.php?userid=60018"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Meine Beiträge</a></p></li>
<li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/blog/edit.php?action=add"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Neuer Beitrag</a></p></li>
<li class="type_setting depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/rss/file.php/1/0853705f616f7a35f6bd61498ccb9ae1/blog/user/60018/rss.xml"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/rss" />RSS Feed für diesen Blog</a></p></li></ul></li>
<li class="type_setting depth_6 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://www.moodle.tum.de/message/index.php?user1=60018&amp;viewing=course_17255"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Mitteilungen</a></p></li></ul></li></ul></li>
<li class="type_structure depth_4 contains_branch" aria-expanded="true"><p class="tree_item branch"><span tabindex="0">9. Dezember - 15. Dezember</span></p><ul><li class="type_activity depth_5 item_with_icon current_branch"><p class="tree_item leaf hasicon active_tree_node"><a title="Verzeichnis" href="https://www.moodle.tum.de/mod/folder/view.php?id=267863"><img alt="Verzeichnis" class="smallicon navicon" title="Verzeichnis" src="https://www.moodle.tum.de/theme/image.php/tum/folder/1432900619/icon" />Assignment 4</a></p></li></ul></li></ul></li></ul></li>
<li class="type_system depth_2 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_0_mycourses"><a href="https://www.moodle.tum.de/my/">Meine Kurse</a></p></li></ul></li></ul></div></div><span id="sb-1" class="skip-block-to"></span><a href="#sb-2" class="skip-block">Einstellungen überspringen</a><div id="inst5" class="block_settings  block" role="navigation" data-block="settings" data-instanceid="5" aria-labelledby="instance-5-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-5-header">Einstellungen</h2></div></div><div class="content"><div id="settingsnav" class="box block_tree_box"><ul class="block_tree list"><li class="type_course collapsed contains_branch" aria-expanded="false"><p class="tree_item branch root_node"><span tabindex="0">Kurs-Administration</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://www.moodle.tum.de/grade/report/index.php?id=17255"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/grades" />Bewertungen</a></p></li></ul></li>
<li class="type_unknown collapsed contains_branch" aria-expanded="false"><hr /><p class="tree_item branch root_node" id="usersettings"><span tabindex="0">Profileinstellungen</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://www.moodle.tum.de/user/edit.php?id=60018&amp;course=17255"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Profil bearbeiten</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://www.moodle.tum.de/user/managetoken.php?sesskey=BFqB8FOBRs"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Sicherheitsschlüssel</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://www.moodle.tum.de/message/edit.php?id=60018"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Mitteilungen</a></p></li>
<li class="type_unknown collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Blogs</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://www.moodle.tum.de/blog/preferences.php"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Einstellungen</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://www.moodle.tum.de/blog/external_blogs.php"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Externe Blogs</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://www.moodle.tum.de/blog/external_blog_edit.php"><img alt="" class="smallicon navicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/i/navigationitem" />Externen Blog registrieren</a></p></li></ul></li></ul></li></ul></div></div></div><span id="sb-2" class="skip-block-to"></span>
                        </div>
                    </div>
                    
                    <div id="region-main-wrap">
                        <div id="region-main">
                            <div id="sdbr-wrapper">
                              <button id="mob-btn-left"><i class="icon-sbr-left"></i></button>
                              <button id="mob-btn-right"><i class="icon-sbr-right"></i></button>
                            </div>
                                                        <div class="navbar clearfix">
                                                                </div>
                                                        <div class="region-content">
                                                                <div role="main"><span id="maincontent"></span><h2>Assignment 4</h2><div id="intro" class="box generalbox"><div class="no-overflow"><p>Material for Assignment 4<br></p></div></div><div class="box generalbox foldertree"><div id="folder_tree0" class="filemanager"><ul><li><div class="fp-filename-icon"><span class="fp-icon"><img alt="" class="smallicon" title="" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/f/folder-24" /></span><span class="fp-filename"></span></div><ul><li><span class="fp-filename-icon"><a href="https://www.moodle.tum.de/pluginfile.php/477187/mod_folder/content/0/cartControl.slx?forcedownload=1"><span class="fp-icon"><img alt="cartControl.slx" class="smallicon" title="cartControl.slx" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/f/archive-24" /></span><span class="fp-filename">cartControl.slx</span></a></span></li><li><span class="fp-filename-icon"><a href="https://www.moodle.tum.de/pluginfile.php/477187/mod_folder/content/0/ctc.slx?forcedownload=1"><span class="fp-icon"><img alt="ctc.slx" class="smallicon" title="ctc.slx" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/f/archive-24" /></span><span class="fp-filename">ctc.slx</span></a></span></li><li><span class="fp-filename-icon"><a href="https://www.moodle.tum.de/pluginfile.php/477187/mod_folder/content/0/ssc_p.slx?forcedownload=1"><span class="fp-icon"><img alt="ssc_p.slx" class="smallicon" title="ssc_p.slx" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/f/archive-24" /></span><span class="fp-filename">ssc_p.slx</span></a></span></li><li><span class="fp-filename-icon"><a href="https://www.moodle.tum.de/pluginfile.php/477187/mod_folder/content/0/ssc_pd.slx?forcedownload=1"><span class="fp-icon"><img alt="ssc_pd.slx" class="smallicon" title="ssc_pd.slx" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/f/archive-24" /></span><span class="fp-filename">ssc_pd.slx</span></a></span></li><li><span class="fp-filename-icon"><a href="https://www.moodle.tum.de/pluginfile.php/477187/mod_folder/content/0/Ue4.pdf?forcedownload=1"><span class="fp-icon"><img alt="Ue4.pdf" class="smallicon" title="Ue4.pdf" src="https://www.moodle.tum.de/theme/image.php/tum/core/1432900619/f/pdf-24" /></span><span class="fp-filename">Ue4.pdf</span></a></span></li></ul></li></ul></div></div></div>                                <!---->
                            </div>
                        </div>
                    </div>

                            </div>
    </div>

<!-- START OF FOOTER -->
        <div class="clearfix"></div>
</div>
<script>
$('.section-navigation.navigationtitle .sectionname').before('<div style="clear:both"></div>');
</script>

<footer>
    <div class="container">
        <ul class="middle">
                	        	            <li><a href="/mod/folder/view.php?id=267863&lang=de">deutsch</a></li>
            <li><a href="/mod/folder/view.php?id=267863&lang=en">english</a></li>
        	                </ul>
        <ul class="right">
            <li><a href="https://www.moodle.tum.de/mod/page/view.php?id=153874">Datenschutz</a></li>
            <li><a href="https://www.moodle.tum.de/mod/page/view.php?id=462">Impressum</a></li>
        </ul>
        <p>powered by <a href="http://www.mz.itsz.tum.de/">medienzentrum</a> + <a href="http://moodle.org">moodle</a> (2014 – 2015)</p>
        <div id="page-footer" class="clearfix">
                </div>
    </div>
</footer>
<div id="sdbr-overlay"></div>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.piwik.tum.de/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 17]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.piwik.tum.de/piwik.php?idsite=17" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code --><script type="text/javascript">
//<![CDATA[
M.yui.add_module({"mod_folder":{"name":"mod_folder","fullpath":"https:\/\/www.moodle.tum.de\/lib\/javascript.php\/1432900619\/mod\/folder\/module.js","requires":[]}});

//]]>
</script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Zuletzt ge\u00e4ndert","name":"Name","error":"Fehler","info":"Informationen","ok":"OK","viewallcourses":"Alle Kurse zeigen","morehelp":"Weitere Hilfe","loadinghelp":"Wird geladen...","cancel":"Abbrechen","yes":"Ja","confirm":"Best\u00e4tigen","no":"Nein","areyousure":"Sind Sie sicher?","closebuttontitle":"Schlie\u00dfen","unknownerror":"Unbekannter Fehler"},"repository":{"type":"Typ","size":"Gr\u00f6\u00dfe","invalidjson":"Ung\u00fcltiger JSON-Text","nofilesattached":"Keine Datei","filepicker":"Dateiauswahl","logout":"Abmelden","nofilesavailable":"Keine Dateien vorhanden","norepositoriesavailable":"Keine Ihrer aktuellen Repositories kann Dateien im n\u00f6tigen Format liefern","fileexistsdialogheader":"Datei bereits vorhanden","fileexistsdialog_editor":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt, den Sie gerade bearbeiten","fileexistsdialog_filemanager":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt","renameto":"Nach '{$a}' umbenennen","referencesexist":"{$a} Aliase\/Verkn\u00fcpfungen zu dieser Datei","select":"W\u00e4hlen Sie"},"block":{"addtodock":"Block ins Dock bewegen","undockitem":"Diesen Block abdocken","dockblock":"Block {$a} ins Dock","undockblock":"'{$a}' abdocken","undockall":"Alles abdocken","hidedockpanel":"Dock verbergen","hidepanel":"Steuerung verbergen"},"langconfig":{"thisdirectionvertical":"btt"},"admin":{"confirmation":"Best\u00e4tigung"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
var navtreeexpansions4 = [{"id":"expandable_branch_0_mycourses","key":"mycourses","type":0}];
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
YUI().use('node', function(Y) {
M.util.load_flowplayer();
setTimeout("fix_column_widths()", 20);
Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\n    config: [\"MMLorHTML.js\", \"Safe.js\"],\n    jax: [\"input\/TeX\",\"input\/MathML\",\"output\/HTML-CSS\",\"output\/NativeMML\"],\n    extensions: [\"tex2jax.js\",\"mml2jax.js\",\"MathMenu.js\",\"MathZoom.js\"],\n    TeX: {\n        extensions: [\"AMSmath.js\",\"AMSsymbols.js\",\"noErrors.js\",\"noUndefined.js\",\"mhchem.js\",\"color.js\"]\n    },\n    tex2jax: {\n       inlineMath: [['$','$'], ['\\\\(','\\\\)']],\n       processEscapes: true\n    },\n    menuSettings: {\n        zoom: \"Double-Click\",\n        mpContext: true,\n        mpMouse: true\n    },\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"de"});
});
Y.use("moodle-core-dock-loader",function() {M.core.dock.loader.initLoader();
});
Y.use("moodle-block_navigation-navigation",function() {M.block_navigation.init_add_tree({"id":"4","instance":"4","candock":true,"courselimit":"400","expansionlimit":"20"});
});
Y.use("moodle-block_navigation-navigation",function() {M.block_navigation.init_add_tree({"id":"5","instance":"5","candock":true});
});
M.util.help_popups.setup(Y);
Y.use("moodle-core-popuphelp",function() {M.core.init_popuphelp();
});
M.util.init_block_hider(Y, {"id":"inst4","title":"Navigation","preference":"block4hidden","tooltipVisible":"Block Navigation verbergen","tooltipHidden":"Block Navigation anzeigen"});
M.util.init_block_hider(Y, {"id":"inst5","title":"Einstellungen","preference":"block5hidden","tooltipVisible":"Block Einstellungen verbergen","tooltipHidden":"Block Einstellungen anzeigen"});
 M.util.js_pending('random556b1836318384'); Y.use('mod_folder', function(Y) { M.mod_folder.init_tree(Y, "folder_tree0", false);  M.util.js_complete('random556b1836318384'); });
 M.util.js_pending('random556b1836318385'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random556b1836318385'); });

});
//]]>
</script>
</body>
</html>