export class ColumnSelectorController {
    onClick(column) {
        this.isChecked(column) ?
            this.options.columns.splice(this.getColumnIndex(column), 1):
            this.options.columns.push(column)
    }

    isChecked(column) {
        return this.getColumnIndex(column) >= 0 ? true: false
    }

    getColumnIndex(column) {
        let index = -1

        for (let i = 0; i < this.options.columns.length; i++) {
            if (this.options.columns[i].name == column.name) index = i
        }

        return index
    }
}
