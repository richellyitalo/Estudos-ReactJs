import React from 'react'

const Card = (props) => {
  
  const style = {
    backgroundColor: '#aaaaaa',
    border: '2px solid #000',
    padding: '10px'
  }

  return (
    <div style={ style }>
      {props.children}
    </div>
  )
}

export default Card