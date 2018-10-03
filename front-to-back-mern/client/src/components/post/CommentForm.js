import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

// Componentes
import TextAreaFieldGroup from '../common/TextAreaFieldGroup'

// Ações
import { addComment } from '../../actions/postActions'

class CommentForm extends Component {
  state = {
    text: ''
  }

  onChange = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onSubmit = e => {
    e.preventDefault()

    const { user } = this.props.auth
    const { postId } = this.props

    const newComment = {
      text: this.state.text,
      name: user.name,
      avatar: user.avatar
    }

    this.props.addComment(postId, newComment)
    
    this.setState({ text: '' })
  }

  render() {
    const { errors } = this.props

    return (
      <div className="post-form mb-3">
        <div className="card card-info">
          <div className="card-header bg-info text-white">Comente algo..</div>
          <div className="card-body">
            <form onSubmit={this.onSubmit}>
              <div className="form-group">
                <TextAreaFieldGroup
                  name="text"
                  placeholder="Crie um post"
                  onChange={this.onChange}
                  value={this.state.text}
                  error={errors.text}
                />
              </div>
              <button type="submit" className="btn btn-dark">
                Enviar
              </button>
            </form>
          </div>
        </div>
      </div>
    )
  }
}

CommentForm.proptypes = {
  auth: PropTypes.object.isRequired,
  errors: PropTypes.object.isRequired,
  addComment: PropTypes.func.isRequired,
  postId: PropTypes.string.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth,
  errors: state.errors
})

export default connect(
  mapStateToProps,
  { addComment }
)(CommentForm)
