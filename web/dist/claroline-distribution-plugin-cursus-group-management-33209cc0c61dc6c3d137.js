webpackJsonp([18],[function(module,exports,__webpack_require__){"use strict";var _jquery=__webpack_require__(123);var _jquery2=_interopRequireDefault(_jquery);function _interopRequireDefault(obj){return obj&&obj.__esModule?obj:{default:obj}}(0,_jquery2.default)(".delete-session-group-btn").on("click",function(){var sessionGroupId=(0,_jquery2.default)(this).data("session-group-id");window.Claroline.Modal.confirmRequest(Routing.generate("claro_cursus_course_session_unregister_group",{sessionGroup:sessionGroupId}),removeSessionRow,sessionGroupId,Translator.trans("unregister_group_from_session_message",{},"cursus"),Translator.trans("unregister_group_from_session",{},"cursus"))});var removeSessionRow=function removeSessionRow(event,sessionGroupId){(0,_jquery2.default)("#session-row-"+sessionGroupId).remove()}}]);