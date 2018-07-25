import React, { Component } from 'react';
import Contact from './components/Contact'
import Header from './components/Header';

import 'bootstrap/dist/css/bootstrap.min.css'
import './App.css';

class App extends Component {

  render() {
    return (
      <div className="App">
        <Header branding="Gerenciador de Contatos" />
        <Contact 
          name="Jao"
          email="jao@gmail.com"
          phone="(84) 8888-9999"
        />
        <Contact 
          name="D'Jão"
          email="djao@gmail.com"
          phone="(99) 8888-9999"
        />
      </div>
    )
  }
}

export default App;
