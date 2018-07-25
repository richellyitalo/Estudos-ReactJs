import React from 'react'

// functional stateless components
// componente sem estado

/* class Comment extends Component {
  render() {
    return <li className="alert alert-info">{this.props.comment.comment}</li>
  }
} */

const Comment = (props) => {
  return <li className="alert alert-info">{props.comment.comment}</li>
}

// ou mais simplificado
// const Comment = props => <li className="alert alert-info">{props.comment.comment}</li>

export default Comment
