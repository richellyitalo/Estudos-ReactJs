import React, { Component } from 'react'
import axios from 'axios'

const Context = React.createContext()

const reducer = (state, action) => {
  switch (action.type) {
    case 'DELETE_CONTACT':
      return {
        ...state,
        contacts: state.contacts.filter(contact => {
          return contact.id !== action.payload
        })
      }
    case 'ADD_CONTACT':
      return {
        ...state,
        contacts: [action.payload, ...state.contacts]
      }
    case 'UPDATE_CONTACT':
      return {
        ...state,
        contacts: state.contacts.map(
          contact => contact.id === action.payload.id
            ? (contact = action.payload)
            : contact
        )
      }
    default:
      return state
  }
}

export class Provider extends Component {
  state = {
    contacts: [
      // {
      //   id: 1,
      //   name: 'Jao',
      //   email: 'jao@gmail.com',
      //   phone: '(84) 9999-8888'
      // },
      // {
      //   id: 2,
      //   name: 'Jao-5',
      //   email: 'jao-5@gmail.com',
      //   phone: '(84) 5999-8888'
      // },
      // {
      //   id: 3,
      //   name: 'Jao-6',
      //   email: 'jao-6@gmail.com',
      //   phone: '(84) 6999-8888'
      // }
    ],
    dispatch: action =>
      this.setState(state => {
        return reducer(state, action)
      })
  }

  async componentDidMount() {
    const res = await axios.get('https://jsonplaceholder.typicode.com/users')

    this.setState({ contacts: res.data })
  }

  render() {
    return (
      <Context.Provider value={this.state}>
        {this.props.children}
      </Context.Provider>
    )
  }
}

export const Consumer = Context.Consumer
