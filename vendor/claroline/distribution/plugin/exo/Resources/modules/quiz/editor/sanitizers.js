import set from 'lodash/set'

function sanitizeQuiz(propertyPath, value) {
  if (propertyPath === 'parameters.pick'
    || propertyPath === 'parameters.duration'
    || propertyPath === 'parameters.maxAttempts') {
    value = parseInt(value)
  }

  let properties = {}

  return set(properties, propertyPath, value)
}

function sanitizeStep(step) {
  if (step.parameters) {
    if (step.parameters.maxAttempts) {
      step.parameters.maxAttempts = parseInt(step.parameters.maxAttempts)
    }
  }
  return step
}

export default {
  quiz: sanitizeQuiz,
  step: sanitizeStep
}
