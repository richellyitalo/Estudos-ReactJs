import React, { Component } from 'react'

const Blog = (props) => {
  const sidebar = (
    <ul>
      {props.posts.map((post) => {
        return <li key={post.id}>{post.title}</li>
      })}
    </ul>
  )

  const content = props.posts.map((post) => {
    return (
      <div key={post.id}>
        <h3>{post.title}</h3>
        <p>{post.content}</p>
      </div>
    )
  })

  return (
    <div>
      <div>
      <h3>Sidebar</h3>
      {sidebar}
      </div>
      <div>
      <h3>Conteúdo</h3>
      {content}
      </div>
    </div>
  )
}

export default Blog