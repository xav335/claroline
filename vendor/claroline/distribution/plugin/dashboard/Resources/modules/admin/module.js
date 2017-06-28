
import angular from 'angular/index'

import 'angular-bootstrap'
import 'angular-strap'
import 'angular-ui-translation/angular-translation'
import '#/main/core/modal/module'
import '#/main/core/fos-js-router/module'

import './../dashboards/module'
import './../dashboard/module'

import StepOne from './Directives/StepOneDirective'
import StepOneCtrl from './Controllers/StepOneCtrl'
import AdminDashboardCtrl from './Controllers/AdminDashboardCtrl'

angular
  .module('Admin', [
    'ngRoute',
    'ui.translation',
    'ui.bootstrap',
    'ui.modal',
    'mgcrea.ngStrap.datepicker',
    'Dashboards',
    'Dashboard'
  ])
  .controller('AdminDashboardCtrl', [
    '$location',
    'Translator',
    'DashboardService',
    'workspaces',
    'user',
    'nbDashboards',
    'dashboard',
    AdminDashboardCtrl
  ])
  .controller('StepOneCtrl',[
    'Translator',
    'DashboardService',
    StepOneCtrl
  ])
  .directive('stepOne', [
    StepOne
  ])
