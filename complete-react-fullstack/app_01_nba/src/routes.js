import React, { Component } from 'react'

import { Switch, Route } from 'react-router-dom'

import Home from './components/Home/home'
import Layout from './hoc/Layout/layout'
import NewsArticles from './components/Articles/News/Post/index';
import VideoArticle from './components/Articles/Videos/Video/index';
import NewsMain from './components/Articles/News/Main/index';
import VideosMain from './components/Articles/Videos/Main/index';

class Routes extends Component {
  render() {
    return (
      <Layout>
        <Switch>
          <Route path="/" exact component={Home} />
          <Route path="/news" exact component={NewsMain} />
          <Route path="/videos" exact component={VideosMain} />
          <Route path="/articles/:id" exact component={NewsArticles} />
          <Route path="/videos/:id" exact component={VideoArticle} />
        </Switch>
      </Layout>
    )
  }
}

export default Routes