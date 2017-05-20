import { SizeSelectorController } from './SizeSelectorController'

export function SizeSelectorDirective() {
  return {
    restrict: 'E',
    controller: SizeSelectorController,
    controllerAs: 'sizeSelector',
    bindToController: {
      options: '=',
      onPage: '&'
    },
    template: `
      <select
        ng-change="sizeSelector.onChange()"
        ng-model="sizeSelector.options.paging.size"
        ng-init="sizeSelector.options.paging.size"
        ng-options="value * 1 as value for (key, value) in sizeSelector.options.sizes"
      >
      </select>
      `,
    replace: true
  }
}
