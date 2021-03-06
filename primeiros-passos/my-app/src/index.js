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
import LoginControl from './meusComponentes/ConditionalRendering/LoginControl'
import TemplateSaidaCondicional from './meusComponentes/ConditionalRendering/TemplateSaidaCondicional'
import ListAndKeys from './meusComponentes/ListAndKeys/ListAndKeys'
import Blog from './meusComponentes/ListAndKeys/Blog'
import NameForm from './meusComponentes/Form/NameForm'
import EssayForm from './meusComponentes/Form/EssayForm'
import SelectForm from './meusComponentes/Form/SelectForm'
import ReservasForm from './meusComponentes/Form/ReservasForm'
import Calculator from './meusComponentes/LiftingStateUp/Calculator'
import CompositionVsInheritance from './meusComponentes/CompositionVsInheritance/Composition'
import SplitPlane from './meusComponentes/CompositionVsInheritance/SplitPlane'
import WelcomeDialog from './meusComponentes/CompositionVsInheritance/Specialization'
import ThinkinReact from './meusComponentes/ThinkingReact/ThinkingReact'

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

// ReactDOM.render(<Toggle />, document.getElementById('root'));
// registerServiceWorker();
// ReactDOM.render(<LoginControl />, document.getElementById('root'));
// registerServiceWorker();
// ReactDOM.render(<TemplateSaidaCondicional />, document.getElementById('root'));
// registerServiceWorker();

// const numbers = [1, 3, 4, 5]
// ReactDOM.render(<ListAndKeys numbers={numbers} />, document.getElementById('root'));
// registerServiceWorker();

const posts = [
  {id: 1, title: 'Hello World', content: 'Welcome to learning React!'},
  {id: 2, title: 'Installation', content: 'You can install React from npm.'}
];
// ReactDOM.render(<Blog posts={posts} />, document.getElementById('root'));

// # Forms
// ReactDOM.render(<NameForm/>, document.getElementById('root'))
// ReactDOM.render(<EssayForm/>, document.getElementById('root'))
// ReactDOM.render(<SelectForm/>, document.getElementById('root'))
// ReactDOM.render(<ReservasForm/>, document.getElementById('root'))

// # Lifting state up
// ReactDOM.render(<Calculator/>, document.getElementById('root'))

// # Composition vs inheritance
// ReactDOM.render(<CompositionVsInheritance />, document.getElementById('root'))
// ReactDOM.render(<SplitPlane />, document.getElementById('root'))
// ReactDOM.render(<WelcomeDialog />, document.getElementById('root'))

// # ThinkinReact

const produtos = [
  {category: "Sporting Goods", price: "$49.99", stocked: true, name: "Football"},
  {category: "Sporting Goods", price: "$9.99", stocked: true, name: "Baseball"},
  {category: "Sporting Goods", price: "$29.99", stocked: false, name: "Basketball"},
  {category: "Electronics", price: "$99.99", stocked: true, name: "iPod Touch"},
  {category: "Electronics", price: "$399.99", stocked: false, name: "iPhone 5"},
  {category: "Electronics", price: "$199.99", stocked: true, name: "Nexus 7"}
]

ReactDOM.render(<ThinkinReact products={produtos} />, document.getElementById('root'))

registerServiceWorker();
