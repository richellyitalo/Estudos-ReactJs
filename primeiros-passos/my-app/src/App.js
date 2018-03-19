import React, { Component } from 'react';
import logo from './rich.png';
import './App.css';

function showMe(user) {
  return user.name;
}

const user = {
  id: 22,
  name: 'rich',
  email: 'rich@email.com'
}

const aga1 = (
  <h2>{showMe(user)}</h2>
)

const elementoComParenteses = (
  <h1 className="elemento-1">Elemento com parenteses</h1>
)

const elementBrutal = React.createElement(
  'h1',
  {className: 'classe-teste', id: 'id-brutal', 'data-user': user.email},
  'Elkemento brutal'
)


class App extends Component {
  render() {

    const imgLogo = <img src={logo} className="App-logo" alt="logo" />
    const scriptMalicioso = <script>console.warn('oi_estou_aqui')</script>

    // TODO: conferir por que não funcionou
    // const element1 = {
    //   type: 'h1',
    //   props: {
    //     className: 'greeting',
    //     children: 'Hello, world'
    //   }
    // }
    return (
      <div className="App">
        <header className="App-header">          
          {scriptMalicioso}

          {elementoComParenteses}

          {new Date().toLocaleTimeString()}

          {elementBrutal}

          {aga1}
          
          <h1>{1 + 1}</h1>

          {imgLogo}
        </header>
      </div>
    );
  }
}

export default App;
