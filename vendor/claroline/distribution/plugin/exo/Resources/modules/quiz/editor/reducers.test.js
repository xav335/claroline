import freeze from 'deep-freeze'
import merge from 'lodash/merge'
import {assertEqual} from './../../utils/test'
import {lastId} from './../../utils/utils'
import {reducers} from './reducers'
import {registerItemType, resetTypes} from './../../items/item-types'
import {
  ITEM_CREATE,
  HINT_ADD,
  HINT_CHANGE,
  HINT_REMOVE,
  actions
} from './actions'
import {
  TYPE_QUIZ,
  TYPE_STEP,
  SCORE_SUM
} from './../enums'

describe('Quiz reducer', () => {
  it('returns a new quiz by default', () => {
    const quiz = reducers.quiz(undefined, {})
    assertEqual(typeof quiz.id, 'string', 'Quiz must have an id')
    assertEqual(Array.isArray(quiz.steps), true, 'Quiz must have a step array')
    assertEqual(quiz.steps.length, 0, 'Steps must be empty')
  })

  it('updates properties', () => {
    const quiz = freeze({
      id: '1',
      parameters: {
        type: 'formative',
        showMetadata: true
      }
    })
    const newState = reducers.quiz(quiz, actions.updateQuiz('parameters.type', 'summative'))
    delete newState._errors // not the point here
    assertEqual(newState, {
      id: '1',
      parameters: {
        type: 'summative',
        showMetadata: true
      }
    })
  })

  it('keeps an id reference on step creation', () => {
    const quiz = freeze({steps: ['1', '2']})
    const newState = reducers.quiz(quiz, actions.createStep())
    assertEqual(newState.steps, ['1', '2', lastId()])
  })

  it('removes id on step deletion', () => {
    const quiz = freeze({steps: ['1', '2', '3']})
    const newState = reducers.quiz(quiz, actions.deleteStep('2'))
    assertEqual(newState.steps, ['1', '3'])
  })

  it('swaps ids on step move', () => {
    const quiz = freeze({steps: ['1', '2', '3']})
    const newState = reducers.quiz(quiz, actions.moveStep('3', '2'))
    assertEqual(newState, {steps: ['1', '3', '2']})
  })
})

describe('Step reducer', () => {
  it('returns an empty steps object by default', () => {
    assertEqual({}, reducers.steps(undefined, {}))
  })

  it('creates a default object on step creation', () => {
    const steps = freeze({'1': {id: '1', items: [], parameters: {}}})
    const newState = reducers.steps(steps, actions.createStep())
    assertEqual(newState, {
      '1': {id: '1', items: [], parameters: {}},
      [lastId()]: {
        id: lastId(),
        title: '',
        description: '',
        items: [],
        parameters: {
          maxAttempts: 0
        }
      }
    })
  })

  it('update properties on change', () => {
    const steps = freeze({
      '1': {
        id: '1',
        parameters: {
          maxAttempts: 0
        }
      },
      '2': {
        id: '2',
        items: []
      }
    })
    const newState = reducers.steps(steps, actions.updateStep('1', {
      parameters: {maxAttempts: 2}
    }))
    delete newState['1']._errors // not the point here
    assertEqual(newState, {
      '1': {
        id: '1',
        parameters: {
          maxAttempts: 2
        }
      },
      '2': {
        id: '2',
        items: []
      }
    })
  })

  it('removes step object on step deletion', () => {
    const steps = freeze({
      '1': {id: '1', items: []},
      '2': {id: '2', items: []}
    })
    const newState = reducers.steps(steps, actions.deleteStep('1'))
    assertEqual(newState, {'2': {id: '2', items: []}})
  })

  it('keeps an id reference on item creation', () => {
    const steps = freeze({
      '1': {id: '1', items: []},
      '2': {id: '2', items: []}
    })
    const newState = reducers.steps(steps, actions.createItem('2', 'application/choice.x+json'))
    assertEqual(newState, {
      '1': {id: '1', items: []},
      '2': {id: '2', items: [lastId()]}
    })
  })

  it('removes item id on item deletion', () => {
    const steps = freeze({
      '1': {id: '1', items: []},
      '2': {id: '2', items: ['3', '4']}
    })
    const newState = reducers.steps(steps, actions.deleteItem('3', '2'))
    assertEqual(newState, {
      '1': {id: '1', items: []},
      '2': {id: '2', items: ['4']}
    })
  })

  it('swaps id on item move', () => {
    const steps = freeze({
      '1': {id: '1', items: ['a']},
      '2': {id: '2', items: ['b', 'c']}
    })
    const newState = reducers.steps(steps, actions.moveItem('b', 'c', '2'))
    assertEqual(newState, {
      '1': {id: '1', items: ['a']},
      '2': {id: '2', items: ['c', 'b']}
    })
  })
})

