Array.prototype.remove=function(value){var index=this.indexOf(value);if(index!=-1){return this.splice(index,1);}
return false;}
Array.prototype.inArray=function(value){var index=this.indexOf(value);if(index!=-1){return true;}
return false;}
Array.prototype.diff=function(part){return this.filter(function(element){return part.indexOf(element)<0;});};
'use strict'
var portfolioApp=angular.module('portfolioApp',['ngResource','ngSanitize','ui.tinymce','mgcrea.ngStrap.popover','app.translation','app.interpolator','app.directives','gridster','ui.bootstrap','checklist-model'])
portfolioApp.config(['$httpProvider',function($http){var elementToRemove=['views','isUpdating','isDeleting','isEditing','isCollapsed','id','unreadComments','toSave','isNew','widget']
$http.defaults.transformRequest.push(function(data){data=angular.fromJson(data)
angular.forEach(data,function(element,index){if(elementToRemove.inArray(index)){delete data[index]}})
return JSON.stringify(data)})}])
portfolioApp.value('assetPath',window.assetPath)
angular.element(document).ready(function(){angular.bootstrap(document,['portfolioApp'],{strictDi:true})})
'use strict'
portfolioApp.controller('portfolioController',['$scope','portfolioManager','widgetsManager','commentsManager','$attrs','widgetsConfig','assetPath','$uibModal','$timeout',function($scope,portfolioManager,widgetsManager,commentsManager,$attrs,widgetsConfig,assetPath,$modal,$timeout){$scope.portfolio=portfolioManager.getPortfolio($attrs['portfolioContainer'])
$scope.portfolio.$promise.then(function(){$scope.portfolioWidgets=widgetsManager.portfolioWidgets
$scope.comments=commentsManager.comments})
$scope.widgetTypes=widgetsConfig.getTypes(true)
$scope.assetPath=assetPath
$scope.isAdding=false
$scope.isFetching=false
$scope.setAddingMode=function(addingMode){$scope.isAdding=addingMode}
$scope.setFetchingMode=function(fetchingMode){$scope.isFetching=fetchingMode}
$scope.createWidget=function(type){$scope.setAddingMode(false)
$scope.setFetchingMode(true)
var modalInstance=$modal.open({backdrop:false,animation:true,templateUrl:'widget_picker_modal.html',controller:'widgetPickerController',size:'lg',resolve:{portfolioWidgets:function(){return widgetsManager.getAvailableWidgetsByTpe($scope.portfolio.id,type)},selectedPortfolioWidget:function(){return null}}})
modalInstance.opened.then(function(){$scope.setFetchingMode(false)})
modalInstance.result.then(function(selectedWidgets){widgetsManager.addWidgets(selectedWidgets)})
modalInstance.result.finally(function(){$timeout(function(){$('.modal:last').trigger('$animate:close')
$timeout(function(){$('.modal-backdrop:last').trigger('$animate:close')},100)},100)})}
$scope.edit=function(){portfolioManager.rename($scope.portfolio)}
$scope.save=function(){return portfolioManager.save($scope.portfolio)}
$scope.cancelRename=function(){portfolioManager.cancelRename($scope.portfolio)}
$scope.getId=function(portfolioWidget){return portfolioWidget.id?portfolioWidget.id:window._.uniqueId('wdg_')}
$scope.gridsterOptions={columns:16,swapping:true,floating:true,margins:[10,10],minColumns:1,minRows:1,maxRows:100,resizable:{enabled:true,handles:['n','e','s','w','ne','se','sw','nw'],start:function(event,$element,widget){},stop:function(event,$element,widget){for(var index=0;index<$scope.portfolioWidgets.length;index++){var widget=$scope.portfolioWidgets[index]
if(widget.toSave&&!widget.isEditing){widgetsManager.save(widget).then(function(){widget.toSave=false})}}}},draggable:{enabled:true,handle:'.panel-heading .draggable-handle',start:function(event,$element,widget){},stop:function(event,$element,widget){for(var index=0;index<$scope.portfolioWidgets.length;index++){var widget=$scope.portfolioWidgets[index]
if(widget.toSave){widgetsManager.save(widget).then(function(){widget.toSave=false})}}}}}}])
'use strict'
portfolioApp.controller('widgetController',['$scope','widgetsManager','$uibModal','$timeout',function($scope,widgetsManager,$modal,$timeout){$scope.edit=function(){widgetsManager.edit($scope.portfolioWidget)
$scope.editWidget()}
$scope.editWidget=function(){var modalInstance=$modal.open({backdrop:false,animation:true,templateUrl:'widget_picker_modal.html',controller:'widgetPickerController',size:'lg',resolve:{portfolioWidgets:function(){return widgetsManager.getAvailableWidgetsByTpe($scope.portfolioWidget.portfolio_id,$scope.portfolioWidget.widget_type)},selectedPortfolioWidget:function(){return $scope.portfolioWidget}}})
modalInstance.result.then(function(selectedWidget){$scope.portfolioWidget.widget_id=selectedWidget[0].widget_id
widgetsManager.save($scope.portfolioWidget)},function(){widgetsManager.cancelEditing($scope.portfolioWidget)})
modalInstance.result.finally(function(){$timeout(function(){$('.modal:last').trigger('$animate:close')
$timeout(function(){$('.modal-backdrop:last').trigger('$animate:close')},100)},100)})}
$scope.cancelEdition=function(){widgetsManager.cancelEditing($scope.portfolioWidget,true)}
$scope.save=function(){return widgetsManager.save($scope.portfolioWidget)}
$scope.delete=function(){widgetsManager.delete($scope.portfolioWidget)}
$scope.$watchGroup(['portfolioWidget.row','portfolioWidget.col','portfolioWidget.sizeX','portfolioWidget.sizeY'],function(newValue,oldValue){if(null==newValue[0]){$scope.portfolioWidget.row=oldValue[0]}
if(null==newValue[1]){$scope.portfolioWidget.col=oldValue[1]}
if(newValue!==oldValue){$scope.portfolioWidget.toSave=true}})}])
'use strict';portfolioApp.controller("commentController",["$scope","portfolioManager","commentsManager","$timeout",function($scope,portfolioManager,commentsManager,$timeout){$scope.message="";var tinymce=window.tinymce;tinymce.claroline.init=tinymce.claroline.init||{};tinymce.claroline.plugins=tinymce.claroline.plugins||{};var plugins=['autoresize advlist autolink lists link image charmap print preview hr anchor pagebreak','searchreplace wordcount visualblocks visualchars fullscreen','insertdatetime media nonbreaking table directionality','template paste textcolor emoticons code'];var toolbar='undo redo | styleselect | bold italic underline | forecolor | alignleft aligncenter alignright | preview fullscreen';$.each(tinymce.claroline.plugins,function(key,value){if('autosave'!=key&&value===true){plugins.push(key);toolbar+=' '+key;}});$scope.tinyMceConfig={};for(var prop in tinymce.claroline.configuration){if(tinymce.claroline.configuration.hasOwnProperty(prop)){$scope.tinyMceConfig[prop]=tinymce.claroline.configuration[prop];}}
$scope.tinyMceConfig.plugins=plugins;$scope.tinyMceConfig.toolbar1=toolbar;$scope.tinyMceConfig.format='text';$scope.create=function(){if(this.message){var comment=commentsManager.create(portfolioManager.portfolioId,{'message':this.message})
this.message='';}};$scope.updateCountViewComments=function(){$scope.displayComment=!$scope.displayComment;if($scope.displayComment){if(0<portfolioManager.portfolio.unreadComments){portfolioManager.updateViewCommentsDate();}}}}]);
portfolioApp.controller('widgetPickerController',['$scope','$uibModalInstance','portfolioWidgets','selectedPortfolioWidget',function($scope,$modalInstance,portfolioWidgets,selectedPortfolioWidget){$scope.portfolioWidgets=portfolioWidgets
$scope.portfolioWidgets.map(function(portfolioWidget){portfolioWidget.isCollapsed=true})
$scope.isEdit=selectedPortfolioWidget!==null
$scope.selectedPortfolioWidgets=[(selectedPortfolioWidget&&window._.find($scope.portfolioWidgets,{widget_id:selectedPortfolioWidget.widget_id}))||$scope.portfolioWidgets[0]]
$scope.selectedPortfolioWidget=selectedPortfolioWidget&&window._.find($scope.portfolioWidgets,{widget_id:selectedPortfolioWidget.widget_id})
$scope.ok=function(){$modalInstance.close($scope.selectedPortfolioWidgets)}
$scope.cancel=function(){$modalInstance.dismiss('cancel')}
$scope.isSelected=function(widget){return Array.isArray($scope.selectedPortfolioWidgets)&&$scope.selectedPortfolioWidgets.indexOf(widget)!==-1}
$scope.radioChanged=function(widget){$scope.selectedPortfolioWidget=widget
$scope.selectedPortfolioWidgets=[widget]}}])
'use strict';portfolioApp.factory("portfolioFactory",["$resource",function($resource){var url=Routing.generate("icap_portfolio_internal_portfolio")+"/:portfolioId";var portfolio=$resource(url,{portfolioId:"@id"},{get:{method:"GET"},update:{method:"PUT"}});portfolio.prototype.isEditing=false;return portfolio;}]);
'use strict';portfolioApp.factory('portfolioManager',["portfolioFactory","widgetsManager","commentsManager",function(portfolioFactory,widgetsManager,commentsManager){return{portfolio:null,portfolioId:null,originalTitle:null,getPortfolio:function(portfolioId){this.portfolioId=portfolioId;this.portfolio=portfolioFactory.get({portfolioId:this.portfolioId},function(portfolio){widgetsManager.init(portfolio.portfolioWidgets);commentsManager.init(portfolioId,portfolio.comments);});return this.portfolio;},save:function(portfolio){var self=this;var success=function(){self.originalTitle=portfolio.title;portfolio.isEditing=false;};var failed=function(error){console.error('Error occured while saving widget');console.log(error);}
return portfolio.$update(success,failed);},rename:function(portfolio){portfolio.isEditing=true;this.originalTitle=portfolio.title;},cancelRename:function(portfolio){portfolio.isEditing=false;portfolio.title=this.originalTitle;},updateViewCommentsDate:function(){this.portfolio.commentsViewAt=new Date();this.save(this.portfolio);}};}]);
'use strict';portfolioApp.factory("widgetsManager",["$http","widgetsConfig","widgetFactory","$q","urlInterpolator",function($http,widgetsConfig,widgetFactory,$q,urlInterpolator){return{portfolioWidgets:[],init:function(portfolioWidgets){angular.forEach(portfolioWidgets,function(rawWidget){var widget=widgetFactory.getWidget(rawWidget.portfolio_id,rawWidget.widget_type,rawWidget.widget_id);var newPortfolioWidget=new widget(rawWidget);newPortfolioWidget.isNew=false;this.portfolioWidgets.push(newPortfolioWidget);},this);},addWidgets:function(portfolioWidgets){for(var i=0;i<portfolioWidgets.length;i++){this.addWidget(portfolioWidgets[i]);}},addWidget:function(portfolioWidget){var widget=widgetFactory.getWidget(portfolioWidget.portfolio_id,portfolioWidget.widget_type,portfolioWidget.widget_id);var newPortfolioWidget=new widget(portfolioWidget);newPortfolioWidget.isNew=true;this.portfolioWidgets.push(newPortfolioWidget);this.save(newPortfolioWidget);},delete:function(portfolioWidget){portfolioWidget.isDeleting=true;var self=this;var success=function(){self.portfolioWidgets.remove(portfolioWidget);};var failed=function(error){console.error('Error occured while deleting portfolio widget');console.log(error);}
portfolioWidget.$delete(success,failed).then(function(){portfolioWidget.isDeleting=false;});},getAvailableWidgetsByTpe:function(portfolioId,type){var url=urlInterpolator.interpolate('/{{portfolioId}}/{{type}}',{portfolioId:portfolioId,type:type});var deferred=$q.defer();$http.get(url).success(function(data){deferred.resolve(data);}).error(function(msg,code){deferred.reject(msg);});return deferred.promise;},save:function(widget){if(null==widget.row){widget.row=0;}
if(null==widget.col){widget.col=0;}
widget.isUpdating=true;var $this=this;var success=function(){widget.isNew=false;$this.cancelEditing(widget);widget.isUpdating=false;};var failed=function(error){console.error('Error occured while saving widget');console.log(error);}
if(widget.isNew){delete widget.id;}
return widget.isNew?widget.$save(success,failed):widget.$update(success,failed);},cancelEditing:function(widget){widget.isEditing=false;if(widget.isNew){this.portfolioWidgets.remove(widget);}},edit:function(widget){widget.isEditing=true;}};}]);
'use strict';portfolioApp.factory("widgetsConfig",[function(){return{config:JSON.parse(window.widgetsConfig),getTypes:function(excludeTitle){var types=angular.copy(this.config);if(excludeTitle){delete types.title;}
return types;}};}]);
'use strict';portfolioApp.factory("widgetFactory",["$resource","urlInterpolator",function($resource,urlInterpolator){return{baseUrl:Routing.generate("icap_portfolio_internal_portfolio"),portfolioId:null,widgetResources:[],getWidget:function(portfolioId,type){if(this.widgetResources[type]){return this.widgetResources[type];}
this.portfolioId=portfolioId;var baseUrl=this.baseUrl+"/:portfolioId/:type/:id";var widget=$resource(baseUrl,{type:type,portfolioId:portfolioId,id:"@id"},{get:{method:"GET"},create:{method:"GET"},save:{method:"POST"},update:{method:"PUT"},remove:{method:"DELETE"}});widget.prototype.isUpdating=false;widget.prototype.isDeleting=false;widget.prototype.isEditing=false;widget.prototype.toSave=false;this.widgetResources[type]=widget;return this.widgetResources[type];}}}]);
'use strict';portfolioApp.factory("commentsManager",["commentFactory",function(commentFactory){return{comments:[],init:function(portfolioId,comments){angular.forEach(comments,function(rawComment){var comment=commentFactory.getComment(portfolioId);this.comments.push(new comment(rawComment));},this);},create:function(portfolioId,rawComment){var emptyComment=commentFactory.getComment(portfolioId);var comment=new emptyComment(rawComment);this.comments.push(comment);this.save(comment);},save:function(comment){var success=function(){};var failed=function(error){console.error('Error occured while saving comment');console.log(error);}
return comment.$save(success,failed);}};}]);
'use strict';portfolioApp.factory("commentFactory",["$resource",function($resource){return{baseUrl:Routing.generate("icap_portfolio_internal_portfolio"),getComment:function(portfolioId){var comment=$resource(this.baseUrl+"/:portfolioId/comment/:id",{portfolioId:portfolioId,id:"@id"},{get:{method:"GET"},create:{method:"GET"},save:{method:"POST"},remove:{method:"DELETE"}});comment.prototype.message='';return comment;}}}]);
'use strict';portfolioApp.directive("widget",function(){return{scope:true,controller:"widgetController"};});
'use strict';portfolioApp.directive("portfolioContainer",function(){return{controller:"portfolioController"};});
(function(){'use strict';var appDirectives=angular.module('app.config',[]);var tinymce=window.tinymce;tinymce.claroline.init=tinymce.claroline.init||{};tinymce.claroline.plugins=tinymce.claroline.plugins||{};var plugins=['autoresize advlist autolink lists link image charmap print preview hr anchor pagebreak','searchreplace wordcount visualblocks visualchars fullscreen','insertdatetime media nonbreaking save table directionality','template paste textcolor emoticons code -mention -accordion -codemirror'];var toolbar1='bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | fullscreen displayAllButtons';$.each(tinymce.claroline.plugins,function(key,value){if('autosave'!=key&&value===true){plugins.push(key);toolbar1+=' '+key;}});var tinyMceConfig={};for(var prop in tinymce.claroline.configuration){if(tinymce.claroline.configuration.hasOwnProperty(prop)){tinyMceConfig[prop]=tinymce.claroline.configuration[prop];}}
tinyMceConfig.plugins=plugins;tinyMceConfig.toolbar1=toolbar1;appDirectives.value('tinyMceConfig',tinyMceConfig);})();
'use strict';var appDirectives=angular.module('app.directives',[]);appDirectives.directive('scrollContainer',["commentsManager","$timeout",function(commentsManager,$timeout){return{restrict:"A",link:function($scope,element,attrs){$scope.comments=commentsManager.comments;$scope.$watch('comments.length',function(newValue,oldValue){if(newValue>=oldValue){$timeout(function(){element[0].scrollTop=element[0].scrollHeight;},0);}});}};}]);
'use strict';appDirectives.directive('loadingForm',["$parse",function($parse){function link(scope,element,attributes){var longOperation=$parse(attributes['loadingForm']);var button=element.find("button[type=submit]");var buttonHtml=button.html();element.on('submit',function(event){scope.$apply(function(){button.attr("disabled",true);button.prepend('<span class="loading"></span> ');longOperation(scope,{$event:event}).then(function(data){button.attr("disabled",false);button.html(buttonHtml);},function(res){button.attr("disabled",false);button.html(buttonHtml);});});});}
var directive={link:link,restrict:'A'};return directive;}]);
'use strict';appDirectives.directive('confirmClick',["$parse","translationService",function($parse,translationService){var link=function(scope,element,attributes){var clickAction=attributes.confirmClick;element.confirmModal({'confirmTitle':translationService.trans('widget_delete_confirm_title'),'confirmMessage':translationService.trans('widget_delete_confirm_message'),'confirmOk':translationService.trans('widget_delete_confirm_ok'),'confirmCancel':translationService.trans('widget_delete_confirm_cancel'),'confirmCallback':function(){scope.$eval(clickAction)}});}
var directive={link:link,restrict:'A'};return directive;}]);
'use strict';appDirectives.directive("bindHtml",["$compile",function($compile){return function(scope,element,attrs){scope.$watch(attrs.bindHtml,function(html){if(html){element.html(html);$compile(element.contents())(scope);}});};}])
'use strict';portfolioApp.directive("commentsContainer",function(){return{controller:"commentController"};});
'use strict';var appTranslation=angular.module('app.translation',[]);appTranslation.factory('translationService',function(){return{trans:function(key,translationDomain){return Translator.trans(key,{},translationDomain||'icap_portfolio');}};}).filter('trans',["translationService",function(translationService){return function(key){return translationService.trans(key);};}]);
'use strict';var appInterpolator=angular.module('app.interpolator',[]);appInterpolator.service("urlInterpolator",["$interpolate",function($interpolate){return{interpolate:function(text,parameters){var interpolatedUrl=$interpolate(Routing.generate("icap_portfolio_internal_portfolio")+text);return interpolatedUrl(parameters);}};}]);