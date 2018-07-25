import React, { Component } from 'react'

class NewComment extends Component {
  handleInput(event) {
    if (event.keyCode === 13) {
      const comment = {comment: event.target.value}
      this.props.postNewComment(comment)
      event.target.value = ''
      event.preventDefault()
    }
  }

  render() {
    return (
      <div>
        <textarea className="form-control" rows="3" placeholder="Informe o novo comentário"
          onKeyDown={(e) => this.handleInput(e)}
        ></textarea>
      </div>
    )
  }
}

export default NewComment