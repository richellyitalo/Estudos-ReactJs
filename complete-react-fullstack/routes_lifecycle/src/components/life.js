import React, { Component } from 'react'

class Life extends Component {

  state = {
    titulo: 'Título Padrão'
  }

  constructor(props) {
    super(props)
    console.log('CONSTRUTOR')
  }

  getSnapshotBeforeUpdate(next, prev) {
    console.log('ATUALIZOU')
    return null
  }

  render() {
    return (
      <div>
        <h3>Ciclo do vida do React</h3>
        <h4>{this.state.titulo}</h4>
        <button
          className="btn btn-primary btn-sm"
          onClick={
            () => this.setState({
              titulo: 'Novo título'
            })}
        > Mudar título</button>
      </div>
    )
  }

  componentDidMount() {
    console.log('MOUNTOU')

    this.setState({titulo: 'Jão'})

    document.querySelector('h4').style.color = 'red'
  }

  
}

export default Life