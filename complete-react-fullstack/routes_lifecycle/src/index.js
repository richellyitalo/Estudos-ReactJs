import React from 'react'
import ReactDOM from 'react-dom'

import { BrowserRouter, Route, Switch, Link, NavLink } from 'react-router-dom'

import Home from './components/home'
import Posts from './components/posts'
import Profile from './components/profile'
import PostItem from './components/post-item'
import Pagina404 from './components/pagina404'
import Life from './components/life'
import Conditional from './components/conditional'
import User from './components/user'

const App = () => {
  return (
    <BrowserRouter>
      <div className="container">
        <header>
          <ul>
            <li>
              <NavLink
              to="/"
              exact
              activeClassName="active">Início</NavLink>
              {/*<Link to="/posts">Posts</Link> |*/}
            </li>
            <li>
              <NavLink
              exact
              to="/posts"
              activeClassName="active"
              activeStyle={
                { color: 'green', fontWeight: 'bold' }
              }>Posts</NavLink>
            </li>
            <li>
              <NavLink
                to="/life">Life</NavLink>
            </li>
            <li>
              <NavLink
                to="/conditional">Conditional</NavLink>
            </li>
            <li>
              <NavLink
                to="/user">Usuário Wrapped</NavLink>
            </li>
            <li>
              <Link to={{
                pathname: '/profile',
                hash: '#posts',
                search: 'nome=jao'
              }}>Perfil</Link>
            </li>
          </ul>
        </header>
        
        <hr />

        <Switch>
          <Route path="/posts/:id/:nome" component={PostItem} />
          <Route path="/posts" component={Posts} />
          <Route path="/profile" component={Profile} />
          <Route path="/life" component={Life} />
          <Route path="/conditional" component={Conditional} />
          <Route path="/user" component={User} />
          <Route path="/" exact component={Home} />
          {/*<Route render={() => <h1>Erro: 404</h1> } />*/}
          <Route component={Pagina404} />
        </Switch>
      </div>
    </BrowserRouter>
  )
}

ReactDOM.render(
  <App />,
  document.getElementById('root')
)