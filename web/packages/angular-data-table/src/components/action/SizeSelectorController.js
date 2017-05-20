export class SizeSelectorController {
    /*@ngInject*/
    constructor($scope) {
        this.$scope = $scope
    }

    onChange() {
        this.options.paging.offset = 0
        this.onPage({
          offset: this.options.paging.offset,
          size: this.options.paging.size
      });
    }
}
