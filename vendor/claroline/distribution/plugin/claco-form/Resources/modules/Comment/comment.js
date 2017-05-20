/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

import angular from 'angular/index'

import 'angular-bootstrap'
import 'angular-ui-translation/angular-translation'

import '#/main/core/services/module'
import CommentService from './Service/CommentService'

angular.module('CommentModule', [
  'ui.translation',
  'ui.bootstrap',
  'ui.bootstrap.tpls',
  'ClarolineAPI'
])
.service('CommentService', CommentService)