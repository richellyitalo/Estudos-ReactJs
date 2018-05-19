import React from 'react';
import { Switch, Route } from 'react-router-dom';

import Layout from './hoc/layout';
import Home from './components/Home/home';
import BookView from './components/Books';
import Login from './containers/Admin/login';
import Auth from './hoc/auth';
import User from './components/Admin/user';
import AddReview from './components/Admin/add';
import UserReviews from './components/Admin/reviews';
import EditReview from './components/Admin/edit';
import RegisterUser from './components/Admin/register';
import Logout from './components/Admin/logout';

const Routes = () => {
  return (
    <Layout>
      <Switch>
        <Route path="/" exact component={ Auth(Home) } />
        <Route path="/login" exact component={ Auth(Login, false) } />
        <Route path="/user" exact component={ Auth(User, true) } />
        <Route path="/user/user-reviews" exact component={ Auth(UserReviews, true) } />
        <Route path="/user/add" exact component={ Auth(AddReview, true) } />
        <Route path="/user/logout" exact component={ Auth(Logout, true) } />
        <Route path="/user/register" exact component={ Auth(RegisterUser, true) } />
        <Route path="/user/edit-post/:id" exact component={ Auth(EditReview, true) } />
        <Route path="/books/:id" exact component={ Auth(BookView) } />
      </Switch>
    </Layout>
  );
}

export default Routes;