import React, { Component } from 'react'

function Split(props) {
  return (
    <div className="Split">
      <div className="Split-left">
        {props.left}
      </div>
      <div className="Split-right">
        {props.right}
      </div>
    </div>
  )
}

const Contacts = props => <h1>Painel: Contatos</h1>

const Chat = props => <h1>Painel: Chat</h1>

function SplitPlane() {
  return (
    <Split
      left={
        <Contacts />
      }
      right= {
        <Chat />
      } />
  )
}

export default SplitPlane