import React, { Component } from 'react'

const UserGreeting = (props) => <h1>Bem vindo usuário!</h1>

const GuestGreeting = (props) => <h1>Por favor, assine!</h1>

const Greeting = (props) => {
  const isLoggedIn = props.isLoggedIn
  if (isLoggedIn) {
    return <UserGreeting />
  }
  return <GuestGreeting />
}
export default Greeting
