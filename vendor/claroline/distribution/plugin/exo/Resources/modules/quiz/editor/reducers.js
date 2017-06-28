import {combineReducers} from 'redux'
import merge from 'lodash/merge'
import set from 'lodash/set'
import sanitize from './sanitizers'
import validate from './validators'
import {decorateItem} from './../decorators'
import {getIndex, makeId, makeItemPanelKey, update} from './../../utils/utils'
import {getDefinition} from './../../items/item-types'
import {ATTEMPT_FINISH} from './../player/actions'
import {VIEW_MODE_UPDATE, OPEN_FIRST_STEP} from './../actions'
import {
  TYPE_QUIZ,
  TYPE_STEP,
  SHUFFLE_NEVER,
  SHUFFLE_ONCE,
  SHUFFLE_ALWAYS,
  VIEW_EDITOR
} from './../enums'
import {
  ITEM_CREATE,
  ITEM_DELETE,
  ITEM_UPDATE,
  ITEM_MOVE,
  ITEM_HINTS_UPDATE,
  ITEM_DETAIL_UPDATE,
  ITEMS_IMPORT,
  OBJECT_NEXT,
  OBJECT_SELECT,
  PANEL_QUIZ_SELECT,
  PANEL_STEP_SELECT,
  STEP_CREATE,
  STEP_MOVE,
  STEP_DELETE,
  STEP_UPDATE,
  QUIZ_UPDATE,
  QUIZ_SAVED,
  QUIZ_SAVING,
  QUIZ_SAVE_ERROR,
  QUIZ_VALIDATING,
  HINT_ADD,
  HINT_CHANGE,
  HINT_REMOVE,
  quizChangeActions
} from './actions'

function initialQuizState() {
  return {
    id: makeId(),
    steps: []
  }
}

function reduceQuiz(quiz = initialQuizState(), action = {}) {
  switch (action.type) {
    case QUIZ_UPDATE: {
      const sanitizedProps = sanitize.quiz(action.propertyPath, action.value)
      const updatedQuiz = merge({}, quiz, sanitizedProps)

      if (updatedQuiz.parameters.randomPick === SHUFFLE_ALWAYS
        && updatedQuiz.parameters.randomOrder === SHUFFLE_ONCE) {
        updatedQuiz.parameters.randomOrder = SHUFFLE_NEVER
      }

      const errors = validate.quiz(updatedQuiz)
      updatedQuiz._errors = errors

      return updatedQuiz
    }
    case STEP_CREATE:
      return update(quiz, {steps: {$push: [action.id]}})
    case STEP_DELETE:
      return update(quiz, {steps: {$splice: [[getIndex(quiz.steps, action.id), 1]]}})
    case STEP_MOVE: {
      const index = getIndex(quiz.steps, action.id)
      const swapIndex = getIndex(quiz.steps, action.swapId)
      return update(quiz, {
        steps: {
          [index]: {$set: action.swapId},
          [swapIndex]: {$set: action.id}
        }
      })
    }
    case ATTEMPT_FINISH:
      return update(quiz, {
        meta: {
          userPaperCount: {$set: quiz.meta.userPaperCount + 1}
        }
      })

  }
  return quiz
}

function reduceSteps(steps = {}, action = {}) {
  switch (action.type) {
    case STEP_CREATE: {
      const newStep = {
        id: action.id,
        title: '',
        description: '',
        items: [],
        parameters: {
          maxAttempts: 0
        }
      }
      return update(steps, {[action.id]: {$set: newStep}})
    }
    case STEP_DELETE:
      return update(steps, {$delete: action.id})
    case STEP_UPDATE: {
      const sanitizedProps = sanitize.step(action.newProperties)
      const updatedStep = merge({}, steps[action.id], sanitizedProps)
      const errors = validate.step(updatedStep)
      updatedStep._errors = errors
      return update(steps, {[action.id]: {$set: updatedStep}})
    }
    case ITEM_CREATE:
      return update(steps, {[action.stepId]: {items: {$push: [action.id]}}})
    case ITEM_DELETE: {
      const index = getIndex(steps[action.stepId].items, action.id)
      return update(steps, {[action.stepId]: {items: {$splice: [[index, 1]]}}})
    }
    case ITEM_MOVE: {
      const index = getIndex(steps[action.stepId].items, action.id)
      const swapIndex = getIndex(steps[action.stepId].items, action.swapId)
      return update(steps, {
        [action.stepId]: {
          items: {
            [index]: {$set: action.swapId},
            [swapIndex]: {$set: action.id}
          }
        }
      })
    }
    case ITEMS_IMPORT: {
      const ids = action.items.map(item => {
        return item.id
      })
      return update(steps, {[action.stepId]: {items: {$push: ids}}})
    }
  }
  return steps
}

