import React from 'react'

const PostItem = ({ match }) => {
  return (
    <div>
      <h3>Post detalhado</h3>
      ID: { match.params.id }<br/>
      NOME: { match.params.nome }
    </div>
  )
}

export default PostItem