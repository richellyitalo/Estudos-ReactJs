import React, { Component } from 'react';
import './AppAninhados.css'

const MalariaComponent = props => <h1>Meu nome é {props.name}</h1>; // I liked by @malaria

class AppAninhados extends Component {
  render () {
    return (
      <div className="app-aninhado">
        <MalariaComponent name="Malaria" />
        <MalariaComponent name="Richelly Italo" />
      </div>
    );
  }
}

export default AppAninhados;