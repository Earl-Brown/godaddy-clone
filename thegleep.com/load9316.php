function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1380910291",[],"site"],["noscript","1380910291",[],"noscript"],["startup","1540918220",[],"startup"],["filepage","1380910291"],["user.groups","1380910291",[],"user"],["user","1380910291",[],"user"],["user.cssprefs","1380910291",["mediawiki.user"],"private"],["user.options","1380910291",[],"private"],["user.tokens","1380910291",[],"private"],["mediawiki.language.data","1380910291",["mediawiki.language.init"]],["skins.chick","1380910291"],["skins.cologneblue","1380910291"],["skins.modern","1380910291"],["skins.monobook","1380910291"],["skins.nostalgia","1380910291"],["skins.simple","1380910291"],["skins.standard","1380910291"],["skins.vector","1380910291"],["skins.vector.js",
"1380910291"],["jquery","1380910291"],["jquery.appear","1380910291"],["jquery.arrowSteps","1380910291"],["jquery.async","1380910291"],["jquery.autoEllipsis","1380910291",["jquery.highlightText"]],["jquery.badge","1380910291",["mediawiki.language"]],["jquery.byteLength","1380910291"],["jquery.byteLimit","1380910291",["jquery.byteLength"]],["jquery.checkboxShiftClick","1380910291"],["jquery.client","1380910291"],["jquery.color","1380910291",["jquery.colorUtil"]],["jquery.colorUtil","1380910291"],["jquery.cookie","1380910291"],["jquery.delayedBind","1380910291"],["jquery.expandableField","1380910291",["jquery.delayedBind"]],["jquery.farbtastic","1380910291",["jquery.colorUtil"]],["jquery.footHovzer","1380910291"],["jquery.form","1380910291"],["jquery.getAttrs","1380910291"],["jquery.hidpi","1380910291"],["jquery.highlightText","1380910291",["jquery.mwExtension"]],["jquery.hoverIntent","1380910291"],["jquery.json","1380910291"],["jquery.localize","1380910291"],["jquery.makeCollapsible",
"1380916188"],["jquery.mockjax","1380910291"],["jquery.mw-jump","1380910291"],["jquery.mwExtension","1380910291"],["jquery.placeholder","1380910291"],["jquery.qunit","1380910291"],["jquery.qunit.completenessTest","1380910291",["jquery.qunit"]],["jquery.spinner","1380910291"],["jquery.jStorage","1380910291",["jquery.json"]],["jquery.suggestions","1380910291",["jquery.autoEllipsis"]],["jquery.tabIndex","1380910291"],["jquery.tablesorter","1540918220",["jquery.mwExtension"]],["jquery.textSelection","1380910291",["jquery.client"]],["jquery.validate","1380910291"],["jquery.xmldom","1380910291"],["jquery.tipsy","1380910291"],["jquery.ui.core","1380910291",["jquery"],"jquery.ui"],["jquery.ui.widget","1380910291",[],"jquery.ui"],["jquery.ui.mouse","1380910291",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1380910291",[],"jquery.ui"],["jquery.ui.draggable","1380910291",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1380910291",[
"jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1380910291",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1380910291",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1380910291",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1380910291",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1380910291",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1380910291",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1380910291",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1380910291",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1380910291",["jquery.ui.core",
"jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1380910291",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1380910291",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1380910291",["jquery"],"jquery.ui"],["jquery.effects.blind","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1380910291",[
"jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1380910291",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1380910291",["jquery.effects.core"],"jquery.ui"],["mediawiki","1380910291"],["mediawiki.api","1380910291",["mediawiki.util"]],["mediawiki.api.category","1380910291",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1380910291",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1380910291",["mediawiki.api"]],["mediawiki.api.watch","1380910291",["mediawiki.api","user.tokens"]],["mediawiki.debug","1380910291",["jquery.footHovzer"]],["mediawiki.debug.init","1380910291",["mediawiki.debug"]],["mediawiki.feedback","1380910291",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1380910291",["jquery.hidpi"]],["mediawiki.htmlform","1380910291"],["mediawiki.notification","1380910291",["mediawiki.page.startup"]],[
"mediawiki.notify","1380910291"],["mediawiki.searchSuggest","1380916188",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1380910291",["mediawiki.util"]],["mediawiki.Uri","1380910291"],["mediawiki.user","1380910291",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1380916188",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1380910291",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1380910291",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1380910291",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1380910291",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1380910291",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1380910291"],["mediawiki.action.view.postEdit","1380910291",["jquery.cookie"]],[
"mediawiki.action.view.rightClickEdit","1380910291"],["mediawiki.action.watch.ajax","1380910291",["mediawiki.page.watch.ajax"]],["mediawiki.language","1380910291",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1380910291",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1380910291"],["mediawiki.language.init","1380910291"],["mediawiki.jqueryMsg","1380910291",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1380910291"],["mediawiki.page.ready","1380910291",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1380910291",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1380910291",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1380926563",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util",
"mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1380910291"],["mediawiki.special.block","1380910291",["mediawiki.util"]],["mediawiki.special.changeemail","1540918163",["mediawiki.util"]],["mediawiki.special.changeslist","1380910291",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1380910291",["jquery.byteLimit"]],["mediawiki.special.preferences","1380910291"],["mediawiki.special.recentchanges","1380910291",["mediawiki.special"]],["mediawiki.special.search","1383327449"],["mediawiki.special.undelete","1380910291"],["mediawiki.special.upload","1380910291",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin.signup","1380910291"],["mediawiki.special.javaScriptTest","1380910291",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1380910291",["jquery.getAttrs","jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1380910291",["mediawiki.util","mediawiki.legacy.wikibits"
]],["mediawiki.legacy.commonPrint","1380910291"],["mediawiki.legacy.config","1380910291",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1380910291",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1380910291",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1380910291"],["mediawiki.legacy.oldshared","1380910291"],["mediawiki.legacy.upload","1380910291",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1380910291",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1380910291"],["ext.cite","1380910291",["jquery.tooltip"]],["jquery.tooltip","1380910291"],["ext.rtlcite","1380910291"],["ext.interwiki.specialpage","1380910291",["jquery.makeCollapsible"]],["ext.nuke","1380910291"],["ext.geshi.local","1380910291"],["mediawiki.api.titleblacklist","1380910291",["mediawiki.api"]],["jquery.collapsibleTabs","1380910291",["jquery.delayedBind"],"ext.vector"],["ext.vector.collapsibleNav","1380910291",["mediawiki.util"
,"jquery.client","jquery.cookie","jquery.tabIndex"],"ext.vector"],["ext.vector.collapsibleTabs","1380910291",["jquery.collapsibleTabs","jquery.delayedBind"],"ext.vector"],["ext.vector.expandableSearch","1380910291",["jquery.client","jquery.expandableField","jquery.delayedBind"],"ext.vector"],["ext.vector.footerCleanup","1380910291",["mediawiki.jqueryMsg","jquery.cookie"],"ext.vector"],["ext.vector.sectionEditLinks","1380910291",["jquery.cookie"],"ext.vector"],["contentCollector","1380910291",[],"ext.wikiEditor"],["jquery.wikiEditor","1532360799",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1380910291",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1380910291",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1380910291",[
"jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1380910291",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1380910291",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1380910291",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1380910291",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1380910291",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1380910291",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1380910291",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis",
"jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1380910291",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1380910291",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1380910291",[],"ext.wikiEditor"],["ext.wikiEditor","1380910291",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1380910291",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1380910291",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1380910291",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1380910291",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1380910291",
["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1380910291",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1380910291",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1380910291",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1380910291",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1380910291",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1380910291",[],"ext.wikiEditor"],["ext.codeEditor","1380910291",["ext.wikiEditor.toolbar","jquery.codeEditor"],"ext.wikiEditor"],["jquery.codeEditor","1532360799",["jquery.wikiEditor","ext.codeEditor.ace","jquery.ui.resizable"],"ext.wikiEditor"],["ext.codeEditor.ace",
"1380910291",[],"ext.codeEditor.ace"],["ext.codeEditor.ace.modes","1380910291",["ext.codeEditor.ace"],"ext.codeEditor.ace"],["ext.codeEditor.geshi","1380910291",[],"ext.wikiEditor"],["ext.Drafts","1380910291",["mediawiki.legacy.wikibits"]],["skins.monobook.dark","1380910291"],["skins.monobook.pink","1380910291"],["ext.collection.jquery.jstorage","1380910291",["jquery.json"]],["ext.collection.suggest","1380910291",["ext.collection.bookcreator"]],["ext.collection","1380910291",["ext.collection.bookcreator","jquery.ui.sortable"]],["ext.collection.bookcreator","1380910291",["ext.collection.jquery.jstorage"]],["ext.collection.checkLoadFromLocalStorage","1380910291",["ext.collection.jquery.jstorage"]],["ext.TemplateSandbox","1380910291"]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"monobook","stylepath":"/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/index.php?title=$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://thegleep.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.21.1","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"TheGleep","5":"TheGleep talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"thegleep":4,"thegleep_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,
"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"theGleep.com","wgFileExtensions":["png","gif","jpg","jpeg"],"wgDBname":"the1321612011336","wgFileCanRotate":true,"wgAvailableSkins":{"standard":"Standard","myskin":"MySkin","cologneblue":"CologneBlue","vector":"Vector","nostalgia":"Nostalgia","modern":"Modern","monobook":"MonoBook","chick":"Chick","simple":"Simple","json":"Json"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"the1321612011336_mw_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgCollapsibleNavBucketTest":false,"wgCollapsibleNavForceNewVersion":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"},"wgCollectionVersion":"1.6.1"});};if(isCompatible()){document.write(
"\x3cscript src=\"/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=monobook\x26amp;version=20130528T131929Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: the1321612011336-mw_:resourceloader:filter:minify-js:7:21efd3689fba0b2cc02cfacaa8ac36b9 */