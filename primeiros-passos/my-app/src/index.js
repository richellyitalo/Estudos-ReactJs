import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import ComponenteEs6 from './meusComponentes/ComponenteEs6';
import App2 from './App2';
import AppAninhados from './meusComponentes/AppAninhados/AppAninhados'; // thanks to @malaria
import registerServiceWorker from './registerServiceWorker';
import Comment from './meusComponentes/Comment/Comment';

function ComponenteEmLinha (props) {
  return <h1>Componente em linha my friend</h1>;
}

function ComponenteComProp (props) {
  return <h1>Olá meu amigo prop , {props.name}</h1>;
}

const element = <ComponenteComProp name="Rijelly" />;

const MalariaComponent = props => <h1>Meu nome é {props.name}</h1>; // I liked by @malaria

const commentario = {
  author: {
    avatarUrl: 'http://www.math.uni-frankfurt.de/~person/_4170854.jpg',
    name: 'Richelly'
  },
  content: 'Olá, estou aqui no Brasil!',
  date: '2018-01-01'
};
// ReactDOM.render(<ComponenteEs6 name="Ronaldinho" />, document.getElementById('root'));
ReactDOM.render(<Comment comment={commentario} />, document.getElementById('root'));

// let mod = 1;
// const timer = () => {
//   if (mod === 1) {
//     ReactDOM.render(<App />, document.getElementById('root'));
//     mod = 2;
//   } else {
//     ReactDOM.render(<App2 />, document.getElementById('root'));
//     mod = 1;
//   }
// }

// setInterval(timer, 1000)
registerServiceWorker();
