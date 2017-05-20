import React, {PropTypes as T} from 'react'
import classes from 'classnames'
import {tex} from './../../../utils/translate'
import {TooltipElement} from './../../../components/form/tooltip-element.jsx'
import {MODE_RECT, MODE_CIRCLE, MODE_SELECT} from './../enums'

const ModeButton = props =>
  <TooltipElement id={props.id} tip={props.tip}>
    <button
      type="button"
      className={classes('btn', 'btn-default', {active: props.active})}
      onClick={() => props.onClick(props.mode)}
    >
      {props.children}
    </button>
  </TooltipElement>

ModeButton.propTypes = {
  id: T.string.isRequired,
  mode: T.string.isRequired,
  tip: T.string.isRequired,
  active: T.bool.isRequired,
  onClick: T.func.isRequired,
  children: T.any.isRequired
}

export const ModeSelector = props =>
  <div className="btn-group" role="group">
    <ModeButton
      id="rect-mode-btn"
      mode={MODE_RECT}
      tip={tex('graphic_mode_rect')}
      active={props.currentMode === MODE_RECT}
      onClick={props.onChange}
    >
      <span className="fa fa-square-o"/>
    </ModeButton>
    <ModeButton
      id="circle-mode-btn"
      mode={MODE_CIRCLE}
      tip={tex('graphic_mode_circle')}
      active={props.currentMode === MODE_CIRCLE}
      onClick={props.onChange}
    >
      <span className="fa fa-circle-o"/>
    </ModeButton>
  </div>

ModeSelector.propTypes = {
  currentMode: T.oneOf([MODE_RECT, MODE_CIRCLE, MODE_SELECT]),
  onChange: T.func.isRequired
}
