/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*global Routing*/
/*global Translator*/

export default class KeywordEditionModalCtrl {
  constructor($http, $uibModalInstance, KeywordService, resourceId, keyword, title, callback) {
    this.$http = $http
    this.$uibModalInstance = $uibModalInstance
    this.KeywordService = KeywordService
    this.resourceId = resourceId
    this.source = keyword
    this.title = title
    this.callback = callback
    this.keyword = {name: null}
    this.keywordErrors = {name: null}
    this.initialize()
  }

  initialize() {
    this.keyword['name'] = this.source['name']
  }

  submit() {
    this.resetErrors()

    if (!this.keyword['name']) {
      this.keywordErrors['name'] = Translator.trans('form_not_blank_error', {}, 'clacoform')
    }
    if (this.isValid()) {
      const checkNameUrl = Routing.generate(
        'claro_claco_form_get_keyword_by_name_excluding_id',
        {clacoForm: this.resourceId, name: this.keyword['name'], id: this.source['id']}
      )
      this.$http.get(checkNameUrl).then(d => {
        if (d['status'] === 200) {
          if (d['data'] === 'null') {
            const url = Routing.generate('claro_claco_form_keyword_edit', {keyword: this.source['id']})
            this.$http.put(url, {keywordData: this.keyword}).then(d => {
              this.callback(d['data'])
              this.$uibModalInstance.close()
            })
          } else {
            this.keywordErrors['name'] = Translator.trans('form_not_unique_error', {}, 'clacoform')
          }
        }
      })
    }
  }

  resetErrors() {
    for (const key in this.keywordErrors) {
      this.keywordErrors[key] = null
    }
  }

  isValid() {
    let valid = true

    for (const key in this.keywordErrors) {
      if (this.keywordErrors[key]) {
        valid = false
        break
      }
    }

    return valid
  }
}
