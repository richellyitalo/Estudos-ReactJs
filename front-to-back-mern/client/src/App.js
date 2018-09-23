import React, { Component } from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';

// Components
import Navbar from './components/layout/Navbar';
import Landing from './components/layout/Landing';
import Footer from './components/layout/Footer';
import Register from './components/auth/Register';
import Login from './components/auth/Login';

// Estilos
import './App.css';

class App extends Component {
  render() {
    return (
      <Router>
        <div className="App">
          <Navbar />
          {/* ~ Home */}
          <Route exact path="/" component={Landing} />
          <div className="container">
            {/* ~ Register */}
            <Route exact path="/register" component={Register} />
            {/* ~ Login */}
            <Route exact path="/login" component={Login} />
          </div>
          <Footer />
        </div>
      </Router>
    );
  }
}

export default App;
