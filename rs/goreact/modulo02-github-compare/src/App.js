import React, { Fragment } from 'react';
import GlobalStyle from './styles/global';
import Main from './pages/Main';
import 'font-awesome/css/font-awesome.css';

function App() {
  return (
    <Fragment>
      <GlobalStyle />
      <div className="App">
        <Main />
      </div>
    </Fragment>
  );
}

export default App;
