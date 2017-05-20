var assert = require('./../../assert')('set-answer');

describe('Set answer', function () {
  describe('Schema', function () {
    describe('A set answer', function () {
      it('must be an object', function () {
        assert.isValid('set-answer');
      });
      describe('A set answer data', function () {
        it('must be an array', function () {
          assert.hasError('set-answer-is-not-an-array', {
            '.data': 'should be array'
          });
        });
        describe('Each answer', function () {
          it('must be an object', function () {
            assert.hasError('set-answer-answer-is-not-an-object', {
              '.data[0]': 'should be object'
            });
          });
          it('must be unique', function () {
            assert.hasError('set-answer-duplicate-answers', {
              '.data': 'items ## 0 and 1 are duplicate'
            });
          });
          it('must have a *itemId* property', function () {
            assert.hasError('set-answer-no-itemid', {
              '.data[0].itemId': 'property .itemId is required'
            });
          });
          describe('The *itemId* property', function () {
            it('must be a string', function () {
              assert.hasError('set-answer-itemid-is-not-a-string', {
                '.data[0].itemId': 'should be string'
              });
            });
          });
          it('must have a *setId* property', function () {
            assert.hasError('set-answer-no-setid', {
              '.data[0].setId': 'property .setId is required'
            });
          });
          describe('The *setId* property', function () {
            it('must be a string', function () {
              assert.hasError('set-answer-setid-is-not-a-string', {
                '.data[0].setId': 'should be string'
              });
            });
          });
        });
      });
    });
  });
  
  describe('Examples', function () {
    assert.areValid([
      'set-answer'
    ]);
  });
});