function reduceItems(items = {}, action = {}) {
  switch (action.type) {
    case ITEM_CREATE: {
      let newItem = decorateItem({
        id: action.id,
        type: action.itemType,
        content: '',
        hints: [],
        feedback: ''
      })
      newItem = decorateItem(newItem)
      const def = getDefinition(action.itemType)
      newItem = def.editor.reduce(newItem, action)
      const errors = validate.item(newItem)
      newItem = Object.assign({}, newItem, {_errors: errors})

      return update(items, {[action.id]: {$set: newItem}})
    }
    case ITEM_DELETE:
      return update(items, {$delete: action.id})
    case ITEM_UPDATE: {
      let updatedItem = merge(
        {},
        items[action.id],
        set({}, action.propertyPath, action.value)
      )
      updatedItem._errors = validate.item(updatedItem)

      return update(items, {[action.id]: {$set: updatedItem}})
    }
    case ITEMS_IMPORT: {
      action.items.forEach(item => {
        let newItem = decorateItem(item)
        const def = getDefinition(item.type)
        newItem = def.editor.decorate(newItem)
        const errors = validate.item(newItem)
        newItem = Object.assign({}, newItem, {_errors: errors})
        items = update(items, {[item.id]: {$set: newItem}})
      })
      return items
    }
    case ITEM_HINTS_UPDATE:
      switch (action.updateType) {
        case HINT_ADD:
          return update(items, {
            [action.itemId]: {
              hints: {
                $push: [{
                  id: makeId(),
                  value: '',
                  penalty: 0
                }]
              }
            }
          })
        case HINT_CHANGE: {
          const hints = items[action.itemId].hints
          const index = hints.findIndex(hint => hint.id === action.payload.id)

          if (action.payload.penalty) {
            action.payload.penalty = parseFloat(action.payload.penalty)
          }

          return update(items, {
            [action.itemId]: {
              hints: {
                [index]: {$set: Object.assign({}, hints[index], action.payload)}
              }
            }
          })
        }
        case HINT_REMOVE:
          return update(items, {
            [action.itemId]: {
              hints: {
                $set: items[action.itemId].hints.filter(
                  hint => hint.id !== action.payload.id
                )
              }
            }
          })
        default:
          return items
      }
    case ITEM_DETAIL_UPDATE: {
      const def = getDefinition(items[action.id].type)
      let updatedItem = def.editor.reduce(items[action.id], action.subAction)
      const errors = validate.item(updatedItem)
      updatedItem = update(updatedItem, {_errors: {$set: errors}})
      return update(items, {[action.id]: {$set: updatedItem}})
    }
  }
  return items
}

function reduceCurrentObject(object = {}, action = {}) {
  switch (action.type) {
    case OBJECT_SELECT:
      return {
        id: action.id,
        type: action.objectType
      }
    case STEP_CREATE:
      return {
        id: action.id,
        type: TYPE_STEP
      }
    case OBJECT_NEXT:
      return {
        id: action.object.id,
        type: action.object.type
      }
    case OPEN_FIRST_STEP:
      return {
        id: action.stepId,
        type: TYPE_STEP
      }
  }
  return object
}

function initialPanelState() {
  return {
    [TYPE_QUIZ]: false,
    [TYPE_STEP]: {}
  }
}

function reduceOpenPanels(panels = initialPanelState(), action = {}) {
  switch (action.type) {
    case PANEL_QUIZ_SELECT: {
      const value = panels[TYPE_QUIZ] === action.panelKey ? false : action.panelKey
      return update(panels, {[TYPE_QUIZ]: {$set: value}})
    }
    case PANEL_STEP_SELECT: {
      const value = panels[TYPE_STEP][action.stepId] === action.panelKey ? false : action.panelKey
      return update(panels, {[TYPE_STEP]: {[action.stepId]: {$set: value}}})
    }
    case ITEM_CREATE: {
      const panelKey = makeItemPanelKey(action.itemType, action.id)
      return update(panels, {[TYPE_STEP]: {[action.stepId]: {$set: panelKey}}})
    }
  }
  return panels
}

function reduceValidatingState(validating = false, action = {}) {
  switch (action.type) {
    case QUIZ_VALIDATING:
      return true
    case QUIZ_SAVED:
      return false
  }
  return validating
}

function reduceSavingState(saving = false, action = {}) {
  switch (action.type) {
    case QUIZ_SAVING:
      return true
    case QUIZ_SAVED:
      return false
    case QUIZ_SAVE_ERROR:
      return false
  }

  return saving
}

function reduceSavedState(saved = true, action = {}) {
  if (quizChangeActions.indexOf(action.type) > 0) {
    return false
  }

  if (action.type === QUIZ_SAVED) {
    return true
  }

  return saved
}

function reduceOpenedState(opened = false, action = {}) {
  if (action.type === VIEW_MODE_UPDATE && action.mode === VIEW_EDITOR) {
    return true
  }

  return opened
}

const reduceEditor = combineReducers({
  currentObject: reduceCurrentObject,
  openPanels: reduceOpenPanels,
  validating: reduceValidatingState,
  saving: reduceSavingState,
  saved: reduceSavedState,
  opened: reduceOpenedState
})

export const reducers = {
  quiz: reduceQuiz,
  steps: reduceSteps,
  items: reduceItems,
  currentObject: reduceCurrentObject,
  openPanels: reduceOpenPanels,
  editor: reduceEditor
}
