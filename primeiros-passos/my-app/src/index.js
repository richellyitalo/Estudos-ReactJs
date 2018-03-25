import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import ComponenteEs6 from './meusComponentes/ComponenteEs6';
import App2 from './App2';
import AppAninhados from './meusComponentes/AppAninhados/AppAninhados'; // thanks to @malaria
import registerServiceWorker from './registerServiceWorker';
import Comment from './meusComponentes/Comment/Comment';
import Toggle from './meusComponentes/HandleEvents/Toggle'

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
function ComponenteFuncional () {
  return <h1>Componente Funcional</h1>
}

const elementoDeComponenteFuncional = <ComponenteFuncional/>

class ComponenteDeClasse extends Component {
  render () {
    return (
      <div>
        <h1>Componente de Classe </h1>
        <hr/>
        <strong>Nome: {this.props.nome}</strong>
        Linha 2
      </div>
    )
  }
}

const elPuro = <h1>Elemento puro</h1>

// ReactDOM.render(elPuro, document.getElementById('root'));
// ReactDOM.render(<ComponenteDeClasse nome="José"/>, document.getElementById('root'));
// ReactDOM.render(elementoDeComponenteFuncional, document.getElementById('root'));
// ReactDOM.render(<Comment comment={commentario} />, document.getElementById('root'));

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

// clock funcional
function ClockFuncional(props) {
  return (
    <div>
      <h1>Olá, bom dia!</h1>
      <h3>São exatamente, {props.date.toLocaleTimeString()}</h3>
    </div>
  )
}

// Clock via classe usando props
class Clock_classeProp extends Component {
  render () {
    return (
      <div>
        <h1>Olá, bom dia!</h1>
        <h3>São exatamente, {this.props.date.toLocaleTimeString()}</h3>
      </div>
    )
  }
}

// Clock classe usando state (constructor necessário)
function FormattedDate(props) {
  return <h2>São {props.date.toLocaleTimeString()}.</h2>
}

class Clock extends Component {
  constructor(props) {
    super(props)
    this.state = {
      date: new Date(),
      contador: 1
    }
  }

  componentDidMount() {
    this.timerID = setInterval(
      () => this.tick(),
      1000
    )
  }

  compontentWillUnmount() {
    clearInterval(this.timerID)
  }

  tick() {
    this.setState({
      date: new Date()
    })

    this.setState((prevState, props) => ({
      contador: prevState.contador + 1
    }))
  }

  render () {
    return (
      <div>
        <h1>Olá, bom dia! {this.teste}</h1>
        <h3>Rodou {this.state.contador} vezes.</h3>
        <FormattedDate date={this.state.date} />
      </div>
    )
  }
}

function AppClock() {
  return (
    <div>
      <Clock />
      <Clock />
      <Clock />
    </div>
  )
}
// ReactDOM.render(<AppClock />, document.getElementById('root'));

ReactDOM.render(<Toggle />, document.getElementById('root'));
registerServiceWorker();