describe('Items reducer', () => {
  afterEach(resetTypes)

  it('returns an empty object by default', () => {
    const items = reducers.items(undefined, {})
    assertEqual(items, {})
  })

  it('creates a base question object and delegates to question reducer', () => {
    registerFixtureType({
      editor:{
        reduce: (item, action) => {
          return action.type === ITEM_CREATE ?
            Object.assign({}, item, {foo: 'bar'}) :
            item
        }
      }
    })

    const items = reducers.items(freeze({}), actions.createItem('1', 'foo/bar'))
    assertEqual(Object.keys(items).length, 1)
    assertEqual(items[lastId()].type, 'foo/bar')
    assertEqual(items[lastId()].content, '')
    assertEqual(items[lastId()].foo, 'bar')
    assertEqual(items[lastId()].score, {
      type: SCORE_SUM,
      success: 1,
      failure: 0
    })
  })

  it('calls item validator on creation', () => {
    registerFixtureType({
      editor:{
        validate: () => ({foo: 'Should be bar'})
      }
    })
    const items = reducers.items(freeze({}), actions.createItem('1', 'foo/bar'))
    const keys = Object.keys(items)
    assertEqual(keys.length, 1)
    assertEqual(items[keys[0]]._errors, {
      content: 'This value should not be blank.',
      foo: 'Should be bar'
    })
  })

  it('updates base item properties', () => {
    registerFixtureType()
    const items = freeze({
      '1': {
        id: '1',
        type: 'foo/bar',
        content: 'Question?'
      }
    })
    const updated = reducers.items(items, actions.updateItem('1', 'content', 'New question?'))
    assertEqual(updated['1'], {
      id: '1',
      type: 'foo/bar',
      content: 'New question?',
      _errors: {}
    })
  })

  it('calls item validator on base update', () => {
    registerFixtureType()
    const items = freeze({
      '1': {
        id: '1',
        type: 'foo/bar',
        content: 'Question?'
      }
    })
    const updated = reducers.items(items, actions.updateItem('1', 'content', ''))
    assertEqual(updated['1']._errors, {
      content: 'This value should not be blank.'
    })
  })

  it('delegates to item type reducer on detail update', () => {
    registerFixtureType({
      editor: {
        reduce: item => Object.assign({}, item, {reduced: true})
      }
    })
    const items = freeze({
      '1': {
        id: '1',
        type: 'foo/bar',
        content: 'Question?',
        _errors: {}
      }
    })
    const updated = reducers.items(items, actions.updateItemDetail('1', {}))
    assertEqual(updated['1'], {
      id: '1',
      type: 'foo/bar',
      content: 'Question?',
      reduced: true,
      _errors: {}
    })
  })

  it('calls item validator on detail update', () => {
    registerFixtureType({
      editor: {
        validate: item => {
          return item.foo !== 'bar' ? {foo: 'Should be bar'} : {}
        }
      }
    })
    const items = freeze({
      '1': {
        id: '1',
        type: 'foo/bar',
        content: '',
        foo: 'baz'
      }
    })
    const updated = reducers.items(items, actions.updateItemDetail('1', {}))
    assertEqual(updated['1']._errors, {
      content: 'This value should not be blank.',
      foo: 'Should be bar'
    })
  })

  it('removes item object on item deletion', () => {
    const items = freeze({
      '1': {id: '2', type: 'text/html'},
      '2': {id: '2', type: 'text/plain'}
    })
    const newState = reducers.items(items, actions.deleteItem('1', 'does not matter here'))
    assertEqual(newState, {
      '2': {id: '2', type: 'text/plain'}
    })
  })

  it('updates hints on add hint', () => {
    const items = freeze({
      '1': {id: '2', type: 'application/x.choice+json', hints: []},
      '2': {id: '2', type: 'text/plain'}
    })
    const newState = reducers.items(items, actions.updateItemHints('1', HINT_ADD, {}))
    assertEqual(newState, {
      '1': {
        id: '2',
        type: 'application/x.choice+json',
        hints: [
          {
            id: lastId(),
            value: '',
            penalty: 0
          }
        ]
      },
      '2': {id: '2', type: 'text/plain'}
    })

    it('updates hints on remove hint', () => {
      const items = freeze({
        '1': {id: '1', type: 'text/plain'},
        '2': {
          id: '2',
          type: 'application/x.choice+json',
          hints: [
            {
              id: '123',
              value: 'foo',
              penalty: 1.5
            }
          ]
        }
      })
      const newState = reducers.items(
        items,
        actions.updateItemHints('2', HINT_REMOVE, {id: '123'})
      )
      assertEqual(newState, {
        '1': {id: '1', type: 'text/plain'},
        '2': {id: '2', type: 'application/x.choice+json', hints: []}
      })
    })
  })

  it('updates hints on change hint', () => {
    const items = freeze({
      '1': {id: '1', type: 'text/plain'},
      '2': {
        id: '2',
        type: 'application/x.choice+json',
        hints: [
          {
            id: '123',
            value: 'foo',
            penalty: 1.5
          }
        ]
      }
    })
    const newState = reducers.items(
      items,
      actions.updateItemHints('2', HINT_CHANGE, {id: '123', value: 'bar'})
    )
    assertEqual(newState, {
      '1': {id: '1', type: 'text/plain'},
      '2': {
        id: '2',
        type: 'application/x.choice+json',
        hints: [
          {
            id: '123',
            value: 'bar',
            penalty: 1.5
          }
        ]
      }
    })
  })
})

