import React, {Component, PropTypes as T} from 'react'
import Modal from 'react-bootstrap/lib/Modal'

import {update} from './../../../utils/utils'
import {t, tex} from './../../../utils/translate'
import {FormGroup} from './../../../components/form/form-group.jsx'
import {BaseModal} from './../../../modal/components/base.jsx'
import {UserTypeahead} from './../../../users/components/typeahead.jsx'

export const MODAL_SHARE = 'MODAL_SHARE'

const SelectedUsers = props =>
  <ul className="list-group">
    {props.users.map((user) =>
      <li key={`selected-${user.id}`} className="list-group-item">
        {user.name}
        <button
          type="button"
          className="btn btn-link btn-sm"
          onClick={() => props.deselect(user)}
        >
          <span className="fa fa-fw fa-times"></span>
        </button>
      </li>
    )}
  </ul>

SelectedUsers.propTypes = {
  users: T.arrayOf(T.shape({
    id: T.string.isRequired,
    name: T.string.isRequired
  })).isRequired,
  deselect: T.func.isRequired
}

export class ShareModal extends Component {
  constructor(props) {
    super(props)

    this.state = {
      adminRights: false,
      users: []
    }
  }

  selectUser(user) {
    this.setState(update(this.state, {
      users: {$push: [user]}
    }))
  }

  deselectUser(user) {
    this.setState(update(this.state, {
      users: {$splice: [[this.state.users.indexOf(user), 1]]}
    }))
  }

  render() {
    return (
      <BaseModal {...this.props} className="share-modal">
        <Modal.Body>
          <div className="checkbox">
            <label htmlFor="share-admin-rights">
              <input
                id="share-admin-rights"
                type="checkbox"
                name="share-admin-rights"
                checked={this.state.adminRights}
                onChange={() => this.setState({
                  adminRights: !this.state.adminRights
                })}
              />
              {tex('share_admin_rights')}
            </label>
          </div>

          <FormGroup
            controlId="share-users"
            label={tex('share_with')}
          >
            <UserTypeahead
              handleSelect={this.selectUser.bind(this)}
            />
          </FormGroup>

          {0 < this.state.users.length &&
            <SelectedUsers
              users={this.state.users}
              deselect={this.deselectUser.bind(this)}
            />
          }
        </Modal.Body>

        <Modal.Footer>
          <button className="btn btn-default" onClick={this.props.fadeModal}>
            {t('cancel')}
          </button>
          <button
            className="btn btn-primary"
            disabled={0 === this.state.users.length}
            onClick={() => this.props.handleShare(this.state.users, this.state.adminRights)}
          >
            {tex('share')}
          </button>
        </Modal.Footer>
      </BaseModal>
    )
  }
}

ShareModal.propTypes = {
  fadeModal: T.func.isRequired,
  handleShare: T.func.isRequired
}
