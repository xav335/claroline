import assert from 'assert'
import freeze from 'deep-freeze'
import {resetTypes} from './../items/item-types'
import {spyConsole, mockRouting} from './../utils/test'
import {Quiz} from './quiz'

describe('Quiz', () => {
  beforeEach(spyConsole.watch)

  afterEach(() => {
    spyConsole.restore()
    resetTypes()
  })

  it('takes raw quiz data and renders a full quiz', () => {
    const quiz = new Quiz(quizFixture())
    const element = document.createElement('div')

    mockRouting()
    quiz.render(element)
    // this is just a rough test to check main components have been rendered
    assert(element.querySelector('.quiz-overview'), 'a .quiz-overview element is present')
  })
})

function quizFixture() {
  return freeze({
    id: '1',
    title: 'Quiz title',
    description: 'Quiz desc',
    parameters: {},
    meta: {
      created: '2016-12-12',
      published: false
    },
    steps: [
      {
        id: 'a',
        parameters: {},
        items: [
          {
            id: 'x',
            type: 'application/x.choice+json',
            choices: [],
            solutions: []
          },
          {
            id: 'y',
            type: 'application/x.open+json'
          }
        ]
      },
      {
        id: 'b',
        parameters: {},
        items: [
          {
            id: 'z',
            type: 'text/html'
          }
        ]
      }
    ]
  })
}
