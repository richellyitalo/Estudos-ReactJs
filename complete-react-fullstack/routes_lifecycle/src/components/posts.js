import React from 'react'

import { Link } from 'react-router-dom'

const Posts = () => {
  return (
    <div>
      <h1>Posts</h1>
      <ul>
        <li>
          <Link to="/posts/1/jao">Jão</Link>
        </li>
        <li>
          <Link to="/posts/2/buiu">Buiu</Link>
        </li>
        <li>
          <Link to="/posts/3/pedro">Pedro</Link>
        </li>
      </ul>
    </div>
  )
}

export default Posts