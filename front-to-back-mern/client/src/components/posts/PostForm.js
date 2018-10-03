import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

// Componentes
import TextAreaFieldGroup from '../common/TextAreaFieldGroup'

// Ações
import { addPost } from '../../actions/postActions'

class PostForm extends Component {
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

    const newPost = {
      text: this.state.text,
      name: user.name,
      avatar: user.avatar
    }

    this.props.addPost(newPost)
    this.setState({ text: '' })
  }

  render() {
    const { errors } = this.props

    return (
      <div className="post-form mb-3">
        <div className="card card-info">
          <div className="card-header bg-info text-white">Diga algo...</div>
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

PostForm.proptypes = {
  auth: PropTypes.object.isRequired,
  errors: PropTypes.object.isRequired,
  addPost: PropTypes.func.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth,
  errors: state.errors
})

export default connect(
  mapStateToProps,
  { addPost }
)(PostForm)
