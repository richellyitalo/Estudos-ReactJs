import React, { Component } from 'react'

const ListItem = (props) => <li>{props.value}</li>

const ListAndKeys = (props) => {
  const numbers = props.numbers
  const listItems = numbers.map((number) => <ListItem key={number} value={number} />)
  // const listItems = numbers.map((number, index) => <ListItem key={index} value={number} />)

  return (
    <ul>{listItems}</ul>
  )
}

export default ListAndKeys