describe('Current object reducer', () => {
  it('returns an empty object by default', () => {
    const current = reducers.currentObject(undefined, {})
    assertEqual(current, {})
  })

  it('updates on object selection', () => {
    const current = freeze({id: '1', type: TYPE_QUIZ})
    const newState = reducers.currentObject(current, actions.selectObject('2', TYPE_STEP))
    assertEqual(newState, {
      id: '2',
      type: TYPE_STEP
    })
  })

  it('updates on step creation', () => {
    const current = freeze({id: '2', type: 'text/html'})
    const newState = reducers.currentObject(current, actions.createStep())
    assertEqual(newState, {
      id: lastId(),
      type: TYPE_STEP
    })
  })

  it('updates on object change', () => {
    const current = freeze({id: '1', type: TYPE_STEP})
    const newState = reducers.currentObject(current, actions.nextObject({
      id: '2',
      type: 'text/html'
    }))
    assertEqual(newState, {
      id: '2',
      type: 'text/html'
    })
  })
})

describe('Open panels reducer', () => {
  it('returns an empty structure for quiz and steps by default', () => {
    const current = reducers.openPanels(undefined, {})
    assertEqual(current, {[TYPE_QUIZ]: false, [TYPE_STEP]: {}})
  })

  it('updates quiz key on quiz panel selection', () => {
    const current = freeze({[TYPE_QUIZ]: 'foo', [TYPE_STEP]: {}})
    const newState = reducers.openPanels(current, actions.selectQuizPanel('bar'))
    assertEqual(newState, {[TYPE_QUIZ]: 'bar', [TYPE_STEP]: {}})
  })

  it('unsets quiz key if already selected', () => {
    const current = freeze({[TYPE_QUIZ]: 'baz', [TYPE_STEP]: {}})
    const newState = reducers.openPanels(current, actions.selectQuizPanel('baz'))
    assertEqual(newState, {[TYPE_QUIZ]: false, [TYPE_STEP]: {}})
  })

  it('sets panel step key on step panel selection', () => {
    const current = freeze({[TYPE_QUIZ]: false, [TYPE_STEP]: {}})
    const newState = reducers.openPanels(current, actions.selectStepPanel('1', 'foo'))
    assertEqual(newState, {[TYPE_QUIZ]: false, [TYPE_STEP]: {'1': 'foo'}})
  })

  it('keeps track of all open step panels', () => {
    const current = freeze({[TYPE_QUIZ]: false, [TYPE_STEP]: {'1': 'foo'}})
    const secondState = reducers.openPanels(current, actions.selectStepPanel('1', 'bar'))
    const thirdState = reducers.openPanels(secondState, actions.selectStepPanel('2', 'baz'))
    assertEqual(thirdState, {[TYPE_QUIZ]: false, [TYPE_STEP]: {'1': 'bar', '2': 'baz'}})
  })

  it('unsets panel step key if already selected', () => {
    const current = freeze({[TYPE_QUIZ]: false, [TYPE_STEP]: {'1': 'foo'}})
    const newState = reducers.openPanels(current, actions.selectStepPanel('1', 'foo'))
    assertEqual(newState, {[TYPE_QUIZ]: false, [TYPE_STEP]: {'1': false}})
  })
})

function registerFixtureType(properties = {}) {
  return registerItemType(merge(
    {
      name: 'foo',
      type: 'foo/bar',
      player:{
        component: () => 'player',
        reduce: item => item
      },
      editor: {
        component: () => 'editor',
        reduce: item => item
      },
      paper: () => 'paper'
    },
    properties
  ))
}
