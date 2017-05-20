import { ColumnSelectorController } from './ColumnSelectorController'

export function ColumnSelectorDirective() {
  return {
    restrict: 'E',
    controller: ColumnSelectorController,
    controllerAs: 'columnSelector',
    bindToController: {
      options: '='
    },
    template: `
    <div class="dropdown">
      <button
        class="btn btn-default dropdown-toggle"
        type="button"
        id="dropdown-column"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="true"
     >
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="column" style="z-index:25;">
          <li ng-repeat="column in columnSelector.options.availableColumns">
            <label class="dt-checkbox">
              <input type="checkbox" ng-click="columnSelector.onClick(column)" ng-checked="columnSelector.isChecked(column)">  {{ column.name }}
            </label>
          </li>
      </ul>
    </div>
      `,
    replace: true
  }
}
